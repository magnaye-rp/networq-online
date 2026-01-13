<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Models\ProjectImagesModel;

class ProjectListModel extends Model
{
    protected $table            = 'project_list';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'project_name',
        'description',
        'technology_stack',
        'github_link',
        'live_demo_link',
    ];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    function getProjectsWithImages()
    {
        $builder = $this->db->table($this->table);
        $builder->select('project_list.*');
        $query = $builder->get();
        $projects = $query->getResultArray();

        // Get images for each project
        foreach ($projects as &$project) {
            $imagesBuilder = $this->db->table('project_images');
            $imagesBuilder->select('image_path, uploaded_at');
            $imagesBuilder->where('project_id', $project['id']);
            $imagesBuilder->where('is_featured', true);
            $imagesBuilder->orderBy('uploaded_at', 'ASC');
            $imagesQuery = $imagesBuilder->get();
            $project['images'] = $imagesQuery->getResultArray();
        }

        return $projects;
    }

    function addProjectWithImages($projectData, $imagesData = [])
    {
        $this->db->transStart();

        // Insert project data
        $this->insert($projectData);
        $projectId = $this->getInsertID();

        // Insert images data only if there are images
        if (!empty($imagesData)) {
            foreach ($imagesData as &$image) {
                $image['project_id'] = $projectId;
            }

            $this->db->table('project_images')->insertBatch($imagesData);
        }

        $this->db->transComplete();

        return $this->db->transStatus() ? $projectId : false;
    }

    /**
     * Update project with images
     */
    function updateProjectWithImages($projectId, $projectData, $imagesData = [])
    {
        $this->db->transStart();

        // Update project data
        $this->update($projectId, $projectData);

        // Insert new images if any
        if (!empty($imagesData)) {
            foreach ($imagesData as &$image) {
                $image['project_id'] = $projectId;
            }
            $this->db->table('project_images')->insertBatch($imagesData);
        }

        $this->db->transComplete();

        return $this->db->transStatus();
    }

    /**
     * Get a single project by ID with all its images
     */
    function getProjectWithAllImages($projectId)
    {
        $project = $this->find($projectId);

        if (!$project) {
            return null;
        }

        // Get all images for the project
        $imagesBuilder = $this->db->table('project_images');
        $imagesBuilder->select('*');
        $imagesBuilder->where('project_id', $projectId);
        $imagesBuilder->orderBy('uploaded_at', 'ASC');
        $imagesQuery = $imagesBuilder->get();
        $project['images'] = $imagesQuery->getResultArray();

        return $project;
    }
}

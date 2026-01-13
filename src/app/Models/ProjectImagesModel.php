<?php

namespace App\Models;

use CodeIgniter\Model;

class ProjectImagesModel extends Model
{
    protected $table            = 'project_images';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'project_id',
        'image_path',
        'uploaded_at',
    ];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

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
    protected $beforeDelete    = [];
    protected $afterDelete     = [];

    /**
     * Get all images for a specific project
     */
    public function getImagesByProjectId($projectId)
    {
        $builder = $this->db->table($this->table);
        $builder->select('*');
        $builder->where('project_id', $projectId);
        $builder->orderBy('uploaded_at', 'ASC');
        $query = $builder->get();
        return $query->getResultArray();
    }

    /**
     * Delete all images for a specific project
     */
    public function deleteImagesByProjectId($projectId)
    {
        return $this->where('project_id', $projectId)->delete();
    }

    /**
     * Delete a single image by ID
     */
    public function deleteImage($imageId)
    {
        return $this->where('id', $imageId)->delete();
    }

    /**
     * Delete specific images by their IDs
     */
    public function deleteImagesByIds(array $imageIds)
    {
        if (empty($imageIds)) {
            return true;
        }
        return $this->whereIn('id', $imageIds)->delete();
    }
}

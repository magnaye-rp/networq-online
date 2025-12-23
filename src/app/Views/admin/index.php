<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Project Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        :root {
            /* Brand */
            --blue-primary: #0b3c5d;
            --blue-secondary: #1d4ed8;
            --orange-primary: #f97316;
            --orange-dark: #ea580c;

            /* Dark Mode */
            --bg-main: #0f172a;
            --bg-soft: #020617;
            --text-main: #e5e7eb;
            --text-muted: #94a3b8;
            --card-bg: #020617;
            --border-color: #1e293b;
            
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif;
            background-color: var(--bg-main);
            color: var(--text-main);
            min-height: 100vh;
        }

        .navbar {
            padding: 1rem 0;
            background-color: var(--card-bg);
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }

        .navbar-brand {
            font-weight: 600;
            color: var(--text-main);
            font-size: 1.25rem;
        }

        .nav-link {
            color: var(--text-muted);
            font-weight: 500;
            margin-left: 2rem;
            transition: color 0.3s;
        }

        .nav-link:hover {
            color: var(--orange-primary);
        }

        .container-main {
            padding: 2rem 0;
        }

        .section-card {
            background: var(--card-bg);
            border-radius: 1rem;
            border: 1px solid var(--border-color);
            padding: 2rem;
            margin-bottom: 2rem;
        }

        .section-title {
            font-size: 1.75rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
            color: var(--text-main);
        }

        .project-card {
            background: var(--bg-soft);
            border-radius: 0.75rem;
            border: 1px solid var(--border-color);
            padding: 1.5rem;
            margin-bottom: 1.5rem;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .project-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }

        .project-title {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 0.75rem;
            color: var(--text-main);
        }

        .project-description {
            color: var(--text-muted);
            margin-bottom: 1rem;
            line-height: 1.6;
        }

        .tech-badges {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            margin-bottom: 1rem;
        }

        .tech-badge {
            background-color: rgba(249, 115, 22, 0.12);
            color: var(--orange-primary);
            padding: 0.35rem 0.7rem;
            font-size: 0.75rem;
            font-weight: 500;
            border-radius: 999px;
            border: 1px solid rgba(249, 115, 22, 0.25);
        }

        .project-images {
            border-radius: 0.5rem;
            overflow: hidden;
        }

        .project-images img {
            transition: transform 0.2s;
            cursor: pointer;
        }

        .project-images img:hover {
            transform: scale(1.05);
        }

        .project-links {
            display: flex;
            gap: 0.75rem;
            margin-top: 1rem;
        }

        .btn-custom {
            padding: 0.5rem 1rem;
            border-radius: 0.5rem;
            font-size: 0.85rem;
            font-weight: 500;
            border: none;
            cursor: pointer;
            transition: all 0.2s;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
        }

        .btn-primary {
            background-color: var(--blue-primary);
            color: white;
        }

        .btn-primary:hover {
            background-color: var(--blue-secondary);
        }

        .btn-outline {
            background-color: transparent;
            color: var(--orange-primary);
            border: 2px solid var(--orange-primary);
        }

        .btn-outline:hover {
            background-color: var(--orange-primary);
            color: white;
        }

        .btn-danger {
            background-color: #dc3545;
            color: white;
        }

        .btn-danger:hover {
            background-color: #c82333;
        }

        .form-control {
            background-color: var(--bg-soft);
            border: 1px solid var(--border-color);
            color: var(--text-main);
            border-radius: 0.5rem;
            padding: 0.75rem;
        }

        .form-control:focus {
            background-color: var(--bg-soft);
            border-color: var(--orange-primary);
            color: var(--text-main);
            box-shadow: 0 0 0 0.2rem rgba(249, 115, 22, 0.25);
        }

        .form-label {
            color: var(--text-main);
            font-weight: 500;
            margin-bottom: 0.5rem;
        }

        .form-text {
            color: var(--text-muted);
            font-size: 0.875rem;
        }

        .alert {
            border-radius: 0.5rem;
            padding: 1rem;
            margin-bottom: 1.5rem;
            border: none;
        }

        .alert-success {
            background-color: rgba(34, 197, 94, 0.1);
            color: #22c55e;
            border: 1px solid rgba(34, 197, 94, 0.2);
        }

        .alert-danger {
            background-color: rgba(239, 68, 68, 0.1);
            color: #ef4444;
            border: 1px solid rgba(239, 68, 68, 0.2);
        }

        .empty-state {
            text-align: center;
            padding: 3rem;
            color: var(--text-muted);
        }

        .empty-state i {
            font-size: 3rem;
            margin-bottom: 1rem;
            color: var(--text-muted);
        }

        /* Mobile Responsiveness */
        @media (max-width: 768px) {
            .container-main {
                padding: 1rem 0;
            }
            
            .section-card {
                padding: 1.5rem;
            }
            
            .project-card {
                padding: 1rem;
            }
            
            .project-links {
                flex-direction: column;
                gap: 0.5rem;
            }
            
            .btn-custom {
                justify-content: center;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="/">
                <i class="bi bi-speedometer2 me-2"></i>Admin Dashboard
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">View Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/admin">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url("logout")?>">
                            <i class="bi bi-box-arrow-right me-1"></i>Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container container-main">
        <!-- Alerts -->
        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success">
                <i class="bi bi-check-circle me-2"></i><?= session()->getFlashdata('success') ?>
            </div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('error')): ?>
            <div class="alert alert-danger">
                <i class="bi bi-exclamation-triangle me-2"></i><?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>

        <!-- Add Project Form -->
        <div class="section-card">
            <h2 class="section-title">
                <i class="bi bi-plus-circle me-2"></i>Add New Project
            </h2>
            
            <form method="POST" action="<?= site_url('admin/create') ?>" enctype="multipart/form-data">
                <?= csrf_field() ?>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="project_name" class="form-label">Project Name *</label>
                            <input type="text" class="form-control" id="project_name" name="project_name" 
                                   value="<?= old('project_name') ?>" required 
                                   placeholder="Enter project name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="technology_stack" class="form-label">Technologies Used *</label>
                            <input type="text" class="form-control" id="technology_stack" name="technology_stack" 
                                   value="<?= old('technology_stack') ?>" required 
                                   placeholder="e.g., PHP, MySQL, JavaScript">
                            <div class="form-text">Separate technologies with commas</div>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description *</label>
                    <textarea class="form-control" id="description" name="description" rows="4" 
                              required placeholder="Describe your project..."><?= old('description') ?></textarea>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="github_link" class="form-label">GitHub Repository Link</label>
                            <input type="url" class="form-control" id="github_link" name="github_link" 
                                   value="<?= old('github_link') ?>" 
                                   placeholder="https://github.com/username/repo">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="live_demo_link" class="form-label">Live Preview Link</label>
                            <input type="url" class="form-control" id="live_demo_link" name="live_demo_link" 
                                   value="<?= old('live_demo_link') ?>" 
                                   placeholder="https://your-project-demo.com">
                            <div class="form-text">Optional</div>
                        </div>
                    </div>
                </div>

                <!-- Image Upload Section -->
                <div class="mb-4">
                    <label class="form-label">Project Images (Up to 3 images)</label>
                    <div class="form-text mb-3">Supported formats: JPG, PNG, GIF. Maximum size: 100MB per image</div>
                    
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="image_1" class="form-label">Image 1</label>
                                <input type="file" class="form-control" id="image_1" name="image_1" 
                                       accept="image/jpeg,image/jpg,image/png,image/gif">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="image_2" class="form-label">Image 2</label>
                                <input type="file" class="form-control" id="image_2" name="image_2" 
                                       accept="image/jpeg,image/jpg,image/png,image/gif">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="image_3" class="form-label">Image 3</label>
                                <input type="file" class="form-control" id="image_3" name="image_3" 
                                       accept="image/jpeg,image/jpg,image/png,image/gif">
                            </div>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-plus-lg me-2"></i>Add Project
                </button>
            </form>
        </div>

        <!-- Projects List -->
        <div class="section-card">
            <h2 class="section-title">
                <i class="bi bi-list-ul me-2"></i>Project List
            </h2>

            <?php if (empty($projects)): ?>
                <div class="empty-state">
                    <i class="bi bi-folder"></i>
                    <h4>No projects yet</h4>
                    <p>Add your first project using the form above.</p>
                </div>
            <?php else: ?>
                <div class="row">
                    <?php foreach ($projects as $project): ?>
                        <div class="col-lg-6">
                            <div class="project-card">
                                <h3 class="project-title"><?= esc($project['project_name']) ?></h3>
                                <p class="project-description"><?= esc($project['description']) ?></p>
                                
                                <!-- Project Images -->
                                <?php if (!empty($project['images'])): ?>
                                    <div class="project-images mb-3">
                                        <div class="row">
                                            <?php foreach ($project['images'] as $image): ?>
                                                <div class="col-4">
                                                    <img src="/<?= esc($image['image_path']) ?>" 
                                                         alt="Project image" 
                                                         class="img-fluid rounded"
                                                         style="height: 80px; width: 100%; object-fit: cover;">
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                
                                <?php if ($project['technology_stack']): ?>
                                    <div class="tech-badges">
                                        <?php 
                                        $techs = explode(',', $project['technology_stack']);
                                        foreach ($techs as $tech): 
                                        ?>
                                            <span class="tech-badge"><?= trim(esc($tech)) ?></span>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif; ?>

                                <div class="project-links">
                                    <?php if ($project['github_link']): ?>
                                        <a href="<?= esc($project['github_link']) ?>" 
                                           target="_blank" class="btn-custom btn-outline">
                                            <i class="bi bi-github me-1"></i>GitHub
                                        </a>
                                    <?php endif; ?>
                                    
                                    <?php if ($project['live_demo_link']): ?>
                                        <a href="<?= esc($project['live_demo_link']) ?>" 
                                           target="_blank" class="btn-custom btn-primary">
                                            <i class="bi bi-eye me-1"></i>Live Demo
                                        </a>
                                    <?php endif; ?>
                                    
                                    <form method="POST" action="/admin/delete/<?= $project['id'] ?>" 
                                          style="display: inline;" 
                                          onsubmit="return confirm('Are you sure you want to delete this project?')">
                                        <button type="submit" class="btn-custom btn-danger">
                                            <i class="bi bi-trash me-1"></i>Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Auto-hide alerts after 5 seconds
        document.addEventListener('DOMContentLoaded', function() {
            const alerts = document.querySelectorAll('.alert');
            alerts.forEach(alert => {
                setTimeout(() => {
                    alert.style.transition = 'opacity 0.3s';
                    alert.style.opacity = '0';
                    setTimeout(() => {
                        alert.remove();
                    }, 300);
                }, 5000);
            });
        });
    </script>
</body>
</html>

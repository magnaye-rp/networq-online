<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Project - Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="icon" href="<?= base_url('favicon-dark.ico') ?>" type="image/x-icon" id="favicon">

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

    body.light-mode {
        --bg-main: #ffffff;
        --bg-soft: #f9fafb;
        --text-main: #1f2937;
        --text-muted: #6b7280;
        --card-bg: #ffffff;
        --border-color: #e5e7eb;
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

        .btn-secondary {
            background-color: var(--bg-soft);
            color: var(--text-main);
            border: 1px solid var(--border-color);
        }

        .btn-secondary:hover {
            background-color: var(--border-color);
        }

        /* Image Gallery Styles */
        .image-gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
            gap: 1rem;
            margin-top: 1rem;
        }

        .image-item {
            position: relative;
            border-radius: 0.5rem;
            overflow: hidden;
            border: 1px solid var(--border-color);
        }

        .image-item img {
            width: 100%;
            height: 120px;
            object-fit: cover;
        }

        .image-item .delete-btn {
            position: absolute;
            top: 0.5rem;
            right: 0.5rem;
            background-color: rgba(220, 53, 69, 0.9);
            color: white;
            border: none;
            border-radius: 50%;
            width: 28px;
            height: 28px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.2s;
        }

        .image-item .delete-btn:hover {
            background-color: #c82333;
            transform: scale(1.1);
        }

        .current-images-section {
            background: var(--bg-soft);
            border-radius: 0.75rem;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .current-images-title {
            font-size: 1rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: var(--text-main);
        }

        /* Mobile Responsiveness */
        @media (max-width: 768px) {
            .container-main {
                padding: 1rem 0;
            }

            .section-card {
                padding: 1.5rem;
            }

            .image-gallery {
                grid-template-columns: repeat(2, 1fr);
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
                        <a class="nav-link" href="/admin">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#certificates">Certificates</a>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link btn btn-link" id="darkModeToggle" title="Toggle Dark Mode">
                            <i class="bi bi-sun-fill"></i>
                        </button>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url("logout") ?>">
                            <i class="bi bi-box-arrow-right me-1"></i>Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container container-main">
        <!-- Back Button and Title -->
        <div class="d-flex align-items-center mb-4">
            <a href="/admin" class="btn btn-secondary me-3">
                <i class="bi bi-arrow-left me-2"></i>Back to Projects
            </a>
            <h1 class="section-title mb-0">
                <i class="bi bi-pencil-square me-2"></i>Edit Project
            </h1>
        </div>

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

        <!-- Edit Project Form -->
        <div class="section-card">
            <form method="POST" action="<?= site_url('admin/update/' . $project['id']) ?>" enctype="multipart/form-data">
                <?= csrf_field() ?>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="project_name" class="form-label">Project Name *</label>
                            <input type="text" class="form-control" id="project_name" name="project_name"
                                   value="<?= old('project_name', esc($project['project_name'])) ?>" required
                                   placeholder="Enter project name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="technology_stack" class="form-label">Technologies Used *</label>
                            <input type="text" class="form-control" id="technology_stack" name="technology_stack"
                                   value="<?= old('technology_stack', esc($project['technology_stack'])) ?>" required
                                   placeholder="e.g., PHP, MySQL, JavaScript">
                            <div class="form-text">Separate technologies with commas</div>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description *</label>
                    <textarea class="form-control" id="description" name="description" rows="4"
                              required placeholder="Describe your project..."><?= old('description', esc($project['description'])) ?></textarea>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="github_link" class="form-label">GitHub Repository Link</label>
                            <input type="url" class="form-control" id="github_link" name="github_link"
                                   value="<?= old('github_link', esc($project['github_link'] ?? '')) ?>"
                                   placeholder="https://github.com/username/repo">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="live_demo_link" class="form-label">Live Preview Link</label>
                            <input type="url" class="form-control" id="live_demo_link" name="live_demo_link"
                                   value="<?= old('live_demo_link', esc($project['live_demo_link'] ?? '')) ?>"
                                   placeholder="https://your-project-demo.com">
                            <div class="form-text">Optional</div>
                        </div>
                    </div>
                </div>

                <!-- Current Images Section -->
                <?php if (!empty($project['images'])): ?>
                    <div class="current-images-section">
                        <h4 class="current-images-title">
                            <i class="bi bi-images me-2"></i>Current Images
                            <span class="badge bg-secondary ms-2"><?= count($project['images']) ?></span>
                        </h4>
                        <div class="image-gallery">
                            <?php foreach ($project['images'] as $image): ?>
                                <div class="image-item">
                                    <img src="/<?= esc($image['image_path']) ?>" alt="Project image">
                                    <button type="button" class="delete-btn"
                                            onclick="if(confirm('Are you sure you want to delete this image?')) { window.location.href = '/admin/deleteImage/<?= $image['id'] ?>'; }">
                                        <i class="bi bi-x"></i>
                                    </button>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="current-images-section">
                        <p class="text-muted mb-0">
                            <i class="bi bi-info-circle me-2"></i>No images currently attached to this project.
                        </p>
                    </div>
                <?php endif; ?>

                <!-- Add New Images Section -->
                <div class="mb-4">
                    <label class="form-label">Add New Images</label>
                    <div class="form-text mb-3">Supported formats: JPG, PNG, GIF. Maximum size: 5mb per image</div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="image_1" class="form-label">New Image 1</label>
                                <input type="file" class="form-control" id="image_1" name="image_1"
                                       accept="image/jpeg,image/jpg,image/png,image/gif">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="image_2" class="form-label">New Image 2</label>
                                <input type="file" class="form-control" id="image_2" name="image_2"
                                       accept="image/jpeg,image/jpg,image/png,image/gif">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="image_3" class="form-label">New Image 3</label>
                                <input type="file" class="form-control" id="image_3" name="image_3"
                                       accept="image/jpeg,image/jpg,image/png,image/gif">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex gap-3">
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-check-lg me-2"></i>Save Changes
                    </button>
                    <a href="/admin" class="btn btn-secondary">
                        <i class="bi bi-x-lg me-2"></i>Cancel
                    </a>
                </div>
            </form>
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

        // Favicon switching function
        function updateFavicon() {
            const favicon = document.getElementById('favicon');
            if (favicon) {
                const isLightMode = document.body.classList.contains('light-mode');
                favicon.href = isLightMode
                    ? '<?= base_url('favicon-light.ico') ?>'
                    : '<?= base_url('favicon-dark.ico') ?>';
            }
        }

        // Dark mode toggle functionality
        const toggle = document.getElementById('darkModeToggle');
        const toggleIcon = document.querySelector('#darkModeToggle i');

        toggle.addEventListener('click', () => {
            document.body.classList.toggle('light-mode');

            // Change icon
            if (document.body.classList.contains('light-mode')) {
                toggleIcon.className = 'bi bi-moon-stars-fill';
            } else {
                toggleIcon.className = 'bi bi-sun-fill';
            }

            // Update favicon
            updateFavicon();

            // Save preference
            localStorage.setItem(
                'theme',
                document.body.classList.contains('light-mode') ? 'light' : 'dark'
            );
        });

        // Load saved theme
        if (localStorage.getItem('theme') === 'light') {
            document.body.classList.add('light-mode');
            toggleIcon.className = 'bi bi-moon-stars-fill';
        }

        // Update favicon on page load
        updateFavicon();
    </script>
</body>
</html>


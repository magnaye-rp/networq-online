<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Ryan Paulo Magnaye</title>
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
        transition: background-color 0.3s, color 0.3s;
    }

    a {
        text-decoration: none;
    }

    .navbar {
        padding: 1.5rem 0;
        background-color: var(--card-bg);
        box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        transition: all 0.3s;
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

    .nav-link.active {
        color: var(--orange-primary) !important;
        font-weight: 600;
    }

    .hero-section {
        min-height: 90vh;
        display: flex;
        align-items: center;
        background: linear-gradient(to bottom, var(--bg-soft) 0%, var(--bg-main) 100%);
    }

    .avatar-container {
        width: 150px;
        height: 150px;
        margin: 0 auto 2rem;
        background: linear-gradient(135deg, var(--blue-primary), var(--orange-primary));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 4rem;
    }

    .hero-title {
        font-size: 2.5rem;
        font-weight: 600;
        margin-bottom: 1rem;
    }

    .hero-title .name {
        color: var(--orange-primary);
    }

    .hero-subtitle {
        font-size: 1.5rem;
        color: var(--text-muted);
        margin-bottom: 1.5rem;
        font-weight: 500;
    }

    .hero-description {
        font-size: 1.125rem;
        color: var(--text-muted);
        max-width: 700px;
        margin: 0 auto 2.5rem;
        line-height: 1.7;
    }

    .btn-primary-custom,
    .btn-outline-custom,
    .btn-project {
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .btn-primary-custom:disabled,
    .btn-outline-custom:disabled,
    .btn-project:disabled {
        opacity: 0.6;
        cursor: not-allowed;
    }

    .btn-primary-custom {
        background-color: var(--blue-primary);
        color: white;
        padding: 0.75rem 1.5rem;
        border-radius: 0.5rem;
        border: none;
        font-weight: 500;
        transition: background-color 0.3s;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }

    .btn-primary-custom:hover {
        background-color: var(--blue-secondary);
    }

    .btn-outline-custom {
        background-color: transparent;
        color: var(--orange-primary);
        padding: 0.75rem 1.5rem;
        border-radius: 0.5rem;
        border: 2px solid var(--orange-primary);
        font-weight: 500;
        transition: all 0.3s;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }

    .btn-outline-custom:hover {
        background-color: var(--orange-primary);
        color: white;
    }

    .projects-section,
    .certificates-section,
    .skills-section,
    .contact-section {
        padding: 5rem 0;
        background-color: var(--bg-soft);
    }

    .section-title {
        font-size: 2.5rem;
        font-weight: 600;
        text-align: center;
        margin-bottom: 1rem;
    }

    .section-description {
        font-size: 1.125rem;
        color: var(--text-muted);
        text-align: center;
        margin-bottom: 4rem;
    }

    .project-card {
        background: var(--card-bg);
        border-radius: 1.2rem;
        overflow: hidden;
        border: 1px solid var(--border-color);
        position: relative;
        transition: transform 0.3s, box-shadow 0.3s;
        height: 100%;
    }

    .project-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.15);
    }

    .project-image-container {
        position: relative;
        height: 260px;
        overflow: hidden;
    }

    .project-image-container::before {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(
            to bottom,
            rgba(2, 6, 23, 0.1) 0%,
            rgba(2, 6, 23, 0.65) 55%,
            rgba(2, 6, 23, 0.9) 100%
        );
        z-index: 1;
    }

    .project-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .project-content {
        padding: 1.75rem;
        position: relative;
    }

    .project-title {
        font-size: 1.4rem;
        font-weight: 600;
        margin-bottom: 0.75rem;
    }

    .project-description {
        font-size: 0.95rem;
        line-height: 1.6;
        color: var(--text-muted);
        margin-bottom: 1.25rem;
    }

    .tech-badges {
        display: flex;
        flex-wrap: wrap;
        gap: 0.5rem;
        margin-bottom: 1.25rem;
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

    .project-links {
        margin-top: 1rem;
    }

    .btn-project {
        background-color: transparent;
        color: var(--text-main);
        border: 1px solid var(--border-color);
        padding: 0.45rem 0.9rem;
        font-size: 0.85rem;
        border-radius: 0.5rem;
        transition: all 0.25s ease;
        display: inline-flex;
        align-items: center;
    }

    .btn-project:hover {
        background-color: var(--orange-primary);
        color: white;
        border-color: var(--orange-primary);
    }

    .certificate-card {
        background: var(--card-bg);
        border-radius: 1.2rem;
        overflow: hidden;
        border: 1px solid var(--border-color);
        position: relative;
        transition: transform 0.3s, box-shadow 0.3s;
        height: 100%;
    }

    .certificate-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.15);
    }

    .certificate-image-container {
        position: relative;
        height: 320px;
        overflow: hidden;
        background-color: var(--bg-soft);
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 0.5rem;
    }

    .certificate-image {
        width: 100%;
        height: 100%;
        object-fit: contain;
        object-position: center;
        transition: transform 0.3s ease;
        cursor: pointer;
        border-radius: 0.5rem;
    }

    .certificate-image:hover {
        transform: scale(1.02);
    }

    .certificate-card:hover .certificate-image {
        transform: scale(1.05);
    }

    .certificate-placeholder {
        font-size: 4rem;
        color: var(--text-muted);
        background: linear-gradient(135deg, var(--blue-primary), var(--orange-primary));
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .certificate-content {
        padding: 1.75rem;
    }

    .certificate-title {
        font-size: 1.3rem;
        font-weight: 600;
        margin-bottom: 0.75rem;
        color: var(--text-main);
    }

    .certificate-description {
        font-size: 0.95rem;
        line-height: 1.6;
        color: var(--text-muted);
        margin-bottom: 1.25rem;
    }

    .certificate-dates {
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
        margin-bottom: 1rem;
    }

    .date-item {
        display: flex;
        align-items: center;
        font-size: 0.85rem;
        color: var(--text-muted);
    }

    .date-item i {
        margin-right: 0.5rem;
        color: var(--orange-primary);
        width: 16px;
    }

    .date-label {
        font-weight: 500;
        margin-right: 0.5rem;
        color: var(--text-main);
    }

    .certificate-status {
        display: inline-block;
        padding: 0.25rem 0.75rem;
        font-size: 0.75rem;
        font-weight: 500;
        border-radius: 999px;
        margin-top: 0.5rem;
    }

    .status-valid {
        background-color: rgba(34, 197, 94, 0.12);
        color: #22c55e;
        border: 1px solid rgba(34, 197, 94, 0.25);
    }

    .status-expired {
        background-color: rgba(239, 68, 68, 0.12);
        color: #ef4444;
        border: 1px solid rgba(239, 68, 68, 0.25);
    }

    .skill-card,
    .contact-card {
        background: var(--card-bg);
        border-radius: 1rem;
        border: 2px solid var(--border-color);
        padding: 2rem;
        height: 100%;
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .skill-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }

    .skill-category {
        font-size: 1.5rem;
        font-weight: 600;
        margin-bottom: 1.5rem;
        text-align: center;
    }

    .skill-badge {
        display: inline-block;
        padding: 0.5rem 1rem;
        background-color: var(--bg-soft);
        color: var(--text-muted);
        border-radius: 0.5rem;
        font-size: 0.9rem;
        font-weight: 500;
        margin: 0.375rem;
        transition: all 0.3s;
    }

    .skill-badge:hover {
        background-color: var(--orange-primary);
        color: white;
        transform: translateY(-2px);
    }

    .contact-card {
        max-width: 800px;
        margin: 0 auto;
    }

    .contact-form {
        background: var(--bg-soft);
        border-radius: 1rem;
        border: 1px solid var(--border-color);
        padding: 2.5rem;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        min-height: 100%;
    }

    .form-floating > .form-control,
    .form-floating > .form-select {
        background-color: var(--card-bg);
        border: 1px solid var(--border-color);
        color: var(--text-main);
        transition: all 0.3s;
    }

    .form-floating > .form-control:focus,
    .form-floating > .form-select:focus {
        border-color: var(--orange-primary);
        box-shadow: 0 0 0 0.2rem rgba(249, 115, 22, 0.25);
    }

    .form-floating > label {
        color: var(--text-muted);
    }

    .form-control:focus {
        color: var(--text-main);
        background-color: var(--card-bg);
        border-color: var(--orange-primary);
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(249, 115, 22, 0.25);
    }

    .form-control::placeholder {
        color: var(--text-muted);
    }

    .btn-contact {
        background-color: var(--orange-primary);
        color: white;
        padding: 0.75rem 2rem;
        border-radius: 0.5rem;
        border: none;
        font-weight: 500;
        transition: all 0.3s;
        width: 100%;
        margin-top: 1rem;
    }

    .btn-contact:hover {
        background-color: var(--orange-dark);
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 4px 15px rgba(249, 115, 22, 0.3);
    }

    .contact-title {
        font-size: 1.75rem;
        font-weight: 600;
        margin-bottom: 0.5rem;
        text-align: center;
    }

    .contact-subtitle {
        font-size: 1rem;
        color: var(--text-muted);
        text-align: center;
        margin-bottom: 2rem;
    }

    .contact-item {
        display: flex;
        align-items: center;
        padding: 1rem 1.5rem;
        background-color: var(--bg-soft);
        border-radius: 0.5rem;
        margin-bottom: 1rem;
        transition: transform 0.3s;
    }

    .contact-item:hover {
        transform: translateX(5px);
    }

    .contact-item i {
        font-size: 1.25rem;
        margin-right: 1rem;
        color: var(--orange-primary);
    }

    .contact-item a {
        color: var(--text-main);
        transition: color 0.3s;
    }

    .contact-item a:hover {
        color: var(--orange-primary);
    }

    .help-button {
        position: fixed;
        bottom: 2rem;
        right: 2rem;
        width: 52px;
        height: 52px;
        background-color: var(--blue-primary);
        color: var(--orange-primary);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.4rem;
        cursor: pointer;
        box-shadow: 0 0 25px rgba(249, 115, 22, 0.5);
        transition: all 0.3s ease;
        z-index: 999;
        border: none;
    }

    .help-button1 {
        position: fixed;
        bottom: 2rem;
        right: 1rem;
        width: 52px;
        height: 52px;
        background-color: var(--blue-primary);
        color: var(--orange-primary);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.4rem;
        cursor: pointer;
        box-shadow: 0 0 25px rgba(249, 115, 22, 0.5);
        transition: all 0.3s ease;
        z-index: 999;
        border: none;
    }

    .help-button:hover {
        background-color: var(--orange-primary);
        color: white;
        transform: scale(1.08);
    }

    body.light-mode .help-button {
        box-shadow: 0 6px 20px rgba(0,0,0,0.35);
    }

    /* Certificate Modal Styles */
    .certificate-modal {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.9);
        z-index: 9999;
        display: none;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .certificate-modal.show {
        display: flex;
        opacity: 1;
    }

    .certificate-modal-content {
        max-width: 90vw;
        max-height: 90vh;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .certificate-modal-image {
        max-width: 100%;
        max-height: 100%;
        object-fit: contain;
        border-radius: 0.5rem;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
    }

    .certificate-modal-close {
        position: absolute;
        top: -40px;
        right: 0;
        background: rgba(255, 255, 255, 0.2);
        color: white;
        border: none;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        font-size: 1.5rem;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: background-color 0.3s ease;
    }

    .certificate-modal-close:hover {
        background: rgba(255, 255, 255, 0.3);
    }

    /* Mobile Responsiveness */
    @media (max-width: 768px) {
        .hero-title {
            font-size: 2rem;
        }
        
        .hero-subtitle {
            font-size: 1.25rem;
        }
        
        .hero-description {
            font-size: 1rem;
        }
        
        .section-title {
            font-size: 2rem;
        }
        
        .d-flex.gap-3 {
            flex-wrap: wrap;
        }
        
        .nav-link {
            margin-left: 1rem;
            margin-right: 1rem;
        }
        
        .navbar-collapse {
            padding-top: 1rem;
        }
        
        .projects-section,
        .certificates-section,
        .skills-section,
        .contact-section {
            padding: 3rem 0;
        }
        
        .contact-item {
            padding: 0.75rem 1rem;
        }
    }

    @media (max-width: 576px) {
        .avatar-container {
            width: 120px;
            height: 120px;
            font-size: 3rem;
        }
        
        .project-content {
            padding: 1.5rem;
        }
        
        .skill-card,
        .contact-card {
            padding: 1.5rem;
        }
        
        .help-button {
            bottom: 1rem;
            right: 1rem;
            width: 46px;
            height: 46px;
            font-size: 1.2rem;
        }
        
        .hero-section {
            min-height: 80vh;
        }
        
        .contact-title {
            font-size: 1.5rem;
        }
        
        .contact-subtitle {
            font-size: 0.9rem;
        }
    }

    
</style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#home">Portfolio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projects">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#certificates">Certificates</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#skills">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="avatar-container mt-5">
                        👨‍💻
                    </div>

                    <h1 class="hero-title">
                        Hi, I'm <span class="name">Ryan Paulo Magnaye</span>
                    </h1>

                    <p class="hero-subtitle">
                        Backend-Focused Software Developer
                    </p>

                    <p class="hero-description">
                        I specialize in building scalable backend systems, clean APIs,
                        and well-structured databases. I work well in team environments,
                        actively collaborate using Git and GitHub, and enjoy solving
                        real-world problems through reliable system design.
                    </p>

                    <div class="d-flex gap-3 justify-content-center">
                        <a href="mailto:magnaye.rp@gmail.com" class="btn btn-primary-custom">
                            <i class="bi bi-envelope-fill me-2"></i>Get in Touch
                        </a>

                        <a href="https://github.com/magnaye-rp" target="_blank" class="btn btn-outline-custom">
                            <i class="bi bi-github me-2"></i>GitHub
                        </a>

                        <a href="https://linkedin.com/in/magnaye-rp" target="_blank" class="btn btn-outline-custom">
                            <i class="bi bi-linkedin me-2"></i>LinkedIn
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="projects-section">
        <div class="container">
            <h2 class="section-title">Featured Projects</h2>
            <p class="section-description">
                Selected projects that highlight my experience in backend development,
                system design, and real-world problem solving.
            </p>

            <div class="row g-4">
                <?php foreach ($projects as $project): ?>
                <div class="col-md-6">
                    <div class="project-card">
                        <div class="project-image-container">
                            <!-- Use unique ID for each carousel -->
                            <div id="carousel-<?= $project['id'] ?>" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <?php if (empty($project['images'])): ?>
                                        <!-- Default if no images -->
                                        <div class="carousel-item active">
                                            <img src="https://via.placeholder.com/800x450?text=No+Image" 
                                                class="d-block w-100 project-image" 
                                                alt="<?= esc($project['project_name']) ?>">
                                        </div>
                                    <?php else: ?>
                                        <?php foreach ($project['images'] as $index => $image): ?>
                                            <div class="carousel-item <?= ($index === 0) ? 'active' : '' ?>">
                                                <img src="<?= base_url(esc($image['image_path'])) ?>" 
                                                    class="d-block w-100 project-image" 
                                                    alt="<?= esc($project['project_name']) ?> - Image <?= $index + 1 ?>"
                                                    loading="lazy">
                                            </div>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>
                                
                                <?php if (!empty($project['images']) && count($project['images']) > 1): ?>
                                    <!-- Controls -->
                                    <button class="carousel-control-prev" type="button" 
                                            data-bs-target="#carousel-<?= $project['id'] ?>" 
                                            data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" 
                                            data-bs-target="#carousel-<?= $project['id'] ?>" 
                                            data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                    
                                    <!-- Indicators -->
                                    <div class="carousel-indicators">
                                        <?php foreach ($project['images'] as $index => $image): ?>
                                            <button type="button" 
                                                    data-bs-target="#carousel-<?= $project['id'] ?>" 
                                                    data-bs-slide-to="<?= $index ?>" 
                                                    class="<?= ($index === 0) ? 'active' : '' ?>" 
                                                    aria-label="Slide <?= $index + 1 ?>"></button>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        
                        <!-- Project details here -->
                        <div class="project-content">
                            <h3 class="project-title"><?= esc($project['project_name']) ?></h3>

                            <p class="project-description">
                                <?= esc($project['description']) ?>
                            </p>

                            <div class="tech-badges">
                                <?php 
                                $techs = explode(',', $project['technology_stack']);
                                foreach ($techs as $tech): 
                                ?>
                                    <span class="tech-badge"><?= esc(trim($tech)) ?></span>
                                <?php endforeach; ?>
                            </div>

                            <div class="project-links">
                                <a href="<?= esc($project['github_link']) ?>" target="_blank" class="btn btn-project">
                                    <i class="bi bi-github me-1"></i>Code
                                </a>
                                <?php if (!empty($project['live_demo_link'])): ?>
                                <a href="<?= esc($project['live_demo_link']) ?>" target="_blank" class="btn btn-project">
                                    <i class="bi bi-box-arrow-up-right me-1"></i>Live Demo
                                </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Certificates Section -->
    <section id="certificates" class="certificates-section">
        <div class="container">
            <h2 class="section-title">Professional Certifications</h2>
            <p class="section-description">
                Industry-recognized certifications that validate my expertise and commitment to continuous learning
            </p>

            <div class="row g-4">
                <?php foreach ($certificates as $certificate): ?>
                    <div class="col-md-6">
                        <div class="certificate-card">
                            <div class="certificate-image-container">
                                <?php if (!empty($certificate['image_path'])): ?>
                                    <img src="<?= base_url(esc($certificate['image_path'])) ?>" 
                                        class="certificate-image" 
                                        alt="<?= esc($certificate['name']) ?> Certificate"
                                        loading="lazy">
                                <?php else: ?>
                                    <div class="certificate-placeholder">
                                        <i class="bi bi-award-fill"></i>
                                    </div>
                                <?php endif; ?>
                            </div>
                            
                            <div class="certificate-content">
                                <h3 class="certificate-title"><?= esc($certificate['name']) ?> Certificate</h3>

                                <p class="certificate-description">
                                    <?= esc($certificate['description']) ?>
                                </p>

                                <div class="certificate-dates">
                                    <div class="date-item">
                                        <i class="bi bi-calendar-check"></i>
                                        <span class="date-label">Issued:</span>
                                        <span><?= esc(date('F Y', strtotime($certificate['date_issued']))) ?></span>
                                    </div>
                                    <?php if (!empty($certificate['date_expiry'])): ?>
                                        <div class="date-item">
                                            <i class="bi bi-calendar-x"></i>
                                            <span class="date-label">Expires:</span>
                                            <span><?= esc(date('F Y', strtotime($certificate['date_expiry']))) ?></span>
                                        </div>
                                    <?php else: ?>
                                        <div class="date-item">
                                            <i class="bi bi-calendar-check"></i>
                                            <span class="date-label">Expires:</span>
                                            <span>No Expiry Date</span>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="issuer-name">
                                    <strong>Issuer:</strong> <?= esc($certificate['issued_by']) ?>

                                </div>
                                <?php
                                    $isExpired = !empty($certificate['date_expiry']) && strtotime($certificate['date_expiry']) < time();
                                ?>
                                <span class="certificate-status <?= $isExpired ? 'status-expired' : 'status-valid' ?>">
                                    <?php if ($isExpired): ?>
                                        <i class="bi bi-x-circle-fill me-1"></i>Expired
                                    <?php else: ?>
                                        <i class="bi bi-check-circle-fill me-1"></i>Valid
                                    <?php endif; ?>
                                </span>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="skills-section">
        <div class="container">
            <h2 class="section-title">Technical Skills</h2>
            <p class="section-description">
                Technologies and tools I work with to build robust backend systems
            </p>
            <div class="row g-4">
                <!-- Backend -->
                <div class="col-md-4">
                    <div class="skill-card">
                        <h3 class="skill-category">Backend Development</h3>
                        <div class="text-center">
                            <span class="skill-badge">PHP</span>
                            <span class="skill-badge">CodeIgniter 4</span>
                            <span class="skill-badge">Python</span>
                            <span class="skill-badge">REST APIs</span>
                            <span class="skill-badge">Authentication & Roles</span>
                            <span class="skill-badge">System Architecture</span>
                        </div>
                    </div>
                </div>

                <!-- Databases -->
                <div class="col-md-4">
                    <div class="skill-card">
                        <h3 class="skill-category">Databases</h3>
                        <div class="text-center">
                            <span class="skill-badge">MySQL</span>
                            <span class="skill-badge">Relational Design</span>
                            <span class="skill-badge">Migrations</span>
                            <span class="skill-badge">Query Optimization</span>
                            <span class="skill-badge">Data Integrity</span>
                        </div>
                    </div>
                </div>

                <!-- Tools & Collaboration -->
                <div class="col-md-4">
                    <div class="skill-card">
                        <h3 class="skill-category">Tools & Collaboration</h3>
                        <div class="text-center">
                            <span class="skill-badge">Git</span>
                            <span class="skill-badge">GitHub</span>
                            <span class="skill-badge">Docker</span>
                            <span class="skill-badge">Linux Environments</span>
                            <span class="skill-badge">Team Collaboration</span>
                            <span class="skill-badge">Active Developer Community</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <h2 class="section-title">Get In Touch</h2>
            <p class="section-description">
                I'm always open to discussing new projects, creative ideas, or opportunities to be part of your vision.
            </p>
            
            <div class="row g-4">
                <div class="col-md-6 d-flex">
                    <div class="contact-card h-100 w-100">
                        <h3 class="contact-title">Let's Connect</h3>
                        <p class="contact-subtitle">Feel free to reach out through any of these platforms</p>
                        
                        <div class="contact-item">
                            <i class="bi bi-envelope-fill"></i>
                            <a href="mailto:magnaye.rp@gmail.com">magnaye.rp@gmail.com</a>
                        </div>
                        
                        <div class="contact-item">
                            <i class="bi bi-github"></i>
                            <a href="https://github.com/magnaye-rp" target="_blank">github.com/magnaye-rp</a>
                        </div>
                        
                        <div class="contact-item">
                            <i class="bi bi-linkedin"></i>
                            <a href="https://linkedin.com/in/magnaye-rp" target="_blank">linkedin.com/in/magnaye-rp</a>
                        </div>
                        
                        <div class="contact-item">
                            <i class="bi bi-facebook"></i>
                            <a href="https://www.facebook.com/bruhdacious" target="_blank">facebook.com/bruhdacious</a>
                        </div>
                        
                        <div class="contact-item">
                            <i class="bi bi-instagram"></i>
                            <a href="https://www.instagram.com/bruhdacious" target="_blank">instagram.com/bruhdacious</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 d-flex">
                    <div class="contact-form h-100 w-100">
                        <h4 class="contact-title mb-4">Send Me a Message</h4>
                        <form id="contactForm" action="/contact/send" method="POST">
                            <div class="row g-4">
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                                        <label for="name">Name</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                                        <label for="email">Email Address</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating mb-4">
                                        <textarea class="form-control" id="message" name="message" placeholder="Your Message" style="height: 140px" required></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-contact">
                                        <i class="bi bi-send-fill me-2"></i>Send Message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Help Button -->
    <button class="help-button" id="darkModeToggle" title="Toggle Dark Mode">
        <i class="bi bi-moon-stars-fill"></i>
    </button>

    <!-- Certificate Modal -->
    <div class="certificate-modal" id="certificateModal">
        <div class="certificate-modal-content">
            <button class="certificate-modal-close" id="closeCertificateModal" title="Close">
                <i class="bi bi-x"></i>
            </button>
            <img src="" alt="Certificate" class="certificate-modal-image" id="certificateModalImage">
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    const offset = 80;
                    const targetPosition = target.offsetTop - offset;
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Navbar background on scroll
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.style.boxShadow = '0 2px 10px rgba(0,0,0,0.1)';
            } else {
                navbar.style.boxShadow = '0 1px 3px rgba(0,0,0,0.1)';
            }
        });

        // Active nav link tracking
        document.addEventListener('DOMContentLoaded', function() {
            const sections = document.querySelectorAll('section');
            const navLinks = document.querySelectorAll('.nav-link');
            
            window.addEventListener('scroll', function() {
                let current = '';
                
                sections.forEach(section => {
                    const sectionTop = section.offsetTop;
                    const sectionHeight = section.clientHeight;
                    if (scrollY >= (sectionTop - 150)) {
                        current = section.getAttribute('id');
                    }
                });
                
                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === `#${current}`) {
                        link.classList.add('active');
                    }
                });
            });
        });

        // Dark mode toggle
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
            
            // Save preference
            localStorage.setItem(
                'theme',
                document.body.classList.contains('light-mode') ? 'light' : 'dark'
            );
        });

        // Load saved theme
        if (localStorage.getItem('theme') === 'light') {
            document.body.classList.add('light-mode');
            toggleIcon.className = 'bi bi-sun-fill';
        }

        // Contact form handling
        document.getElementById('contactForm').addEventListener('submit', async function(e) {
            e.preventDefault();
            
            const submitBtn = this.querySelector('.btn-contact');
            const originalText = submitBtn.innerHTML;
            const formData = new FormData(this);
            
            // Basic validation
            const name = formData.get('name').trim();
            const email = formData.get('email').trim();
            const message = formData.get('message').trim();
            
            if (!name || !email || !message) {
                showNotification('Please fill in all fields.', 'error');
                return;
            }
            
            if (!isValidEmail(email)) {
                showNotification('Please enter a valid email address.', 'error');
                return;
            }
            
            // Show loading state
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<i class="bi bi-hourglass-split me-2"></i>Sending...';
            
            try {
                // Submit form to backend
                const response = await fetch('/contact/send', {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                });
                
                const result = await response.json();
                
                if (result.success) {
                    // Reset form
                    this.reset();
                    showNotification(result.message, 'success');
                } else {
                    showNotification(result.message, 'error');
                }
                
            } catch (error) {
                console.error('Form submission error:', error);
                showNotification('Sorry, there was an error sending your message. Please try again.', 'error');
            } finally {
                // Reset button
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalText;
            }
        });
        
        // Email validation function
        function isValidEmail(email) {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(email);
        }
        
        // Notification system
        function showNotification(message, type = 'info') {
            // Remove existing notifications
            const existingNotification = document.querySelector('.form-notification');
            if (existingNotification) {
                existingNotification.remove();
            }
            
            // Create notification element
            const notification = document.createElement('div');
            notification.className = `form-notification alert alert-${type === 'success' ? 'success' : 'danger'} alert-dismissible fade show`;
            notification.style.cssText = `
                position: fixed;
                top: 100px;
                right: 20px;
                z-index: 9999;
                min-width: 300px;
                box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            `;
            
            notification.innerHTML = `
                ${message}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            `;
            
            document.body.appendChild(notification);
            
            // Auto remove after 5 seconds
            setTimeout(() => {
                if (notification.parentNode) {
                    notification.remove();
                }
            }, 5000);
        }

        // Certificate Modal Functionality
        function initCertificateModal() {
            const modal = document.getElementById('certificateModal');
            const modalImage = document.getElementById('certificateModalImage');
            const closeButton = document.getElementById('closeCertificateModal');
            const certificateImages = document.querySelectorAll('.certificate-image');

            // Add click event listeners to certificate images
            certificateImages.forEach(image => {
                image.addEventListener('click', function(e) {
                    e.preventDefault();
                    const imageSrc = this.src;
                    const imageAlt = this.alt;
                    
                    modalImage.src = imageSrc;
                    modalImage.alt = imageAlt;
                    modal.classList.add('show');
                    
                    // Prevent body scroll when modal is open
                    document.body.style.overflow = 'hidden';
                });
            });

            // Close modal when clicking close button
            closeButton.addEventListener('click', function() {
                closeModal();
            });

            // Close modal when clicking outside the image
            modal.addEventListener('click', function(e) {
                if (e.target === modal) {
                    closeModal();
                }
            });

            // Close modal with escape key
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && modal.classList.contains('show')) {
                    closeModal();
                }
            });

            function closeModal() {
                modal.classList.remove('show');
                // Restore body scroll
                document.body.style.overflow = '';
                
                // Clear image source after transition
                setTimeout(() => {
                    if (!modal.classList.contains('show')) {
                        modalImage.src = '';
                    }
                }, 300);
            }
        }

        // Initialize certificate modal when DOM is loaded
        document.addEventListener('DOMContentLoaded', function() {
            initCertificateModal();
        });
    </script>
</body>
</html>

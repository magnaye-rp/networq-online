<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Full Stack Developer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
<style>
    :root {
        /* Brand */
        --blue-primary: #0b3c5d;
        --blue-secondary: #1d4ed8;
        --orange-primary: #f97316;
        --orange-dark: #ea580c;

        /* Light Mode */
        --bg-main: #ffffff;
        --bg-soft: #f9fafb;
        --text-main: #1f2937;
        --text-muted: #6b7280;
        --card-bg: #ffffff;
        --border-color: #e5e7eb;
    }

    body.dark-mode {
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
        box-shadow: 0 6px 20px rgba(0,0,0,0.35);
        transition: all 0.3s ease;
        z-index: 999;
        border: none;
    }

    .help-button:hover {
        background-color: var(--orange-primary);
        color: white;
        transform: scale(1.08);
    }

    body.dark-mode .help-button {
        box-shadow: 0 0 25px rgba(249, 115, 22, 0.5);
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
                    <div class="avatar-container">
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
                <!-- AquaSense -->
                <div class="col-md-6">
                    <div class="project-card">
                        <div class="project-image-container">
                            <img src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?w=800&h=500&fit=crop"
                                alt="AquaSense Monitoring System"
                                class="project-image">
                        </div>

                        <div class="project-content">
                            <h3 class="project-title">AquaSense</h3>

                            <p class="project-description">
                                A sensor-based water monitoring and alert system that collects,
                                processes, and visualizes real-time data. Includes threshold-based
                                alerts, device logging, and an admin dashboard for system control.
                            </p>

                            <div class="tech-badges">
                                <span class="tech-badge">PHP</span>
                                <span class="tech-badge">CodeIgniter 4</span>
                                <span class="tech-badge">MySQL</span>
                                <span class="tech-badge">REST API</span>
                                <span class="tech-badge">AJAX</span>
                                <span class="tech-badge">Docker</span>
                            </div>

                            <div class="project-links">
                                <a href="#" class="btn btn-project">
                                    <i class="bi bi-github me-1"></i>Code
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FarmEase / Farmis -->
                <div class="col-md-6">
                    <div class="project-card">
                        <div class="project-image-container">
                            <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?w=800&h=500&fit=crop"
                                alt="FarmEase Booking System"
                                class="project-image">
                        </div>

                        <div class="project-content">
                            <h3 class="project-title">FarmEase (Venue Booking System)</h3>

                            <p class="project-description">
                                A web-based venue and event booking management system with
                                role-based access for clients, staff, and administrators.
                                Features booking workflows, package management, audit logs,
                                and staff assignment tracking.
                            </p>

                            <div class="tech-badges">
                                <span class="tech-badge">PHP</span>
                                <span class="tech-badge">CodeIgniter 4</span>
                                <span class="tech-badge">MySQL</span>
                                <span class="tech-badge">CodeIgniter Shield</span>
                                <span class="tech-badge">RBAC</span>
                                <span class="tech-badge">Docker</span>
                            </div>

                            <div class="project-links">
                                <a href="#" class="btn btn-project">
                                    <i class="bi bi-github me-1"></i>Code
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
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
            
            <div class="contact-card">
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
            </div>
        </div>
    </section>

    <!-- Help Button -->
    <button class="help-button" id="darkModeToggle" title="Toggle Dark Mode">
        <i class="bi bi-moon-stars-fill"></i>
    </button>

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
            document.body.classList.toggle('dark-mode');
            
            // Change icon
            if (document.body.classList.contains('dark-mode')) {
                toggleIcon.className = 'bi bi-sun-fill';
            } else {
                toggleIcon.className = 'bi bi-moon-stars-fill';
            }
            
            // Save preference
            localStorage.setItem(
                'theme',
                document.body.classList.contains('dark-mode') ? 'dark' : 'light'
            );
        });

        // Load saved theme
        if (localStorage.getItem('theme') === 'dark') {
            document.body.classList.add('dark-mode');
            toggleIcon.className = 'bi bi-sun-fill';
        }
    </script>
</body>
</html>
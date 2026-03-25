<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Ryan Paulo Magnaye Portfolio</title>
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
        background: linear-gradient(135deg, var(--bg-main) 0%, var(--bg-soft) 100%);
        color: var(--text-main);
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
    }

    .login-container {
        width: 100%;
        max-width: 420px;
        padding: 2rem;
    }

    .login-card {
        background: var(--card-bg);
        border-radius: 1.5rem;
        border: 1px solid var(--border-color);
        box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        overflow: hidden;
        position: relative;
    }

    .login-header {
        text-align: center;
        padding: 2rem 2rem 1rem;
        background: linear-gradient(135deg, var(--blue-primary), var(--orange-primary));
        color: white;
        position: relative;
    }

    .login-header::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="white" opacity="0.1"/><circle cx="75" cy="75" r="1" fill="white" opacity="0.1"/><circle cx="50" cy="10" r="0.5" fill="white" opacity="0.1"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
        pointer-events: none;
    }

    .login-avatar {
        width: 80px;
        height: 80px;
        background: rgba(255, 255, 255, 0.2);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2.5rem;
        margin: 0 auto 1rem;
        border: 2px solid rgba(255, 255, 255, 0.3);
        backdrop-filter: blur(10px);
    }

    .login-title {
        font-size: 1.5rem;
        font-weight: 600;
        margin-bottom: 0.5rem;
        position: relative;
        z-index: 1;
    }

    .login-subtitle {
        font-size: 0.9rem;
        opacity: 0.9;
        position: relative;
        z-index: 1;
    }

    .login-body {
        padding: 2rem;
    }

    .form-floating {
        margin-bottom: 1.5rem;
    }

    .form-floating > .form-control {
        background-color: var(--bg-soft);
        border: 1px solid var(--border-color);
        color: var(--text-main);
        transition: all 0.3s ease;
        border-radius: 0.75rem;
        padding: 1rem 0.75rem;
    }

    .form-floating > .form-control:focus {
        border-color: var(--orange-primary);
        box-shadow: 0 0 0 0.2rem rgba(249, 115, 22, 0.25);
        background-color: var(--card-bg);
    }

    .form-floating > label {
        color: var(--text-muted);
        font-weight: 500;
    }

    .btn-login {
        width: 100%;
        background: linear-gradient(135deg, var(--orange-primary), var(--orange-dark));
        color: white;
        border: none;
        padding: 1rem;
        border-radius: 0.75rem;
        font-weight: 600;
        font-size: 1rem;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .btn-login:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(249, 115, 22, 0.4);
        color: white;
    }

    .btn-login:active {
        transform: translateY(0);
    }

    .btn-login:disabled {
        opacity: 0.6;
        transform: none;
        box-shadow: none;
    }

    .login-footer {
        text-align: center;
        padding: 1rem 2rem 2rem;
        border-top: 1px solid var(--border-color);
        background: var(--bg-soft);
    }

    .back-link {
        color: var(--text-muted);
        text-decoration: none;
        font-size: 0.9rem;
        transition: color 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
    }

    .back-link:hover {
        color: var(--orange-primary);
    }

    .alert {
        border: none;
        border-radius: 0.75rem;
        padding: 1rem;
        margin-bottom: 1.5rem;
        font-weight: 500;
    }

    .alert-success {
        background: rgba(34, 197, 94, 0.1);
        color: #22c55e;
        border-left: 4px solid #22c55e;
    }

    .alert-danger {
        background: rgba(239, 68, 68, 0.1);
        color: #ef4444;
        border-left: 4px solid #ef4444;
    }

    .input-group-text {
        background-color: var(--bg-soft);
        border: 1px solid var(--border-color);
        color: var(--text-muted);
        border-radius: 0.75rem 0 0 0.75rem;
    }

    .form-control:focus + .input-group-text {
        border-color: var(--orange-primary);
        color: var(--orange-primary);
    }

    /* Mobile Responsiveness */
    @media (max-width: 576px) {
        .login-container {
            padding: 1rem;
            max-width: 100%;
        }

        .login-header {
            padding: 1.5rem 1rem 1rem;
        }

        .login-body {
            padding: 1.5rem;
        }

        .login-footer {
            padding: 1rem 1.5rem 1.5rem;
        }

        .login-avatar {
            width: 60px;
            height: 60px;
            font-size: 2rem;
        }

        .login-title {
            font-size: 1.25rem;
        }
    }

    /* Loading Animation */
    .btn-login .spinner-border {
        width: 1rem;
        height: 1rem;
        margin-right: 0.5rem;
    }

    /* Floating Animation */
    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
    }

    .login-card {
        animation: float 6s ease-in-out infinite;
    }

    /* Focus Indicators */
    .form-control:focus {
        outline: none;
    }

    /* Custom Scrollbar */
    ::-webkit-scrollbar {
        width: 8px;
    }

    ::-webkit-scrollbar-track {
        background: var(--bg-soft);
    }

    ::-webkit-scrollbar-thumb {
        background: var(--border-color);
        border-radius: 4px;
    }

    ::-webkit-scrollbar-thumb:hover {
        background: var(--orange-primary);
    }
</style>
</head>
<body>
    <div class="login-container">
        <div class="login-card">
            <!-- Header -->
            <div class="login-header">
                <div class="login-avatar">
                    <?php 
                    $profilePicPath = 'uploads/profile-pic.jpg';
                    $profilePicExists = file_exists(FCPATH . 'uploads/profile-pic.jpg');
                    if ($profilePicExists): ?>
                        <img src="/uploads/profile-pic.jpg" 
                             alt="Profile Picture" 
                             class="img-fluid rounded-circle"
                             style="width: 100%; height: 100%; object-fit: cover;">
                    <?php else: ?>
                        👨‍💻
                    <?php endif; ?>
                </div>
                <h1 class="login-title">Welcome Back</h1>
                <p class="login-subtitle">Sign in to manage your portfolio</p>
            </div>

            <!-- Body -->
            <div class="login-body">
                <!-- Flash Messages -->
                <?php if (session()->getFlashdata('success')): ?>
                    <div class="alert alert-success">
                        <i class="bi bi-check-circle-fill me-2"></i>
                        <?= session()->getFlashdata('success') ?>
                    </div>
                <?php endif; ?>

                <?php if (session()->getFlashdata('error')): ?>
                    <div class="alert alert-danger">
                        <i class="bi bi-exclamation-triangle-fill me-2"></i>
                        <?= session()->getFlashdata('error') ?>
                    </div>
                <?php endif; ?>

                <!-- Login Form -->
                <form id="loginForm" method="POST" action="<?= site_url('login') ?>">
                    <?= csrf_field() ?>
                    
                    <div class="form-floating">
                        <input type="email" 
                               class="form-control <?= session()->getFlashdata('errors') && isset(session()->getFlashdata('errors')['email']) ? 'is-invalid' : '' ?>" 
                               id="email" 
                               name="email" 
                               placeholder="name@example.com"
                               value="<?= old('email') ?>"
                               required 
                               autocomplete="email">
                        <label for="email">
                            <i class="bi bi-envelope me-2"></i>Email Address
                        </label>
                        <?php if (session()->getFlashdata('errors') && isset(session()->getFlashdata('errors')['email'])): ?>
                            <div class="invalid-feedback">
                                <?= session()->getFlashdata('errors')['email'] ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="form-floating">
                        <input type="password" 
                               class="form-control <?= session()->getFlashdata('errors') && isset(session()->getFlashdata('errors')['password']) ? 'is-invalid' : '' ?>" 
                               id="password" 
                               name="password" 
                               placeholder="Password"
                               required 
                               autocomplete="current-password">
                        <label for="password">
                            <i class="bi bi-lock me-2"></i>Password
                        </label>
                        <?php if (session()->getFlashdata('errors') && isset(session()->getFlashdata('errors')['password'])): ?>
                            <div class="invalid-feedback">
                                <?= session()->getFlashdata('errors')['password'] ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="remember" name="remember">
                        <label class="form-check-label" for="remember" style="color: var(--text-muted);">
                            Remember me
                        </label>
                    </div>

                    <button type="submit" class="btn btn-login" id="loginBtn">
                        <i class="bi bi-box-arrow-in-right me-2"></i>
                        Sign In
                    </button>
                </form>

                <!-- OAuth Section -->
                <div class="text-center mt-4">
                    <p class="text-muted mb-3" style="font-size: 0.9rem;">Or sign in with</p>
                    <a href="<?= site_url('oauth/google') ?>" class="btn btn-outline-secondary w-100" style="border-radius: 0.75rem; padding: 0.75rem; font-weight: 500; transition: all 0.3s ease;">
                        <svg width="18" height="18" class="me-2" viewBox="0 0 24 24">
                            <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                            <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                            <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                            <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
                        </svg>
                        Continue with Google
                    </a>
                </div>
            </div>

            <!-- Footer -->
            <div class="login-footer">
                <a href="<?= site_url('/') ?>" class="back-link">
                    <i class="bi bi-arrow-left"></i>
                    Back to Portfolio
                </a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            const submitBtn = document.getElementById('loginBtn');
            const originalContent = submitBtn.innerHTML;
            
            // Show loading state
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<div class="spinner-border spinner-border-sm" role="status"></div>Signing in...';
            
            // Re-enable after 3 seconds as fallback
            setTimeout(() => {
                if (submitBtn.disabled) {
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = originalContent;
                }
            }, 3000);
        });

        // Add some interactive effects
        document.querySelectorAll('.form-control').forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.style.transform = 'translateY(-2px)';
            });
            
            input.addEventListener('blur', function() {
                this.parentElement.style.transform = 'translateY(0)';
            });
        });

        // Auto-hide alerts after 5 seconds
        setTimeout(() => {
            const alerts = document.querySelectorAll('.alert');
            alerts.forEach(alert => {
                if (alert.classList.contains('alert-success')) {
                    alert.style.opacity = '0';
                    setTimeout(() => alert.remove(), 300);
                }
            });
        }, 5000);

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

        // Theme toggle functionality for login page
        document.addEventListener('DOMContentLoaded', function() {
            // Check for saved theme preference
            const savedTheme = localStorage.getItem('theme');
            if (savedTheme === 'light') {
                document.body.classList.add('light-mode');
            }
            
            // Update favicon on page load
            updateFavicon();
            
            // Add theme toggle functionality if needed
            // This can be triggered by a button or automatically based on system preference
            const isDarkModePreferred = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
            
            if (!savedTheme) {
                // If no saved preference, use system preference
                if (isDarkModePreferred) {
                    document.body.classList.remove('light-mode');
                } else {
                    document.body.classList.add('light-mode');
                }
                updateFavicon();
            }
        });
    </script>
</body>
</html>

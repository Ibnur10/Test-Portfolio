<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .navbar {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            padding: 1rem 2rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
        }
        .nav-link {
            font-weight: 500;
            margin: 0 10px;
            transition: all 0.3s ease;
        }
        .nav-link:hover {
            transform: translateY(-2px);
            color: #ffd700 !important;
        }
        .navbar-toggler {
            border: none;
        }
        .theme-toggle {
            cursor: pointer;
            transition: transform 0.3s ease;
        }
        .theme-toggle:hover {
            transform: scale(1.1);
        }
        .navbar-nav {
            margin-left: auto;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <i class="fas fa-code"></i> Ibnu Dev
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">
                            <i class="fas fa-home"></i> Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/education') }}">
                            <i class="fas fa-graduation-cap"></i> Education
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/about') }}">
                            <i class="fas fa-info-circle"></i> About
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/skill') }}">
                            <i class="fas fa-tools"></i> Skill
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/contact') }}">
                            <i class="fas fa-envelope"></i> Contact
                        </a>
                        
                        <li class="nav-item">
                            <div class="theme-toggle nav-link" id="themeToggle" onclick="toggleTheme()">
                                <i class="fas fa-moon" id="themeIcon"></i>
                            </div>  
                        </li>
                        <script>
                            // Cek preferensi tema pengguna
                            const themeToggle = document.getElementById('themeToggle');
                            const themeIcon = document.getElementById('themeIcon');
                        
                            // Fungsi untuk mengatur tema
                            function setTheme(theme) {
                                if (theme === 'dark') {
                                    document.body.classList.add('dark-mode');
                                    themeIcon.classList.remove('fa-moon');
                                    themeIcon.classList.add('fa-sun');
                                } else {
                                    document.body.classList.remove('dark-mode');
                                    themeIcon.classList.remove('fa-sun');
                                    themeIcon.classList.add('fa-moon');
                                }
                            }
                        
                            // Cek preferensi tema saat halaman dimuat
                            const userPrefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
                            setTheme(userPrefersDark ? 'dark' : 'light');
                        
                            // Toggle tema saat diklik
                            themeToggle.addEventListener('click', () => {
                                const currentTheme = document.body.classList.contains('dark-mode') ? 'dark' : 'light';
                                setTheme(currentTheme === 'dark' ? 'light' : 'dark');
                            });
                        </script>
                </ul>
            </div>
        </div>
    </nav>
</body>
</html>
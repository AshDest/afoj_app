        <!-- Theme configuration (navbar) -->
        <script>
            let navigationColor = localStorage.getItem('navigationColor'),
                navbar = document.getElementById('mainNavbar');

            if (navigationColor != null && navbar != null) {
                if (navigationColor == 'inverted') {
                    navbar.classList.add('bg-dark', 'navbar-dark');
                    navbar.classList.remove('bg-white', 'navbar-light');
                } else {
                    navbar.classList.add('bg-white', 'navbar-light');
                    navbar.classList.remove('bg-dark', 'navbar-dark');
                }
            }
        </script>

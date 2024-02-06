    <!-- Demo script -->
    <script>
        var themeConfig = {
            theme: JSON.parse('"light"'),
            isRTL: JSON.parse('false'),
            isFluid: JSON.parse('true'),
            sidebarBehaviour: JSON.parse('"fixed"'),
            navigationColor: JSON.parse('"inverted"')
        };

        var isRTL = localStorage.getItem('isRTL') === 'true',
            isFluid = localStorage.getItem('isFluid') === 'true',
            theme = localStorage.getItem('theme'),
            sidebarSizing = localStorage.getItem('sidebarSizing'),
            linkLTR = document.getElementById('stylesheetLTR'),
            linkRTL = document.getElementById('stylesheetRTL'),
            html = document.documentElement;

        if (isRTL) {
            linkLTR.setAttribute('disabled', '');
            linkRTL.removeAttribute('disabled');
            html.setAttribute('dir', 'rtl');
        } else {
            linkRTL.setAttribute('disabled', '');
            linkLTR.removeAttribute('disabled');
            html.removeAttribute('dir');
        }
    </script>

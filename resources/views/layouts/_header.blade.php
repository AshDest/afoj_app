    <header id="topnav" class="defaultscroll sticky">
        <div class="container">
            <!-- Logo container-->
            <a class="logo" href="/">
                <span class="logo-light-mode">
                    <img src="{{ asset('assets/images/logo-light_2.png') }}" class="l-dark" alt="">
                    <img src="{{ asset('assets/images/logo-light_2.png') }}" class="l-light" alt="">
                </span>
                <img src="{{ asset('assets/images/logo-light_2.png') }}" class="logo-dark-mode" alt="">
            </a>
            <!-- End Logo container-->
            <div class="menu-extras">
                <div class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
            </div>

            <ul class="buy-button list-inline mb-0">
                <li class="list-inline-item search-icon mb-0">
                    <div class="dropdown">
                        <button type="button" class="btn btn-link text-decoration-none dropdown-toggle mb-0 p-0"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="uil uil-search h5 text-dark nav-light-icon-dark mb-0"></i>
                            <i class="uil uil-search h5 text-white nav-light-icon-white mb-0"></i>
                        </button>
                        <div class="dropdown-menu dd-menu dropdown-menu-end bg-white shadow rounded border-0 mt-4 py-0"
                            style="width: 300px;">
                            <form class="p-4">
                                <input type="text" id="text" name="name" class="form-control border bg-white"
                                    placeholder="Search...">
                            </form>
                        </div>
                    </div>
                </li>
            </ul>

            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu nav-light nav-right">
                    <li class="has-submenu parent-parent-menu-item">
                        <a href="/">Home</a><span class="menu-arrow"></span>
                    </li>
                    <li><a href="#" class="sub-menu-item">About Us</a></li>

                    <li class="has-submenu parent-parent-menu-item">
                        <a href="javascript:void(0)">Evenement</a><span class="menu-arrow"></span>
                        <ul class="submenu megamenu">
                            <li>
                                <ul>
                                    <li class="megamenu-head">Grid Portfolio</li>
                                    <li><a href="portfolio-grid-two.html" class="sub-menu-item">Two Column</a></li>
                                    <li><a href="portfolio-grid-three.html" class="sub-menu-item">Three Column</a>
                                    </li>
                                    <li><a href="portfolio-grid-four.html" class="sub-menu-item">Four Column</a></li>
                                    <li><a href="portfolio-grid-five.html" class="sub-menu-item">Five Column</a></li>
                                    <li><a href="portfolio-grid-six.html" class="sub-menu-item">Six Column</a></li>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <li class="megamenu-head">Modern Portfolio</li>
                                    <li><a href="portfolio-modern-two.html" class="sub-menu-item">Two Column</a></li>
                                    <li><a href="portfolio-modern-three.html" class="sub-menu-item">Three Column</a>
                                    </li>
                                    <li><a href="portfolio-modern-four.html" class="sub-menu-item">Four Column</a>
                                    </li>
                                    <li><a href="portfolio-modern-five.html" class="sub-menu-item">Five Column</a>
                                    </li>
                                    <li><a href="portfolio-modern-six.html" class="sub-menu-item">Six Column</a></li>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <li class="megamenu-head">Masonry Portfolio</li>
                                    <li><a href="portfolio-masonry-two.html" class="sub-menu-item">Two Column</a></li>
                                    <li><a href="portfolio-masonry-three.html" class="sub-menu-item">Three Column</a>
                                    </li>
                                    <li><a href="portfolio-masonry-four.html" class="sub-menu-item">Four Column</a>
                                    </li>
                                    <li><a href="portfolio-masonry-five.html" class="sub-menu-item">Five Column</a>
                                    </li>
                                    <li><a href="portfolio-masonry-six.html" class="sub-menu-item">Six Column</a></li>
                                </ul>
                            </li>

                            <li>
                                <ul>
                                    <li class="megamenu-head">Standard Portfolio</li>
                                    <li><a href="portfolio-st-two.html" class="sub-menu-item">Two Column</a></li>
                                    <li><a href="portfolio-st-three.html" class="sub-menu-item">Three Column</a></li>
                                    <li><a href="portfolio-st-four.html" class="sub-menu-item">Four Column</a></li>
                                    <li><a href="portfolio-st-five.html" class="sub-menu-item">Five Column</a></li>
                                    <li><a href="portfolio-st-six.html" class="sub-menu-item">Six Column</a></li>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <li class="megamenu-head">Portfolio Deatils</li>
                                    <li><a href="portfolio-one.html" class="sub-menu-item"> Portfolio One</a></li>
                                    <li><a href="portfolio-two.html" class="sub-menu-item"> Portfolio Two</a></li>
                                    <li><a href="portfolio-three.html" class="sub-menu-item"> Portfolio Three</a></li>
                                    <li><a href="portfolio-four.html" class="sub-menu-item"> Portfolio Four</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="has-submenu parent-parent-menu-item">
                        <a href="javascript:void(0)">Publications</a><span class="menu-arrow"></span>
                        <ul class="submenu">
                            <li><a href="blog-two-column.html" class="sub-menu-item">Blog 2 column</a></li>
                            <li><a href="blog-three-column.html" class="sub-menu-item">Blog 3 column</a></li>
                            <li><a href="blog-leftsidebar.html" class="sub-menu-item">Left Sidebar</a></li>
                            <li><a href="blog-rightsidebar.html" class="sub-menu-item">Right Sidebar</a></li>
                            <li><a href="blog-fullwidth.html" class="sub-menu-item">Full width</a></li>
                            <li><a href="blog-detail.html" class="sub-menu-item"> Blog detail</a></li>
                            <li><a href="blog-author.html" class="sub-menu-item">Author</a></li>
                        </ul>
                    </li>

                    <li class="has-submenu parent-menu-item"><a href="javascript:void(0)">Contact</a><span
                            class="submenu-arrow"></span>
                        <ul class="submenu">
                            <li><a href="page-contact-one.html" class="sub-menu-item">Contact One</a></li>
                            <li><a href="page-contact-two.html" class="sub-menu-item">Contact Two</a></li>
                        </ul>
                    </li>
                </ul>
                <!--end navigation menu-->
            </div>
            <!--end navigation-->
        </div>
        <!--end container-->
    </header>

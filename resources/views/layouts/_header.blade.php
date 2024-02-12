    <header id="topnav" class="defaultscroll sticky">
        <div class="container">
            <!-- Logo container-->
            <a class="logo" href="index.html">
                <span class="logo-light-mode">
                    <img src="images/logo-dark.png" class="l-dark" alt="">
                    <img src="images/logo-light.png" class="l-light" alt="">
                </span>
                <img src="images/logo-light.png" class="logo-dark-mode" alt="">
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
                        <a href="javascript:void(0)">Home</a><span class="menu-arrow"></span>
                        <ul class="submenu">
                            <li>
                                <ul>
                                    <li>
                                        <a href="index.html" class="sub-menu-item">
                                            Home
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index-two.html" class="sub-menu-item">
                                            Home two
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index-three.html" class="sub-menu-item">
                                            Home three
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index-four.html" class="sub-menu-item">
                                            Home four
                                        </a>
                                    </li>

                                    <li>
                                        <a href="index-five.html" class="sub-menu-item">
                                            Home five
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index-six.html" class="sub-menu-item">
                                            Home six
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index-seven.html" class="sub-menu-item">
                                            Home seven
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index-onepage.html" class="sub-menu-item">
                                            Home onepage
                                        </a>
                                    </li>

                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="page-about.html" class="sub-menu-item">About Us</a></li>
                    <li class="has-submenu parent-parent-menu-item">
                        <a href="javascript:void(0)">Pages</a><span class="menu-arrow"></span>
                        <ul class="submenu">
                            <li class="has-submenu parent-menu-item"><a href="javascript:void(0)">Services</a><span
                                    class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="page-service-one.html" class="sub-menu-item">Services One</a></li>
                                    <li><a href="page-service-two.html" class="sub-menu-item">Service Two</a></li>
                                    <li><a href="page-service-three.html" class="sub-menu-item">Service Three</a></li>
                                    <li><a href="page-service-detail.html" class="sub-menu-item">Service Detail </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu parent-menu-item"><a href="javascript:void(0)">Team</a><span
                                    class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="page-team.html" class="sub-menu-item">Team One</a></li>
                                    <li><a href="page-team-two.html" class="sub-menu-item">Team Two</a></li>
                                    <li><a href="page-team-three.html" class="sub-menu-item">Team Three</a></li>
                                    <li><a href="page-team-detail.html" class="sub-menu-item">Team Detail </a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="page-features.html" class="sub-menu-item">Features</a></li>
                            <li><a href="page-faq.html" class="sub-menu-item">FAQs</a></li>
                            <li><a href="page-pricing.html" class="sub-menu-item">Pricing</a></li>
                            <li><a href="page-request.html" class="sub-menu-item">Request</a></li>


                            <li class="has-submenu parent-menu-item"><a href="javascript:void(0)">User Pages</a><span
                                    class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="page-login.html" class="sub-menu-item"> Login Page</a></li>
                                    <li><a href="page-signup.html" class="sub-menu-item"> Signup Page</a></li>
                                    <li><a href="page-forgotpassword.html" class="sub-menu-item"> Forgot Password</a>
                                    </li>
                                    <li><a href="page-thankyou.html" class="sub-menu-item">Thank You</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="page-comingsoon.html" class="sub-menu-item">Coming Soon</a></li>
                            <li><a href="page-404.html" class="sub-menu-item">404 Error</a></li>
                            <li><a href="page-components.html" class="sub-menu-item">Components</a></li>
                        </ul>
                    </li>

                    <li class="has-submenu parent-parent-menu-item">
                        <a href="javascript:void(0)">Portfolio</a><span class="menu-arrow"></span>
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
                        <a href="javascript:void(0)">Blogs</a><span class="menu-arrow"></span>
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

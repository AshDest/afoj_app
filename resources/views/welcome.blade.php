@extends('layouts.default')
@section('content')
    <main>
        <!-- start hero section -->
        <section class="bg-cover"
            style="background: url(assets/images/hero-slide.jpg); background-size: cover; background-repeat: no-repeat; background-position: center">
            <div class="container">
                <div class="row">
                    <div class="offset-lg-2 col-lg-8 col-md-10 offset-md-1 col-12">
                        <div class="pt-17 pb-13 pt-lg-19 pb-lg-19 text-center text-light">
                            <h1 class="display-3 text-white mb-3 lh-1">Become the hero of your own story</h1>
                            <p class="px-xl-10 px-md-10 mb-5 lead">our Coach community of like-minded individuals. Get your
                                ticket to the 2024 event.</p>
                            <a href="pages/signin.html" class="btn btn-primary btn-lg">Get Ticket</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of hero section -->

        <!-- start about section -->
        <section class="py-xxl-16 py-lg-8 pt-6">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="offset-xxl-3 col-xxl-6 col-lg-8 offset-lg-2 col-md-12 col-12">
                        <div class="mb-8 text-center">
                            <!-- heading -->
                            <h2 class="mb-3 h1">A Boy Before Coach</h2>
                            <!-- para -->
                            <p class="lead">Before Coach became a media sensation for empowering people and sharing
                                'Inspiration' across the globe, he had his share of obstacles to overcome.</p>
                        </div>
                    </div>
                </div>
                <div class="row d-flex align-items-end">
                    <div class="col-xl-7 col-lg-12 col-md-12 col-12">
                        <div class="row">
                            <div class="col-md-4 mb-2 mb-lg-2">
                                <!-- image -->
                                <img src="assets/images/profile-img-1.png" alt="porfile"
                                    class="img-fluid rounded h-100 w-100 img-hover-zoom--basic" />
                            </div>
                            <div class="col-md-8 mb-2 mb-lg-2">
                                <!-- image -->
                                <img src="assets/images/profile-img-2.png" alt="profile"
                                    class="img-fluid rounded h-100 w-100" />
                            </div>
                        </div>
                    </div>
                    <!-- col -->
                    <div class="col-xl-5 col-lg-12 col-md-12 col-12 mt-3 mt-xl-0">
                        <!-- para -->
                        <p class="mb-9">
                            From having a learning disability, which led to being alone and bullied in school, to being
                            sexually abused as a child, to being injured and broke on his sister’s couch, The Coach
                            story is the perfect example of how anybody can overcome the obstacles in their life and achieve
                            greatness.
                        </p>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12 mb-2 mb-lg-2">
                                <!-- image -->
                                <img src="assets/images/profile-img-3.png" alt="profile"
                                    class="img-fluid h-100 rounded w-100" />
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 mb-2 mb-lg-2">
                                <!-- image -->
                                <img src="assets/images/profile-img-4.png" alt="profile"
                                    class="img-fluid h-100 rounded w-100" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of about section -->

        <!-- start form section -->
        <section class="pb-xxl-16 pb-lg-8 py-6">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="offset-xl-3 col-xl-6 col-md-8 offset-md-2 col-12">
                        <div class="mb-5 text-center">
                            <!-- content -->
                            <h2 class="h1 mb-3">Make following your passion your full time job</h2>
                            <p>Learn How To Play A Different Game In Business With Your Own Rules</p>
                        </div>
                    </div>
                    <!-- col -->
                    <div class="offset-lg-2 col-lg-8 col-md-12 col-12">
                        <!-- form -->
                        <form class="row g-3 needs-validation" novalidate>
                            <div class="col-lg-5 col-md-5 col-12">
                                <!-- label -->
                                <label for="jobFormName" class="form-label visually-hidden">name</label>
                                <!-- input -->
                                <input type="text" class="form-control" id="jobFormName" name="jobFormName"
                                    placeholder="Name" required />
                                <div class="invalid-feedback">Please enter name.</div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-12">
                                <!-- label -->
                                <label for="jobFormEmail" class="form-label visually-hidden"></label>
                                <!-- input -->
                                <input type="email" class="form-control" id="jobFormEmail" name="jobFormEmail"
                                    placeholder="Email" required />
                                <div class="invalid-feedback">Please enter email.</div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-12">
                                <!-- button -->
                                <button class="btn btn-warning" type="submit">Submit</button>
                            </div>
                            <div class="col-12">
                                <small class="text-muted">We will never send you spam.</small>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of course section -->

        <!-- start podcast -->
        <section class="py-xxl-16 py-lg-8 py-6 bg-primary">
            <div class="container">
                <!-- row -->
                <div class="row d-xl-flex align-items-xl-center gy-4">
                    <!-- col -->
                    <div class="col-lg-6 col-md-12">
                        <div class="text-white pe-xl-10 mb-4 mb-xl-0">
                            <h2 class="display-4 text-white mb-3">Books, Podcast, Courses & More</h2>
                            <!-- para -->
                            <p class="lead mb-0">Ready for more? Listen to the latest podcast episode, see when John is
                                headed to your neck of the woods, stock up on business courses, books, gear, and more.</p>
                        </div>
                    </div>
                    <!-- col -->
                    <div class="col-lg-6 col-md-6">
                        <!-- image -->
                        <div class="img-overlay img-zoom">
                            <a href="#">
                                <img class="rounded img-fluid w-100" src="assets/images/course-img-1.png" alt="podcast" />
                            </a>
                            <!-- button -->
                            <div class="caption">
                                <a href="pages/podcast.html" class="btn btn-outline-white btn-lg">Podcast</a>
                            </div>
                        </div>
                    </div>
                    <!-- col -->
                    <div class="col-lg-6 col-md-6">
                        <!-- image -->
                        <div class="img-overlay img-zoom">
                            <a href="#">
                                <img class="rounded img-fluid w-100" src="assets/images/course-img-2.png" alt="events" />
                            </a>
                            <!-- button -->
                            <div class="caption">
                                <a href="pages/events.html" class="btn btn-outline-white btn-lg">Events</a>
                            </div>
                        </div>
                    </div>
                    <!-- col -->
                    <div class="col-lg-6 col-md-4 d-md-none d-lg-block">
                        <!-- image -->
                        <div class="img-overlay img-zoom">
                            <a href="#">
                                <img class="rounded img-fluid w-100" src="assets/images/course-img-3.png" alt="course" />
                            </a>
                            <!-- button -->
                            <div class="caption">
                                <a href="pages/program-list.html" class="btn btn-outline-white btn-lg">Courses</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of podcast -->

        <!-- start program section -->
        <section class="py-6 py-xxl-16 py-lg-8">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="offset-xxl-3 col-xxl-6 col-lg-8 offset-lg-2 col-md-12">
                        <div class="text-center mb-8">
                            <!-- content -->
                            <h2 class="mb-3 h1">
                                Master Every Area of
                                <br />
                                Your Life
                            </h2>
                            <p class="lead">Extreme Execution will help you leverage who you are in your life and career.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- col -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- card -->
                        <div class="card border-0">
                            <a href="pages/program-single.html" class="img-zoom">
                                <img class="rounded img-fluid w-100" src="assets/images/thumb-img-1.jpg"
                                    alt="thumb-img" />
                            </a>
                        </div>
                        <div class="card border-0">
                            <!-- card body -->
                            <div class="card-body mt-n16 bg-white me-6 rounded-end p-4">
                                <h3 class="mb-3"><a href="pages/program-single.html" class="text-inherit">Life
                                        Coaching</a></h3>
                                <p>Lorem ipsum dolor sit amet, conse cte turdisse in ornare lectussit amet lacinia nisi.</p>
                                <a href="pages/program-single.html" class="btn-primary-link">Read more</a>
                            </div>
                        </div>
                    </div>
                    <!-- col -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- card -->
                        <div class="card border-0">
                            <a href="pages/program-single.html" class="img-zoom"><img class="rounded img-fluid w-100"
                                    src="assets/images/thumb-img-2.jpg" alt="thumb-img" /></a>
                        </div>
                        <div class="card border-0">
                            <!-- card body -->
                            <div class="card-body mt-n16 bg-white me-6 rounded-end p-4">
                                <h3 class="mb-3"><a href="pages/program-single.html"
                                        class="text-inherit">Relationship</a></h3>
                                <p>Maecenas eu est purus. Morbi luctus turpis justo, sit amet mollis arcu ultricies et.</p>
                                <a href="pages/program-single.html" class="btn-primary-link">Read more</a>
                            </div>
                        </div>
                    </div>
                    <!-- col -->
                    <div class="col-lg-4 d-lg-block d-md-none col-12">
                        <!-- card -->
                        <div class="card border-0">
                            <a href="pages/program-single.html" class="img-zoom"><img class="rounded img-fluid w-100"
                                    src="assets/images/thumb-img-3.jpg" alt="thumb-img" /></a>
                        </div>
                        <div class="card border-0">
                            <!-- card body -->
                            <div class="card-body mt-n16 bg-white me-6 rounded-end p-4">
                                <h3 class="mb-3"><a href="pages/program-single.html"
                                        class="text-inherit">Leadership</a></h3>
                                <p>Pellentesque at rhoncus metus, in condimentum felis. Donec congue augue placera.</p>
                                <a href="pages/program-single.html" class="btn-primary-link">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of program section -->

        <!-- start gallery section -->
        <section class="pt-lg-8 pb-0">
            <div class="container-fluid">
                <div class="row g-0">
                    <div class="col-md-3 col-12">
                        <!-- image -->
                        <img src="assets/images/gallery-img-1.jpg" alt="gallery"
                            class="img-fluid border-end border-white h-lg-100" />
                    </div>

                    <div class="col-md-3 col-12">
                        <!-- image -->
                        <img src="assets/images/gallery-img-2.jpg" alt="gallery"
                            class="img-fluid border-bottom border-white h-lg-100" />

                        <img src="assets/images/gallery-img-3.jpg" alt="gallery"
                            class="img-fluid border-bottom border-white h-lg-100" />
                    </div>

                    <div class="col-md-3 col-12">
                        <!-- image -->
                        <img src="assets/images/gallery-img-4.jpg" alt="gallery"
                            class="img-fluid border-bottom border-white h-lg-100 border-start" />

                        <img src="assets/images/gallery-img-5.jpg" alt="gallery"
                            class="img-fluid border-bottom border-white h-lg-100 border-start" />
                    </div>
                    <div class="col-md-3 col-12">
                        <img src="assets/images/gallery-img-6.jpg" alt="gallery"
                            class="img-fluid border-start border-white h-lg-100" />
                    </div>
                </div>
            </div>
            <!-- workshop form -->
            <div class="container">
                <div class="row">
                    <div class="offset-xl-3 col-xl-6 col-lg-8 offset-lg-2 offset-md-1 col-md-10 col-12">
                        <div class="card mt-xl-n22 mt-xl-n19 mt-lg-n14 mt-n12">
                            <div class="card-body p-6">
                                <div class="mb-4 text-center">
                                    <!-- content -->
                                    <h2 class="mb-3">
                                        Book for Speaking or
                                        <br />
                                        Workshops
                                    </h2>
                                    <p class="mb-0 font-14">
                                        Call me at:
                                        <span class="text-dark">123-567-7890</span>
                                        or Book online by fill below form.
                                    </p>
                                </div>
                                <!-- form -->
                                <form class="d-flex flex-column gap-3 needs-validation" novalidate>
                                    <div>
                                        <!-- label -->
                                        <label for="workshopFormName" class="form-label visually-hidden">Name</label>
                                        <!-- input -->
                                        <input type="text" class="form-control" id="workshopFormName"
                                            name="workshopFormName" placeholder="Name" required />
                                        <div class="invalid-feedback">Please enter name.</div>
                                    </div>
                                    <div>
                                        <!-- label -->
                                        <label for="workshopFormEmail" class="form-label visually-hidden">Email</label>
                                        <!-- input -->
                                        <input type="email" class="form-control" id="workshopFormEmail"
                                            name="workshopFormEmail" placeholder="Email" required />
                                        <div class="invalid-feedback">Please enter email.</div>
                                    </div>

                                    <div>
                                        <!-- select -->
                                        <label for="selectTask" class="form-label visually-hidden">Time</label>
                                        <select class="form-select" id="selectTask" required>
                                            <option selected disabled value="">Select Workshops</option>
                                            <option value="1">Business Coaching</option>
                                            <option value="2">Relationship</option>
                                            <option value="3">Lifecoaching</option>
                                        </select>
                                        <div class="invalid-feedback">Please select workshops.</div>
                                    </div>
                                    <!-- button -->
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary">Book Now</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of gallery section -->
        <!-- start client logo -->
        <section class="pt-0 pt-lg-8 pb-5 pb-lg-14 bg-light mt-n15">
            <div class="pt-18">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="text-center mb-10">
                                <!-- heading -->
                                <h3 class="h4">The best companies know when they're in good company.</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 col-md-4 col-6">
                            <!-- image -->
                            <div class="mb-4 mt-4 text-center">
                                <img src="assets/images/logo-airbnb.svg" alt="logo" />
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-6">
                            <!-- image -->
                            <div class="mb-4 mt-4 text-center">
                                <img src="assets/images/logo-digitalocean.svg" alt="logo" />
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-6">
                            <!-- image -->
                            <div class="mb-4 mt-4 text-center">
                                <img src="assets/images/logo-facebook.svg" alt="logo" />
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-6">
                            <!-- image -->
                            <div class="mb-4 mt-4 text-center">
                                <img src="assets/images/logo-discord.svg" alt="logo" />
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-6">
                            <!-- image -->
                            <div class="mb-4 mt-4 text-center">
                                <img src="assets/images/logo-intercom.svg" alt="logo" />
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-6">
                            <!-- image -->
                            <div class="mb-4 mt-4 text-center">
                                <img src="assets/images/logo-twitch.svg" alt="logo" />
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-6">
                            <!-- image -->
                            <div class="mb-4 mt-4 text-center">
                                <img src="assets/images/logo-paypal.svg" alt="logo" />
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-6">
                            <!-- image -->
                            <div class="mb-4 mt-4 text-center">
                                <img src="assets/images/logo-netflix.svg" alt="logo" />
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-6">
                            <!-- image -->
                            <div class="mb-4 mt-4 text-center">
                                <img src="assets/images/logo-xboxone.svg" alt="logo" />
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-6">
                            <!-- image -->
                            <div class="mb-4 mt-4 text-center">
                                <img src="assets/images/logo-instagram.svg" alt="logo" />
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-6">
                            <!-- image -->
                            <div class="mb-4 mt-4 text-center">
                                <img src="assets/images/logo-pinterest.svg" alt="logo" />
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-6">
                            <!-- image -->
                            <div class="mb-4 mt-4 text-center">
                                <img src="assets/images/logo-stripe.svg" alt="logo" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of client logo -->
    </main>
@endsection

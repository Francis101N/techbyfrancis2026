<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY PROJECTS</title>
    <!-- Favicon link -->
    <link rel="icon" type="image/png" sizes="32x32" href="IMAGES/favicon.png">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="BOOTSTRAP/css/bootstrap.min.css" />
    <link rel="stylesheet" href="CSS/projects.css" />
    <script src="https://kit.fontawesome.com/0ed688cb3d.js" crossorigin="anonymous"></script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@graph": [{
                    "@type": "Person",
                    "name": "Francis Nwankwo",
                    "url": "https://techbyfrancis.com/",
                    "image": "https://techbyfrancis.com/IMAGES/francis_selfie.png",
                    "jobTitle": "IT Project Manager, Full Stack Developer, Cybersecurity (penetration tester)",
                    "sameAs": [
                        "https://www.linkedin.com/in/francis-nwankwo-661595218",
                        "https://x.com/francis65176212",
                        "https://www.instagram.com/francis_officiallll"
                    ]
                },
                {
                    "@type": "Organization",
                    "name": "TechbyFrancis",
                    "url": "https://techbyfrancis.com",
                    "logo": "https://techbyfrancis.com/IMAGES/mylogo.png",
                    "sameAs": [
                        "https://www.linkedin.com/in/francis-nwankwo-661595218",
                        "https://x.com/francis65176212",
                        "https://www.instagram.com/francis_officiallll"
                    ],
                    "founder": {
                        "@type": "Person",
                        "name": "Francis Nwankwo"
                    }
                }
            ]
        }
    </script>

</head>

<body>
    <?php
    include('inc/header.php');
    ?>

    <!-- === TechByFrancis Vertical Watermark Loop ========================= -->
    <div class="tbf-watermark">
        <div class="tbf-track">
            <span>TechByFrancis</span>
            <span>TechByFrancis</span>
            <span>TechByFrancis</span>
            <span>TechByFrancis</span>
            <span>TechByFrancis</span>
            <span>TechByFrancis</span>
            <span>TechByFrancis</span>
            <span>TechByFrancis</span>
            <span>TechByFrancis</span>
            <span>TechByFrancis</span>
        </div>
    </div>

    <!-- Intro Modal -->
    <div class="modal fade" id="welcomeModal" tabindex="-1" aria-labelledby="welcomeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content border-0 rounded-4 shadow-lg">
                <div class="row g-0 flex-column flex-md-row">

                    <!-- Text Section -->
                    <div class="col-12 col-md-12 p-4 text-center d-flex flex-column justify-content-center">
                        <h2 class="mb-3 text-primary fw-bold">Welcome to My Projects Showcase</h2>
                        <p class="lead">For confidentiality reasons, certain projects are not showcased here at the
                            request of clients who prefer their work to remain private.</p>

                        <div class="d-flex justify-content-center">
                            <button type="button" class="btn btn-primary mt-4 px-4 col-md-7" data-bs-dismiss="modal">
                                Continue
                            </button>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>


    <main>
        <h2>Projects</h2>
    </main>

    <?php
    include('inc/aside.php');
    ?>

    <article class="m-5">
        <div class="row animated-article" style="opacity: 0;">

            <!-- PROJECT 1 -->
            <article class="col-md-6 col-lg-4">
                <div class="rounded-4 overflow-hidden h-100">

                    <!-- CAROUSEL 1 -->
                    <div id="carousel1" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000" data-bs-pause="hover">

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="IMAGES/bbr-home.png" class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="images/bbr-admin.png" class="d-block w-100">
                            </div>
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#carousel1" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon bg-dark rounded-circle p-2"></span>
                        </button>

                        <button class="carousel-control-next" type="button" data-bs-target="#carousel1" data-bs-slide="next">
                            <span class="carousel-control-next-icon bg-dark rounded-circle p-2"></span>
                        </button>

                    </div>

                    <div class="card-body">
                        <h5 class="card-title">BBR DOLCE VITA</h5>

                        <p class="text-muted small">
                            Developed a fully responsive website for BBR Dolce Vita, a luxury 4-day wellness retreat on the Italian Riviera.
                            The platform features a seamless booking system for reservations, rooms, and activities, alongside a powerful admin dashboard for managing suites, bookings, and site content. Integrated automated email notifications to enhance user communication and streamline operations. This project demonstrates ability to deliver efficient, user-focused, full-stack web solutions.
                        </p>

                        <p>Tech Stack:
                            <span class="badge bg-danger fw-bold me-2">HTML5</span>
                            <span class="badge bg-danger fw-bold me-2">BOOTSTRAP</span>
                            <span class="badge bg-danger fw-bold me-2">JavaScript</span>
                            <span class="badge bg-danger fw-bold me-2">PHP</span>
                            <span class="badge bg-danger fw-bold me-2">LARAVEL</span>
                            <span class="badge bg-danger fw-bold me-2">MYSQL</span>
                            <span class="badge bg-danger fw-bold me-2">GIT</span>
                            <span class="badge bg-danger fw-bold me-2">GITHUB</span>
                        </p>

                        <br>
                        <a href="http://bbrdolcevita.net/" class="learn-more" target="_blank" rel="noopener">
                            View Live <img src="IMAGES/blue arrow.png" alt="arrow icon" style="height: 20px;" class="ps-2">
                        </a>
                    </div>

                </div>
            </article>
            <!-- FRANCIS BLOG -->
            <article class="col-12 col-md-6 col-lg-4 p-3">

                <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <!-- First Image -->
                        <div class="carousel-item active">
                            <img src="IMAGES/MyBlog _ Stories & Insights.png" class="d-block w-100" alt="First Image">
                        </div>
                        <!-- Second Image -->
                        <div class="carousel-item">
                            <img src="IMAGES/MyBlog _ Stories & Insights - Google Chrome 02_10_2025 00_47_39.png"
                                class="d-block w-100" alt="Second Image">
                        </div>
                    </div>

                    <!-- Controls -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <h4 class="pt-3">FRANCIS BLOG</h4>
                <p class="text-muted small">Francis Blog is a modern blogging platform built for sharing articles, tutorials, and stories with a
                    wide audience. It features a clean and responsive design, ensuring smooth browsing across all
                    devices. Readers can explore categories, view rich content with images, and engage through comments
                    and social sharing. Content is neatly organized with tags and categories for easy discovery.

                    Behind the scenes, the platform includes a secure Admin Dashboard for efficient management. Admins
                    can create, edit, and publish posts seamlessly while managing images and media uploads. The system
                    also allows moderation of comments to maintain quality discussions. Posts can be updated, scheduled,
                    or deleted directly from the dashboard. Built-in analytics provide insights into visitor activity
                    and content performance. Together, the blog and admin tools deliver a complete solution for content
                    creation, management, and audience engagement.
                </p>
                <p>Tech Stack:
                    <span class="badge bg-danger fw-bold me-2">HTML</span>
                    <span class="badge bg-danger fw-bold me-2">Tailwind CSS</span>
                    <span class="badge bg-danger fw-bold me-2">JavaScript</span>
                    <span class="badge bg-danger fw-bold me-2">Node.js</span>
                    <span class="badge bg-danger fw-bold me-2">Express.js</span>
                    <span class="badge bg-danger fw-bold">MongoDB</span>
                    <span class="badge bg-danger fw-bold me-2">GIT</span>
                    <span class="badge bg-danger fw-bold me-2">GITHUB</span>
                </p>
                <a href="https://francis-insights-blog.onrender.com/" class="learn-more">View Live<img
                        src="IMAGES/blue arrow.png" alt="arrow icon" style="height: 20px;" class="ps-2"></a>
            </article>

            <!-- GARESPLACE APP -->
            <article class="col-md-6 col-lg-4">
                <div class="rounded-4 overflow-hidden h-100">

                    <!-- CAROUSEL -->
                    <div id="carousel3" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000" data-bs-pause="hover">

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="IMAGES/New Project (3).png" class="d-block w-100" alt="Garesplace App">
                            </div>

                            <div class="carousel-item">
                                <img src="IMAGES/GARES SCREENSHOT.png" class="d-block w-100" alt="Garesplace Dashboard">
                            </div>
                        </div>

                        <!-- Controls -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#carousel3" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon bg-dark rounded-circle p-2"></span>
                        </button>

                        <button class="carousel-control-next" type="button" data-bs-target="#carousel3" data-bs-slide="next">
                            <span class="carousel-control-next-icon bg-dark rounded-circle p-2"></span>
                        </button>

                    </div>

                    <!-- CONTENT -->
                    <div class="card-body">
                        <h5 class="card-title">GARESPLACE APP</h5>

                        <p class="text-muted small">
                            GaresPlace is a mobile app designed to simplify hotel dining and delivery services. It connects the
                            frontend and backend through a dedicated PHP API for seamless interaction. Customers can browse menus,
                            view product details, and place orders for delivery to rooms, bars, or homes. A favorites feature allows
                            quick access to preferred items.

                            On the management side, the app includes a secure admin dashboard built with PHP and MySQL. Staff can
                            track orders, assign riders, and monitor activities with real-time analytics for better decision-making.
                        </p>

                        <p>
                            Tech Stack:
                            <span class="badge bg-danger fw-bold me-1">PHP</span>
                            <span class="badge bg-danger fw-bold me-1">LARAVEL</span>
                            <span class="badge bg-danger fw-bold me-1">MYSQL</span>
                            <span class="badge bg-danger fw-bold me-1">REST API</span>
                            <span class="badge bg-danger fw-bold me-1">GIT</span>
                            <span class="badge bg-danger fw-bold me-1">GITHUB</span>
                            <span class="badge bg-danger fw-bold me-1">POSTMAN</span>
                        </p>

                        <br>

                        <a href="https://play.google.com/store/apps/details?id=com.kitchen.glares_place"
                            class="learn-more" target="_blank" rel="noopener">
                            View & Download App
                            <img src="IMAGES/blue arrow.png" alt="arrow icon" style="height: 20px;" class="ps-2">
                        </a>
                    </div>

                </div>
            </article>

            <!-- Prestige Hygiene -->
            <article class="col-12 col-md-6 col-lg-4 p-3">
                <img src="IMAGES/Prestige Screenshot Capture.png" alt="Prestige Hygiene project preview"
                    class="img-fluid rounded">
                <h4 class="pt-3">PRESTIGE HYGIENE</h4>
                <p class="text-muted small">
                    PRESTIGE HYGIENE is a comprehensive full-stack web application developed for a professional cleaning
                    company. The platform allows users to book a wide range of cleaning services, explore informative
                    blog posts, and register as either clients or company staff. The admin panel provides robust
                    features for managing account holders, monitoring registered staff and clients, tracking service
                    orders, uploading blogs and services, backing up data, viewing clients reviews/feedbacks and more
                    offering complete control and oversight of business operations.
                </p>
                <p>Tech Stack:
                    <span class="badge bg-danger fw-bold me-2">HTML5</span>
                    <span class="badge bg-danger fw-bold me-2">BOOTSTRAP</span>
                    <span class="badge bg-danger fw-bold me-2">JavaScript</span>
                    <span class="badge bg-danger fw-bold me-2">PHP</span>
                    <span class="badge bg-danger fw-bold me-2">LARAVEL</span>
                    <span class="badge bg-danger fw-bold me-2">MYSQL</span>
                    <span class="badge bg-danger fw-bold me-2">GIT</span>
                    <span class="badge bg-danger fw-bold me-2">GITHUB</span>
                </p>
                <a href="https://techbyfrancis.com/prestige-hygiene/" class="learn-more" target="_blank" rel="noopener">
                    View Live <img src="IMAGES/blue arrow.png" alt="arrow icon" style="height: 20px;" class="ps-2">
                </a>
            </article>

            <!-- Haut Logistics -->
            <article class="col-12 col-md-6 col-lg-4 p-3">
                <img src="IMAGES/Haut Logistics _ Home - Google Chrome 18_05_2025 09_12_17.png"
                    alt="HAUT Logistics project preview" class="img-fluid rounded">
                <h4 class="pt-3">HAUT LOGISTICS</h4>
                <p class="text-muted small">
                    My logistics shipping platform makes order tracking simple and efficient.
                    Administrators can securely upload and manage shipments with auto-generated tracking numbers.
                    Customers receive real-time automatic email notifications with detailed tracking information.
                    Experience seamless logistics with complete visibility from dispatch to delivery.
                </p>
                <p>Tech Stack:
                    <span class="badge bg-danger fw-bold me-2">HTML5</span>
                    <span class="badge bg-danger fw-bold me-2">CSS3</span>
                    <span class="badge bg-danger fw-bold me-2">BOOTSTRAP</span>
                    <span class="badge bg-danger fw-bold me-2">JavaScript</span>
                    <span class="badge bg-danger fw-bold me-2">PHP</span>
                    <span class="badge bg-danger fw-bold me-2">LARAVEL</span>
                    <span class="badge bg-danger fw-bold me-2">MYSQL</span>
                    <span class="badge bg-danger fw-bold me-2">GIT</span>
                    <span class="badge bg-danger fw-bold me-2">GITHUB</span>
                </p>
                <a href="https://www.hautlogistics.com/" class="learn-more" target="_blank" rel="noopener">
                    View Live <img src="IMAGES/blue arrow.png" alt="arrow icon" style="height: 20px;" class="ps-2">
                </a>
            </article>

            <!-- Fijoran Travels -->
            <article class="col-12 col-md-6 col-lg-4 p-3">
                <img src="IMAGES/Fijoran Travels _ Trusted Tour & Travel Agency for Flights, Visas, Hotels & Tours - HOME - Google Chrome 18_05_2025 23_53_56.png"
                    alt="Fijoran Travels project preview" class="img-fluid rounded">
                <h4 class="pt-3">FIJORAN TRAVELS</h4>
                <p class="text-muted small">
                    Fijoran Travels is a comprehensive travel scheduling platform that helps users book international
                    travel,
                    visa applications (including student visas), apartments, flights, and guided tours. With a
                    user-friendly
                    interface and real-time updates, travelers can confidently plan every detail. Admins can manage
                    content
                    and publish blogs through a secure dashboard.
                </p>
                <p>Tech Stack:
                    <span class="badge bg-danger fw-bold me-2">HTML5</span>
                    <span class="badge bg-danger fw-bold me-2">CSS3</span>
                    <span class="badge bg-danger fw-bold me-2">BOOTSTRAP</span>
                    <span class="badge bg-danger fw-bold me-2">JavaScript</span>
                    <span class="badge bg-danger fw-bold me-2">PHP</span>
                    <span class="badge bg-danger fw-bold me-2">LARAVEL</span>
                    <span class="badge bg-danger fw-bold me-2">MYSQL</span>
                    <span class="badge bg-danger fw-bold me-2">GIT</span>
                    <span class="badge bg-danger fw-bold me-2">GITHUB</span>
                </p>
                <a href="https://fijorantravels.com/" class="learn-more" target="_blank" rel="noopener">
                    View Live <img src="IMAGES/blue arrow.png" alt="arrow icon" style="height: 20px;" class="ps-2">
                </a>
            </article>

            <!-- Venue T-Shirts -->
            <article class="col-12 col-md-6 col-lg-4 p-3">
                <img src="IMAGES/Venue _ Premium T-Shirts.png" alt="Venue e-commerce website screenshot"
                    class="img-fluid rounded">
                <h4 class="pt-3">VENUE | PREMIUM T-SHIRTS</h4>
                <p class="text-muted small">
                    A modern e-commerce platform offering premium unisex apparel with intuitive shopping experience and
                    secure Paystack integration. Features include dynamic product displays, multimedia content, and
                    streamlined checkout. The comprehensive admin dashboard enables full inventory, order, and customer
                    management. Designed for optimal performance with elegant aesthetics and powerful commerce
                    functionality.
                </p>
                <p>Tech Stack:
                    <span class="badge bg-danger fw-bold me-2">HTML5</span>
                    <span class="badge bg-danger fw-bold me-2">BOOTSTRAP</span>
                    <span class="badge bg-danger fw-bold me-2">JavaScript</span>
                    <span class="badge bg-danger fw-bold me-2">PHP</span>
                    <span class="badge bg-danger fw-bold me-2">LARAVEL</span>
                    <span class="badge bg-danger fw-bold me-2">MYSQL</span>
                    <span class="badge bg-danger fw-bold me-2">GIT</span>
                    <span class="badge bg-danger fw-bold me-2">GITHUB</span>
                </p>
                <a href="https://techbyfrancis.com/venue-clothing/" class="learn-more">
                    View Live <img src="IMAGES/blue arrow.png" alt="arrow icon" style="height: 20px;" class="ps-2">
                </a>
            </article>

            <!-- Garesplace Hotel -->
            <article class="col-12 col-md-6 col-lg-4 p-3">
                <img src="IMAGES/garesplace screenshot.png" alt="Garesplace Hotel booking platform"
                    class="img-fluid rounded">
                <h4 class="pt-3">GARESPLACE HOTEL</h4>
                <p class="text-muted small">
                    Garesplace Hotel is a responsive booking platform enabling guests to explore rooms, view amenities,
                    and make reservations seamlessly. The intuitive interface provides detailed pricing and availability
                    for all accommodations. Administrators benefit from a secure dashboard to manage bookings, process
                    updates, and track reservations efficiently. Designed for optimal user experience and streamlined
                    hotel operations.
                </p>
                <p>Tech Stack:
                    <span class="badge bg-danger fw-bold me-2">HTML5</span>
                    <span class="badge bg-danger fw-bold me-2">CSS3</span>
                    <span class="badge bg-danger fw-bold me-2">BOOTSTRAP</span>
                    <span class="badge bg-danger fw-bold me-2">JavaScript</span>
                    <span class="badge bg-danger fw-bold me-2">PHP</span>
                    <span class="badge bg-danger fw-bold me-2">LARAVEL</span>
                    <span class="badge bg-danger fw-bold me-2">MYSQL</span>
                    <span class="badge bg-danger fw-bold me-2">GIT</span>
                    <span class="badge bg-danger fw-bold me-2">GITHUB</span>
                </p>
                <a href="https://techbyfrancis.com/garesplace-hotel/" class="learn-more">
                    View Live <img src="IMAGES/blue arrow.png" alt="arrow icon" style="height: 20px;" class="ps-2">
                </a>
            </article>

            <!-- Weatherytics -->
            <article class="col-12 col-md-6 col-lg-4 p-3">
                <img src="IMAGES/weatherytics.png" alt="Weatherytics weather tracker screenshot"
                    class="img-fluid rounded">
                <h4 class="pt-3">WEATHERYTICS</h4>
                <p class="text-muted small">
                    Weatherytics is a responsive and interactive weather web application that allows users to retrieve
                    real-time weather information for any city or state around the world. Built with HTML, CSS, and
                    JavaScript, the application integrates the OpenWeather API to provide accurate, location-based
                    weather data in a user-friendly interface.
                </p>
                <p>Tech Stack:
                    <span class="badge bg-danger fw-bold me-2">HTML5</span>
                    <span class="badge bg-danger fw-bold me-2">CSS3</span>
                    <span class="badge bg-danger fw-bold me-2">JavaScript</span>
                </p>
                <a href="https://my-simple-calculator-seven.vercel.app/" class="learn-more" target="_blank"
                    rel="noopener">
                    View Live <img src="IMAGES/blue arrow.png" alt="arrow icon" style="height: 20px;" class="ps-2">
                </a>
            </article>

            <!-- Expense Tracker -->
            <article class="col-12 col-md-6 col-lg-4 p-3">
                <img src="IMAGES/Expense-tracker.png" alt="Expense tracker application screenshot"
                    class="img-fluid rounded">
                <h4 class="pt-3">EXPENSE TRACKER</h4>
                <p class="text-muted small">
                    I developed this responsive, user-friendly Expense Tracker to simplify financial management.
                    It enables users to log income and expenses with ease.
                    Transactions can be categorized for better clarity and organization.
                    Users can monitor their financial activity in real time.
                    Ideal for managing both personal and business finances effectively.
                </p>
                <p>Tech Stack:
                    <span class="badge bg-danger fw-bold me-2">HTML5</span>
                    <span class="badge bg-danger fw-bold me-2">CSS3</span>
                    <span class="badge bg-danger fw-bold me-2">JavaScript</span>
                </p>
                <a href="https://my-expense-tracker-xi.vercel.app/" class="learn-more" target="_blank" rel="noopener">
                    View Live <img src="IMAGES/blue arrow.png" alt="arrow icon" style="height: 20px;" class="ps-2">
                </a>
            </article>

            <!-- Basic Calculator -->
            <article class="col-12 col-md-6 col-lg-4 p-3">
                <img src="IMAGES/Basic calculator image.png" alt="Basic calculator web app" class="img-fluid rounded">
                <h4 class="pt-3">BASIC CALCULATOR</h4>
                <p class="text-muted small">
                    This is a fully functional and responsive calculator web application.
                    It features both dark and light mode for improved user experience.
                    Users can perform all basic arithmetic operations with ease.
                    The interface is clean, intuitive, and optimized for all devices.
                    Calculations are handled with precision and instant feedback.
                    Designed for speed, accuracy, and usability in everyday tasks.
                </p>
                <p>Tech Stack:
                    <span class="badge bg-danger fw-bold me-2">HTML5</span>
                    <span class="badge bg-danger fw-bold me-2">CSS3</span>
                    <span class="badge bg-danger fw-bold me-2">JavaScript</span>
                </p>
                <a href="https://my-simple-calculator-seven.vercel.app/" class="learn-more" target="_blank"
                    rel="noopener">
                    View Live <img src="IMAGES/blue arrow.png" alt="arrow icon" style="height: 20px;" class="ps-2">
                </a>
            </article>

        </div>

        <div class="position-relative text-end art-three-dots">
            <img src="IMAGES/blue-dots.png" alt="Decorative blue dots">
        </div>
    </article>

    <!-- Back to Top Button -->
    <button id="backToTop" type="button" aria-label="Back to top" title="Back to top">
        <i class="fas fa-arrow-up"></i>
    </button>


    <?php
    include('inc/footer.php');
    ?>

    <!-- Particle JS -->
    <script src="https://cdn.jsdelivr.net/npm/tsparticles@2/tsparticles.bundle.min.js"></script>
    <script>
        tsParticles.load("particles-bg", {
            fpsLimit: 60,
            background: {
                color: "transparent"
            },
            particles: {
                number: {
                    value: 60,
                    density: {
                        enable: true,
                        area: 800
                    }
                },
                color: {
                    value: "#0a6efd"
                },
                shape: {
                    type: "circle"
                },
                opacity: {
                    value: 0.3,
                    random: true
                },
                size: {
                    value: {
                        min: 2,
                        max: 6
                    },
                    random: true
                },
                move: {
                    enable: true,
                    speed: 1.5,
                    direction: "none",
                    outModes: "out"
                },
                links: {
                    enable: true,
                    distance: 120,
                    color: "#0a6efd",
                    opacity: 0.2,
                    width: 1
                }
            },
            interactivity: {
                events: {
                    onHover: {
                        enable: true,
                        mode: "repulse"
                    },
                    onClick: {
                        enable: true,
                        mode: "push"
                    }
                },
                modes: {
                    repulse: {
                        distance: 120
                    },
                    push: {
                        quantity: 4
                    }
                }
            },
            detectRetina: true
        });
    </script>

    <script src="BOOTSTRAP/js/bootstrap.min.js"></script>
    <script src="JS/project.js"></script>
</body>

</html>
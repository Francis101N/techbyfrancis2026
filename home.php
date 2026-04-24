<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <!-- Favicon link -->
    <link rel="icon" type="image/png" sizes="32x32" href="IMAGES/icon.png">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="BOOTSTRAP/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/home.css">
    <script src="https://kit.fontawesome.com/0ed688cb3d.js" crossorigin="anonymous"></script>
</head>
<style>
    .hero-section {
        min-height: 100vh;
        display: flex;
        align-items: center;
        width: 100%;
    }

    /* Section Styling */
    .philosophy-section {
        padding: 100px 8%;

        color: #ffffff;
    }

    .philosophy-container {
        max-width: 1200px;
        margin: auto;
    }

    .philosophy-title {
        text-align: center;
        font-size: 36px;
        font-weight: 700;
        margin-bottom: 70px;
        letter-spacing: 1px;
    }

    /* Wrapper */
    .philosophy-wrapper {
        display: flex;
        gap: 40px;
        justify-content: center;
        flex-wrap: wrap;
    }

    /* Quote Cards */
    .quote-card {
        background: #1e293b;
        padding: 50px 40px;
        border-radius: 20px;
        width: 480px;
        position: relative;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
        transition: transform 0.4s ease, box-shadow 0.4s ease;
    }

    .quote-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 25px 50px rgba(0, 0, 0, 0.5);
    }

    /* Quote Text */
    .quote-text {
        font-size: 20px;
        line-height: 1.8;
        color: #e2e8f0;
        margin-bottom: 40px;
    }

    /* Author */
    .quote-author {
        position: absolute;
        bottom: 25px;
        right: 30px;
        font-size: 14px;
        font-weight: 600;
        letter-spacing: 1px;
        text-transform: uppercase;
        color: #38bdf8;
    }

    /* Responsive */
    @media (max-width: 992px) {
        .philosophy-wrapper {
            flex-direction: column;
            align-items: center;
        }

        .quote-card {
            width: 100%;
            max-width: 500px;
        }
    }
</style>

<body id="body">


    <!-- Intro Modal -->
    <div class="modal fade" id="welcomeModal" tabindex="-1" aria-labelledby="welcomeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content border-0 rounded-4 shadow-lg">
                <div class="row g-0 flex-column flex-md-row">

                    <!-- Image Section -->
                    <div class="col-12 col-md-5 d-flex justify-content-center align-items-center">
                        <img src="IMAGES/mylogo2.png" alt="Welcome Image" class="img-fluid rounded object-fit-contain"
                            style="max-width: 50%; max-height: 200px;" />
                    </div>


                    <!-- Text Section -->
                    <div class="col-12 col-md-7 p-4 text-center d-flex flex-column justify-content-center">
                        <h2 class="mb-3 text-primary fw-bold">Welcome To My Portfolio </h2>
                        <p class="lead">This website is live and continually improving for better performance and
                            experience.✅</p>
                        <button type="button" class="btn btn-primary mt-4 px-4" data-bs-dismiss="modal">
                            Enter Site
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>

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

    <main class="container hero-section">
        <div class="row">
            <!-- Left Column: Introduction Text -->
            <div class="col-12 col-lg-6 col-md-6 left">
                <h1>Hi, I’m Francis Nwankwo — a <span class="ani">Technologist</span> specializing in <span class="ani">IT Project Management</span>, <span class="ani">Full-Stack Development</span>, and <span class="ani">Cybersecurity (Penetration Testing)</span>.</h1>
                <br>

                <p>
                    I plan and deliver high-impact digital solutions, from intuitive design to scalable, responsive applications,
                    while ensuring the security and integrity of every system.
                </p>

                <br>

                <div>
                    <span class="me-3 Expertise">
                        <a href="expertise" class="p-2 link-light text-decoration-none" style="box-shadow:0 0 20px #007BFF;">
                            Explore Expertise
                        </a>
                    </span>

                    <span>
                        <b><a href="contact" class="second">Let’s work together</a></b>
                        <img src="IMAGES/blue arrow.png" alt="arrow-up" class="ps-2">
                    </span>
                </div>
            </div>

            <!-- Right Column: Image -->
            <div class="col-12 col-lg-6 col-md-6 right">
                <img src="IMAGES/Studio-Selfie.png" alt="Francis_Photo">
            </div>
        </div>

    </main>
    <?php
    include('inc/aside.php');
    ?>

    <article class="art my-5">
        <div class="row justify-content-center text-center">
            <div class="col-12 col-sm-6 col-md-4 mb-4">
                <div class="stat-box">
                    <span>5+</span>
                    <p><b>Solo-Completed Projects</b></p>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 mb-4">
                <div class="stat-box">
                    <span>20+</span>
                    <p><b>Team-Assisted Projects</b></p>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 mb-4">
                <div class="stat-box">
                    <span>3</span>
                    <p><b>Ongoing Projects</b></p>
                </div>
            </div>
        </div>
    </article>

    <section class="section-one">
        <img src="IMAGES/blue-dots.png" alt="" class="leftdots">
        <div class="row">
            <div class="col-12 col-lg-5 col-md-6 secleft">
                <h2>What i Do</h2>
                <p>I specialize in architecting and delivering end-to-end digital and technical solutions across diverse domains of IT and software development, blending innovation, precision, and scalability to build impactful systems while ensuring robust security and data confidentiality.
                </p><br>
                <p><a href="contact" class="p-2 link-light text-decoration-none bg-primary"
                        style="box-shadow:0 0 20px #007BFF ;">Book Free Consultation</a></p>
            </div>

            <div class="col-12 col-lg-7 col-md-6 skills secright">
                <div>
                    <p>
                        <i class="fa-brands fa-html5 pe-2 fs-3" style="color: #1a4a78;"></i>
                        <i class="fa-brands fa-css3-alt pe-2 fs-3" style="color: #1a4a78;"></i>
                        <i class="fa-brands fa-bootstrap pe-2 fs-3" style="color: #1a4a78;"></i>
                        <i class="fa-brands fa-js pe-2 fs-3" style="color: #1a4a78;"></i>
                        <i class="fa-brands fa-react pe-2 fs-3" style="color: #1a4a78;"></i>
                        <i class="fa-brands fa-php pe-2 fs-3" style="color: #1a4a78;"></i>
                        <i class="fa-brands fa-laravel pe-2 fs-3" style="color: #1a4a78;"></i>
                        <i class="fa-solid fa-database pe-2 fs-3" style="color: #1a4a78;"></i>
                        <i class="fa-brands fa-node-js pe-2 fs-3" style="color: #1a4a78;"></i>
                        <i class="fa-brands fa-envira pe-2 fs-3" style="color: #1a4a78;"></i>
                    </p>
                    <p><b>Full-Stack Development</b></p>
                    <p>I design and develop full-stack applications/softwares, delivering responsive, scalable, and high-performance digital experiences through clean UI, efficient architecture, and robust backend systems.</p>
                </div>
                <div class="top">
                    <p>
                        <i class="fa-solid fa-magnifying-glass pe-2 fs-3" style="color: #1a4a78;"></i>
                        <i class="fa-solid fa-chart-line pe-2 fs-3" style="color: #1a4a78;"></i>
                        <i class="fa-solid fa-globe pe-2 fs-3" style="color: #1a4a78;"></i>
                        <i class="fa-solid fa-keyboard pe-2 fs-3" style="color: #1a4a78;"></i>
                        <i class="fa-solid fa-ranking-star pe-2 fs-3" style="color: #1a4a78;"></i>
                    </p><br>

                    <p>
                        <b>Search Engine Optimization (SEO)</b>
                        <small class="text-danger">
                            (On-page SEO, Technical SEO & Keyword Optimization)
                        </small>
                    </p>

                    <p>
                        I optimize websites to improve visibility on search engines, enhance organic traffic, and boost rankings through
                        structured content, technical improvements, and performance-driven SEO strategies.
                    </p>
                </div>
                <div>
                    <p><i class="fa-solid fa-list-check fs-3" style="color: #1a4a78;"></i></p>
                    <p><b>IT Project Management</b></p>
                    <p>I lead projects through the full lifecycle from initiation and planning to execution and delivery guided by strategic insight, effective communication, and a strong focus on timely, results-driven outcomes.</p>
                </div>
                <div class="top">
                    <p>
                        <i class="fa-solid fa-shield-halved fs-3 pe-2" style="color: #1a4a78;"></i>
                        <i class="fa-solid fa-user-shield fs-3 pe-2" style="color: #1a4a78;"></i>
                        <i class="fa-solid fa-bug-slash fs-3" style="color: #1a4a78;"></i>
                    </p>

                    <p><b>Cyber Security (Penetration Testing)</b></p>

                    <p>
                        Securing web applications through proactive defense strategies, vulnerability assessment, and penetration testing.
                        I focus on identifying threats early, strengthening system security, and ensuring confidentiality, integrity,
                        and availability across all digital systems.
                    </p>
                </div>
            </div>
            <p class="text-center mt-5"><a href="expertise" class="p-2 link-light text-decoration-none bg-primary"
                    style="box-shadow:0 0 20px #007BFF ; border-radius: 6px;">Explore Full Expertise</a></p>
        </div>

        <img src="IMAGES/blue-dots.png" alt="" class="rightdots">

    </section>

    <section class="section-two d-flex justify-content-center align-items-center">
        <div class="container row w-100 text-md-start px-4">

            <!-- Image Column -->
            <div class="col-12 col-md-6 mb-4 mb-md-0 d-flex justify-content-center sec-two-left"
                style="overflow-y:hidden; overflow-x:hidden;">
                <img src="IMAGES/francis-studio 2.png" alt="" class="img-fluid">
            </div>

            <!-- Text Column -->
            <div class="col-12 col-md-6 d-flex flex-column justify-content-center pe-4">
                <h1>Who’s Francis! Nwankwo?</h1>
                <p><i>A problem-solver at heart, fueled by a passion for delivering impactful tech solutions.</i></p>
                <p>I’m a dynamic tech professional with a strong passion for IT. With solid experience across Full-stack
                    development, project management, Cyber security and so on. I combine technical proficiency with
                    a client-centered approach. With my skills and knowledge, I focus on strategically planning and
                    executing projects, from crafting visually appealing designs to developing highly functional,
                    responsive websites. I am also committed to ensuring the security and confidentiality of all data,
                    bringing clarity, precision, and dedication to every project.

                </p>
                <p>
                    <a href="contact" class="p-2 link-light text-decoration-none bg-primary d-inline-block w-auto mt-3"
                        style="box-shadow:0 0 20px #007BFF ;">Book
                        Free Consultation</a>
                </p><br>
            </div>

        </div>
    </section>

    <article class="article-two">
        <!-- Text Section -->
        <div class="first-cont">
            <img src="IMAGES//blue-dots.png" alt="">
            <div class="what-people-say">
                <h2>TESTIMONIALS</h2>
                <p class="p-1">What Clients and Collaborators Are Saying.</p>
                <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
                    <div class="carousel-inner">

                        <div class="carousel-item active">
                            <div id="comment">
                                <p>“From start to finish, the project was handled with exceptional professionalism.
                                    Francis brought our vision to life with a secure and responsive website that
                                    exceeded expectations.”</p>
                                <p><b>Angela N.</b> <span class="ps-2">Fijoran Travels</span></p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div id="comment">
                                <p>“Working with Francis was a game-changer. The design was not only visually appealing
                                    but also incredibly user-friendly. Our clients noticed the difference immediately.”
                                </p>
                                <p><b>David T.</b> <span class="ps-2">Marketing Director</span></p>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div id="comment">
                                <p>“I was impressed by the strategic approach to planning and development. Every element
                                    felt intentional, and the final site functions perfectly on all devices.”</p>
                                <p><b>Grace M.</b> <span class="ps-2">Creative Agency Lead</span></p>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div id="comment">
                                <p>“They don’t just build websites—they create experiences. The attention to detail in
                                    both design and data security was outstanding.”</p>
                                <p><b>Samuel O.</b> <span class="ps-2">Tech Startup Co-founder</span></p>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div id="comment">
                                <p>“The project execution was seamless. Communication was clear, deadlines were met, and
                                    the end product was a polished, secure website that reflected our brand perfectly.”
                                </p>
                                <p><b>Linda E.</b> <span class="ps-2">Nonprofit Executive Director</span></p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div id="comment">
                                <p>“Our site now runs faster, looks better, and has a professional structure we lacked
                                    before. The strategic planning made all the difference.”</p>
                                <p><b>Chukwuemeka A.</b> <span class="ps-2">Ecommerce Entrepreneur</span></p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div id="comment">
                                <p>“Francis delivered a high-performing website that looks amazing and keeps our data
                                    safe. I truly appreciated the transparency and technical expertise.”</p>
                                <p><b>Fatima K.</b> <span class="ps-2">Healthcare Consultant</span></p>
                            </div>
                        </div>
                    </div>

                    <!-- Carousel Controls -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden text">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

            </div>
        </div>

        <!-- Image Section -->
        <div class="second-cont" style="overflow-y:hidden; overflow-x:hidden;">
            <img src="IMAGES/techbyfrancis linkedin.jpg" alt="" class="img-fluid p-4">
        </div>

    </article>

    <article class="article-three py-5">
        <h1 class="text-center mb-5">PROJECTS</h1>

        <div class="container">
            <div class="row g-4 justify-content-center">

                <!-- PROJECT 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card shadow rounded-4 overflow-hidden h-100">

                        <!-- CAROUSEL 1 -->
                        <div id="carousel1" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000" data-bs-pause="hover">

                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="IMAGES/bbr-home.png" class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="IMAGES/bbr-admin.png" class="d-block w-100">
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
                </div>

                <!-- PROJECT 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card shadow rounded-4 overflow-hidden h-100">

                        <!-- CAROUSEL 2 -->
                        <div id="carousel2" class="carousel slide" data-bs-ride="carousel">

                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="IMAGES/MyBlog _ Stories & Insights.png" class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="IMAGES/MyBlog _ Stories & Insights - Google Chrome 02_10_2025 00_47_39.png" class="d-block w-100">
                                </div>
                            </div>

                            <button class="carousel-control-prev" type="button" data-bs-target="#carousel2" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </button>

                            <button class="carousel-control-next" type="button" data-bs-target="#carousel2" data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </button>

                        </div>

                        <div class="card-body">
                            <h5 class="card-title pt-3">FRANCIS BLOG</h5>

                            <p class="text-muted small">
                                Francis Blog is a modern blogging platform built for sharing articles, tutorials, and stories with a wide audience. It features a clean and responsive design, ensuring smooth browsing across all devices. Readers can explore categories, view rich content with images, and engage through comments and social sharing. Content is neatly organized with tags and categories for easy discovery.

                                Behind the scenes, the platform includes a secure Admin Dashboard for efficient management. Admins can create, edit, and publish posts seamlessly while managing images and media uploads. The system also allows moderation of comments to maintain quality discussions. Posts can be updated, scheduled, or deleted directly from the dashboard. Built-in analytics provide insights into visitor activity and content performance.
                            </p>

                            <p class="mt-3">
                                Tech Stack:
                                <span class="badge bg-danger me-1">HTML</span>
                                <span class="badge bg-danger me-1">Tailwind CSS</span>
                                <span class="badge bg-danger me-1">JavaScript</span>
                                <span class="badge bg-danger me-1">Node.js</span>
                                <span class="badge bg-danger me-1">Express.js</span>
                                <span class="badge bg-danger me-1">MongoDB</span>
                                <span class="badge bg-danger me-1">GIT</span>
                                <span class="badge bg-danger me-1">GITHUB</span>
                            </p>

                            <br>
                            <a href="https://francis-insights-blog.onrender.com/" class="learn-more" target="_blank" rel="noopener">
                                View Live <img src="IMAGES/blue arrow.png" alt="arrow icon" style="height: 20px;" class="ps-2">
                            </a>
                        </div>

                    </div>
                </div>

                <!-- PROJECT 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card shadow rounded-4 overflow-hidden h-100">

                        <!-- CAROUSEL 3 -->
                        <div id="carousel3" class="carousel slide" data-bs-ride="carousel">

                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="IMAGES/New Project (3).png" class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="IMAGES/GARES SCREENSHOT.png" class="d-block w-100">
                                </div>
                            </div>

                            <button class="carousel-control-prev" type="button" data-bs-target="#carousel3" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </button>

                            <button class="carousel-control-next" type="button" data-bs-target="#carousel3" data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </button>

                        </div>

                        <div class="card-body">
                            <h5 class="card-title pt-2">GARESPLACE APP</h5>

                            <p class="text-muted small">
                                GaresPlace is a mobile app designed to simplify hotel dining and delivery services. It connects the frontend and backend through a dedicated PHP API for seamless interaction. Customers can browse menus of food, drinks, and desserts, view product details with pricing and images, and place orders for delivery to their rooms, the bar, or their homes. A favorites feature lets users save preferred items for quick access.

                                On the management side, GaresPlace includes a secure admin dashboard built with PHP and MySQL. Hotel staff can track pending and delivered orders, assign riders, and monitor customer activities. The dashboard provides real-time analytics on active, completed, and unique orders.
                            </p>

                            <p class="mt-3">
                                Tech Stack:
                                <span class="badge bg-danger me-1">PHP</span>
                                <span class="badge bg-danger me-1">LARAVEL</span>
                                <span class="badge bg-danger me-1">MYSQL</span>
                                <span class="badge bg-danger me-1">REST API</span>
                                <span class="badge bg-danger me-1">GIT</span>
                                <span class="badge bg-danger me-1">GITHUB</span>
                                <span class="badge bg-danger me-1">POSTMAN</span>
                            </p>

                            <br>
                            <a href="https://play.google.com/store/apps/details?id=com.kitchen.glares_place" class="learn-more" target="_blank" rel="noopener">
                                View Live <img src="IMAGES/blue arrow.png" alt="arrow icon" style="height: 20px;" class="ps-2">
                            </a>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <p class="text-center pt-5">
            <a href="projects" class="p-2 link-light text-decoration-none bg-primary d-inline-block w-auto mt-3"
                style="box-shadow:0 0 20px #007BFF ;">Explore More</a>
        </p>

    </article>

    <section class="philosophy-section">
        <div class="philosophy-container">

            <h2 class="philosophy-title">Vision & Approach</h2>

            <div class="philosophy-wrapper">

                <!-- Left Quote Card -->
                <div class="quote-card">
                    <p class="quote-text">
                        “Technology is not just about writing code
                        it’s about solving real problems with clarity,
                        logic, and purpose.”
                    </p>
                    <span class="quote-author">~ techbyfrancis</span>
                </div>

                <!-- Right Quote Card -->
                <div class="quote-card">
                    <p class="quote-text">
                        “Every project I build is driven by structure,
                        security, and scalability because great software
                        is built to last.”
                    </p>
                    <span class="quote-author">~ techbyfrancis</span>
                </div>

            </div>

        </div>
    </section>


    <section class="section-three">
        <div class="row">
            <div class="col-12 col-lg-6 col-md-6 secthree-left">
                <h1>Let’s Work Together</h1>
                <p class="pb-4"> Whether you have a project in mind or need an extra hand on your team, I’m always
                    open to engaging conversations and exciting collaborations.</p>
                <div class="d-flex">
                    <p><img src="IMAGES/Envelope.png" alt=""></p>
                    <p class="ps-4"><span style="color: #bfbeb9;">CHAT WITH ME</span><br><span
                            class="info">Francisnwankwo37@gmail.com</span></p>
                </div>
                <div class="d-flex">
                    <p><img src="IMAGES/PhoneCall.png" alt=""></p>
                    <p class="ps-4"><span style="color: #bfbeb9;">CALL ME</span><br><span
                            class="info">+2348069815240</span> <span class="info">+2347010010811</span></p>
                </div>
            </div>
            <form action="proc_appointment" method="post" class="col-12 col-lg-6 col-md-6 secthree-right">
                <h3>Book Appointment With Me.</h3>
                <p style="color: #424e60;">Got a project, idea, or just want to say hi? I’d love to hear from you.</p>
                <br>
                <div class="form-flex">
                    <input type="text" name="full_name" id="fullname" placeholder="Full Name">

                    <select name="subject" id="subject" onchange="toggleOtherInput(this)">
                        <option value="">-- Select Subject --</option>
                        <option value="Web Development">Web Development</option>
                        <option value="Mobile App Development">Mobile App Development</option>
                        <option value="UI/UX Design">UI/UX Design</option>
                        <option value="Tech Consultation">Tech Consultation</option>
                        <option value="Cybersecurity Audit">Cybersecurity Audit</option>
                        <option value="Bug Fixing / Debugging">Bug Fixing / Debugging</option>
                        <option value="Project Collaboration">Project Collaboration</option>
                        <option value="Mentorship / Training">Mentorship / Training</option>
                        <option value="System Integration">System Integration</option>
                        <option value="Custom Software Development">Custom Software Development</option>
                        <option value="Other">Other</option>
                    </select>

                    <input type="text" name="subject_other" id="subject_other" placeholder="Please specify"
                        style="display: none;" />
                </div>

                <div class="form-flex">
                    <input type="email" name="email_address" id="email" placeholder="Email Address">
                    <input type="text" name="number" id="number" placeholder="Number">
                </div>

                <div class="form-flex">
                    <input type="date" name="date" id="date" placeholder="Date">
                    <input type="time" name="time" id="time" placeholder="Time">
                </div>

                <textarea name="message" id="message" placeholder="Message"></textarea><br><br>

                <div class="d-grid gap-2 col-12 col-sm-8 col-md-6 mx-auto my-3">
                    <button type="submit" class="btn btn-primary shadow" id="submit"
                        style="box-shadow: 0 0 20px #007BFF;">
                        Book Appointment
                    </button>
                </div>
            </form>

        </div>
    </section>

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

    <script src="JS/home.js"></script>
    <script src="BOOTSTRAP/js/bootstrap.min.js"></script>

</body>

</html>
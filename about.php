<?php
ini_set('display_errors', 0);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Character Encoding -->
    <meta charset="UTF-8">

    <!-- Responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Primary SEO -->
    <title>About Francis Nwankwo | Founder of TechByFrancis</title>

    <meta name="description"
        content="Learn more about Francis Nwankwo, the founder of TechByFrancis. A Full-Stack Developer, Cybersecurity Professional, and IT Project Manager dedicated to building secure, scalable, and innovative digital solutions for businesses worldwide.">

    <meta name="author" content="Francis Nwankwo">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#2563EB">

    <!-- Canonical -->
    <link rel="canonical" href="https://techbyfrancis.com/about">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:title"
        content="About Francis Nwankwo | Founder of TechByFrancis">
    <meta property="og:description"
        content="Meet Francis Nwankwo, a Full-Stack Developer, Cybersecurity Professional, and IT Project Manager helping businesses build secure digital solutions.">
    <meta property="og:image"
        content="https://techbyfrancis.com/IMAGES/og-image.jpg">
    <meta property="og:url"
        content="https://techbyfrancis.com/about">
    <meta property="og:site_name"
        content="TechByFrancis">

    <!-- Twitter -->
    <meta name="twitter:card"
        content="summary_large_image">
    <meta name="twitter:title"
        content="About Francis Nwankwo | TechByFrancis">
    <meta name="twitter:description"
        content="Full-Stack Developer • Cybersecurity Professional • IT Project Manager">
    <meta name="twitter:image"
        content="https://techbyfrancis.com/IMAGES/og-image.jpg">

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="IMAGES/icon.png">
    <link rel="apple-touch-icon" href="IMAGES/icon.png">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Space+Grotesk:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="BOOTSTRAP/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="CSS/about.css">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/0ed688cb3d.js" crossorigin="anonymous"></script>

</head>
<style>
    .about {
        z-index: 0;
    }

    /* About Section */
    .about-section {
        padding: 100px 8%;
        background: #f8fafc;
    }

    .about-container {
        max-width: 1200px;
        margin: auto;
    }

    .about-title {
        text-align: center;
        font-size: 36px;
        font-weight: 700;
        margin-bottom: 60px;
        color: #0f172a;
    }

    .about-content {
        display: flex;
        align-items: center;
        gap: 60px;
    }

    /* Image Styling */
    .about-image {
        flex: 1;
    }

    .about-image img {
        width: 100%;
        max-width: 450px;
        border-radius: 20px;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
        transition: transform 0.4s ease;
    }

    .about-image img:hover {
        transform: translateY(-8px);
    }

    /* Text Styling */
    .about-text {
        flex: 1.2;
    }

    .about-text p {
        font-size: 18px;
        line-height: 1.8;
        color: #334155;
        margin-bottom: 20px;
    }

    /* Responsive */
    @media (max-width: 992px) {
        .about-content {
            flex-direction: column;
            text-align: center;
        }

        .about-image img {
            max-width: 100%;
        }
    }
</style>

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


    <main>
        <h2>About TechByFrancis</h2>
    </main>

    <?php
    include('inc/aside.php');
    ?>


    <section class="about">
        <img src="IMAGES/blue-dots.png" alt="" class="dots">
        <section class="about-section">
            <div class="about-container">

                <h2 class="about-title">About Me</h2>

                <div class="about-content">

                    <!-- Left Image -->
                    <div class="about-image">
                        <img src="IMAGES/francis-left.jpeg"
                            alt="Francis Nwankwo - Software Developer and Founder of TechByFrancis">
                    </div>

                    <!-- Right Text -->
                    <div class="about-text">

                        <p>
                            Hi, I’m <strong>Francis Nwankwo</strong>, a Technologist and the founder of
                            <strong>TechByFrancis</strong>, a software studio focused on building secure,
                            scalable, and high-performance digital solutions.
                        </p>

                        <p>
                            I specialize in full-stack web development, IT project management, and cybersecurity.
                            My work focuses on designing and developing reliable systems that help businesses
                            operate more efficiently, improve user experience, and maintain strong data security.
                        </p>

                        <p>
                            Over the years, I have worked on building responsive web applications, managing
                            technical projects from concept to deployment, and implementing security-focused
                            solutions that protect applications and data from vulnerabilities.
                        </p>

                        <p>
                            At TechByFrancis, the goal is simple to combine clean engineering with practical
                            business thinking to deliver software that actually solves real-world problems.
                        </p>

                    </div>

                </div>
            </div>
        </section>

        <div class="journey container my-5">

            <h2 class="text-center mb-5">My Journey</h2>

            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8">

                    <!-- 2026 -->
                    <div class="steps mb-4">

                        <p><span class="year">2026</span></p>

                        <div class="text">

                            <h5>Full-Stack Web Developer & Digital Solutions Engineer</h5>

                            <h6>Equal Logistics Limited (Managing Multiple Group Companies) – Lekki, Lagos State</h6>

                            <p>
                                Lead the design, development, maintenance, and optimization of enterprise web applications and digital platforms
                                across the Equal Logistics Group, including <strong>ViscoSupport</strong>,
                                <strong>Upstream Development Company</strong>, and other affiliated businesses.
                                Responsible for full-stack web development, database design, cybersecurity implementation,
                                SEO optimization, website performance, cloud deployment, content management,
                                and ongoing technical support. Collaborate with management to deliver scalable digital
                                solutions that enhance operational efficiency, strengthen brand visibility, and support
                                business growth across multiple organizations.
                            </p>

                        </div>

                    </div>

                    <!-- 2025 -->
                    <div class="steps mb-4">
                        <p><span class="year">2025</span></p>
                        <div class="text">
                            <h5>Software Engineering Internship</h5>
                            <h6>Aledoy Solutions, Lagos State</h6>
                            <p>
                                Gained hands-on experience in backend development using Node.js, Express.js, and MongoDB.
                                Worked on real-world systems and participated in security testing exercises to identify and
                                fix application vulnerabilities.
                            </p>
                        </div>
                    </div>

                    <!-- 2024 NYSC -->
                    <div class="steps mb-4">
                        <p><span class="year">2024</span></p>
                        <div class="text">
                            <h5>NYSC Software Developer</h5>
                            <h6>W.Tech Software Development Ltd, Akure</h6>
                            <p>
                                Contributed to the development of real-world software applications while collaborating with
                                a team of developers. Also supported junior developers by guiding them through modern
                                development practices and workflows.
                            </p>
                        </div>
                    </div>

                    <!-- 2024 Certification -->
                    <div class="steps mb-4">
                        <p><span class="year">2024</span></p>
                        <div class="text">
                            <h5>Professional Certification</h5>
                            <h6>International Institute of Project and Safety Management</h6>
                            <p>
                                Earned an Associate in Project Management (APM) certification, strengthening my ability to
                                manage technical projects effectively from planning to execution.
                            </p>
                        </div>
                    </div>

                    <!-- University -->
                    <div class="steps mb-4">
                        <p><span class="year">2023</span></p>
                        <div class="text">
                            <h5>B.Sc. Computer Science</h5>
                            <h6>Chukwuemeka Odumegwu Ojukwu University (COOU)</h6>
                            <p>
                                Completed a Bachelor’s degree in Computer Science with a strong foundation in software
                                development, systems design, and computing principles.
                            </p>
                        </div>
                    </div>

                    <!-- 2022 -->
                    <div class="steps mb-4">
                        <p><span class="year">2022</span></p>
                        <div class="text">
                            <h5>Full-Stack Web Development Training</h5>
                            <h6>Loctech IT Training Center, Port Harcourt</h6>
                            <p>
                                Trained in full-stack web development using PHP, Laravel, and MySQL, building foundational
                                skills in backend logic and database-driven applications.
                            </p>
                        </div>
                    </div>

                    <!-- 2018 Secondary -->
                    <div class="steps mb-4">
                        <p><span class="year">2018</span></p>
                        <div class="text">
                            <h5>Secondary Education (WASSCE)</h5>
                            <h6>St. Michael Model Comprehensive Secondary School, Nimo</h6>
                            <p>
                                Completed secondary education and obtained the West African Senior School Certificate
                                Examination (WASSCE).
                            </p>
                        </div>
                    </div>

                    <!-- 2018 Computer Training -->
                    <div class="steps mb-4">
                        <p><span class="year">2018</span></p>
                        <div class="text">
                            <h5>Computer Literacy Certification</h5>
                            <h6>Ciel Consulting, Port Harcourt</h6>
                            <p>
                                Completed foundational training in computer applications including Microsoft Office,
                                CorelDraw, and basic digital tools.
                            </p>
                        </div>
                    </div>

                    <!-- 2012 -->
                    <div class="steps mb-4">
                        <p><span class="year">2012</span></p>
                        <div class="text">
                            <h5>Primary Education</h5>
                            <h6>State Primary School, Port Harcourt</h6>
                            <p>
                                Completed primary education and obtained First School Leaving Certificate.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>

    <article class="slide-left">
        <h2>Achievements & Certifications</h2><br><br>
        <div class="text-center sl">
            <marquee behavior="scroll" direction="left">
                <span><img src="IMAGES/Pm.jpeg" alt=""></span>
                <span><img src="IMAGES/image (1).jpg" alt=""></span>
                <span><img src="IMAGES/image (2).jpg" alt=""></span>
                <span><img src="IMAGES/Pm.jpeg" alt=""></span>
                <span><img src="IMAGES/image (1).jpg" alt=""></span>
                <span><img src="IMAGES/image (2).jpg" alt=""></span>
            </marquee>
        </div>
    </article>

    <br><br>
    <div class="container row">
        <div class="col-12 col-lg-6 p-5 text-end">
            <h5>DOWNLOAD CV <i class="fas fa-file-word text-primary"></i> :</h5>
            <small style="color:red;">Authentication required: Enter password to download CV</small><br><br>
            <form id="cvForm">
                <input type="password" name="cv_password" placeholder="Enter password " id="cv_password"
                    required><br><br>
                <button type="submit">Download CV</button>
            </form>
            <div id="errorMsg" class="text-danger mt-2" style="display: none;"></div>
        </div>
        <div class="col-12 col-lg-6 p-5 text-end">
            <h5>DOWNLOAD RESUME <i class="fas fa-file-word text-primary"></i> :</h5>
            <small style="color:red;">Authentication required: Enter password to download Resume</small><br><br>
            <form id="resumeForm">
                <input type="password" name="resume_password" placeholder="Enter password " id="resume_password"
                    required><br><br>
                <button type="submit">Download Resume</button>
            </form>
            <div id="errorMsg2" class="text-danger mt-2" style="display: none;"></div>
        </div>
    </div>

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

    <script src="JS/about.js"></script>
    <script src="BOOTSTRAP/js/bootstrap.min.js"></script>
</body>

</html>
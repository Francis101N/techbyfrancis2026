<?php
ini_set('display_errors', 0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABOUT ME</title>
    <!-- Favicon link -->
    <link rel="icon" type="image/png" sizes="32x32" href="IMAGES/favicon.png">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="BOOTSTRAP/css/bootstrap.min.css" />
    <link rel="stylesheet" href="CSS/about.css" />
    <script src="https://kit.fontawesome.com/0ed688cb3d.js" crossorigin="anonymous"></script>
</head>
<style>
.about{
    z-index:0;
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
        <h2>About Me</h2>
    </main>

    <?php
    include('inc/aside.php');
    ?>


    <section class="about">
        <img src="IMAGES/blue-dots.png" alt="" class="dots">
        <section class="about-section">
            <div class="about-container">

                <h2 class="about-title">Introducing Francis Nwankwo</h2>

                <div class="about-content">

                    <!-- Left Image -->
                    <div class="about-image">
                        <img src="IMAGES/francis-left.jpeg"
                            alt="Francis Nwankwo - Software Developer , penetration-tester and IT Consultant at TechbyFrancis Limited based in Lagos, Nigeria">
                    </div>

                    <!-- Right Text -->
                    <div class="about-text">
                        <p>
                            Francis Nwankwo is a versatile IT professional originally from
                            <strong>Anambra State, Nigeria</strong>, currently based in
                            <strong>Lagos, Nigeria</strong>. He holds a
                            <strong>B.Sc. in Computer Science</strong> from
                            <strong>Chukwuemeka Odumegwu Ojukwu University (COOU), Uli Campus</strong>.
                        </p>

                        <p>
                            With experience in full-stack web development, project management,
                            cybersecurity, and IT consulting, he specializes in planning and executing
                            software-driven solutions from building visually compelling, high-performing,
                            and responsive web applications to ensuring data security and confidentiality
                            at every stage.
                        </p>

                        <p>
                            Francis combines technical expertise with strategic thinking to deliver
                            scalable systems and measurable business results.
                        </p>
                    </div>

                </div>
            </div>
        </section>


        <div class="journey container my-5">
            <h2 class="text-center mb-4">My Journey</h2><br><br>

            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8">
                    <div class="steps mb-4">
                        <p><span class="year">2025</span></p>
                        <div class="text">
                            <h5>Internship</h5>
                            <h6>Aledoy Solutions, Okota Lagos State.</h6>
                            <span>Gained hands-on experience in Back-End Web Development using Node.js, Express.js, and
                                MongoDB, and performed Cybersecurity (Penetration Testing) exercises to identify and
                                strengthen system vulnerabilities.</span>
                        </div>
                    </div>

                    <div class="steps mb-4">
                        <p><span class="year">2024</span></p>
                        <div class="text">
                            <h5>NYSC Internship</h5>
                            <h6>W.Tech Software Development Ltd. Akure, Ondo State.</h6>
                            <p> Collaborated with a dynamic development team to build and manage real-world software
                                projects. I also shared my knowledge with beginners, guiding them through the
                                fundamentals of modern software development and best practices.
                            </p>
                        </div>
                    </div>

                    <div class="steps mb-4">
                        <p><span class="year">2024</span></p>
                        <div class="text">
                            <h5>Training & Certification</h5>
                            <h6>International Institute of Project and Safety
                                Management, Akure.</h6>
                            <p>Successfully completed professional training and obtained an Associate in Project
                                Management (APM) certification .</p>
                        </div>
                    </div>

                    <div class="steps mb-4">
                        <p><span class="year">2023</span></p>
                        <div class="text">
                            <h5>University</h5>
                            <p><strong>B.Sc. Computer Science</strong>, Chukwuemeka Odumegwu Ojukwu University (COOU),
                                Anambra State.</p>
                        </div>
                    </div>

                    <div class="steps mb-4">
                        <p><span class="year">2022</span></p>
                        <div class="text">
                            <h5>Internship & Certification</h5>
                            <h6>Loctech IT Training Center, Port Harcourt.</h6>
                            <p>Full Stack Web Development with PHP, Laravel & MYSQL.
                            </p>
                        </div>
                    </div>

                    <div class="steps mb-4">
                        <p><span class="year">2018</span></p>
                        <div class="text">
                            <h5>High School / WASSCE</h5>
                            <p>St. Michael Model Comprehensive Secondary School, Nimo, Anambra State.</p>
                        </div>
                    </div>

                    <div class="steps mb-4">
                        <p><span class="year">2018</span></p>
                        <div class="text">
                            <h5>Training & Certification</h5>
                            <h6> Ciel Consulting, Port Harcourt.</h6>
                            <p>Diploma in Computer (MS Word, Excel, PowerPoint, CorelDraw, Scanning, and Internet
                                Awareness).</p>
                        </div>
                    </div>

                    <div class="steps mb-4">
                        <p><span class="year">2012</span></p>
                        <div class="text">
                            <h5>Primary School / First School Leaving Certificate.</h5>
                            <p>State Primary School, Port Harcourt, Rivers State.</p>
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
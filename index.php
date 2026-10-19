<?php
// $host = 'localhost';
// $db   = 'techbyfr_portfolio';
// $user = 'techbyfr_portfolio';
// $pass = 'TECHBYfrancis$$';

// try {
//     $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// } catch (PDOException $e) {
//     die("DB Connection failed: " . $e->getMessage());
// }

// function generateAESToken($data)
// {
//     $secret_key = "my_secret_key_123456";
//     $secret_iv  = "my_secret_iv_123456";

//     $key = hash('sha256', $secret_key);
//     $iv  = substr(hash('sha256', $secret_iv), 0, 16);

//     return base64_encode(openssl_encrypt($data, "AES-256-CBC", $key, 0, $iv));
// }

// function getUserIP()
// {
//     if (!empty($_SERVER['HTTP_CLIENT_IP'])) return $_SERVER['HTTP_CLIENT_IP'];
//     if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) return explode(',', $_SERVER['HTTP_X_FORWARDED_FOR'])[0];
//     return $_SERVER['REMOTE_ADDR'];
// }

// function getUserOS()
// {
//     $userAgent = $_SERVER['HTTP_USER_AGENT'];
//     $osArray = [
//         '/windows nt 10/i'     => 'Windows 10',
//         '/windows nt 6.3/i'    => 'Windows 8.1',
//         '/windows nt 6.2/i'    => 'Windows 8',
//         '/windows nt 6.1/i'    => 'Windows 7',
//         '/macintosh|mac os x/i' => 'Mac OS X',
//         '/linux/i'             => 'Linux',
//         '/iphone/i'            => 'iPhone',
//         '/android/i'           => 'Android',
//         '/ipad/i'              => 'iPad'
//     ];
//     foreach ($osArray as $regex => $value) {
//         if (preg_match($regex, $userAgent)) return $value;
//     }
//     return "Unknown OS";
// }

// function getUserBrowser()
// {
//     $userAgent = $_SERVER['HTTP_USER_AGENT'];
//     $browsers = [
//         '/msie/i'       => 'Internet Explorer',
//         '/firefox/i'    => 'Firefox',
//         '/chrome/i'     => 'Chrome',
//         '/safari/i'     => 'Safari',
//         '/edge/i'       => 'Edge',
//         '/opera/i'      => 'Opera',
//         '/mobile/i'     => 'Mobile Browser'
//     ];
//     foreach ($browsers as $regex => $value) {
//         if (preg_match($regex, $userAgent)) return $value;
//     }
//     return "Unknown Browser";
// }
// function getLocationData($ip)
// {
//     $url = "http://ip-api.com/json/{$ip}?fields=status,country,regionName,city,query";
//     $response = @file_get_contents($url);
//     if ($response) {
//         $data = json_decode($response, true);
//         if ($data['status'] === 'success') {
//             return [
//                 'ip'      => $data['query'],
//                 'country' => $data['country'],
//                 'region'  => $data['regionName'],
//                 'city'    => $data['city']
//             ];
//         }
//     }
//     return [
//         'ip'      => $ip,
//         'country' => 'Unknown',
//         'region'  => 'Unknown',
//         'city'    => 'Unknown'
//     ];
// }

// $ip = getUserIP();
// $os = getUserOS();
// $browser = getUserBrowser();
// $location = getLocationData($ip);
// $country = $location['country'];
// $region  = $location['region'];
// $city    = $location['city'];

// $stmt = $pdo->prepare("SELECT COUNT(*) FROM visitors WHERE ip_address = ?");
// $stmt->execute([$ip]);
// $count = $stmt->fetchColumn();

// if ($count == 0) {

//     $token = generateAESToken($ip . time());

//     $insert = $pdo->prepare("INSERT INTO visitors (ip_address, operating_system, country, `state/region`, city, browser, token) VALUES (?, ?, ?, ?, ?, ?, ?)");
//     $insert->execute([$ip, $os, $country, $region, $city, $browser, $token]);

//     require_once('PHPMailer/PHPMailerAutoload.php');
//     $mail = new PHPMailer(true);

//     try {
//         $mail->isSMTP();
//         $mail->Host       = 'mail.techbyfrancis.com';
//         $mail->SMTPAuth   = true;
//         $mail->Username   = 'portfolio@techbyfrancis.com';
//         $mail->Password   = 'TECHbyfrancis101$$';
//         $mail->SMTPSecure = 'ssl';
//         $mail->Port       = 465;

//         $mail->setFrom('portfolio@techbyfrancis.com', 'TechByFrancis Notification');
//         $mail->addAddress('francisnwankwo1972@gmail.com');

//         $mail->isHTML(true);
//         $mail->Subject = 'New Unique Visitor Alert';
//         $mail->Body    = "
//             <h3>New Unique Visitor</h3>
//             <p><strong>IP Address:</strong> $ip</p>
//             <p><strong>Operating System:</strong> $os</p>
//             <p><strong>Browser:</strong> $browser</p>
//             <p><strong>Country:</strong> $country</p>
//             <p><strong>Region:</strong> $region</p>
//             <p><strong>City:</strong> $city</p>
//             <p><small>Time: " . date('Y-m-d H:i:s') . "</small></p>
//         ";

//         $mail->send();
//     } catch (Exception $e) {
//     }
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Character Encoding -->
    <meta charset="UTF-8">

    <!-- Responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Primary SEO -->
    <title>TechByFrancis | Full-Stack Developer, Cybersecurity & IT Project Management</title>

    <meta name="description"
        content="TechByFrancis delivers secure, scalable, and innovative digital solutions for businesses, organizations, and individuals. Specializing in Full-Stack Development, Cybersecurity, IT Project Management, SEO, and custom software solutions.">

    <meta name="keywords"
        content="TechByFrancis, Francis Nwankwo, Full Stack Developer, Software Developer, Web Developer, Cybersecurity, Penetration Testing, IT Project Management, Custom Software Development, SEO, Laravel Developer, React Developer, PHP Developer, Node.js Developer">

    <meta name="author" content="Francis Nwankwo">

    <meta name="robots" content="index, follow">

    <meta name="theme-color" content="#2563EB">

    <!-- Canonical -->
    <link rel="canonical" href="https://techbyfrancis.com/">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:title"
        content="TechByFrancis | Secure, Scalable & Innovative Digital Solutions">
    <meta property="og:description"
        content="Helping businesses build secure, scalable and modern digital solutions through Full-Stack Development, Cybersecurity, IT Project Management and custom software development.">
    <meta property="og:image" content="https://techbyfrancis.com/IMAGES/og-image.jpg">
    <meta property="og:url" content="https://techbyfrancis.com/">
    <meta property="og:site_name" content="TechByFrancis">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title"
        content="TechByFrancis | Secure Digital Solutions">
    <meta name="twitter:description"
        content="Full-Stack Development • Cybersecurity • IT Project Management • Custom Software Solutions">
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
    <link rel="stylesheet" href="CSS/home.css">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/0ed688cb3d.js" crossorigin="anonymous"></script>

    <!-- Google reCAPTCHA -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

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
                        <h2 class="mb-3 text-primary fw-bold">Welcome </h2>
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

                <h1>
                    <span class="ani">TechByFrancis</span> builds secure, scalable, and innovative digital solutions for companies, businesses and individuals.
                </h1>

                <br>

                <p>
                    We specialize in Full-Stack Development, Cybersecurity (penetration testing), IT Project Management, and custom software solutions designed to improve efficiency, strengthen security, and accelerate business growth.
                </p>

                <br>

                <div>
                    <span class="me-3 Expertise">
                        <a href="expertise"
                            class="p-2 link-light text-decoration-none"
                            style="box-shadow:0 0 20px #007BFF;">
                            Explore Services
                        </a>
                    </span>

                    <span>
                        <b><a href="contact" class="second">Let's Build Something Great</a></b>
                        <img src="IMAGES/blue arrow.png" alt="arrow-up" class="ps-2">
                    </span>
                </div>

            </div>

            <!-- Right Column: Image -->
            <div class="col-12 col-lg-6 col-md-6 right">
                <img src="IMAGES/Studio-Selfie.png" alt="Founder of TechByFrancis">
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
                    <span>25+</span>
                    <p><b>Solo Projects Delivered</b></p>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 mb-4">
                <div class="stat-box">
                    <span>4+</span>
                    <p><b>Team-Assisted Projects</b></p>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 mb-4">
                <div class="stat-box">
                    <span>3</span>
                    <p><b>Active Projects</b></p>
                </div>
            </div>
        </div>
    </article>

    <section class="section-one">
        <img src="IMAGES/blue-dots.png" alt="" class="leftdots">
        <div class="row">
            <div class="col-12 col-lg-5 col-md-6 secleft">
                <h2>What we Do</h2>
                <p>We design, develop, and secure modern digital solutions that help businesses innovate, streamline operations, and scale with confidence. From custom software development to IT project management and cybersecurity, we deliver reliable technology built for performance.
                </p><br>
                <p><a href="contact" class="p-2 link-light text-decoration-none bg-primary"
                        style="box-shadow:0 0 20px #007BFF ;">Book Free Consultation</a></p>
            </div>

            <div class="col-12 col-lg-7 col-md-6 skills secright">

                <!-- Full-Stack Development -->
                <div>

                    <p>
                        <i class="fa-brands fa-html5 pe-2 fs-3" style="color:#1a4a78;"></i>
                        <i class="fa-brands fa-css3-alt pe-2 fs-3" style="color:#1a4a78;"></i>
                        <i class="fa-brands fa-bootstrap pe-2 fs-3" style="color:#1a4a78;"></i>
                        <i class="fa-brands fa-js pe-2 fs-3" style="color:#1a4a78;"></i>
                        <i class="fa-brands fa-react pe-2 fs-3" style="color:#1a4a78;"></i>
                        <i class="fa-brands fa-php pe-2 fs-3" style="color:#1a4a78;"></i>
                        <i class="fa-brands fa-laravel pe-2 fs-3" style="color:#1a4a78;"></i>
                        <i class="fa-solid fa-database pe-2 fs-3" style="color:#1a4a78;"></i>
                        <i class="fa-brands fa-node-js pe-2 fs-3" style="color:#1a4a78;"></i>
                        <i class="fa-brands fa-envira pe-2 fs-3" style="color:#1a4a78;"></i>
                    </p>

                    <p><b>Full-Stack Web & Software Development</b></p>

                    <p>
                        We build secure, responsive, and scalable websites, web applications, enterprise software, and custom digital solutions using modern technologies . Our solutions are optimized for performance, security, and long-term business growth.
                    </p>

                </div>

                <!-- SEO -->
                <div class="top">

                    <p>
                        <i class="fa-solid fa-magnifying-glass pe-2 fs-3" style="color:#1a4a78;"></i>
                        <i class="fa-solid fa-chart-line pe-2 fs-3" style="color:#1a4a78;"></i>
                        <i class="fa-solid fa-globe pe-2 fs-3" style="color:#1a4a78;"></i>
                        <i class="fa-solid fa-keyboard pe-2 fs-3" style="color:#1a4a78;"></i>
                        <i class="fa-solid fa-ranking-star pe-2 fs-3" style="color:#1a4a78;"></i>
                    </p>

                    <br>

                    <p>

                        <b>Search Engine Optimization (SEO)</b>

                        <small class="text-danger">
                            (Technical SEO, On-Page SEO, Local SEO & Keyword Optimization)
                        </small>

                    </p>

                    <p>
                        We help businesses improve their Google rankings through technical SEO audits, keyword research, on-page optimization, website speed improvements, structured data implementation, content optimization, and local SEO strategies that increase organic traffic and generate qualified leads.
                    </p>

                </div>

                <!-- Project Management -->
                <div>

                    <p>
                        <i class="fa-solid fa-list-check fs-3" style="color:#1a4a78;"></i>
                    </p>

                    <p>
                        <b>IT Project Management</b>
                    </p>

                    <p>
                        We plan, coordinate, and deliver technology projects using industry best practices, ensuring efficient collaboration, risk management, timely execution, quality assurance, and successful digital transformation initiatives for businesses and organizations.
                    </p>

                </div>

                <!-- Cybersecurity -->
                <div class="top">

                    <p>
                        <i class="fa-solid fa-shield-halved fs-3 pe-2" style="color:#1a4a78;"></i>
                        <i class="fa-solid fa-user-shield fs-3 pe-2" style="color:#1a4a78;"></i>
                        <i class="fa-solid fa-bug-slash fs-3" style="color:#1a4a78;"></i>
                    </p>

                    <p>
                        <b>Cybersecurity & Penetration Testing</b>
                    </p>

                    <p>
                        We protect businesses through penetration testing, vulnerability assessments, web application security testing, network security evaluations, security audits, and proactive cybersecurity strategies designed to identify risks before attackers can exploit them.
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
                <h1>Meet the Founder</h1>
                <p><i>A software engineer passionate about building secure, scalable, and impactful digital solutions that solve real business problems.</i></p>
                <p>I am a Dynamic Tech Professional specializing in full-stack development, IT project management, and cybersecurity (Penetration Testing). I combine technical expertise with a strong focus on delivering efficient, user-centered, and secure digital solutions.

                    From planning and design to development, deployment and security, I build systems that are scalable, reliable, and tailored to real-world business needs.
                </p>
                <p>
                    <a href="about" class="p-2 link-light text-decoration-none bg-primary d-inline-block w-auto mt-3"
                        style="box-shadow:0 0 20px #007BFF ;">Read More About Francis</a>
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

                <!-- PROJECT 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card shadow rounded-4 overflow-hidden h-100">

                        <!-- CAROUSEL 3 -->
                        <div id="carousel3" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000" data-bs-pause="hover">

                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="IMAGES/mms1.png" class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="IMAGES/mms2.png" class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="IMAGES/mms3.png" class="d-block w-100">
                                </div>
                            </div>

                            <button class="carousel-control-prev" type="button" data-bs-target="#carousel3" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon bg-dark rounded-circle p-2"></span>
                            </button>

                            <button class="carousel-control-next" type="button" data-bs-target="#carousel3" data-bs-slide="next">
                                <span class="carousel-control-next-icon bg-dark rounded-circle p-2"></span>
                            </button>

                        </div>

                        <div class="card-body">
                            <h5 class="card-title">MEDICALS MANAGEMENT SYSTEM (MMS)</h5>

                            <p class="text-muted small">
                                A high-performance, multi-branch operations management ecosystem built for hospitals, clinics, enterprise companies and pharmaceuticals, featuring real-time inventory synchronization, instant stock row-locking, prescription tracking, medical records, medications dispensing and centralized staffs and patients reporting.
                            </p>
                            <!-- <p>Tech Stack:
                                <span class="badge bg-danger fw-bold me-2">HTML5</span>
                                <span class="badge bg-danger fw-bold me-2">BOOTSTRAP</span>
                                <span class="badge bg-danger fw-bold me-2">JavaScript</span>
                                <span class="badge bg-danger fw-bold me-2">PHP</span>
                                <span class="badge bg-danger fw-bold me-2">LARAVEL</span>
                                <span class="badge bg-danger fw-bold me-2">MYSQL</span>
                                <span class="badge bg-danger fw-bold me-2">GIT</span>
                                <span class="badge bg-danger fw-bold me-2">GITHUB</span>
                            </p> -->

                            <br>
                            <a href="https://mms.techbyfrancis.com/" class="learn-more" target="_blank" rel="noopener">
                                View Live <img src="IMAGES/blue arrow.png" alt="arrow icon" style="height: 20px;" class="ps-2">
                            </a>
                        </div>

                    </div>
                </div>

                <!-- PROJECT 0 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card shadow rounded-4 overflow-hidden h-100">

                        <!-- CAROUSEL 0 -->
                        <div id="carousel0" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000" data-bs-pause="hover">

                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="IMAGES/Screenshot 2026-07-22 at 8.32.18 AM.png" class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="IMAGES/Screenshot 2026-07-22 at 8.33.10 AM.png" class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="IMAGES/Screenshot 2026-07-22 at 8.33.41 AM.png" class="d-block w-100">
                                </div>
                            </div>

                            <button class="carousel-control-prev" type="button" data-bs-target="#carousel0" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon bg-dark rounded-circle p-2"></span>
                            </button>

                            <button class="carousel-control-next" type="button" data-bs-target="#carousel0" data-bs-slide="next">
                                <span class="carousel-control-next-icon bg-dark rounded-circle p-2"></span>
                            </button>

                        </div>

                        <div class="card-body">
                            <h5 class="card-title">DIGITAL GATE PASS MANAGEMENT SYSTEM</h5>

                            <p class="text-muted small">
                                Designed and developed a secure, enterprise-grade Digital Gate Pass Management System for Equal Logistics Limited to modernize and automate its manual, paper-based visitor and vehicle access process.

                                The platform centralizes gate pass requests, approvals, and visitor tracking into a single, streamlined workflow, significantly improving operational efficiency, enhancing security, and reducing administrative overhead. Built with scalability in mind, the system supports multiple company branches from a unified platform while providing role-based access control, secure data management, and complete visibility into visitor and vehicle movements across locations.
                            </p>

                            <!-- <p>Tech Stack:
                                <span class="badge bg-danger fw-bold me-2">HTML5</span>
                                <span class="badge bg-danger fw-bold me-2">BOOTSTRAP</span>
                                <span class="badge bg-danger fw-bold me-2">JavaScript</span>
                                <span class="badge bg-danger fw-bold me-2">PHP</span>
                                <span class="badge bg-danger fw-bold me-2">LARAVEL</span>
                                <span class="badge bg-danger fw-bold me-2">MYSQL</span>
                                <span class="badge bg-danger fw-bold me-2">GIT</span>
                                <span class="badge bg-danger fw-bold me-2">GITHUB</span>
                            </p> -->

                            <br>
                            <a href="https://techbyfrancis.com/gate-pass/" class="learn-more" target="_blank" rel="noopener">
                                View Live <img src="IMAGES/blue arrow.png" alt="arrow icon" style="height: 20px;" class="ps-2">
                            </a>
                        </div>

                    </div>
                </div>


                <!-- PROJECT 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card shadow rounded-4 overflow-hidden h-100">

                        <!-- CAROUSEL 1 -->
                        <div id="carousel1" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000" data-bs-pause="hover">

                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="IMAGES/market1.png" class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="IMAGES/market2.png" class="d-block w-100">
                                </div>
                                <div class="carousel-item">
                                    <img src="IMAGES/market3.png" class="d-block w-100">
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
                            <h5 class="card-title">MARKET EDGE</h5>

                            <p class="text-muted small">
                                Developed a secure, full-stack digital marketplace featuring a high-end, dark-themed glassmorphism UI designed to automate global and regional digital asset delivery. Built a dual-currency payment pipeline separating a Global Software Marketplace (USD via PayPal) for high-ticket systems from a Regional Book Storefront (NGN via Paystack) supporting local cards, bank transfers, and USSD. The entire platform is controlled by a comprehensive Admin Dashboard that manages user access, product catalogs, live transactions, and automated file fulfillment.
                            </p>

                            <!-- <p>Tech Stack:
                                <span class="badge bg-danger fw-bold me-2">HTML5</span>
                                <span class="badge bg-danger fw-bold me-2">BOOTSTRAP</span>
                                <span class="badge bg-danger fw-bold me-2">JavaScript</span>
                                <span class="badge bg-danger fw-bold me-2">PHP</span>
                                <span class="badge bg-danger fw-bold me-2">LARAVEL</span>
                                <span class="badge bg-danger fw-bold me-2">MYSQL</span>
                                <span class="badge bg-danger fw-bold me-2">GIT</span>
                                <span class="badge bg-danger fw-bold me-2">GITHUB</span>
                            </p> -->

                            <br>
                            <a href="http://marketedgee.com/" class="learn-more" target="_blank" rel="noopener">
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

                <div class="g-recaptcha" data-sitekey="6Ldv_u4sAAAAADIcQm62A49alo6ezq8uejCJBTNX"></div>
                <br>

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
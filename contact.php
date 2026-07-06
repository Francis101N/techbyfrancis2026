<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CONTACT</title>
    <!-- Favicon link -->
    <link rel="icon" type="image/png" sizes="32x32" href="IMAGES/icon.png">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="BOOTSTRAP/css/bootstrap.min.css" />
    <link rel="stylesheet" href="CSS/contact.css" />
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
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

    <main>
        <h2>Contact Me</h2>
    </main>

    <?php
    include('inc/aside.php');
    ?>


    <section class="row">
        <div class="col-12 col-lg-6 col-md-6">
            <img src="IMAGES/blue-dots.png" alt="" class="sec-img" />
            <div class="sec-left">
                <h2>Let’s Work Together</h2>
                <p class="pb-4">
                    Whether you have a project in mind or need an extra hand on your team, I’m always open to
                    engaging conversations and exciting collaborations.
                </p>
                <div class="d-flex">
                    <p><img src="IMAGES/Envelope.png" alt="" /></p>
                    <p class="ps-4">
                        <span style="color: #bfbeb9">CHAT WITH ME</span><br /><span
                            class="info">Francisnwankwo37@gmail.com</span>
                    </p>
                </div>
                <div class="d-flex">
                    <p><img src="IMAGES/PhoneCall.png" alt="" /></p>
                    <p class="ps-4">
                        <span style="color: #bfbeb9">CALL ME</span><br /><span class="info">+2348069815240
                            +2347010010811</span>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-6 col-md-6 sec-right">
            <form action="proc_appointment" method="post">
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

    <!-- Back to Top Button -->
    <button id="backToTop" type="button" aria-label="Back to top" title="Back to top">
        <i class="fas fa-arrow-up"></i> <!-- Using Font Awesome since you already loaded it -->
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

    <script src="JS/contact.js"></script>
    <script src="BOOTSTRAP/js/bootstrap.min.js"></script>
</body>

</html>
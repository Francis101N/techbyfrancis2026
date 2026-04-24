<?php
header("Refresh:6; url=home");

// Database connection
$host = 'localhost';
$db   = 'techbyfr_portfolio';
$user = 'techbyfr_portfolio';
$pass = 'TECHBYfrancis$$';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("DB Connection failed: " . $e->getMessage());
}

// Generate AES token
function generateAESToken($data) {
    $secret_key = "my_secret_key_123456"; 
    $secret_iv  = "my_secret_iv_123456";

    $key = hash('sha256', $secret_key);
    $iv  = substr(hash('sha256', $secret_iv), 0, 16);

    return base64_encode(openssl_encrypt($data, "AES-256-CBC", $key, 0, $iv));
}

// Get IP address
function getUserIP() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) return $_SERVER['HTTP_CLIENT_IP'];
    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) return explode(',', $_SERVER['HTTP_X_FORWARDED_FOR'])[0];
    return $_SERVER['REMOTE_ADDR'];
}

// Get Operating System
function getUserOS() {
    $userAgent = $_SERVER['HTTP_USER_AGENT'];
    $osArray = [
        '/windows nt 10/i'     => 'Windows 10',
        '/windows nt 6.3/i'    => 'Windows 8.1',
        '/windows nt 6.2/i'    => 'Windows 8',
        '/windows nt 6.1/i'    => 'Windows 7',
        '/macintosh|mac os x/i'=> 'Mac OS X',
        '/linux/i'             => 'Linux',
        '/iphone/i'            => 'iPhone',
        '/android/i'           => 'Android',
        '/ipad/i'              => 'iPad'
    ];
    foreach ($osArray as $regex => $value) {
        if (preg_match($regex, $userAgent)) return $value;
    }
    return "Unknown OS";
}

// Get Browser
function getUserBrowser() {
    $userAgent = $_SERVER['HTTP_USER_AGENT'];
    $browsers = [
        '/msie/i'       => 'Internet Explorer',
        '/firefox/i'    => 'Firefox',
        '/chrome/i'     => 'Chrome',
        '/safari/i'     => 'Safari',
        '/edge/i'       => 'Edge',
        '/opera/i'      => 'Opera',
        '/mobile/i'     => 'Mobile Browser'
    ];
    foreach ($browsers as $regex => $value) {
        if (preg_match($regex, $userAgent)) return $value;
    }
    return "Unknown Browser";
}

// Get Location using ip-api
function getLocationData($ip) {
    $url = "http://ip-api.com/json/{$ip}?fields=status,country,regionName,city,query";
    $response = @file_get_contents($url);
    if ($response) {
        $data = json_decode($response, true);
        if ($data['status'] === 'success') {
            return [
                'ip'      => $data['query'],
                'country' => $data['country'],
                'region'  => $data['regionName'],
                'city'    => $data['city']
            ];
        }
    }
    return [
        'ip'      => $ip,
        'country' => 'Unknown',
        'region'  => 'Unknown',
        'city'    => 'Unknown'
    ];
}

// Gather all info
$ip = getUserIP();
$os = getUserOS();
$browser = getUserBrowser();
$location = getLocationData($ip);
$country = $location['country'];
$region  = $location['region'];
$city    = $location['city'];

// Check if IP exists
$stmt = $pdo->prepare("SELECT COUNT(*) FROM visitors WHERE ip_address = ?");
$stmt->execute([$ip]);
$count = $stmt->fetchColumn();

if ($count == 0) {
    // Generate unique AES token for this visitor
    $token = generateAESToken($ip . time());

    // Insert new visitor
    $insert = $pdo->prepare("INSERT INTO visitors (ip_address, operating_system, country, `state/region`, city, browser, token) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $insert->execute([$ip, $os, $country, $region, $city, $browser, $token]);

    // Send email notification
    require_once('PHPMailer/PHPMailerAutoload.php');
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'mail.techbyfrancis.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'portfolio@techbyfrancis.com';
        $mail->Password   = 'TECHbyfrancis101$$';
        $mail->SMTPSecure = 'ssl';
        $mail->Port       = 465;

        $mail->setFrom('portfolio@techbyfrancis.com', 'TechByFrancis Notification');
        $mail->addAddress('francisnwankwo1972@gmail.com');

        $mail->isHTML(true);
        $mail->Subject = 'New Unique Visitor Alert';
        $mail->Body    = "
            <h3>New Unique Visitor</h3>
            <p><strong>IP Address:</strong> $ip</p>
            <p><strong>Operating System:</strong> $os</p>
            <p><strong>Browser:</strong> $browser</p>
            <p><strong>Country:</strong> $country</p>
            <p><strong>Region:</strong> $region</p>
            <p><strong>City:</strong> $city</p>
            <p><small>Time: " . date('Y-m-d H:i:s') . "</small></p>
        ";

        $mail->send();
    } catch (Exception $e) {
        // Handle email error silently
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>WELCOME - TECHBYFRANCIS</title>

<link rel="icon" href="IMAGES/favicon.png">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500;700&display=swap" rel="stylesheet">

<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Inter', sans-serif;
}

body {
  height: 100vh;
  overflow: hidden;
  background: radial-gradient(circle at top, #0a6efd10, #ffffff);
}

/* PARTICLES */
#particles-bg {
  position: fixed;
  width: 100%;
  height: 100%;
  z-index: 1;
}

/* PRELOADER */
#preloader {
  position: fixed;
  width: 100%;
  height: 100%;
  z-index: 10;
  display: flex;
  align-items: center;
  justify-content: center;
}

/* GLASS CARD */
.loader-card {
  backdrop-filter: blur(20px);
  background: rgba(255,255,255,0.1);
  border-radius: 20px;
  padding: 40px;
  text-align: center;
  box-shadow: 0 20px 60px rgba(0,0,0,0.1);
  animation: float 4s ease-in-out infinite;
}

/* FLOATING EFFECT */
@keyframes float {
  0%,100% { transform: translateY(0px);}
  50% { transform: translateY(-10px);}
}

/* SPINNER */
.spinner {
  width: 70px;
  height: 70px;
  border: 5px solid rgba(10,110,253,0.2);
  border-top: 5px solid #0a6efd;
  border-radius: 50%;
  animation: spin 1s linear infinite;
  margin: 0 auto 20px;
}

.spinner::after {
  content: "";
  position: absolute;
  width: 50px;
  height: 50px;
  border: 5px solid transparent;
  border-top: 5px solid #0a6efd;
  border-radius: 50%;
  top: 10px;
  left: 10px;
  animation: spinReverse 1.5s linear infinite;
}

@keyframes spin {
  to { transform: rotate(360deg);}
}

@keyframes spinReverse {
  to { transform: rotate(-360deg);}
}

/* BRAND */
.brand {
  font-size: 22px;
  font-weight: 700;
  color: #0a6efd;
  margin-bottom: 10px;
}

/* LOADING TEXT */
.loading-text {
  font-size: 14px;
  color: #555;
  margin-bottom: 15px;
}

/* PROGRESS BAR */
.progress-bar {
  width: 250px;
  height: 6px;
  background: rgba(0,0,0,0.1);
  border-radius: 10px;
  overflow: hidden;
  margin: auto;
}

.progress {
  height: 100%;
  width: 0%;
  background: linear-gradient(90deg, #0a6efd, #4dabf7);
  animation: load 5s linear forwards;
}

/* PROGRESS ANIMATION */
@keyframes load {
  from { width: 0%;}
  to { width: 100%;}
}

/* PERCENTAGE */
.percentage {
  margin-top: 10px;
  font-weight: 600;
  color: #0a6efd;
}

/* GLOW BACKGROUND */
.glow {
  position: absolute;
  width: 400px;
  height: 400px;
  background: radial-gradient(circle, #0a6efd33, transparent);
  filter: blur(80px);
  animation: moveGlow 8s infinite alternate;
}

@keyframes moveGlow {
  from { transform: translate(-100px, -100px);}
  to { transform: translate(100px, 100px);}
}

</style>
</head>

<body>

<div id="particles-bg"></div>

<div class="glow"></div>

<div id="preloader">
  <div class="loader-card">
    <div class="spinner"></div>
    <div class="brand">TechByFrancis</div>
    <div class="loading-text">Initializing Experience...</div>

    <div class="progress-bar">
      <div class="progress" id="progress"></div>
    </div>

    <div class="percentage" id="percentage">0%</div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/tsparticles@2/tsparticles.bundle.min.js"></script>

<script>
// PARTICLES
tsParticles.load("particles-bg", {
  background: { color: "transparent" },
  particles: {
    number: { value: 70 },
    color: { value: "#0a6efd" },
    links: { enable: true, color: "#0a6efd", opacity: 0.3 },
    move: { enable: true, speed: 1.2 },
    opacity: { value: 0.5 },
    size: { value: { min: 2, max: 5 } }
  }
});

// LOADING COUNTER
let percent = 0;
let interval = setInterval(() => {
  percent++;
  document.getElementById("percentage").innerText = percent + "%";
  if (percent >= 100) {
    clearInterval(interval);
    document.getElementById("preloader").style.opacity = "0";
    setTimeout(() => {
      window.location.href = "home";
    }, 500);
  }
}, 50);
</script>

</body>
</html>
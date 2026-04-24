<?php
ini_set('display_errors', '0');

session_start();
unset($_SESSION['admin_user']);
session_destroy();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language="JavaScript" type="text/JavaScript">
</script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ADMINISTRATOR'S CONTROL PANEL</title>
<!-- MDB CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css" rel="stylesheet" />

<!-- Font Awesome (optional for icons) -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />

</head>

<body>
<p class="p-2"><img src="images/mylogo2.png" width="250px" height="80px" />
<h2 class="text-center">
<br>
<?php
if ($error) {
  echo '
    <div class="alert alert-dismissible fade show text-danger" role="alert">'
    . $error .'
    </div>';
}
?>
</h2>


<!-- Section: Design Block -->
<section class="text-center text-lg-start">
  <style>
    .cascading-right {
      margin-right: -50px;
    }

    @media (max-width: 991.98px) {
      .cascading-right {
        margin-right: 0;
      }
    }
  </style>

  <!-- Jumbotron -->
  <div class="container py-4">
    <div class="row g-0 align-items-center">
      <div class="col-lg-6 mb-5 mb-lg-0">
        <div class="card cascading-right bg-body-tertiary" style="
            backdrop-filter: blur(30px);
            ">
          <div class="card-body p-5 shadow-5 text-center">
            <!-- <h2 class="fw-bold mb-5">Administrator Portal</h2> -->
            <p class="text-center text-muted">Authorized personnel only</p>
            <form id="form1" name="form1" method="post" action="proc_admin.php">

              <!-- 2 column grid layout with text inputs for the first and last names -->
              <div class="row p-5">
                <div class="col-md-6 mb-4">
                  <div data-mdb-input-init class="form-outline">
                    <input type="email" id="form3Example1" class="form-control" name="username"/>
                    <label class="form-label" for="form3Example1">Username</label>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div data-mdb-input-init class="form-outline">
                    <input type="password" id="form3Example2" class="form-control" name="password" />
                    <label class="form-label" for="form3Example2">Password</label>
                  </div>
                </div>
              </div>

              <!-- Submit button -->
              <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4" >
                Sign up
              </button>
            </form>
          </div>
        </div>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0">
        <img src="images/con-img.png" class="w-100 rounded-4 shadow-4"
          alt="" height="750px" />
      </div>
    </div>
  </div>
  <!-- Jumbotron -->
</section>
<!-- Section: Design Block -->
<p>&nbsp;</p>

<!-- MDB JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.js"></script>

</body>
</html>

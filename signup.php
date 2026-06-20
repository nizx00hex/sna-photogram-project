<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
error_reporting(E_ALL);
ini_set('display_errors', 1);


include 'libs/load.php';
?>
<!doctype html>
    <?php loadTemplates("_head");?>

  </head>
  <body class="d-flex align-items-center py-4 bg-body-tertiary">

        <?php loadTemplates("_body2");?>
        <?php loadTemplates("_signup");?>

    <script
      src="../assets/dist/js/bootstrap.bundle.min.js"
      class="astro-vvvwv3sm"
    ></script>
  </body>
</html>
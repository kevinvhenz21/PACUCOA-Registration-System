<!---Copyright © 2017 Lyceum of the Philippines University - Manila | 
	Powered by Information and Communication 

	DEVELOPED BY:
	Kevin Azaña Rodriguez
<!- Templete: AdminLTE-->

<?php include('../config/session.php') ;
    confirm_loggedin();
?>

<!DOCTYPE html>
<html>
<head>
  <?php include('includes/head.php');?>
</head>
<body class="hold-transition skin-green sidebar-mini">

<div class="wrapper">
    <?php include('includes/header.php')?>

    <aside class="main-sidebar">
        <?php include('menu/menu_walkin.php')?>
    </aside>

    <div class="content-wrapper">
        <?php include('../application/views/walkin/view_walkin.php');?>
    </div>
    <!-- Footer -->
    <?php include('includes/footer.php')?>
     <!-- End Footer -->
</div>

    
    <?php include('includes/footer_script.php') ?>
   
</body>
</html>

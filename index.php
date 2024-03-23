<html>
<head>
		<title>Hum Aapke Hain na</title>
	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="css/cover.css" ">

</head>
<body>

	<?php include 'includes/header.php'; ?>
			<div id="Contant">


				<?php
				if (isset($_GET['about']))
				{
					include "includes/about.php";
				}else if (isset($_GET['services'])){
					include "includes/service.php";
				}else if (isset($_GET['contact'])){
					include "includes/contact.php";
				}else if (isset($_GET['login'])){
				include "includes/login.php";
				}else if (isset($_GET['register'])){
					include "includes/register.php";
				}else if (isset($_GET['premium'])){
					include "includes/premium_services.php";
				}else if (isset($_GET['regular'])){
					include "includes/regular_services.php";
				}else if (isset($_GET['nonmember'])){
					include "includes/serviceonrequest.php";
				}else if (isset($_GET['dashboard'])){
					include "includes/dashboard.php";
				}else if (isset($_GET['profile'])){
					include "includes/profile.php";
				}else if (isset($_GET['pprofile'])){
					include "includes/parents_profile.php";
				}else if (isset($_GET['member'])){
					include "includes/service_for_member.php";
				}else if (isset($_GET['logout'])){
					include "includes/logout.php";
				}else
					include "includes/home.php";
				?>
			</div>

</body>
<?php include 'footer1.php';?>
</html>

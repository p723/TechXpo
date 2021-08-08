<?php require "../assets/backend/auth/Controller.php" ?>
<!DOCTYPE html>
<html data-theme="<?php
		if($_COOKIE["theme"] == "dark") {
			echo "dark";
		} else {
			echo "light";
		}
	?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../assets/vendor/bootstrap/css/bootstrap.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="../../assets/css/authstyle.css" type="text/css" media="all" />
    <link rel="stylesheet" href="../../assets/vendor/sweetalert2/css/sweetalert2.min.css" type="text/css" media="all" />
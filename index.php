<?php
include("link.php");
include("seo.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta property="og:title" content="<?php echo $title;?>">
<meta property="og:url" content="./">
<meta property="og:site_name" content="<?php echo $title;?>">
<meta property="og:type" content="website">
<title><?php echo $title;?></title>
<link rel="stylesheet" href="https://gun.pcloud.id/bootstrap.gun.css">
<script src="https://gun.pcloud.id/jquery.gun.js"></script>
<script src="https://gun.pcloud.id/bootstrap.gun.js"></script>
</head>
<body>
<div class="embed-responsive embed-responsive-16by9" style="height:100vh">
<iframe class="embed-responsive-item" src="<?php echo $mylink;?>"></iframe>
</div>
</body>
</html>
<!-- HEADER -->


<!DOCTYPE html>
<html>
<!-- Include LINKS -->
<?php include 'inc/links.php' ?>
<head>
    <title> <?php echo $title ?> </title>
    <!-- Viewport so media queries can work on mobile phones -->
    <meta name="viewport" content="width=device-width, initial-scale =1.0, user-scaleable= no">
    <!-- Link to CSS files -->
    <link rel="stylesheet" type="text/css" href="fonts/fonts.css">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/grid.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <!-- Link to Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Italianno' rel='stylesheet' type='text/css'>
</head>
	<body>
	<!-- Google Analytics -->
	<?php include_once("inc/analyticstracking.php") ?>
		

        <div class="container">
			<div class="grid_6" id="shuffle"> <!-- had a class "name"-->
				<!-- <a <?php //echo $page['home']['link'];?> ><h1 class="name">Punyweblab</h1></a> -->
                <h3 class="sub_head"><span>Hello world</span> , I'm a web designer + developer</h3>
			</div>
            
            <!-- this navigation will only showup in mobile & tablet view -->
			<div class="grid_12 omega normal_hide">
				 <img src="img/menu_icon.png" id="nav_icon">
				 <div class="grid_12 omega normal_hide mobile_menu">
				 	<a <?php echo $page['home']['link'];?> >Home</a>
				 	<a <?php echo $page['about']['link'];?> >About</a>
				 	<a <?php echo $page['contact']['link'];?> >Contact</a>
				 </div>
			</div>

            <div class="grid_6 omega mobileHide">
                <nav id="header_nav">
                    <ul>
                        <li><a <?php echo $page['home']['link'];?> title="Home">home</a></li>
                        <li><a <?php echo $page['about']['link'];?> title="about">about</a></li>
                        <li><a <?php echo $page['contact']['link'];?> title="contact">contact</a></li>
                    </ul>
                </nav>
            </div>
	
	
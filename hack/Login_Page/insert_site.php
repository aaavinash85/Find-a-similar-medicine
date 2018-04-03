<html>
	<head>
		<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' />

    <link href="hab_files/css_004.css" rel="stylesheet" type="text/css">
    <link href="hab_files/css.css" rel="stylesheet" type="text/css">
    <link href="hab_files/css_002.css" rel="stylesheet" type="text/css">
    <link href="hab_files/css_003.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="hab_files/style.css" type="text/css">
    <!--  <link rel="stylesheet" href="hab_files/reset.css" type="text/css">
    <!-- font awesome icons -->
    <link rel="stylesheet" href="hab_files/font-awesome.css">

    <!-- simple line icons -->
  <link rel="stylesheet" type="text/css" href="hab_files/simple-line-icons.css" media="screen">

    <!-- et linefont icons -->
    <link rel="stylesheet" href="hab_files/etlinefont.css">

    <!-- animations -->
    <link href="hab_files/animations.css" rel="stylesheet" type="text/css" media="all">

    <!-- responsive devices styles -->
  <link rel="stylesheet" media="screen" href="hab_files/responsive-leyouts.css" type="text/css">

    <!-- shortcodes -->
    <link rel="stylesheet" media="screen" href="hab_files/shortcodes.css" type="text/css">

    <!-- style switcher -->
    <link rel="stylesheet" media="screen" href="hab_files/color-switcher.css">

    <!-- mega menu -->
    <link href="hab_files/bootstrap.css" rel="stylesheet">
  <link href="hab_files/demo.css" rel="stylesheet">
  <link href="hab_files/menu23.css" rel="stylesheet">

    <!-- MasterSlider -->
  <link rel="stylesheet" href="hab_files/masterslider.css">
    <link rel="stylesheet" href="hab_files/style_002.css">

    <!-- cubeportfolio -->
    <link rel="stylesheet" type="text/css" href="hab_files/cubeportfolio.css">

    <!-- owl carousel -->
    <link href="hab_files/owl.css" rel="stylesheet">
    <link href="hab_files/owl_002.css" rel="stylesheet">

    <!-- tabs 2 -->
    <link href="hab_files/tabacc.css" rel="stylesheet">
  <link href="hab_files/detached2.css" rel="stylesheet">

    <!-- tabs -->
    <link rel="stylesheet" type="text/css" href="hab_files/responsive-tabs3.css">

    <!-- accordion -->
    <link rel="stylesheet" type="text/css" href="hab_files/style_003.css">


    <style type="text/css">

			::-webkit-scrollbar
			{
		    	width: 10px;
			}


			::-webkit-scrollbar-track
			{
		    	background: #transparent;
			}

			::-webkit-scrollbar-thumb
			{
		    	background: #888;
			}

			::-webkit-scrollbar-thumb:hover
			{
		    	background: #555;
			}


			@media screen and (min-width: 1080px)
			{
			    menu{
			        width:100%;
			    }
			}

			#header-max
			{
				padding: 2%;
				height:15%;
				backface-visibility: 0.5;
				background-color: #67c8ff;
				width:97%;
			}

			#menu
			{
				float:right;
				font-family: cursive;
				background:transparent;
			}
			#search-max
			{
				width:97%;
				height:10%;
			}
			#search
			{
				width:40%;
				border:0px;
				border-bottom: 1px solid black;
				outline: none;
			}
			#search-btn
			{
				padding:0.2%;
				background-color: #67c8ff;
				cursor:hand;
				border:0px;
			}
			#search-btn:hover
			{
				background-color: #00c8ff;
			}
			.projects-max
			{
				padding: 2%;
				width:97%;
				background-color: #232323;
				overflow: auto;
				text-align:justify;
			}
			.projects-max .desc-left
			{
				color: white;
				float:left;
				background-color: #181818;
				width:80%;
				height:40%;
				padding: 2%;
			}
			.projects-max .desc-right
			{
				background-color: #B0B0B0;
				float:right;
				width:80%;
				height: 40%;
				padding:2%;
			}
			#links-max
			{
				padding:0.5%;
				font-family: cursive;
				background-color:#505050;
				width:99.5%;
				overflow: auto;
			}
			.projects-max .pic
			{
				max-height:80%;
			}
			#footer
			{
				padding: 0.5%;
				width:99.5%;
				background-color:#5d8aa8;
			}
			a:link
			{
				color: white;
			}
			a:visited
			{
				color: #E8E8E8;
			}
			a:active
			{
				color: #202020;
			}
		</style>
	</head>
	<body>
		<div id="header-max">
			<font face="cursive" style="font-size:150%">Aushadhi !</font>
			<div id="menu">
				<a href="hab.html">Home</a> | <a href="projects.html">About Us!</a> | <a href="#">Contact Us!</a> | <a href="#">Stores!</a> | <a href="#">Register</a>
			</div>
		</div>

<form action="insert_site.php" method="post"
enctype="mutlipart/form-date">
<table bgcolor="White"
 width="500" border="2" cellspacing="2" align="center">
	<tr>
		<td colspan="5" align="center"><h2>Inserting new data:</h2> </td>
	</tr>
	<tr>
		<td align="center">Medicine Name: </td>
		<td><input type="text" name="medicine_name"/></td>
	</tr>
	<tr>
		<td align="center">Medicine Type: </td>
		<td><input type="text" name="medicine_type"/></td>
	</tr>
	<tr>
		<td align="center">Medicine Price: </td>
		<td><input type="text" name="medicine_price"/></td>
	</tr>
	<tr>
		<td align="right"><input type="submit" name="submit" value="
			Add Medicine Now"/></td>
	</tr>
</form>
</body>
</html>

<?php
mysql_connect("localhost","root",""); //localhost,username,password
mysql_select_db("medicines.medicine_db");
//name of the database
if(isset($_POST['submit'])) //if submit button is active/clicked
{
	$medicine_name=mysql_real_escape_string($_POST['medicine_name']);
	$medicine_type=mysql_real_escape_string($_POST['medicine_type']);
	$medicine_price=mysql_real_escape_string($_POST['medicine_price']);
if($medicine_name=='' OR $medicine_type=='' OR $medicine_price=='')
{
	echo "<script>alert('please fill all the fields')</script>";
	exit();
}
else{
//For images $medicine_photo = $_FILES['image_column']['name']
$insert_query="insert into medicines.medicine_db(medicine_name,medicine_type,medicine_price) values ('$medicine_name','$medicine_type','$medicine_price')";
if(mysql_query($insert_query))//to run
	 {	echo "<script>alert('Data Inserted Successfully')</script>";
	 //	echo "Good";
	}
}
}
?>

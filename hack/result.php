
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
		<br>
		<div  id="search-max">
			<center>
				<form method="post"
				action="result.php">
				<input type="text" name="user_query" size"80" placeholder="enter your medicine here" />
				<input type="submit" name="search" value="search now"/>
			</form>

			</center>
		</div>
<hr>

<?php
mysql_connect("localhost","root",""); //localhost,username,password
mysql_select_db("medicines.medicine_db");
if(isset($_POST['search'])){
	$get_value= $_POST['user_query'];
	$result_query="select * from medicines.medicine_db where medicine_name = '$get_value'";
	$run_result=mysql_query($result_query);
    echo '            <h3>Showing Results For : <i>';
    echo $get_value;
    echo '</i></h3><br>';
    ?>
            <table id="med" style="width:100%;padding:2px;font-size: 150%;text-align: center">
            <tr style='background-color:    #00FF00;text-decoration: underline'><td>
            S No.</td><td>
            Name</td>
            <td>Type</td>
            <td>Price(in INR)</td>
            </tr>
            <?php
	if(mysql_num_rows($run_result)<1){
//This means result now found, not even 1 result found
		echo "<center><b>Sorry Not one result found</b></center>";

	}
    $i=1;
	while($row_result=mysql_fetch_array($run_result)){
		$medicine_name=$row_result['medicine_name'];
		$medicine_type=$row_result['medicine_type'];
		$medicine_price=$row_result['medicine_price'];
        $latt=$row_result['la_tt'];
        $long=$row_result['lo_ngt'];
//In This File, the results of medicine will be displayed
        if($i%2==0)
        {
        	echo "<tr style='background-color:#00ffff'><td>
            <a href='show.php?lat=$latt&long=$long'>
            $i</a></td><td>
            <a href='show.php?lat=$latt&long=$long'>
        	$medicine_name</a></td>
        	<td>
            <a href='show.php?lat=$latt&long=$long'>
            $medicine_type</a></td>
        	<td>
            <a href='show.php?lat=$latt&long=$long'>
            $medicine_price</a></td>
            </tr>";
        }
        else
        {
            echo "<tr style='background-color:white;color:white'><td>
            <a href='show.php?lat=$latt&long=$long'>
            $i</a></td><td>
            <a href='show.php?lat=$latt&long=$long'>
            $medicine_name</a></td>
            <td>
            <a href='show.php?lat=$latt&long=$long'>
            $medicine_type</a></td>
            <td>
            <a href='show.php?lat=$latt&long=$long'>
            $medicine_price</a></td>
            </tr>";
        }
        $i++;
}
}
?>
</table>
</body>
<style>
#med a
{
    color:black;
    text-decoration: none;
}

</html>

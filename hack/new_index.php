<html>
	<head>
		<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' />
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
				<a href="index.html">Home</a> | <a href="projects.html">About Us!</a> | <a href="#">Contact Us!</a> | <a href="#">Stores!</a> | <a href="#">Register</a>
			</div>
		</div>
		<br>
		<div  id="search-max">
			<center>
				<form method="get" action="#" style="width:100%">
					<input type="text" id="search" name="search" placeholder="Enter Your Medicine Here">
					<input type="submit" id="search-btn" value="Search">
				</form>
			</center>
		</div>
		<div id="links-max">
			<a href="projects.php?cat=all">All Projects</a> | <a href="projects.php?cat=ongoing">Upcoming  Projects</a> | <a href="projects.php?cat=completed">Completed Projects</a>
			<div style="float:right">
				<a href="signup.php">Sign-Up</a> | <a href="login.php">Log-In</a>
			</div>
		</div>
		<br>
		<center><h3 style="font-family: cursive;">India's Largest Online Database of Medicines !</h3></center>

		<div class="projects-max">
			<p class="desc-left">
					Aushadhi is a small initiative to make medicines Available to Everyone

				<img src="avail.jpg" style="float:right" class="pic" alt="pic here">
			</p>
			<br>

			<p class="desc-right">
				<img src="1.jpg" style="float:left" class="pic" alt="pic here">
				Here you will find any medicine you need to do is enter the medicine name in the search box and bang it will give you the results
			</p>
			<br>

			<p class="desc-left">
					When you enter the medicine name in the search box it will give you the it s location on the google map

				<img src="map.jpg" style="float:right" class="pic" alt="pic here">
			</p>
			<br>
		</div>
		<br>
		<div id="footer">
			<center>
				&copy; 2018 NetHunter Visit:<a href="#">nethunter.org</a> | <a href="#">The Team</a> 
			</center>
		</div>
	</body>
</html>
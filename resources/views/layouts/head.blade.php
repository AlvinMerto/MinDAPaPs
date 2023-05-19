<html>
	<head>
		<meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Carlito:wght@400;700&display=swap" rel="stylesheet">

		<link rel='stylesheet' href="{{ asset('/style/dashboard.style.css') }}"/>

		<script src="https://kit.fontawesome.com/b6c762e6a8.js" crossorigin="anonymous"></script>
	</head>
	<body>
		<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
		<div class='inner-div flex-it'>
			<div class='navigation-div'>
				<h4> NAVIGATION </h4>
				<?php
					$path_info  = $_SERVER["REQUEST_URI"];

			        $thepath    = explode("/",$path_info);

			        $firstpath  = $thepath[2];

			        if ($firstpath == "page1" || $firstpath == "page2" || $firstpath == "page3" || $firstpath == "page4" || 
			    		$firstpath == "page5" || $firstpath == "page6" || $firstpath == "page7" || $firstpath == "page8") {
			        	$firstpath = "status";
			        }
				?>
				<ul>
					<li class='label'> GRAPHS </li>
					<li class="<?php if($firstpath == 'status') { echo 'selected'; }?>"> <a href="{{ route('page1') }}"> On-going ODA PaP in Mindanao Status in Graphs </li>
					<li id='btn1' class="<?php if($firstpath == 'loans') { echo 'selected'; }?>"> 
						<a href="{{ route('loans') }}" > Loans/Grants </a> 
					</li> 
					<li class="<?php if($firstpath == 'projects') { echo 'selected'; }?>"> <a href="{{ route('projects') }}"> Number of Projects </a> </li>

					<li class='label'> OTHER PAGES </li>
					<li> <a href="{{ route('fetch') }}"> Graphical Map of the List of ODA Projects in Mindanao </a> </li>
					<li> <a href="{{ route('allpartners') }}"/> ODA Directory </a> </li>
					<li class='label'> VIDEOS </li>
					<li> <a href="{{ asset('/videos/teaser.mp4') }}" target="_blank"/>Teaser Video</a> </li>
					<!-- <li> Number of Projects per Sector </li>
					<li> Number of Projects per Region by Agency </li> -->
				</ul>
			</div>
<html>
<head>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel='stylesheet' href="{{ asset('style/dashboard.style.css') }}"/>
</head>
<body style='overflow: auto;'>
	<div style='background: #fff; padding:20px;'>
		<div style='overflow: hidden;'>
			<form method="post" action="{{ route('updateoda') }}" enctype='multipart/form-data'>
				@csrf
				<input type='text' class='thesearchtxts' name='thesearchtxts'/> <br/>
				<input type='submit' value='Search' class='thesearchbtn' name='searchbtn'/>
			</form>
		</div>
		{{Session::get('msg')}}
		<hr/>	

		<div>
			<?php // var_dump($result); ?>
			<ul id='thelistsofresults'>
				<?php
					$batchids = [];
					foreach($result as $res) {
						array_push($batchids, $res->projectid);
						echo "<li>";
							echo "<p> <strong>".$res->projecttitle."</strong> </p>";
							echo "<p>".$res->projectlocationtext."</p>";
							if (!$isupdate) {
								echo "<a href='".url('')."/updateoda/{$res->projectid}' target='_blank'> view </a>";
							} else {
								echo "<div class='theinputs'>";
									echo "<p> Individual Update Update </p>";
									echo "<input type='text' placeholder='Amount'/> <br/>"; 
									echo "<input type='text' placeholder='Type of Amount'/> <br/>"; 
									echo "<input type='text' placeholder='Currency'/> <br/>"; 
									echo "<input type='text' placeholder='Proposed project cost'/> <br/>"; 
									echo "<textarea placeholder='Recent Update'></textarea><br/>";
									echo "<input type='text' placeholder='Agency Website'/><br/>";
									echo "<input type='text' placeholder='Agency Project Database website'/><br/>";
									echo "<button> Update </button>";
								echo "</div>";
							}
						echo "</li>";
					}

					if (!$isupdate) {
						echo "<form action='".route('updateentry')."' method='post' enctype='multipart/form-data'>";?>
							@csrf
						<?php
							echo "<div class='theinputs'>";
								echo "<p> Batch Update </p>";
								echo "<input type='hidden' name='batchids' value='".json_encode($batchids)."'/>";
								echo "<input type='text' name='amount' placeholder='Amount'/> <br/>"; 
								echo "<input type='text' name='typeofamount' placeholder='Type of Amount'/> <br/>"; 
								echo "<input type='text' name='currency' placeholder='Currency'/> <br/>"; 
								echo "<input type='text' name='proposedcost' placeholder='Proposed project cost'/> <br/>"; 
								echo "<textarea name='recentupdate' placeholder='Recent Update'></textarea><br/>";
								echo "<button name='updatebtn'> Update </button>";
							echo "</div>";
						echo "</form>";
					}
				?>
			</ul>
		</div>
	</div>
</body>
</html>
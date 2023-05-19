<!-- <div class='statusdiv'> <p> <?php // echo $donor[0]->projectlocationtext; ?> </p> </div> -->
<?php 
	echo "<ul id='detlist' class = 'thedetailslist'>";
		foreach($donor as $d) {
			echo "<li data-odaid='{$d->projectid}' data-agencyid='{$d->projectdonorid}' class='{$d->projectdonorid}'>";
				// echo "<p class='donor'>".$d->projectdonortext."</p>";
				echo "<p class='{$d->projectdonorid}' style='padding-left: 15px;'>".$d->projectdonortext."</p>";
				echo "<p class='thetitle'>".$d->projecttitle."</p>";
				echo "<p class='sectortext'>".$d->sector."</p>";
				// echo "<p class='thedesc'>".$d->projectdesc."</p>";
				// echo "<p class='thelocation'> <i class='fa fa-map-marker' aria-hidden='true' style='color: blue;''></i> ".$d->projectlocationtext."</p>";
				// echo "<p class='statustext'> <i class='fa fa-spinner' aria-hidden='true'></i> ".$d->projectstatus." </p>";

				if ($d->projectdonorid == "nzaid") {
					echo "<span><a style='margin-top: 15px; padding: 10px;font-size: 18px;text-decoration: none;color: #5f5f5f;' id='watchvid' target='_blank' href='".asset('/videos/nz.mp4')."' data-vidurl='eu.mp4' style='margin-top: 15px; padding: 10px;'> <i class='fa fa-video-camera' aria-hidden='true' style='color: #20c01b;'></i> &nbsp; Watch Video </a></span>";
				}

				if ($d->projecttitle == "[GRANT UNDER ASEP] Renewable Energy Technology to Increase Value-Added of Seaweeds in Tawi-Tawi (RETS)") {
					echo "<span><a style='margin-top: 15px; padding: 10px;font-size: 18px;text-decoration: none;color: #5f5f5f;' id='watchvid' target='_blank' href='".asset('/videos/eu.mp4')."' data-vidurl='eu.mp4' style='margin-top: 15px; padding: 10px;'> <i class='fa fa-video-camera' aria-hidden='true' style='color: #20c01b;'></i> &nbsp; Watch Video </a></span>";
				}
			echo "</li>";
		}
	echo "</ul>";
?>
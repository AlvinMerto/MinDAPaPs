<div>

	<h1 style="margin-top: 0px; margin-bottom: 0px;padding-top: 10px;padding-bottom: 20px;"> 
		<?php 
			// echo $donor[0]->projectdonortext;
			echo $agencyname[$donorid]; 
		?>
		<i class="fa fa-times closethis" aria-hidden="true" style='float: right;'></i> 
	</h1>
	<!-- <button> Subscribe </button> -->
	<div class='tab-div'>
		<ul>
			<li class='tab-div-selected' data-divid='agencyinformation'> Agency Information </li>
			<li data-divid='abouttheproject'> About the Project </li>
			<li> <a href="{{ route('loans') }}" class='seegraphbtn'> See Graph </a> </li>
		</ul>
	</div>

	<div id='agencyinformation' class='divcommonname'>
		<div id='webinfo'>
			<h1 style='padding-left:30px;'> Website Information </h1>
			<table>
				<tr>
					<td> Agency Website: </td>
					<td> <?php echo $donorinformation[$donorid]['agencyinformation']['agencywebsite']; ?> </td>
				</tr>
				<tr>
					<td> Agency Database Site: </td>
					<td> <?php echo $donorinformation[$donorid]['agencyinformation']['agencydbwebsite']; ?> </td>
				</tr>
			</table>
		</div>

		<!-- div class='thesummarytable'>
			<h1> Summary </h1>
			<div>
				<h4> Total Loans and Projects </h4>
				<table>
					<tr>
						<th> Agency </th>
						<th> Loan Amount </th>
						<th> Grand Amount (USD) </th>
						<th> Grand Total (USD) </th>
					</tr>
					<tr>
						<td> <?php //echo $agencyname[$donorid]; ?> </td>
						<td> <?php //echo number_format($donorinformation[$donorid]['summary']['totalloansandprojects']['loanamount'],2); ?> </td>
						<td> <?php //echo number_format($donorinformation[$donorid]['summary']['totalloansandprojects']['grandamount'],2); ?> </td>
						<td> <?php //echo number_format($donorinformation[$donorid]['summary']['totalloansandprojects']['grandtotal'],2); ?> </td>
					</tr>
				</table>
			</div>

			<div>
				<h4> Total Number of Projects and Total Amount (USD) </h4>
				<table>
					<tr>
						<th> Agency </th>
						<th> Number of Projects </th>
						<th> Total Amount (USD) </th>
						<th> Amount Percentage </th>
					</tr>
					<tr>
						<td> <?php //echo $agencyname[$donorid]; ?> </td>
						<td> <?php //echo $donorinformation[$donorid]['summary']['totalnumberofprojectsandtotalamount']['numberofprojects']; ?> </td>
						<td> <?php //echo number_format($donorinformation[$donorid]['summary']['totalnumberofprojectsandtotalamount']['totalamount'],2); ?> </td>
						<td> <?php //echo $donorinformation[$donorid]['summary']['totalnumberofprojectsandtotalamount']['amountpercentage']; ?> </td>
					</tr>
				</table>
			</div>

			<div>
				<h4> Number of Projects by Type of Assistance </h4>
				<table>
					<tr>
						<th> Agency </th>
						<th> Grant </th>
						<th> Loan </th>
					</tr>
					<tr>
						<td> <?php //echo $agencyname[$donorid]; ?> </td>
						<td> <?php //echo $donorinformation[$donorid]['summary']['numberofprojectsbytypeofasst']['grant']; ?> </td>
						<td> <?php //echo $donorinformation[$donorid]['summary']['numberofprojectsbytypeofasst']['loan']; ?> </td>
					</tr>
				</table>
			</div>

			<div>
				<h4> Number of Projects per Region </h4>
				<table>
					<tr>
						<th> Agency </th>
						<th> Unspecified </th>
						<th> Region 9 </th>
						<th> Region 10 </th>
						<th> Region 11 </th>
						<th> Region 12 </th>
						<th> Region 13 </th>
						<th> BARMM </th>
					</tr>
					<tr> 
						<td> KOICA </td>
						<td> <?php //echo $donorinformation[$donorid]['summary']['numberofprojectsperregion']['unknown']; ?> </td>
						<td> <?php //echo $donorinformation[$donorid]['summary']['numberofprojectsperregion']['region9']; ?> </td>
						<td> <?php //echo $donorinformation[$donorid]['summary']['numberofprojectsperregion']['region10']; ?> </td>
						<td> <?php //echo $donorinformation[$donorid]['summary']['numberofprojectsperregion']['region11']; ?> </td>
						<td> <?php //echo $donorinformation[$donorid]['summary']['numberofprojectsperregion']['region12']; ?> </td>
						<td> <?php //echo $donorinformation[$donorid]['summary']['numberofprojectsperregion']['region13']; ?> </td>
						<td> <?php //echo $donorinformation[$donorid]['summary']['numberofprojectsperregion']['barmm']; ?> </td>
					</tr>
				</table>
			</div>
		</div> -->
	</div>

	<div id='abouttheproject' class='divcommonname hidethis'>
		<?php // var_dump($donor); ?>
		<div id='webinfo'>
			<h1 style='padding-left:30px;'> Project Information </h1>
			
			<table class=''>
				<tr>
					<td> Donor Agency </td>
					<td> <?php echo $agencyname[$donorid]; ?> </td>
				</tr>
				<tr>
					<td> Project Title: </td>
					<td> <?php echo $donor[0]->projecttitle; ?> </td>
				</tr>
				<tr>
					<td> Description: </td>
					<td> <?php echo $donor[0]->projectdesc; ?> </td>
				</tr>
				<tr> 
					<td> Sector: </td>
					<td> <?php echo $donor[0]->sector; ?> </td>
				</tr>
				<tr>
					<td> Location: </td>
					<td> <?php echo $donor[0]->projectlocationtext; ?> </td>
				</tr>
				<tr>
					<td> Recent Update: </td>
					<td> <?php echo $information[0]->recentupdate; ?> </td>
				</tr>
				<tr>
					<td>  Status: </td>
					<td> <?php echo $donor[0]->projectstatus; ?> </td>
				</tr>
				<tr>
					<td> Proposed Project Cost: </td>
					<td> <?php echo number_format($information[0]->proposedprojectcost,2); ?> </td>
				</tr>
				<tr>
					<td>  Assistance Amount: </td>
					<td> <?php echo number_format($information[0]->amount,2); ?> </td>
				</tr>
				<tr>
					<td>  Currency: </td>
					<td> <?php echo $information[0]->currency; ?> </td>
				</tr>
				<tr>
					<td> Type of Assistance: </td>
					<td> <?php echo $information[0]->typeofamount; ?> </td>
				</tr>
				<tr>
					<td> Website Link: </td>
					<td>
						<?php 
							if(strlen($information[0]->websitelink)>0) {
								echo $information[0]->websitelink;
							} else {
								echo "---";	
							}
						?> 
					</td>
				</tr>
				<tr>
					<td> Database Link: </td>
					<td>
						<?php 
							if(strlen($information[0]->websitedatabase)>0) {
							 	echo $information[0]->websitedatabase;
							} else {
							 	echo "---";	
							}
						?> 
					</td>
				</tr>
			</table>
		</div>

	</div>

</div>
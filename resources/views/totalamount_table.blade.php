<h4> Number of Projects and Total Amount (USD) per Agency </h4>

<table class='description'>
	<thead>
		<th> </th>
		<th style='padding: 15px 0px;'> Number of Projects </th>
		<th> Total Amount (USD) </th>
	</thead>
	<tbody>
		<?php
			$agencyidx   = ['ADB', 'AUS', 'EU','FAO','GIZ','JICA','KOICA','NEDA','USAID','WORLDBANK'];

			foreach($data as $key => $d) {
				$a_idx = array_search($key,$agencyidx);
				echo "<tr id='yawa_{$a_idx}' class='therow_tr'>";
					echo "<td>";
						echo $key;
					echo "</td>";
					$idx = 0;
					foreach($d as $dd) {
						echo "<td class='puta_{$idx} therow'>";
							echo number_format($dd);
						echo "</td>";
						$idx++;
					}
				echo "</tr>";

			}
		?>
	</tbody>
</table>
<div class='desc_div'>
	<h4> Number of Projects per Sector </h4>
	<table class='description_tbl'>
		<thead>
			<th> Sector </th>
			<th style='padding: 15px 0px;'> Number of Projects </th>
			<th style='padding: 15px 0px;'> Percentage </th>
		</thead>
		<tbody>
			<?php
				$idx = [
		            "Multi-sectoral",
		            "Energy",
		            "Agriculture",
		            "Transport",
		            "DRR",
		            "Public Sector Management",
		            "Economic Development",
		            "Environment",
		            "Social protection",
		            "Agrbusiness financing",
		            "Health",
		            "Renewable energy",
		            "Grand Total"
		        ];

				foreach($data as $key => $d) {
					$idx_i = array_search($key,$idx);

					echo "<tr class='row_{$idx_i} therow'>";
						echo "<td>";
							echo $idx[$idx_i];
						echo "</td>";
						foreach($d as $dd) {
							echo "<td>";
								echo $dd;
							echo "</td>";
						}
						// echo "<td>";
						// 	echo $key;
						// echo "</td>";
						// echo "<td>";
						// 	echo $d;
						// echo "</td>";
					echo "</tr>";
				}
			?>
		</tbody>
	</table>
</div>
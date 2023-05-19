<h4> Number of Projects per Region by Agency </h4>
<table class='description'>
	<thead>
		<th> AGENCY </th>
		<th style='padding: 15px 0px;'> NUMBER OF PROJECTS </th>
	</thead>
	<tbody>
		<?php
			$idx = ['ADB', 'AUS', 'EU','FAO','GIZ','JICA','KOICA','NEDA','USAID','WORLDBANK'];

			foreach($data as $key => $d) {
				$idx_i = array_search($key,$idx);

				echo "<tr class='row_{$idx_i} therow' >";
					echo "<td>";
						echo $key;
					echo "</td>";
					echo "<td>";
						echo $d;
					echo "</td>";
				echo "</tr>";
			}
		?>
	</tbody>
</table>
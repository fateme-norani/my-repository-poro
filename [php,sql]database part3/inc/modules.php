<?php

require_once('inc/db.php');

function show_array($arr){
	echo '<pre>';
	print_r($arr);
	echo '</pre>';
}

function show_table($rows){
	echo '<table border="1" >';

	echo "<tr>";
	foreach($rows[0] as $title=>$fields){
		echo "<th>$title</th>";
	}
	echo "</tr>";

	foreach($rows as $row){
		echo "<tr>";
		foreach($row as $fields){
			echo "<td>$fields</td>";
		}
		echo "</tr>";
	}

	echo '</table>';
}

function show_poroduct($kalaha){
	foreach($kalaha as $kala){
		echo "
			<div class='row w19'>
            	<div class='ax left'>
					<img src='images/$kala[ax]' width='150' height='150'  />
				</div>
				<div class='shadow'></div>
                <div class='text last ml5 '>
					<h3>$kala[kalaname]</h3>
					<div class='matn'>$kala[text]</div>
					<div class='more'>$kala[more]</div>
					<button type='button' value=''/>
				</div>
				<div class='clear'></div>
			</div>
		";	
	}
}

<?php

echo "<table border =\"1\" style='border-collapse: collapse'>";
echo "<tr><td></td>";
	for($num = 1; $num <= $_POST["size"];$num++){
	    echo "<td>$num</td>";
	}
	echo "</tr>";	
	for ($row=1; $row <= $_POST["size"]; $row++) { 
		echo "<tr><td>$row</td> ";
		for ($col=1; $col <= $_POST["size"]; $col++) { 
		   $p = $col * $row;
		   echo "<td>$p</td> \n";
		   	}
	  	    echo "</tr>";
		}
		echo "</table>";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Even Numbers</title>
    <style>
		body{
			background-color: #66ffd1;
		}
        table {
			margin-left: auto;
			margin-right: auto;
			border-collapse: separate;
			border-radius: 10px;
			border: 1px solid black;
			padding: 20%;
			transition: 3s;
        }
		
		.main{
			width: 80%;
			background-color: #ffffff;
		}
		
		.label{
			Background-color:#d4d4d4;
		}

        table, th, td {
            border: 1px solid black;
            padding: 5px;
        }
		
		.tblOne tr:nth-child(odd) {
			background-color: #B4F8C8;
		}
		
		.tblOne tr:nth-child(even) {
			background-color: #FFAEBC;
		}
		
		.tblTwo tr:nth-child(odd) {
			background-color: #B4F8C8;
		}
		
		.tblTwo tr:nth-child(even) {
			background-color: #FFAEBC;
		}

		h1{
			font-family: "Lucida Fax";
			text-align: center;
			border-radius: 15px;
			background:#ACF7FF;
			padding: 10px;
		}
		.tblOne{
			width: 50%;
			text-align: center;
		}
		.tblTwo{
			width: 30%;
			text-align: center;
		}
		
		td:hover{
			background-color: #D490FC;
			transition: 0.3s;
		}
		
    </style>
</head>
<body>
	<div>
		<table border="1" class="main" style="border-collapse:collapse;">
			<tr>
				<td class="label"><strong>Name:</strong></td>
				<td>CARAMOAN, JOHN MATTHEW C.</td>
				<td class="label"><strong>:Topic</strong></td>
				<td>Chapter 2 Functions and Control Structures</td>
			</tr>
			<tr>
				<td class="label"><strong>Activity No. :</strong></td>
				<td>Activity 2</td>
				<td class="label"><strong>Date:</strong></td>
				<td>06/19/2023</td>
			</tr>
			</tr>
		</table>
		</div>
		<br><br>
		
	<!--TABLE FOR EVEN NUMBERS-->
	<h1>SET B: Even numbers from 1-100</h1>
    <table class="tblOne">
        <?php
        $count = 0; // Counter for columns
        for ($i = 2; $i <= 100; $i += 2) {
            if ($count == 0) {
                echo "<tr>";
            }
            
            echo "<td>$i</td>";
            
            $count++;
            
            if ($count == 10) {
                echo "</tr>";
                $count = 0;
            }
        }
        
        // Add empty cells to complete the last row if necessary
        if ($count != 0) {
            $remainingCells = 5 - $count;
            for ($j = 0; $j < $remainingCells; $j++) {
                echo "<td></td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
	
	<br><br>
	
	<!--TABLE FOR FAHRENHEIT TO CELSIUS-->
	<h1>Celsius to Fahrenheit (0° to 100° Celsius)</h1>
	<table class="tblTwo">
        <tr>
            <th>Fahrenheit</th>
            <th>Celsius</th>
        </tr>
        <?php
        for ($fahrenheit = 0; $fahrenheit <= 100; $fahrenheit++) {
            $celsius = ($fahrenheit - 32) * 5/9;
            echo "<tr><td> $fahrenheit"."°"."</td><td>".number_format($celsius, 2, '.', '' )."°</td></tr>";
        }
        ?>
    </table>
	
	<br><br>
	
	<!--TABLE FOR CELSIUS TO FAHRENHEIT-->
	<h1>Fahrenheit to Celsius (0° to 100° Fahrenheit)</h1>
	<table class="tblTwo">
        <tr>
            <th>Celsius</th>
            <th>Fahrenheit</th>
        </tr>
        <?php
        for ($celsius = 0; $celsius <= 100; $celsius++) {
            $fahrenheit = ($celsius * 9/5) + 32;
            echo "<tr><td>$celsius"."°"."</td><td>$fahrenheit"."°"."</td></tr>";
        }
        ?>
    </table>
</body>
</html>

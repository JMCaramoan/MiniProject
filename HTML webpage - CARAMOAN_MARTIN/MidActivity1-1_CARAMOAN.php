<!DOCTYPE HTML>
<html>
	<head>
		<title> Activity 1 </title>
		
		<style>
			body{
				background:url('https://i.pinimg.com/originals/85/6f/31/856f31d9f475501c7552c97dbe727319.jpg');
				background-repeat: no-repeat;
				background-size: auto;
			}
			table{
				margin: auto;
				border-collapse:collapse;
				width:100%;
			}
			.label{
				font-weight:bold;
			}
			.problem{
				color:red;
				font-family: Georgia;
				transition: 0.5s;
			}
			.problem:hover{
				color: blue;
				text-shadow: 3px 4px #888888;
			}
			.tblcol{
				background-color:#f23f57;
				border: 1px solid;
			}
		</style>
	</head>
	
	<body>
		<div>
		<table border="1" style="border-collapse:collapse;">
			<tr>
				<td class="label tblcol">Name:</td>
				<td>CARAMOAN, JOHN MATTHEW C.</td>
				<td class="label tblcol">Topic</td>
				<td>Chapter 1 Introduction to PHP</td>
			</tr>
			<tr>
				<td class="label tblcol">Activity No.</td>
				<td>Activity 1</td>
				<td class="label tblcol">Date</td>
				<td>06/15/2023</td>
			</tr>
			</tr>
		</table>
		</div>
		
		<h1 class="problem">Problem 1</h1>
		<?php
			$Days = array
			(
				"Sunday",
				"Monday",
				"Tuesday",
				"Wednesday",
				"Thursday",
				"Friday",
				"Saturday",
			);
			
			echo "<p class='label'>The days of the week in Enlish are:</p>";
			
			echo $Days[0],", ", $Days[1],", ", $Days[2],", ", $Days[3],", ", $Days[4],", ", $Days[5],", <i>and</i> ", $Days[6],".";
			
			echo "<br><br>";
			
			$Days[0] = "Dimanche";
			$Days[1] = "Lundi";
			$Days[2] = "Mardi";
			$Days[3] = "Marcredi";
			$Days[4] = "Jeudi";
			$Days[5] = "Vendredi";
			$Days[6] = "Samedi";
			
			echo "<p class='label'>The days of the week in French are:</p>";
			
			echo $Days[0],", ", $Days[1],", ", $Days[2],", ", $Days[3],", ", $Days[4],", ", $Days[5],", <i>and</i> ", $Days[6],".";
		?>
		
		<br><br><hr>
		
		<h1 class="problem">Problem 2</h1>
		<?php
			$Number = 55.8691;
			$Rounded = round($Number);
			$Ceiled = ceil($Number);
			$Floored = floor($Number);
			
			echo "<p><strong>Original number:</strong> ", $Number,"</p>";
			
			echo "<p><strong>Round function:</strong> ", $Rounded,"</p>";
			
			echo "<p><strong>Ceil function:</strong> ", $Ceiled,"</p>";
			
			echo "<p><strong>Floor function:</strong> ", $Floored,"</p>";
		?>
		
		<br><br><hr>
		
		<h1 class="problem">Problem 3</h1>
		<?php
			$AnotherNumber = "as";
			
			if (is_numeric($AnotherNumber)) {
				$AnotherNumber = round($AnotherNumber);
			
				echo "<p><strong>Number:</strong> ",$AnotherNumber;
			
				($AnotherNumber % 2 == 0) ? $Result =
				"The number $AnotherNumber is <strong>even</strong>. " : $Result = "The number $AnotherNumber is <strong>odd</strong>.";
				echo "<p>", $Result, "</p>";
	
			}
			
			else{
				$result = "The variable does not contain a number.";
				
				echo "$result";
			}
			
			
		?>
	</body>
</html>
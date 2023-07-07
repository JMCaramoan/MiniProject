<!DOCTYPE HTML>
<html>
	<head>
		<title> Midterm Activity 3 </title>
		<style>
		body{
			font-family: courier new;
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
		
		td{
			height:40px;
		}
		.main{
			width: 80%;
			background-color: #ffffff;
		}
		
		.label{
			Background-color:#d4d4d4;
		}
		
		p{
			text-align:center;
			font-size: 1.55em;
		}
		h1{
			margin: auto;
			padding: 10px;
			text-align:center;
			display: inline-block;
			border: 10px solid #FDED5E;
			background-color: #9185FB;
			transition: 0.7s;
		}
		
		h1:hover{
			background-color: #3C3EFB;
		}
		
		h2{
			text-decoration: underline;
		}
		
		div{
			margin: auto;
			display:flex;
		}

		
    </style>
	</head>
	
	<body>
	
		<table border="1" class="main" style="border-collapse:collapse;">
			<tr>
				<td class="label"><strong>Name:</strong></td>
				<td>CARAMOAN, JOHN MATTHEW C.</td>
				<td class="label"><strong>Topic:</strong></td>
				<td>Chapter 1 - 3</td>
			</tr>
			<tr>
				<td class="label"><strong>EXAM :</strong></td>
				<td>Midterm Examination</td>
				<td class="label"><strong>Date:</strong></td>
				<td>06/30/2023</td>
			</tr>
			</tr>
		</table>
		
		<br><br>
		
		
		<div><h1>Midterm EXAM</h1></div>
		<h2><center>Problem 1</center></h2>
		
		<?php
			$inputUser = "Caramoan1502";
			$inputSplit = str_split($inputUser);
			
			$numbersCount = 0;
			$lettersCount = 0;
			
			$special = preg_match('@[^\w]@', $inputUser);
			
			
			if(strlen($inputUser) >=13)
			{
				echo "<p>String must be maximum of 12 letters</p>";
			}
			else if($special)
			{
				echo "<p>Special character is now allowed.</p>";
			}
			else{
				foreach($inputSplit as $split)
				{
					if(is_numeric($split))
					{
						$numbersCount++;
					}
					else
					{
						$lettersCount++;
					}
				}
			
			echo "<p>Value: $inputUser </p>"; 
			echo "<p>OutPut: There string contains $lettersCount letters and $numbersCount numbers.</p>";
			}
			
		?>
		<h2><center>Problem 2</center></h2>
		<?php
		$input2 = "1234567";
		$inputLength = strlen($input2);
		
		if(is_numeric($input2))
		{
			if($inputLength >= 8)
			{
				echo "<p>Number must be maximum of 7 digits";
			}
			else{
				switch($inputLength)
				{
					case 1:
						echo "<p>Value: $input2 <br>";
						echo "Output: Ones";
						break;
					case 2:
						echo "<p>Value: $input2 <br>";
						echo "Output: Tens";
						break;
					case 3:
						echo "<p>Value: $input2 <br>";
						echo "Output: Hundreds";
						break;
					case 4:
						echo "<p>Value: $input2 <br>";
						echo "Output: One Thousands";
						break;
					case 5:
						echo "<p>Value: $input2 <br>";
						echo "Output: Ten Thousands";
						break;
					case 6:
						echo "<p>Value: $input2 <br>";
						echo "Output: Hundred Thousands";
						break;
					case 7:
						echo "<p>Value: $input2 <br>";
						echo "Output: Millions";
						break;
					default:
						echo "<p>Number must be maximum of 7 digits";
				}
			}
		}
		else{
			echo "<p>Must be only a number";
		}
		?>
		
		
	</body>
</html>
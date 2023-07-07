<!DOCTYPE HTML>
<html>
	<head>
		<title> FINALS ACTIVITY 1 </title>
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
			border: 5px solid #FDED5E;
			background-color: #9185FB;
			transition: 0.7s;
		}
		
		h1:hover{
			background-color: #3C3EFB;
			border: 5px solid #9185FB;
		}
		
		div{
			margin: auto;
			display:flex;
		}
		form{
			text-align:center;
			margin-left: 500px;
			margin-right:500px;
			border: 2px solid red;
			padding: 10px;
			box-shadow: 4px 3px grey;
			transition:0.3s;
		}
		form:hover{
			border: 2px solid green;
			box-shadow: 6px 5px grey;
		}
		
		label{
			font-size: 17px;
			font-family: verdana;
		}
		.button{
			Font-size: 20px;
			background-color: #ffffff;
			border: 2px solid black;
			transition: 0.3s;
		}
		
		.button:hover{
			Font-size: 21px;
			background-color: grey;
			border: 2px dotted black;
		}
		
		input:hover{
			transition: 0.3s;
			border: 2px solid grey;
		}
		
		.valid
		{
			font-size: 25px;
			color: limegreen;
		}
		
		.invalid
		{
			font-family:tahoma;
			font-size: 2em;
			color: rgb(199,16,26);
		}
		
		
    </style>
	</head>
	
	<body>
	
		<table border="1" class="main" style="border-collapse:collapse;">
			<tr>
				<td class="label"><strong>Name:</strong></td>
				<td>CARAMOAN, JOHN MATTHEW C.</td>
				<td class="label"><strong>Topic:</strong></td>
				<td>Chapter 4 Handling User Input</td>
			</tr>
			<tr>
				<td class="label"><strong>Activity No. :</strong></td>
				<td>Activity 1</td>
				<td class="label"><strong>Date:</strong></td>
				<td>07/05/2023</td>
			</tr>
			</tr>
		</table>
		
		<br><br>
		
		
		<div><h1>Activity 1</h1></div>
		<br>
		<h2><center>SET B - Mobile Phone Numbers and Strong / Weak Password Validation.</center></h2>
		
		
		<form method="POST" action="">
			<label for="phone"> Phone No: </label>
			<input type = "text" name="phone" value="09"placeholder="Enter your phone number" required>
			<br><br>
			<label for="username">Username: </label>
			<input type="text" id="username" name="username" placeholder="Your Username" required><br>

			<label for="password">&nbsp;Password: </label>
			<input type="text" id="password" name="password" placeholder="Your password"  required><br><br>
			<input class="button" type="submit" value="Submit">
		</form>
		
		<br>
		<?php
	if($_SERVER['REQUEST_METHOD'] === 'POST')
	{
		$phoneNum = $_POST['phone'];
		
		$phoneNum = preg_replace('/\D/',"",$phoneNum);
		
		if(preg_match('/^[0-9]{11}$/',$phoneNum))
		{
			echo "<center>Valid phone number: +63".substr($phoneNum,1,10)." <br>";
			
			$newNum = intval(substr($phoneNum,1,3));
			
			if(intval(mb_substr($phoneNum,0,1)) != 0)
			{
				echo "<br> Invalid input";
			}
			
			else if(
			($newNum == 917) || 
			($newNum == 905) ||
			($newNum == 906) ||
			($newNum == 915) ||
			($newNum == 916) ||
			($newNum == 917) ||
			($newNum == 926) ||
			($newNum == 927) ||
			
			($newNum == 935) ||
			($newNum == 936) ||
			($newNum == 937) ||
			($newNum == 945) ||
			
			($newNum == 953) ||
			($newNum == 954) ||
			($newNum == 955) ||
			($newNum == 956) ||
			
			($newNum == 965) ||
			($newNum == 966) ||
			($newNum == 967) ||
			
			($newNum == 975) ||
			($newNum == 976) ||
			($newNum == 977) ||
			($newNum == 978) ||
			($newNum == 979) ||
			
			($newNum == 995) ||
			($newNum == 996) ||
			($newNum == 997)
				)
			{
				echo "<br> The mobile number is from GLOBE/TM";
			}
			
			else if(
			($newNum == 907) || 
			($newNum == 908) ||
			($newNum == 909) ||
			($newNum == 910) ||
			($newNum == 912) ||
			($newNum == 918) ||
			($newNum == 919) ||
			($newNum == 920) ||
			
			($newNum == 921) ||
			($newNum == 922) ||
			($newNum == 923) ||
			($newNum == 924) ||
			($newNum == 925) ||
			
			($newNum == 928) ||
			($newNum == 929) ||
			($newNum == 930) ||
			($newNum == 931) ||
			($newNum == 932) ||
			($newNum == 933) ||
			($newNum == 934) ||
			
			($newNum == 938) ||
			($newNum == 939) ||
			($newNum == 940) ||
			
			($newNum == 941) ||
			($newNum == 942) ||
			($newNum == 943) ||
			($newNum == 946) ||
			($newNum == 947) ||
			($newNum == 948) ||
			($newNum == 949) ||
			($newNum == 950) ||
			($newNum == 951) ||
			
			($newNum == 961) ||
			($newNum == 973) ||
			($newNum == 974) ||
			($newNum == 998) ||
			($newNum == 999) 
				)
			{
				echo "<br> The mobile number is from SMART/TALK&TEXT/SUN";
			}
			
			else
			{
				echo "<br> Invalid input";
			}
		}
		else
		{
			echo "<center><p class='invalid'>Invalid Phone number. Enter a 11-digit number only</p> <br>";
		}
	}
?>
		<br>
		
		<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $errors = [];

        // Password must contain a maximum of 8 characters only.
        if (strlen($password) > 8) {
            $errors[] = '<p class="invalid">Invalid input. Password must contain a maximum of 8 characters only.</p>';
        }

        // Special characters are not allowed. Password must contain alphanumeric only.
        if (!ctype_alnum($password)) {
            $errors[] = '<p class="invalid">Invalid input. Special characters are not allowed.</p>';
        }

        // Password must contain an uppercase letter/s.(MAX 2 capital letters)
        if (preg_match_all("/[A-Z]/", $password) > 2 ) {
            $errors[] = '<p class="invalid">Invalid input. Password must contain at most 2 uppercase letters.</p>';
        }
		
		if(preg_match_all("/[A-Z]/", $password) <= 0)
		{
			$errors[] = '<p class="invalid">Invalid input. Password must contain at most 2 uppercase letters.</p>';
		}

        // The password must not be similar to the username.
        if (stristr($password, $username)) {
            $errors[] = '<p class="invalid">Invalid input. The password must not be similar to the username.</p>';
        }

        if (empty($errors)) {
            echo '<p class="valid">Valid password.</p> <br><p>'.$password.'</p>';
        } else {
            foreach ($errors as $error) {
                echo "$error";
            }
        }
    }
    ?>
		
		
		
	</body>
</html>
<!DOCTYPE HTML>
<html>
<head>
<title> CIP 1102 MIDTERM EXAM </title>
<style>
	table{
	width: 70%;
	text-align: center;
	height: 8vh;
	
	font-family: monospace;
	border-color: grey;
	border-style: groove;
}
th, td{
	border-radius: 5px;
	border: 1px solid;
	font-size:20px;
	padding: 5px;
}

body{
	background-size: auto;
	color:black;
	background-repeat: no-repeat;
	background-color: #cbf5f1;
}

.design {
	padding-left:100px;
	padding-right: 100px;
	padding-top: 50px;
	padding-bottom: 50px;
	font-size:1.50em;
}

.bgc { 
	background-color: #65f0e2;
}

tr:hover {background-color: #b3b3b3;}
</style>
</head>

<body>
<!--Header-->
<center>
<table>
	<tr>
		<td class="bgc"><b> Name: </b></td>
		<td> Martin, Zach Emmañuelle V. </td>
		<td class="bgc"><b> Topic: </b></td>
		<td> MIDTERM EXAM </td>
	</tr>
	<tr>
		<td class="bgc"><b> Activity No. </b></td>
		<td> Midterm Exam Hands-On </td>
		<td class="bgc"><b> Date </b></td>
		<td> 06/30/2023 </td>
	</tr>
</table>

<!--MIDTERM EXAM-->
<br>
<h1>Midterm Hands-On Exam</h1>
<div class="design">
<h2>Problem 1</h2>
<?php 
    $name = "MARTINZ1130";
	$counts = strlen($name);
    $charspecial = preg_match('@[^\w]@', $name);

        if ($counts > 12) {
            echo "<p>The value of the input have exceeded the maximum length of characters. Please Input Again.</p>";
        }
        else if ($charspecial) {
            echo "<p>The value of the input contained special characters that are not accepted. Please Input Again</p>";
        } 
        else {
            $charnum = 0;
            $charcount = 0;

            for ($counter = 0; $counter < $counts; $counter++) {
                if($name[$counter] >= 'a' && $name[$counter] <= 'z' || $name[$counter] >= 'A' && $name[$counter] <= 'Z') {
                    $charcount++;
                }
                else{
                    $charnum++;
                }
            }
			echo "<br><br>Inputed Value: <strong>", $name ,"</strong>";
            echo "<br><br>There are <strong>", $charcount ,"</strong> letters in the output";
			echo "<br>There are <strong>", $charnum ,"</strong> numbers in the output"; 
        }
        ?>
<br><br>		
<h2>Problem 2</h2>
	
<?php
	$number = "113001";
	$charlen = strlen($number);
	$numbers = preg_match('@[0-9]@', $number);
	
	$charspec = preg_match('@[^\w]@', $number);
	$charupper = preg_match('@[A-Z]@', $number);
	$charlower = preg_match('@[a-z]@', $number);

	if ($charlen > 7) {
		echo "<p>The maximum number of characters for the longest numbers that may be entered is seven.</p>";
	}
	else if ($charupper) {
		echo "<p>You should only input numbers.</p>";
	}
	else if ($charlower) {
		echo "<p>You should only input numbers.</p>";
	}
	else if ($charspec) {
		echo "<p>You should only input numbers.</p>";
	}
	else {
		if ($charlen == 1) {
			echo "<p><br>Inputed Value: <strong>", $number ,"</strong></p>";
			echo "<p>The place value of the input is <strong> Ones </strong></p>";
    }
    else if ($charlen == 2) {
        echo "<p><br>Inputed Value: <strong>", $number ,"</strong></p>";
        echo "<p>The place value of the input is <strong> Tens </strong></p>";
    }
    else if ($charlen == 3) {
		echo "<p><br>Inputed Value: <strong>", $number ,"</strong></p>";
        echo "<p>The place value of the input is <strong> Hundreds </strong></p>";
    }
    else if ($charlen == 4) {
        echo "<p><br>Inputed Value: <strong>", $number ,"</strong></p>";
        echo "<p>The place value of the input is <strong> Thousands </strong></p>";
    }
    else if ($charlen == 5) {
        echo "<p><br>Inputed Value: <strong>", $number ,"</strong></p>";
        echo "<p>The place value of the input is <strong> Ten Thousands </strong></p>";
    }
    else if ($charlen == 6) {
        echo "<p><br>Inputed Value: <strong>", $number ,"</strong></p>";
        echo "<p>The place value of the input is <strong> Hundred Thousands </strong></p>";
    }
    else if ($charlen == 7) {
        echo "<p><br>Inputed Value: <strong>", $number ,"</strong></p>";
        echo "<p>The place value of the input is <strong> Millions </strong></p>";
    }
    else {
        echo "<p>OUTPUT: Not Available</p>";
    }
}
?>
</div>
</center>
</body>
</html>
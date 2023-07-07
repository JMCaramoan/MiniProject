<!DOCTYPE HTML>
<html>
<head>
<title> CIP 1102 MIDTERM QUIZ 2 </title>
<style>
body {
	font-size: 20px;
	font-family: cursive;
	background-color: #e8e8e8;
	text-align: center;
}

table {
	width: 70%;
}

.tdesign{	
	border-radius: 10px;
	border: 1px solid black;
}

.header {
	background-color: #b5b8ba;
}

.centered {
	
}

</style>
</head>

<body>
<!--Header-->
<table border = "1" align="center" class = "tdesign">
	<tr class = "nohover">
		<td class ="header"> Name: </td>
		<td> Martin, Zach Emmañuelle V. </td>
		<td class ="header"> Topic: </td>
		<td> Hourglass</td>
	</tr>
	<tr class = "nohover">
		<td class ="header"> Activity No. </td>
		<td> Quiz Hands-On 2 </td>
		<td class ="header"> Date </td>
		<td> 06/29/2023 </td>
	</tr>
</table>

<!--HOURGLASS-->
<br>
<h1 align = "center"> HOUR GLASS</h1>
<br>

<center>
<?php
function drawHourglass($size)
{
    $rowSize = 2 * $size - 1;
    $spaces = 0;
    $stars = $rowSize;
    
    echo "<table>";
    
    // Upper half of the hourglass
    for ($i = 1; $i <= $size; $i++) {
        echo "<tr>";
        
        // Print spaces
        for ($j = 1; $j <= $spaces; $j++) {
            echo "<td></td>";
        }
        
        // Print stars
        for ($j = 1; $j <= $stars; $j++) {
            echo "<td>Z</td>";
        }
        
        echo "</tr>";
        $spaces++;
        $stars -= 2;
    }
    
    // Lower half of the hourglass
    $spaces = $size - 1;
    $stars = 3;
    
    for ($i = $size - 1; $i >= 1; $i--) {
        echo "<tr>";
        
        // Print spaces
        for ($j = 2; $j <= $spaces; $j++) {
            echo "<td></td>";
        }
        
        // Print stars
        for ($j = 1; $j <= $stars; $j++) {
            echo "<td>*</td>";
        }
        
        echo "</tr>";
        $spaces--;
        $stars += 2;
    }
    echo "</table>";
}

// Example usage
$size = 13;
drawHourglass($size);
?>
</center>
</body>
</html>
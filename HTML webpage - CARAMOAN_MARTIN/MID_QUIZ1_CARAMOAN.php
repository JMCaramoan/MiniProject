<html>
<head> 
<title> MIDTERM ACTIVITY 1 </title>
<style>
		body{
			font-family: courier;
			background-color: #B29EEE;
		}
        table {
            margin: auto;
			border-collapse: collapse
        }
		.main{
			background-color:#E397F7;
		}
        
        td {
            width: 20px;
            height: 20px;
            text-align: center;
        }
        
        .white {
            background-color: #FFFFFF;
        }
        
        .red {
            background-color: #FF0000;
            color: #FFFFFF;
        }
		
		.hourglass{
			transition: 3s;
			margin: auto;
		}
		.hourglass:hover{
			transform: rotate(180deg);
		}
    </style>
</head>


<table class="main", border = 1>
	<tr>
		<th> Name: </th>
		<th> CARAMOAN, JOHN MATTHEW C. </th>
		<th> Topic: </th>
		<th> Chapter 2 Functions and Control Structures </th>
	</tr>
	<tr>
		<th> Quiz No. </th>
		<th> Hands-on Quiz 1 </th> 
		<th> Date </th>
		<th> 06/29/23 </th>
	</tr>
</table>


<br><br>

<body>
<h1 align="center"> Number 3: Hourglass</h1>
<br><br><br><br><br>

    <center>
<?php
function drawHourglass($size)
{
    $rowSize = 2 * $size - 1;
    $spaces = 0;
    $stars = $rowSize;
    
    echo "<table class= 'hourglass'>";
    
    
    for ($i = 1; $i <= $size; $i++) {
        echo "<tr>";
        
        
        for ($j = 1; $j <= $spaces; $j++) {
            echo "<td></td>";
        }
        
        
        for ($j = 1; $j <= $stars; $j++) {
            echo "<td>♥</td>";
        }
        
        echo "</tr>";
        $spaces++;
        $stars -= 2;
    }
    
   
    $spaces = $size - 1;
    $stars = 3;
    
    for ($i = $size - 1; $i >= 1; $i--) {
        echo "<tr>";
        
        
        for ($j = 2; $j <= $spaces; $j++) {
            echo "<td></td>";
        }
        
        
        for ($j = 1; $j <= $stars; $j++) {
            echo "<td>†</td>";
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
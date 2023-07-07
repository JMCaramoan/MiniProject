<!DOCTYPE HTML>
<html>
<head>
<title> CIP 1102 MIDTERM ACTIVITY 3 </title>
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
			.tblcol{
				background-color:#f23f57;
				border: 1px solid;
			}
			blockquote{
				font-family: arial;
				font-size: 20px;
			}
			p{
				font-size: 19px;
			}
		
    </style>
</head>

<body>
<!--Header-->
		<table border="1" class="main" style="border-collapse:collapse;">
			<tr>
				<td class="label tblcol"><strong>Name:</strong></td>
				<td>CARAMOAN, JOHN MATTHEW C.</td>
				<td class="label tblcol"><strong>Topic:</strong></td>
				<td>Chapter 3 Manipulating Strings</td>
			</tr>
			<tr>
				<td class="label tblcol"><strong>Activity No. :</strong></td>
				<td>Activity 3</td>
				<td class="label tblcol"><strong>Date:</strong></td>
				<td>09/22/2023</td>
			</tr>
			</tr>
		</table>

<!--DESIDERATA-->
<br>
<h1 align = "center"> Desiderata</h1>
<?php 
$Desiderata = "DESIDERATA Go placidly amid the noise and the haste, and remember what peace there may be in silence. 
As far as possible, without surrender, be on good terms with all persons.
Speak your truth quietly and clearly; and listen to others, even to the dull and the ignorant; they too have their story.
Avoid loud and aggressive persons; they are vexatious to the spirit. If you compare yourself with others, you may become vain or bitter, 
for always there will be greater and lesser persons than yourself. Enjoy your achievements as well as your plans. Keep 
interested in your own career, however humble; it is a real possession in the changing fortunes of time.
Exercise caution in your business affairs, for the world is full of trickery. But let this not blind you to what virtue 
there is; many persons strive for high ideals, and everywhere life is full of heroism. Be yourself. Especially do not feign 
affection. Neither be cynical about love; for in the face of all aridity and disenchantment, it is as perennial as the grass.
Take kindly the counsel of the years, gracefully surrendering the things of youth.
Nurture strength of spirit to shield you in sudden misfortune. But do not distress yourself with dark imaginings. 
Many fears are born of fatigue and loneliness. Beyond a wholesome discipline, be gentle with yourself. You are a child 
of the universe no less than the trees and the stars; you have a right to be here. And whether or not it is clear to you, no 
doubt the universe is unfolding as it should. Therefore be at peace with God, whatever you conceive Him to be. And whatever 
your labors and aspirations, in the noisy confusion of life, keep peace in your soul. With all its sham, drudgery and broken 
dreams, it is still a beautiful world. Be cheerful. Strive to be happy."
?>

<?php 
	echo "<p><blockquote>";
	echo $Desiderata;
	echo "</blockquote></p>";
	
	$ArticleA = substr_count($Desiderata, " a ");
	$ArticleAn = substr_count($Desiderata, " an ");
	$ArticleThe = substr_count($Desiderata, " the ");
	$Total = $ArticleA + $ArticleAn + $ArticleThe;
	
	echo "<br><br><h2>1.) How many words?</h2>";
	echo "<p>There are ".str_word_count($Desiderata)." total words in the poem.</p>";
	echo "<br><h2>2.) How many articles present?</h2>";
	echo "<p>a = ".$ArticleA."</p>";
	echo "<p>an = ".$ArticleAn."</p>";
	echo "<p>the = ".$ArticleThe."</p>";
	echo "<p>TOTAL = $Total </p>";
	
	echo '<br><h2>3.) Change "the" to "THE".</h2>';
	echo "<p><blockquote>";
	echo str_replace(" the "," THE ", $Desiderata);
	echo "</blockquote></p>";
	
	echo '<br><br><h2>4.) Output the words ending with "ly".</h2>';
	function WordsFound($Desiderata) {
		$Words = explode(' ', $Desiderata);
		$findwords = [];

		foreach ($Words as $Word) {
			$CleanWord = preg_replace('/[^a-zA-Z]/', '', $Word);
			$Clean = strtolower(substr($CleanWord, -2));
			if ($Clean === 'ly') {
				$findwords[] = $CleanWord;
			}
		}

		return $findwords;
	}
		$WordFound = WordsFound($Desiderata);
		foreach ($WordFound as $Word) {
			echo $Word . "<br><br>";
	}
?>

</body>
</html>
<!DOCTYPE HTML>
<html>
<head>
<title> CIP 1102 MIDTERM ACTIVITY 3 </title>
<style>
body {
	padding-left: 100px;
	padding-right: 100px;
	font-size: 1.20em;
	font-family: cursive;
	background-color: #e8e8e8;
}

table {
	width: 70%;
}

.tdesign{
	text-align: center;
	border-radius: 10px;
	border: 1px solid black;
}

.header {
	background-color: #b5b8ba;
}

tr:hover {background-color: #1de0e0;}
</style>
</head>

<body>
<!--Header-->
<table border = "1" align="center" class = "tdesign">
	<tr class = "nohover">
		<td class ="header"> Name: </td>
		<td> Martin, Zach Emmañuelle V. </td>
		<td class ="header"> Topic: </td>
		<td> Chapter 3 Manipulating Strings</td>
	</tr>
	<tr class = "nohover">
		<td class ="header"> Activity No. </td>
		<td> Activity 3 </td>
		<td class ="header"> Date </td>
		<td> 09/21/2023 </td>
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

<!--String Functions-->
<?php 
echo $Desiderata;
echo "<br><br><p>1.) How many words?</p>";
echo "<p>There are ".str_word_count($Desiderata)." total words in the poem.</p>";
echo "<br><p>2.) How many articles present?</p>";
echo "<p>a = ".substr_count($Desiderata, " a ")."</p>";
echo "<p>an = ".substr_count($Desiderata, " an ")."</p>";
echo "<p>the = ".substr_count($Desiderata, " the ")."</p>";
$totalcount = substr_count($Desiderata, " a ") + substr_count($Desiderata, " an ") + substr_count($Desiderata, " the ");
echo "<p>TOTAL = $totalcount </p>";
echo '<br><p>3.) Change "the" to "THE".</p>';
echo str_replace(" the "," THE ", $Desiderata);
echo '<br><br><p>4.) Output the words ending with "ly".</p>';
function wordsffound($Desiderata) {
    $words = explode(' ', $Desiderata);
    $findwords = [];

    foreach ($words as $word) {
        $cleanWord = preg_replace('/[^a-zA-Z]/', '', $word);
        if (strtolower(substr($cleanWord, -2)) === 'ly') {
            $findwords[] = $cleanWord;
        }
    }

    return $findwords;
}
$wordfound = wordsffound($Desiderata);
foreach ($wordfound as $word) {
    echo $word . "<br><br>";
}
?>

</body>
</html>
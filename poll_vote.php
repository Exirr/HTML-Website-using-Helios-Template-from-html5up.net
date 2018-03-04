<?php
$vote = $_REQUEST['vote'];

//get content of textfile
$filename = "poll_result.txt";
$content = file($filename);

//put content in array
$array = explode("|| || || || ||", $content[0]);
$one = $array[0];
$two = $array[1];
$three = $array[2];
$four = $array[3];
$five = $array[4];
$six = $array[5];


if ($vote == 0) {
  $one = $one + 1;
}
if ($vote == 1) {
  $two = $two + 1;
}
if ($vote == 2) {
  $three = $three + 1;
}
if ($vote == 3) {
  $three = $three + 1;
}
if ($vote == 4) {
  $five = $five + 1;
}
if ($vote == 5) {
  $six = $six + 1;
}

//insert votes to txt file
$insertvote = $one."||".$two"||".$three"||".$four"||".$five"||".$six;
$fp = fopen($filename,"w");
fputs($fp,$insertvote);
fclose($fp);
?>

<h2>Result:</h2>
<table>
<tr>
<td>One:</td>
<td>
<img src="poll.gif"
width='<?php echo(100*round($one/($one+$two+$three+$four+$five+$six),6)); ?>'
height='20'>
<?php echo(100*round($one/($one+$two+$three+$four+$five+$six),6)); ?>%
</td>
</tr>
<tr>
<td>Two:</td>
<td>
<img src="poll.gif"
width='<?php echo(100*round($two/($one+$two+$three+$four+$five+$six),6)); ?>'
height='20'>
<?php echo(100*round($two/($one+$two+$three+$four+$five+$six),6)); ?>%
</td>
</tr>
<tr>
<td>Three:</td>
<td>
<img src="poll.gif"
width='<?php echo(100*round($three/($one+$two+$three+$four+$five+$six),6)); ?>'
height='20'>
<?php echo(100*round($three/($one+$two+$three+$four+$five+$six),6)); ?>%
</td>
</tr>
<tr>
<td>Four:</td>
<td>
<img src="poll.gif"
width='<?php echo(100*round($four/($one+$two+$three+$four+$five+$six),6)); ?>'
height='20'>
<?php echo(100*round($four/($one+$two+$three+$four+$five+$six),6)); ?>%
</td>
</tr>
<tr>
<td>Five:</td>
<td>
<img src="poll.gif"
width='<?php echo(100*round($five/($one+$two+$three+$four+$five+$six),6)); ?>'
height='20'>
<?php echo(100*round($five/($one+$two+$three+$four+$five+$six),6)); ?>%
</td>
</tr>
<tr>
<td>Six:</td>
<td>
<img src="poll.gif"
width='<?php echo(100*round($six/($one+$two+$three+$four+$five+$six),6)); ?>'
height='20'>
<?php echo(100*round($six/($one+$two+$three+$four+$five+$six),6)); ?>%
</td>
</tr>
</table>
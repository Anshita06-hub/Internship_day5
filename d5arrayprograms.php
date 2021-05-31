
<?php
//count()
$a = array(
	'Name' => "Ansh_Jain",
	'Usr_Name' => "A_j",
	'Address' => "ten",
	
);
$c = count($a);
echo "<pre> A ";
print_r($a);
echo "<br/>Given Array Contains $c Fields.";
?>

<br><br>

<?php 
//array_count_values ()
$a=array(10,20,21,23,17,10,20,21,23,10,15,20,21,20);
echo "<pre> Orinal ";
print_r($a);
echo "<pre> Counted ";
print_r(array_count_values ($a));
?>

<br><br>
<?php
//array_sum()
$myarray = array(1,2,3,4,5); echo array_sum($myarray);
?>

<br><br>
<?php
//array_product()
$a=array(5,5);
echo(array_product($a));
?>

<br><br>
<?php
//array_reverse
$a=array("a"=>"MAC","b"=>"BOBBI BROWN","c"=>"HUDA BEAUTY");
print_r(array_reverse($a));
?>

<br><br>

<?php
//in_array
$people = array("Peter", "Joe", "Glenn", "Cleveland");

if (in_array("Glenn", $people))
  {
  echo "Match found";
  }
else
  {
  echo "Match not found";
  }
?>

<br><br>

<?php
//array_rand
$a=array("red","green","blue","yellow","brown");
$random_keys=array_rand($a,3);
echo $a[$random_keys[0]]."<br>";
echo $a[$random_keys[1]]."<br>";
echo $a[$random_keys[2]];
?>

<br><br>

<?php
//array_unique
$a=array("a"=>"red","b"=>"green","c"=>"red");
print_r(array_unique($a));
?>

<br><br>
<?php
//array_merge
$arr1 = array('c','c++','android','java','php');
$arr2 = array(10,20,30,40,50);

$NewArr	= array_merge($arr1,$arr2); print_r($NewArr);
?>

<br><br>
<?php
//array_search
$a=array("a"=>"red","b"=>"green","c"=>"blue");
echo array_search("red",$a);
?>

<br><br>
<?php
//range
$number = range(0,5);
print_r ($number);
?>

<br><br>
<?php
//sort
$arr = array(80,60,50,40,8,74); sort($arr);
print_r($arr);
?>

<br><br>
<?php
//rsort
$arr = array(80,60,50,40,8,74); rsort($arr);
print_r($arr);
?>

<br><br>
<?php
//asort
$arr = array(80,60,50,40,8,74); asort($arr);
print_r($arr);
?>

<br><br>
<?php
//ksort
$age=array("abc"=>"12","bcd"=>"34","xyz"=>"56");
ksort($age);

foreach($age as $x=>$x_value)
   {
   echo "Key=" . $x . ", Value=" . $x_value;
   echo "<br>";
   }
?>

<br><br>
<?php
//krsort
$age=array("abc"=>"12","bcd"=>"34","xyz"=>"56");
krsort($age);

foreach($age as $x=>$x_value)
   {
   echo "Key=" . $x . ", Value=" . $x_value;
   echo "<br>";
   }
?>


<?php
//shuffle
$my_array = array("red","green","blue","yellow","purple");

shuffle($my_array);
print_r($my_array);
?>
<br><br>

<?php
//array_key_exists ( )

$a=array("Volvo"=>"XC90","BMW"=>"X5");
if (array_key_exists("Volvo",$a))
  {
  echo "Key exists!";
  }
else
  {
  echo "Key does not exist!";
  }
?>

<br><br>

<?php
//array_change_key_case
$arr = array(
"Banana" => "Yellow",
"Apple" => "Red",
"Mango" => "Green");
$uppercase = array_change_key_case($arr,CASE_UPPER); print_r($uppercase);
?>

<br><br>
<?php
//array_combine
$arr1 = array("Banana" , "Apple" , "Mango");
$arr2 = array("Yellow","Red", "Green");
$NewVar = array_combine($arr1, $arr2);
 
print_r($NewVar);
?>

<br><br>
<?php
//end
$myarr = array('c', 'c++','android', 'java', 'html'); echo end($myarr);
?>

<br><br>
<?php
//compact
$name = "Anshita";
$subject = "php";
$arr = compact("name", "subject"); print_r($arr);
?>

<br><br>
<?php
//array_flip
$arr = array("a" => "Anshita", "b" => "banana", "c" => "computer");
$fliparray = array_flip($arr);
print_r($fliparray);
?>

<br><br>    
<?php
//array_diff
$a=array("Anshita","c","c++","java","php","android");
$b=array("Anshita","c","java","php");
$diff = array_diff($a, $b); print_r($diff);
?>

<br><br>
<?php
//array_intersect
$arr1 = array(0=>"Sunday",1=>"Monday",2=>"Tuesday");
$arr2 = array(3=>"Tuesday",4=>"Sunday",5=>"Thursday");

print_r(array_intersect($arr1,$arr2));
?>

<br><br>
<?php
//array_values
$arr = array("i"=>"c","want"=>"c++","learn"=>"php");
$myarr = array_values($arr); foreach($myarr as $key => $value) {
 
echo " <br />$key - $value";
}
?>
<br><br>
<?php
//array_push
$a=array("c","c++");
array_push($a,"java","php"); print_r($a);
?>

<br><br>
<?php
//array_pop
$a = array("c", "c++", "Java", "PHP", "ASP");
array_pop($a); //Remove print_r($a); array_pop($a); //Remove print_r($a);
?>

<br><br>
<?php
//explode
$mystring = "I Love PHP Language";
$arr =	explode(" ",$mystring); print_r($arr);
?>
<br><br>
<?php
//implode
$arr = array("i","love","php","language");
$mystring = implode(" ", $arr); echo $mystring;
?>

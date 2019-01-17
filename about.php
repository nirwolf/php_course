<?php

echo "this is our about page";

$variable_one= "this is my fist variable";
/*$number_variable= 41;
$second_number_variable=4;
$third_number=$number_variable;
$fourth_number=$number_variable+$second_number_variable;
echo "</br>";
echo $fourth_number;
*/

echo "</br>";
$variable_two="...and my second variable";

echo "hello world ".$variable_one.$variable_two;

echo "</br>";
echo "</br>";
echo "</br>";


$number_1=44;
$number_2=4;

echo $number_1+$number_2;

echo "</br>";

echo $number_1 % $number_2;



echo "</br>";
echo "</br>";
echo "</br>";


if ($number_1=$number_2){
    
    echo "the numbers are equal";
    echo "</br>";
    
}
else {
    
    echo "the numbers are not equal";
    
    
}
    echo "</br>";
    
    

echo"how do you do?";
echo "</br>";

$a=20;
$b=20;

if ($a>$b){
    echo $a." is greater than ".$b;
}
elseif ($a==$b){
    echo $a." equals ".$b;
}
else{
    echo $a." is less than ".$b;
}
 echo "</br>";
  echo "</br>";
   echo "</br>";

#numeric array
$my_var=array("blue","red","green","purple");

echo $my_var[1];

echo "</br>";
  echo "</br>";
   echo "</br>";


$my_var2['key']="blue";
$my_var2['key1']="red";
$my_var2['key2']="green";
$my_var2['key3']="purple";

echo $my_var2['key1'];


$ages['james']=32;
$ages['scott']=30;
$ages['nancy']=29;
$ages['bob']=42;

echo $ages['scott'];


echo "</br>";
  echo "</br>";
   echo "</br>";
   
   #loops:
   $a=1;
   $a++;
   echo $a;


#while loops
while ($a<=10)
{
    echo $a*$a;
    echo "</br>";
    $a++;
}
echo "</br>";
  echo "</br>";
   echo "</br>";

#for loops

$a;
for($a=1; $a<=10; $a++){
    echo $a*$a*$a;
    echo "</br>";
    
}
echo "</br>";
  echo "</br>";
   echo "</br>";


$colors=array("blue","red","green","purple");
echo $arrlength=count($colors);

for($i=0;$i<=$arrlength;$i++){
    echo $colors[$i];
    echo "</br>";}
    
    echo "</br>";
    echo "</br>";
    
    
    
    
    #functions;
    
 function my_function(){
     
     echo "HELLo world";
     echo "</br>";
 }
   
    
    my_function();
    
function namer($name){
    
    echo "hello my name is ".$name;
}

namer("john elder");


echo "</br>";
    echo "</br>";
    
    
    #other functions
    echo rand(1,100);
    
    
    
echo "</br>";
    echo "</br>";
    
    echo date('l F js, Y');

?>
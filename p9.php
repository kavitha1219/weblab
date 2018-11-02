<?php
$allTheStates="Mississippi Alabama Texas Massachusetts Kansas";
$statesArray=[];
$states1=explode(' ',$allTheStates);
$i=0;

foreach($states1 as $state)
{
if(preg_match('/xas$/',($state)))
{
$statesArray[$i]=($state);
$i=$i+1;
echo "\n The states that ends in xas".$state;
echo "<br />\n";
}
}

foreach($states1 as $state)
{
if(preg_match('/^K.*s$/',($state)))
{
$statesArray[$i]=($state);
$i=$i+1;
echo "\n The states that begins with k and ends in s".$state;
echo "<br />\n";
}
}

foreach($states1 as $state)
{
if(preg_match('/^M.*s$/',($state)))
{
$statesArray[$i]=($state);
$i=$i+1;
echo "\n The states that begins with M ends in s".$state;
echo "<br />\n";
}
}


foreach($states1 as $state)
{
if(preg_match('/a$/',($state)))
{
$statesArray[$i]=($state);
$i=$i+1;
echo "\n The states that ends in a".$state;
echo "<br />\n";
}
}

foreach($statesArray as $element => $value)
{
print("\n".$value."is the element".$element);
echo "<br/>\n";
}
?>

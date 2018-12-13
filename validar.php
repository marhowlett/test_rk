<?php
 $a=$_POST["b1"];  //lee usuario del formulario
echo ($a);
    $b=$_POST["d1"];  //lee usuario del formulario
echo ($b);
$c=$_POST["f1"];  //lee usuario del formulario
echo ($c);
$a1=0;
$b1=0;
$c1=0;

if( $a == 1) { 
$a1=$a1+1;   
}
if( $a == 2) { 
$b1=$b1+1;   
}
if( $a == 3) { 
$c1=$c1+1;   
}

if( $b == 1) { 
$a1=$a1+1;   
}
if( $b == 2) { 
$b1=$b1+1;   
}
if( $b == 3) { 
$c1=$c1+1;   
}

if( $c == 1) { 
$a1=$a1+1;   
}
if( $c == 2) { 
$b1=$b1+1;   
}
if( $c == 3) { 
$c1=$c1+1;   
}

$bandera=0;

if ($a1>1)
{
    echo("a");
    $bandera=1;
}
if ($b1>1)
{
    echo("b");
    $bandera=1;
}
if ($c1>1)
{
    echo("c");
    $bandera=1;
}
if ($bandera==0)
    
{
     echo("ninguna");
}
    echo($c1);
?>
<?php
session_start();
$r1=($_GET['r1']);//lee usuario del formulario

$r2=($_GET['r2']);//lee usuario del formulario

$r3=$_POST["f1"];  //lee usuario del formulario

$nombre=($_GET['nombre']);
$_SESSION["name"]=$nombre;


$a1=0;
$b1=0;
$c1=0;

if( $r1 == 1) { 
$a1=$a1+1;   
}
if( $r1 == 2) { 
$b1=$b1+1;   
}
if( $r1 == 3) { 
$c1=$c1+1;   
}

if( $r2 == 1) { 
$a1=$a1+1;   
}
if( $r2 == 2) { 
$b1=$b1+1;   
}
if( $r2 == 3) { 
$c1=$c1+1;   
}

if( $r3 == 1) { 
$a1=$a1+1;   
}
if( $r3 == 2) { 
$b1=$b1+1;   
}
if( $r3 == 3) { 
$c1=$c1+1;   
}

$bandera=0;

if ($a1>1)
{
  
    $bandera=1;
	 header("Location: a.php");
      exit();
}
if ($b1>1)
{
    
    $bandera=1;
	header("Location: b.php");
      exit();
	
}
if ($c1>1)
{
   
    $bandera=1;
	header("Location: c.php");
      exit();
	
   
}
if ($bandera==0)
    
{
	
    header("Location: ninguna.php?nombre=<?php echo $nombre ?>");
      exit();
}
    
?>
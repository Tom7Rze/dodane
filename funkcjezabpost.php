

<form method="post" action="funkcjezabpost.php">
   Predkosc (km/h):   <input type="text" name="predkosc" /><br />
   Odległość(km):  <input type="text" name="odleglosc" /><br />
  <input type="submit" value="Policz">
</form>





<?php
var_dump(substr('atyy', 2)); // bool(false)

function czas()
{ 
	$czas=$_POST["odleglosc"]/$_POST["predkosc"];
	return $czas;
}
echo "Czas przejazdu na trasie ".$_POST["odleglosc"]." km pojazdu jadącego z prędkością v = ".$_POST["predkosc"]. " km/h wynosi ".czas()." godzin.";
?>

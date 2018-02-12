<?php
echo "hello world";
for( $i=1;$i<=100;$i++)
{
	echo "<br>$i.line$i";
}
$students = array("pritom", "shifat", "Zaman","Tamal","Mahmud");
$cgpa=array("3.90","3.88","3.67","3.51","3.81");
for($i=0;$i<5;$i++)
{
  
   echo "<br>".($i+1)."StudentName:[ ".$students[$i]. "] and cgpa:[".$cgpa[$i]."]";

}

?>
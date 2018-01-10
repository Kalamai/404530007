<?php

$data=array("name"=>array("Volvo","BMW","Saab","Land Rover"),
                 "Stock"=>array("22","15","5","17"),
                  "Sold"=>array("18","13","2","15"));

function td($x){
	return "<td> $x </td>";
}

echo "Output 1   using [for]";
echo "<table  border='2'><tr>";
 	 echo "<tr>";
 	 echo "<td><b>Name</<b></td>";
 	 echo "<td><b>Stock</<b></td>";
 	 echo "<td><b>Sold</<b></td>";

 for($a=0;$a<4;$a++){
 	 echo "</tr><tr>";
 	 echo "<td><b>".$data["name"][$a]."</<b></td>";
	 echo "<td>".$data["Stock"][$a]."</td>";
	 echo "<td>".$data["Sold"][$a]."</td>"; 
     echo "</tr><tr>";
   }
 echo "</tr></table>";

echo "<br>";

echo "Output 2     using [foreach]";
$data2=array(
    "volvo"=>array("Volvo",22,18),
    "BMW"=>array("BMW",15,13),
    "Saab"=>array("Saab",5,2),
    "LR"=>array("Land Rover",17,15)   
);

echo "<table  border='2'><tr>";
 	 echo "<tr>";
 	 echo "<td><b>Name</<b></td>";
 	 echo "<td><b>Stock</<b></td>";
 	 echo "<td><b>Sold</<b></td>";

 foreach($data2 as $volvo)
 {
 	echo "<tr>"; 
 	foreach($volvo as $BMW)
 	{
 		echo "<td>$BMW</td>";
  	}
 }
 echo "</tr></table>";


echo "<br>";

echo "Output 3     using [array_map + join]"; 
echo "寫不出來了"; 

?>
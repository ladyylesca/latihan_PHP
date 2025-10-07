<?php
$marks = array( "Bambang" => array (
"physics" => 35, "maths" => 30, "chemistry" => 39
),
"Joko" => array ( "physics" => 30, "maths" => 32, "chemistry" => 29
),
"Jerry" => array ( "physics" => 31,
"maths" => 22, "chemistry" => 39
)
);
/* Accessing multi-dimensional array values */
echo "Marks for Bambang in physics : " ;
echo $marks['Bambang']['physics'] . "<br />";
echo "Marks for Joko in maths : ";
echo $marks['Joko']['maths'] . "<br />";
echo "Marks for Jerry in chemistry : " ;
echo $marks['Jerry']['chemistry'] . "<br />";
?>
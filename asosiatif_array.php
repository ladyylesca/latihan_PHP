<?php
/* First method to associate create array. */
$salaries = array( "Bambang" => 2000, "Joko" => 1000,
"Jerry" => 500
);
echo "Salary of Bambang is ". $salaries['Bambang'] . "<br />";
echo "Salary of Joko is ". $salaries['Joko']. "<br />";
echo "Salary of Jerry is ". $salaries['Jerry']. "<br />";
/* Second method to create array. */
$salaries['Bambang'] = "high";
$salaries['Joko'] = "medium";
$salaries['Jerry'] = "low";
echo "Salary of Bambang is ". $salaries['Bambang'] . "<br />";
echo "Salary of Joko is ". $salaries['Joko']. "<br />";
echo "Salary of Jerry is ". $salaries['Jerry']. "<br />";
?>
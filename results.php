<?php

// get age from user
$age = $_POST["age"];
$day = $_POST["day"];

if ($age < 5 || $age > 95) {
  echo "You can get in for free!";
}
  
else if (($age >= 12 && $age <= 21) || ($day == "tuesday") || ($day == "thursday")) {
  echo "You get a discounted price!";
}

else if (($age > 21) || ($age >=5)) {
  echo  "You pay the regular price";   
}
  
else ($age == 0) {
  echo "Enter a valid age";  
}

?>
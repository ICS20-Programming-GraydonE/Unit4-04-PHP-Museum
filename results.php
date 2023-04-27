<?php

// get age from user
$age = $_POST["age"];
$day = $_POST["day"];


//Display if user can watch r rated movies
if ($age <= 5 && $age >= 0 || $age >= 95 && $age <= 120) {
  echo "You can enter for free.";

}

  // Display if user can watch G rated movies
else if ($age >= 12 && $age <= 21 || $day== "tuesday" || $day == "thursday") {
  echo "You get the student discount.";

}

  // Display if user has to pay full price
else if ($age >= 0 && $age <=120) {
  echo "You have to pay full price.";

}
  
// Display is the user does not enter a valid age
else {
  echo "Enter a valid age.";    
}

?>
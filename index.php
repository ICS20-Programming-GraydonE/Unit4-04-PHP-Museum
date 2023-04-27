<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="What movies can you see alone at the movie theatre?">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Graydon Ezzeddin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon code -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./fav/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./fav/favicon-16x16.png" />
    <link rel="manifest" href="./fav/site.webmanifest" />
    
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>What rate do you have to pay to get into the museum?</title>
  </head>
  <body>
    <center>
    <!-- php echo to print the html to the page -->
<?php 
echo "<h1>What rate do you have to pay to get into the museum?</h1>";
?>

<?php
echo "<h3>How old are you?</h3>";
?>

<!-- form to get the age from the user -->
    <form action="./results.php" method="post" target="results">
      <label for="age"> Please Enter your age:</label>
      <input type="number" id="age" placeholder="Ex. 15" step="1" min="0" name="age"><br><br> 

    <!-- list of days of the week -->
    <label for="day">Day of the week:</label>
    <select name="day" id="day">
      <option value="monday">Monday</option>
      <option value="tuesday">Tuesday</option>
      <option value="wednesday">Wednesday</option>
      <option value="thursday"> Thursday </option>
      <option value="friday"> Friday </option>
      <option value="saturday"> Saturday </option> 
      <option value="sunday"> Sunday </option>
    </select>
    <input type="submit" value="Calculate">
    </form>
    <!-- iframe for the results to show on the web page. -->
    <iframe id="results" name="results">			
      results
    </iframe>
    </center>
  </body>
</html>
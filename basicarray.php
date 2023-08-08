<?php
// Define the arrays
echo "<h1> This is an example of basic array </h1>";

$cricketTeam = ["Virat Kohli", "Jasprit Bumrah", "Rohit Sharma", "Ravindra Jadeja"];
$movieCast = ["mike", "harry", "rock", "johnwick"];
$friendNames = ["shawn", "raj", "Mike", "sai"];
$familyMembers = ["Dad", "Mom", "Brother", "Sister"];

// Loop through each array and print its contents
echo "<h2>Cricket Team:</h2>";
echo "<ul>";
foreach ($cricketTeam as $player) {
  echo "<li>" . $player . "</li>";
}
echo "</ul>";

echo "<h2>Movie Cast:</h2>";
echo "<ul>";
foreach ($movieCast as $actor) {
  echo "<li>" . $actor . "</li>";
}
echo "</ul>";

echo "<h2>Friends:</h2>";
echo "<ul>";
foreach ($friendNames as $friend) {
  echo "<li>" . $friend . "</li>";
  
  
}
echo "</ul>";

echo "<h2>Family Members:</h2>";
echo "<ul>";
foreach ($familyMembers as $member) {
  echo "<li>" . $member . "</li>";
}
echo "</ul>";

echo '<button onclick="location.href=\'index.html\'">Return</button>';


?>

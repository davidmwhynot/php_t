<?php
// People Array @TODO convert to MySQL
$people[] = "john";
$people[] = "paul";
$people[] = "george";
$people[] = "ringo";
$people[] = "sara";
$people[] = "aurore";
$people[] = "guichard";
$people[] = "aldo";
$people[] = "marienoel";
$people[] = "melanie";
$people[] = "milene";
$people[] = "olivia";
$people[] = "olivier";
$people[] = "derek";
$people[] = "rachelle";
$people[] = "jose";
$people[] = "amanda";
$people[] = "katie";
$people[] = "malcom";
$people[] = "katie";
$people[] = "brad";
$people[] = "mary";
$people[] = "mike";
$people[] = "farrah";
// Get Query String
$q = $_REQUEST['q'];
$suggestion = "";
// Get Suggestions
if($q !== "") {
  $q = strtolower($q);
  $len = strlen($q);
  foreach($people as $person) {
    if(stristr($q, substr($person, 0, $len))) {
      if($suggestion === "") {
        $suggestion = $person;
      } else {
        $suggestion .= ", $person";
      }
    }
  }
}
echo $suggestion === "" ? "No Suggestion" : $suggestion;
?>

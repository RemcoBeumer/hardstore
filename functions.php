
<article>
  <?php

function createList($arr, $classname){

    //ontavng de gegevens van de list items via de parameter
    //maak html list

    $html = '<ul class="' . $classname . '">';

    //loop door de gegevens heen en maak list items
    foreach($arr as $key => $val){
        $html .= "<li><a href=\"".$val."\">".$key."</a></li>";
    }
 
// sluit html
  $html .= "</ul>";

  // toon op het scherm
  return $html;


}

// maak een function
function createTable($arr){

  $html = "<table>";
  //loopt door array
  
  foreach($arr as $row){
    
    $html .= "<tr>";
    foreach($row as $value){
      //weergeven 
      $html .= "<td>".$value."<td>";
  
    }
    $html .= "</tr>";
  };
   $html .= "</table>";
   return $html;
}


// Maak een skillbar functie
function createSkillbar($taal,$perc,$color) {
  // HTML tag openen
$html = "<p>".$taal."</p>";
// HTML div tag openen
$html .= "<div class='container'>";
// Variablen injecteren in de HTML
$html .= "<div class='skills ".strtolower($taal)."' style='width: ".$perc."%; background-color: ".$color.";'>".$perc."%</div>"; 
$html .= "</div>";
// Resultaat teruggeven
return $html;
}


// Maak een about functie
function createCard($foto,$naam,$baan){
  // HTML tag openen
$html= "<div class='card'>";
// Zet de foto variable in de link
$html .="<img src='./media/$foto' style='width: 100%'>";
// div openen
$html .= "<div class='containercard'>";
// Wijzig de naam van de Card
$html .= "<h4><b>$naam</b></h4>";
// Wijzig de baan van de Card
$html .= "<p>$baan</p>";
// Sluit de div
$html .= "</div>";
$html .= "</div>";
// Resultaat teruggeven
return $html;
}

?>

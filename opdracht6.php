<?php
// $time = date("h");
//  if ($time < '12:00'){
//     echo "Goedmorgen";
// } elseif ($currentTime < '18:00') {
//     echo "Goedemiddag";
// }else {
//     echo "Goedenavond";
// }

// function berekenGemiddelde($getal1, $getal2) {
//     $gemiddelde = ($getal1 + $getal2) / 2;
//     echo "Het gemiddelde is: " . $gemiddelde;
// }

// berekenGemiddelde(5, 8); 

// function dagenTotEindeJaar() {
//     $huidigeDatum = date('Y-m-d');
//     $eindeJaar = date('Y-12-31');

//     $huidigeTijd = strtotime($huidigeDatum);
//     $eindeJaarTijd = strtotime($eindeJaar);

//     $verschil = $eindeJaarTijd - $huidigeTijd; 
//     $aantalDagen = ceil($verschil / (60 * 60 * 24));
//     return $aantalDagen;
    
// }
// echo "Er zijn nog " . dagenTotEindeJaar()  . " dagen over tot het einde van het jaar.";

// function berekenTotaleLengte($strings) {
//     $totaleLengte = 0;
    
//     foreach ($strings as $string) {
//         $totaleLengte += strlen($string);
//     }
    
//     return $totaleLengte;
// }

//  $array = array("Hallo", "Wereld", "Dit", "Is", "Een", "Test");
//  $totaleLengte = berekenTotaleLengte($array);
//  echo "Totale lengte: " . $totaleLengte;
// ?>
<?PHP

$goed = array();

$computterV_1 = "Hoeveel landen ga je toevoegen?".PHP_EOL;
$computterV_2 = "Welk land wil je toevoegen?".PHP_EOL;
$computterV_3 = "Wat is de hoofdstad van ";

$computter = "Welke hoofdstad heeft ";
$computterF_1 = "Helaas,  ";
$computterF_2 = "is niet de hoofdstad van ";
$computterF_3 = "Het correcte antwoord is: ";

$topo["Japan"] = "Tokyo";  
$topo["Mexico"] = "Mexico City";  
$topo["USA"] = "Washington D.C.";  
$topo["India"] = "New Delhi";  
$topo["Zuid-Korea"] = "Seoul";  
$topo["China"] = "Peking";  
$topo["Nigeria"] = "Abuja";  
$topo["Argentina"] = "Buenos Aires";  
$topo["Egypt"] = "Cairo";  
$topo["UK"] = "Londen";  

echo $computterV_1;
$antwoordV_1 = readline("");

if (is_numeric($antwoordV_1)){
    for($i = 0; $i < $antwoordV_1; $i++){

        echo $computterV_2;
        $l = readline("");

        echo $computterV_3. $l. " ";
        $s = readline("");

        $topo[$l] = $s;
    }
}
else if (!is_numeric($antwoordV_1)){
    echo '"'. $antwoordV_1. '"'. 'is geen getal, probeer het opnieuw';
    exit;
}


foreach ($topo as $vraag => $stad){
    echo $computter. $vraag. "? ";
    $antwoord = readline("");
    if ($antwoord == $stad){
        echo "Correct!".PHP_EOL;
        array_push($goed, $antwoord);
    }
    else if ($antwoord !== $stad){
        echo $computterF_1. $antwoord. $computterF_2. $vraag.PHP_EOL. $computterF_3. $stad.PHP_EOL. "...".PHP_EOL;
    }
}

echo "Je hebt ". (count($goed)). " van de ".(count($topo))." goed gedaan!";


?>
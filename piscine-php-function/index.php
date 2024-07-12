<?php 
echo "Hello the result is : ";

function addNumbers ($number1,$number2){ 
return $number1+$number2;

};

echo addNumbers (4,2);

function createtext ($text, $chosenBalise)
{ 


    return "<".$chosenBalise.">".$text."</".$chosenBalise.">";
    
    };

    echo createtext ("大家好 ma couille ！！！", "h2");

function calculateVolume ($H,$L,$P){
return $H*$L*$P;
}
echo "<body>";

echo "<main>";

echo "<p>le volume de la piece est " .calculateVolume (10,2,3)."m3"."</p>";

echo "<p>le volume de la chambre est " .calculateVolume (10,1,2.5)."m3"."</p>";

echo "<p>le volume du salon est " .calculateVolume (5,5,2.5)."m3"."</p>";


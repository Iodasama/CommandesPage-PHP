<?php 

//echo "<h1>Hello world!!!</h1>";

/*$message = "<h1>Bonjour la piscine!</h1>";

echo $message ;

$name ="Lei Jie";

$isDev = true;

if ($isDev) { 

    echo $name;
}

else { 

    echo "Je suis charcutier";
 };*/


 /*$message = "Got it";

for ($i=0; $i<10;$i++) { 

    if ($i == 5) { 
        echo  $message;     // penser a utiliser le === une bonne pratique
    }
   
}*/


$technos = [ 
'Lei Jie' => "web dev",
'age' => 50,
'address'=> 'Merignac',
];

echo 'Lei Jie est '.$technos['Lei Jie'];



$technos = ['HTML','CSS','PHP'];

//echo $technos[0];

foreach ($technos as $techno) { 

    echo "<h2>".$techno."</h2>"; // a chaque tour de boucle on stocke 
};






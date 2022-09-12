<?php
$casualnumbers = [];
while(count($casualnumbers)<15){
    $number = rand(0,100);
    if(!in_array($number, $casualnumbers)){
        array_push($casualnumbers, $number);
    }
};

for($i=0; $i<15; $i++){
    echo $casualnumbers[$i] . ", ";
}
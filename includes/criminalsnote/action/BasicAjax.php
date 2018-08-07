<?php
$criminalletters = $_POST['criminalletters'];
$criminalwords = $_POST['criminalwords'];
$criminalletters = preg_split('//', $criminalletters, -1, PREG_SPLIT_NO_EMPTY);
$criminalwords = preg_split('//', $criminalwords, -1, PREG_SPLIT_NO_EMPTY);

foreach ($criminalletters as $value) {
    if (($key = array_search($value, $criminalwords)) !== FALSE) {
        unset($criminalwords[$key]);
    }
}

if($criminalwords){
    $string = implode(',', $criminalwords);
     echo "не хватает букв (". $string .")";
}else{
    echo "букв хватает";
}   

return $criminalwords;

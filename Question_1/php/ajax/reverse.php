<?php
$returnMessage = array('error'=>false,'message'=>'');
if (isset($_POST["input_string"])) {
    $returnMessage['error'] = false;
    $returnMessage['message'] = reverseString($_POST["input_string"]);
} else {
    $returnMessage['error'] = true;
    $returnMessage['message'] = 'Input string is invalid';
}

die (json_encode($returnMessage));

// My logic
function reverseString($string){
    $characters = str_split($string);
    $maxIndex = count($characters) - 1;
    $reversedString = '';
    for ($i = $maxIndex; $i >= 0; $i--){
        $reversedString = $reversedString . $characters[$i];
    }
    return $reversedString;
}

// PHP already has a function to reverse string
function reverseStringPHP($string){
    return strrev($string);
}
?>
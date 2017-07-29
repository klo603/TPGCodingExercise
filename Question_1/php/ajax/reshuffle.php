<?php
$returnMessage = array('error'=>false,'message'=>'');
if (isset($_POST["input_string"])) {
    $returnMessage['error'] = false;
    $returnMessage['message'] = reshuffleString($_POST["input_string"]);
} else {
    $returnMessage['error'] = true;
    $returnMessage['message'] = 'Input string is invalid';
}

die (json_encode($returnMessage));

// My logic
function reshuffleString($string){
    $characters = str_split($string);
    $reversedString = '';
    while(count($characters) > 0){
        $count = count($characters);
        // Get Random Index from available index numbers left in characters
        $randIndex = rand(1,$count) - 1;
        $reversedString = $reversedString . $characters[$randIndex];
        // Remove the character used from the array
        unset($characters[$randIndex]);
        // Reindex the array
        $characters = array_values($characters);
    }
    return $reversedString;
}

// PHP already has a function to reshuffle string
function reshuffleStringPHP($string){
    return str_shuffle($string);
}
?>
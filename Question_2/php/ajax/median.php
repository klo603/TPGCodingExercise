<?php
$returnMessage = array('error'=>false,'message'=>'');
if (isset($_POST["input_string"])) {
    $returnMessage['error'] = false;
    $inputString = $_POST["input_string"];
    // Remove all whitespace from input string
    $inputString = str_replace(' ', '', $inputString);
    $inputStringArray = explode(',',$inputString);
    $numberArray = array();
    // Cast each element into an integer
    foreach($inputStringArray as $numberString){
        $numberArray[] = (int)$numberString;
    }
    $returnMessage['message'] = findMedian($numberArray);
} else {
    $returnMessage['error'] = true;
    $returnMessage['message'] = 'Input string is invalid';
}

die (json_encode($returnMessage));

// My logic
function findMedian($numbers){
    // Sort array of number
    sort($numbers);
    $count = count($numbers);

    if ($count % 2 == 0){
        // Use average of two middle indexes if even number of elements in array
        $middle1 = $count / 2;
        $middle2 = $middle1 + 1;
        return ($numbers[$middle1 - 1] + $numbers[$middle2 - 1]) / 2;
    } else {
        // Use middle index if odd number of elements in array
        $middle = ceil($count / 2);
        return $numbers[$middle - 1];
    }
}
?>
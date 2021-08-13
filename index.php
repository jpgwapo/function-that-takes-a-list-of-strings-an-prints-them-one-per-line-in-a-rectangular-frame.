<?php
function rectFrame($words){
    $maxlen = max(array_map('strlen', $words));
    $asterisk = str_repeat("*", ($maxlen + 4));
    echo $asterisk;
    foreach($words as $word){
        echo "\n". '* ' . $word . " *". "\n";
    }
    echo $asterisk;
}

$words = ["Hello", "World", "in", "a", "frame"];
echo rectFrame($words);
?>

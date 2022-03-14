<?php

$content = [];

//get summary
foreach ($_FILES['file_upload']['name'] as $filename) {
    
    if(array_key_exists($filename, $content)) {
        $content[$filename] +=1;
    }else{
        $content[$filename] = 1;
    }

}

//get max
if(count($content) > 0 ) {
    $maxval = 0;
    $maxkey = '';
    foreach($content as $key => $val) {
       if($val >= $maxval) {
           $maxval = $val;
           $maxkey = $key;
       }
    }

    echo $maxkey . ' ' . $maxval;
}


?>
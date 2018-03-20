<?php 

function rewrite($text) {


    $strlen = strlen( $text );
    $id = "";



    for( $i = 0; $i < $strlen; $i++ ) {
 
        $char = substr( $text, $i, 1 );
        $char++;
        $id .= $char;



}


return $id;

}

$xvalue = "Hello my friend!";
$lower = strtolower($xvalue);
echo  rewrite ($lower);

?>
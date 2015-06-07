<?php
    $onepiece = array("luffy","chopper","zoro");
$onepiece[2] = "sanji";
array_push($onepiece, "law");

foreach ($onepiece as $key => $value) {
    echo $key . ":".$value . "\n";
}
?>

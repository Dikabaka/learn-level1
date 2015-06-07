<?php
    $laptop = array("acer","azus","toshiba","hp");
$laptop[3] = "lenovo";
array_push($laptop, "dell");

foreach ($laptop as $key => $value) {
    echo $key . ":".$value . "\n";
}
?>

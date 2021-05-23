<?php

include_once "Stack.php";

$brandPhone = new Stack();
$brandPhone->push("Apple");
$brandPhone->push("SamSung");
$brandPhone->push("OnePlus");
$brandPhone->push("Oppo");
$brandPhone->push("Xiaomi");

echo "<pre>";
print_r($brandPhone);


print_r($brandPhone->top());

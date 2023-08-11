<?php

$array = ['a', 'b', 'c', 'd', 'e', 'f'];

array_splice($array, 1, 1, 'Z');

print_r($array);
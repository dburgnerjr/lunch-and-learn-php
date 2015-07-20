<?php

ini_set('memory_limit', '1');

$x = '';
while (true) {
    $x .= 'x';
}

echo "Never executed\n";

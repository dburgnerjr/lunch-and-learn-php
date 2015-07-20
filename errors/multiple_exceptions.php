<?php
try {
    if (!file_exists('myfile.txt')) {
        throw new \Exception('myfile.txt does not exist');
    }

    $handle = fopen('myfile.txt', 'r');
    if ($handle === false) {
        throw new \Exception('Unable to open myfile.txt for reading');
    }

} catch (\Exception $e) {
    echo "Something went wrong\n";
    //something went wrong
}

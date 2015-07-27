<?php
namespace Chadicus;

try {
    if (!file_exists('myfile.txt')) {
        throw new Exception('myfile.txt does not exist');
    }

    $handle = fopen('myfile.txt', 'r');
    if ($handle === false) {
        throw new \Exception('Unable to open myfile.txt for reading');
    }

    /*

        LOTS MORE CODE THAT COULD THROW EXCEPTIONS

    */

} catch (\Exception $e) {
    echo $e->getMessage();
    //something went wrong
}

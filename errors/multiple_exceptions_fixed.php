<?php
class FileNotFoundException extends Exception
{
}

class FileNotReadableException extends Exception
{
}

try {
    if (!file_exists('myfile.txt')) {
        throw new FileNotFoundException('myfile.txt does not exist');
    }

    $handle = fopen('myfile.txt', 'r');
    if ($handle === false) {
        throw new FileNotReadeableException('Unable to open myfile.txt for reading');
    }

} catch (FileNotFoundException $e) {
    //handle not found
} catch (FileNotReadableException $e) {
    //handle not readable
} catch (Exception $e) {
    //something else went wrong
}

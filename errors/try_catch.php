<?php
try {
    if (!file_exists('myfile.txt')) {
        throw new \Exception('myfile.txt does not exist');

        echo "Not executed\n";
    }
} catch (\Exception $e) {
    echo "{$e->getMessage()}\n";
}

<?php

function handleException(\Exception $e) {
    echo "ERROR: {$e->getMessage()}\n";
}

set_exception_handler('handleException');

try {
    throw new \Exception('something went wrong');
} catch (\Exception $e) {
    echo "Exception handled by catch\n";
}

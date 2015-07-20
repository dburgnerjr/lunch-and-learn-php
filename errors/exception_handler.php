<?php

function handleException(\Exception $e) {
    echo "ERROR: {$e->getMessage()}\n";
}

set_exception_handler('handleException');

throw new \Exception('something went wrong');

<?php
/**
 * Handles error.
 *
 * @param integer $level   The level of the error raised.
 * @param string  $message The error message.
 * @param string  $file    The filename from which the error was raised.
 * @param integer $line    The line number at which the error was raised.
 */
function handleError($level, $message, $file = null, $line = null)
{
    if (error_reporting() === 0) {
        return false;
    }

    throw new \ErrorException($message, 0, $level, $file, $line);
}

set_error_handler('handleError');

$handle = @fopen('myfile.txt', 'r');

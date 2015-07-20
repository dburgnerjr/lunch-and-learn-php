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

 switch ($level) {
    case E_WARNING:
        echo "E_WARNING: {$message}\n";
        break;
    case E_NOTICE:
        echo "E_NOTICE: {$message}\n";
        break;
    case E_USER_ERROR:
        echo "E_USER_ERROR: {$message}\n";
        break;
    case E_USER_WARNING:
        echo "E_USER_WARNING: {$message}\n";
        break;
    case E_USER_NOTICE:
        echo "E_USER_NOTICE: {$message}\n";
        break;
    case E_STRICT:
        echo "E_STRICT: {$message}\n";
        break;
    case E_DEPRECATED:
        echo "E_DEPRECATED: {$message}\n";
        break;
    default:
        echo "Unknown error type: [{$level}] {$message}\n";
        break;
    }
}

set_error_handler('handleError');

$x = 1;
$y = 0;
$z = $x / $y;

$greeting = "Hello {$name}\n";

//deprecated
split('1', 'hello');


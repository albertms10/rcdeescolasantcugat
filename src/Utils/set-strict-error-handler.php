<?php

function set_strict_error_handler()
{
    set_error_handler(function (int $errno, string $errstr, string $errfile, int $errline) {
        // error was suppressed with the @-operator
        if (error_reporting() === 0) {
            return false;
        }

        throw new ErrorException($errstr, 0, $errno, $errfile, $errline);
    });
}

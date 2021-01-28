<?php

if (!function_exists('newLine')) {
    function newLine(): string
    {
        return strpos(php_sapi_name(), 'apache') !== false ? '<br>' : PHP_EOL;
    }
}

if (!function_exists('println')) {
    function println($message = ''): void
    {
        echo $message . newLine();
    }
}

<?php
declare(strict_types=1);

if (!function_exists('newLine')) {
    function newLine(): string
    {
        return strpos(php_sapi_name(), 'apache') !== false ? '<br>' : PHP_EOL;
    }
}

if (!function_exists('println')) {
    function println(string $message = ''): void
    {
        $message = str_replace(["\n", chr(10)], newLine(), $message);
        echo $message . newLine();
    }
}

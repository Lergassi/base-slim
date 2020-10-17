<?php

if (!function_exists('projectDir')) {
    function projectDir()
    {
        return __DIR__;
    }
}

if (!function_exists('json_decode_ex')) {
    function json_decode_ex($json, $assoc = false, $depth = 512, $options = 0)
    {
        $result = json_decode($json, $assoc, $depth, $options);
        $error = json_last_error();
        if ($error) {
            throw new \Source\Exceptions\JsonException(sprintf('Ошибка при обработки json строки. Код ошибки: "%s"', $error));
        }

        return $result;
    }
}
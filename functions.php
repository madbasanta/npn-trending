<?php

function config($key, $default = null)
{
    $configs = include 'config.php';
    return $configs[$key] ?? $default;
}

function format_date($date, $format = null)
{
    $format = $format ?: config('date_format', 'm/d/Y');

    if (method_exists($date, 'format'))
        return $date->format($format);

    $date = trim($date);
    if (empty($date))
        return '';

    $cDate = date_create($date);
    if (!$cDate)
        return 'Invalid Date';

    return $cDate->format($format);
}

function current_page()
{
    $script = $_SERVER['SCRIPT_NAME'];
    return substr($script, 1, -4);
}


function dd($var, ...$vars)
{
    echo '<code><pre>';
    print_r($var);

    foreach ($vars as $mVar) {
        print_r($mVar);
    }
    echo '</pre></code>';
}

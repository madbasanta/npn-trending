<?php

function config($key, $default = null)
{
    $configs = include 'config.php';
    return $configs[$key] ?? $default;
}

function calc_experience($date_of_employment)
{

    // Calculate years and months of experience
    $years_of_experience = date('Y') - date('Y', strtotime($date_of_employment));
    $months_of_experience = date('m') - date('m', strtotime($date_of_employment));

    // If the current month is less than the month of employment, adjust the year and month accordingly
    if ($months_of_experience < 0) {
        $years_of_experience--;
        $months_of_experience = 12 - abs($months_of_experience);
    }

    $months_of_experience_dec = $months_of_experience / 12;

    return $years_of_experience ? "$years_of_experience.$months_of_experience_dec years" : "$months_of_experience months";
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

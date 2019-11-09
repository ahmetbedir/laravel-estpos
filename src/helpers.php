<?php
if (!function_exists('estpos')) {
    function estpos()
    {
        return AhmetBedir\LaravelEstPos\Facades\EstPos::instance();
    }
}

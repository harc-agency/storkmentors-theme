<?php
//dd function
if (!function_exists('dd')) {
    function dd($data)
    {
        echo '<pre>';
        echo json_encode($data, true);
        echo '</pre>';
        die();
    }
}

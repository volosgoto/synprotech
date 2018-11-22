<?php


function debug($var, $msg = 'No Coments') {
    echo '<pre>';
        echo $msg . '<br>';
        print_r($var);
    echo '</pre>';
}

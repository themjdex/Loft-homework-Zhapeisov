<?php

function task1(array $array1, bool $bool)
{
    foreach ($array1 as $item) {
        echo '<p>' . $item . '</p>';
    }
}
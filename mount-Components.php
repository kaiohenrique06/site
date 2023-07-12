<?php

define('PATH', __DIR__ . '/components/');

function getTemplate(string $component, array $params = [])
{   
    $content = file_get_contents(PATH . $component . '.php');

    if ($params) {
        foreach ($params as $indice => $value){
            $content = str_replace("{{ {$indice} }}", $value, $content);
        }   
    }

    return $content;
}

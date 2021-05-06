<?php
function remove_injections($string)
{
    $t = $string;
    $specChars = array(
        ' ' => '-','!' => '', '"' => '', '&' => '', '\'' => '', '(' => '', ')' => '','*' => '','+' => '',
        ',' => '', '/-' => '', ';' => '', '<' => '', '=' => '', '>' => '', '#' => '',
        '\\' => '', '_' => '', '`' => '', '|' => '', '/' => '', '/_' => '',
        'and' => '', 'drop' => '', 'truncate' => '', 'use' => '' );

    foreach ($specChars as $k => $v)
    {
        
        $t = str_ireplace($k, $v, $t);
    }

    return $t;
}


?>
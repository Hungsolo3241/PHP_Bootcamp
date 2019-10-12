#!/usr/bin/php
<?

    $var = "/\s+/";
    if ($argc > 1)
    {
        $str = trim($argv[1]);
        $return = preg_replace("$var", " ", $str);
        echo "$return\n";
    } 
    
?>
#!/usr/bin/php
<?php

    function ft_is_sort($array)
    {
        $cnt = count($array) - 1;
        $arr  = $array;
        sort ($array);
        $i = 0;
        while ($i != $cnt)
        {
            if ($arr[$i] != $array[$i])
                    return (FALSE);
                    $i++;
        }
            return (TRUE);
    }
?>
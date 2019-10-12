#!/usr/bin/php
<?
       $i = 1;
           while ($argv[$i])
           {
               if ($i == 1)
                   $str1 = join(array($str1,NULL,trim($argv[$i])));
               else
                   $str1 = join(array($str1," ",trim($argv[$i])));
               $i++;
           }
           $str2 = preg_split('/\s+/',$str1);
           sort($str2);
           if ($argc >= 2)
           for ($j = 0; $j < count($str2); $j++)
               echo (trim($str2[$j])."\n");
        
?>
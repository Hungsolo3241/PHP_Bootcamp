#!/usr/bin/php
<?php

$f = fopen( 'php://stdin', 'r' );

while($f && !feof($f)) 
{

  echo "Enter number: ";
    $line = fgets($f);
    if ($line)
    {

       $line = trim($line);
      //  $line = str_replace("\n","", $line);
      if (is_numeric($line))
      {
        if ($line % 2 == 0)
          echo "The number $line is even\n";
        else
          echo "The number $line is odd\n";       
      }
      else
        echo "'$line' is not a number\n";
     }
  
} 
echo "\n";   
?>
#!/usr/bin/php
<?
    if ($argc > 1)
	{
		for ($i = 0; $i < $argc; $i++)
		{
			$str = trim(preg_replace("/\s+/", " ", $argv[1]));
			$space = explode(" ", $str);
		}
		for ($i = 1; $i < count($space); $i++)
			echo ($space[$i]." ");
		echo ($space[0]."\n");
	}
?>
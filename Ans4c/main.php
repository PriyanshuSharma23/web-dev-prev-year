<?php

// open sample.txt in read mode
$myfile = fopen("sample.txt", "r") or die("Unable to open file!");

// store content of sample.txt in $data
$data = fread($myfile, filesize("sample.txt"));
fseek($myfile, 0);

// store content of sample.txt in $data2
$data2 = fread($myfile, filesize("sample.txt"));
fseek($myfile, 0);

// store content of sample.txt in $data3
$data3 = fread($myfile, filesize("sample.txt"));

// close file
fclose($myfile);

echo $data;
echo $data2;
echo $data3;

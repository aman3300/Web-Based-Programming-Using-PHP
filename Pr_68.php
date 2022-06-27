<?php
    if(!file_exists("D:\hello.txt")){
        die("File not found ");
    }
    else{
        $file = fopen("D:\hello.txt","r");
        print "Open fill successfully";
    }
?>

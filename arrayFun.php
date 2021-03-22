<?php
    $myArr = array("Tupac Shakur", "Dr. Dre.", "Snoop Dogg","Biggie");
    // print_r($myArr);
    // echo "</br>";
    // $chunkedArray= array_chunk($myArr,2);
    // print_r($chunkedArray);echo "</br>";
    // print(count($myArr)."</br>");
    // print_r(count($myArr)."</br>");
    // sort($myArr);
    // // print($myArr);//error : read the note
    // var_dump($myArr);echo "</br>";
    // print_r($myArr);
    // print("</br>".array_search("Tupac Shakur",  $myArr));


    // echo array_reverse($myArr);//error read the note
/*
    Note: echo can print a value but we can't print the methods in side the echo statement;
    print_r can  access the function inside its body but it will just show the thing just for user friendy view means it can use to see what is going inside the varible ;
    print can work like echo just difference we can't provide multiple  argument in the print statement; it can also print the functions;whereas echo statement show error or warning to process the function or methods; 
    */
    // print_r(array_reverse($myArr));

    $myArr2=array("Tupac Shakur","Rihana","Eazy E");
    // print_r(array_intersect($myArr,$myArr2));
    $intersectEle = array_intersect($myArr,$myArr2);
    foreach ($intersectEle as$value) {
        echo "$value.'</br>'";
    }
?>
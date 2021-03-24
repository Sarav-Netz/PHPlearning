<?php
    // <<<<<<<<<<<STRING FUNCRIONS>>>>>>>>>>
    // $mystr = "This is the best string in the world";
    // echo "Before adding Slashes:"."$mystr"."<hr>";
    // echo "After slases:".addcslashes($mystr,'A..Z')."<hr>";
    // echo "After addcslashes():".addcslashes($mystr,'i')."<hr>";
    // $mystr1 = 'This is also the best string in the "world"';
    // echo "after addslashes():".addslashes($mystr1)."<hr>";
    // echo "Hexadecimal code for our string is :- ".bin2hex($mystr1)."<hr>";
    // $falutStr = "            This is the string with some white spaces.          ";
    // echo "before Chopping:".$falutStr."<hr>";
    // echo "after chopping:". chop($falutStr)."<hr>";
    // echo "Ascii value at 122 place:-".chr(112)."<hr>";
    // echo chunk_split($mystr1,3,"...")."<hr>";
    // echo convert_cyr_string($mystr1,"w","i")."<hr>";
    // echo convert_uudecode($mystr)."<hr>";//not wprking;
    // print_r(count_chars($mystr1));
    // echo crc32($mystr)."<hr>";
    // print_r( explode(" ",$mystr));
    // print_r(get_html_translation_table());
    // echo hebrev($mystr);
    // $str3 = "<a href ='google.com'>Go to Google Page.</a>";
    // echo htmlentities($str3);
    // echo html_entity_decode($str3);
    // $myArr = array("Tupac Shakur", "Dr. Dre.", "Snoop Dogg","Biggie");
    // echo join(",",$myArr);
    // echo levenshtein($mystr1,$mystr);
    // echo "</br>".quoted_printable_encode($mystr);
    // echo soundex($mystr);

    //<<<<<<<<<<<ARRAY Functions>>>>>>>>>>
    // $myArr = array("Tupac Shakur", "Dr. Dre.", "Snoop Dogg","Biggie");
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

    // $myArr2=array("Tupac Shakur","Rihana","Eazy E");
    // print_r(array_intersect($myArr,$myArr2));
    // $intersectEle = array_intersect($myArr,$myArr2);
    // foreach ($intersectEle as$value) {
        // echo "$value.'</br>'";
    // // }
    if(isset($_POST['submit'])){
        $userName =$_POST['userName'];
        $userPassword = $_POST['userPassword'];
        echo password_hash($userPassword,PASSWORD_DEFAULT);
    }
?>
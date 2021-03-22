<?php
    $mystr = "This is the best string in the world";
    // echo "Before adding Slashes:"."$mystr"."<hr>";
    // echo "After slases:".addcslashes($mystr,'A..Z')."<hr>";
    // echo "After addcslashes():".addcslashes($mystr,'i')."<hr>";
    $mystr1 = 'This is also the best string in the "world"';
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
    $myArr = array("Tupac Shakur", "Dr. Dre.", "Snoop Dogg","Biggie");
    // echo join(",",$myArr);
    // echo levenshtein($mystr1,$mystr);
    // echo "</br>".quoted_printable_encode($mystr);
    echo soundex($mystr);
    
?>
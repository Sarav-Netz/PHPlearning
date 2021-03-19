<?php
    
    $userId = $_POST['userId'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    if(isset($_POST['updateUser'])){
        $wholeData = array();
        $myfile = 'data.csv';
        $handle = fopen("$myfile","r+") or die("Your file is not accessible"); 
        while(!feof($handle)){
            $row = fgetcsv($handle);
            print_r($row);
            // $row = implode(",",(array)$row);
            // var_dump($row);
            // print_r($row);
            // echo "$row"."</br>";
            // print_r((array)$row);
            // if(strpos($row,$userId)===FALSE){
            //     // fputcsv($handle,(array)$row); 
            //     array_push($wholeData,$row);
                
            // }
            if(in_array($userId,$row)===FALSE){
                // var_dump($row);
                // var_dump($wholeData);
                // file_put_contents("$wholeData",$row);
                array_push($wholeData,$row);
            }
        }
        $updatedRow = "$userId,$firstName,$lastName,$email,$phone,$gender";
        $updatedRow = explode(",",$updatedRow);
        ftruncate($handle,1);
        rewind($handle);
        array_push($wholeData,$updatedRow);
        // ftruncate($handle,0);
        print_r($wholeData);
        foreach ($wholeData as $value) {
            // echo "$value"; 
            // print_r($value);
            // $value = explode(",",$value);
            fputcsv($handle,$value);
        }
        fclose($handle);
        $header = 'http://localhost/TrialPhp/index.php';
        header("Location: $header");
    }
        
?>

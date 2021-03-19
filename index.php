<?php
    if(isset($_POST['submit'])){
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];
        $myfile = "data.csv";
        // $handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
        function getUserId(){
            $userId=0;
            $myfile = "data.csv";
            // $linecount = count(file("$myfile");
            // $handle =fopen("$myfile","r") or die("can't open the file".$myfile);
            $rows = file("$myfile");
            // $lastRow = end($rows);
            // $data = str_getcsv("$last_row");
            $value=count($rows);
            // echo $value;
            // echo $rows[$value];
            $userId= $userId + $value+1000;
            return $userId;
        }
        
        $handle = fopen("$myfile","a+") or die("can't open the file".$myfile);
        if ($linecount = count(file("$myfile")) == 0) {
            $userId= getUserId()+1;
            fputcsv($handle,array('User Id',"First Name","Last Name","Email","Phone","Gender"));
            $content = array('userId'=>$userId,"firstName"=>"$firstName","lastName"=>"$lastName","email"=>"$email","phone"=>"$phone","gender"=>"$gender");
            fputcsv($handle,$content);
            echo "<p>Data Saved Successfully</p>";
            fclose($handle);
        }
        // if(count($rows=file($myfile))){
        //     fputcsv($handle,)
        // }
        // $userId = getUserId();    
        // $content = array("userId"=>$userId,"firstName"=>"$firstName",'lastName'=>"$lastName","email"=>"$email","phone"=>"$phone","gender"=>"$gender");
        // fputcsv($handle,$content);
        // echo "<p>Data Saved Successfully</p>";
        // fclose($handle);
        else{
            $userId = getUserId();
            // $content = "firstName,lastName,email,phone,gender";
            // fwrite($handle,$content);
            // $hader
            $content = array("userId"=>$userId,"firstName"=>"$firstName",'lastName'=>"$lastName","email"=>"$email","phone"=>"$phone","gender"=>"$gender");
            // fwrite($handle,$content);
            fputcsv($handle,$content);
            // $content .= "$firstName,$lastName,$email,$phone,$gender";
            // fwrite($handle,$content);
            // foreach($content as $data){
            //     echo "<p>$data</p>";
            // }
            echo "<p>Data Saved Successfully</p>";
            fclose($handle);   
        }
    }
    elseif (isset($_POST['showUsers'])) {
        $myfile = "data.csv";
        $handle =fopen("$myfile","r") or die("can't open the file".$myfile);
        // fread($handle,count($myfile));
        // echo $handle->getContent();
        echo "<html><body><table border='2%'>\n\n";
        while(!feof($handle)){
            $row = fgetcsv($handle);
            
            if(!empty($row)){
                echo "<tr>";
                foreach ($row as $value) {
                    
                    echo "<td>"."$value"."</td>";
                }
                echo "</tr>";

            }            
        }
        echo "</table></body></html>";
        // $linecount = count(file('data.csv'));
        // echo "$linecount";
        fclose($handle);
    }
    elseif (isset($_POST['searchUser'])) {
     // if (isset($_POST['searchUser'])) {
        //     $Email = $_POST['searchingEmail'];
        //     echo "<p>YOU'R AT THE RIGHT PLACE</p>";
        // }
        $userId = $_POST['searchingId'];
        // echo "$Email";
        // echo "YOU'R AT THE RIGHT PLACE";
        $myfile = "data.csv";
        $handle = fopen($myfile,'r+') or die("Your file"."$myfile"."is't accessible");
        $row = fgetcsv($handle);
        while (!feof($handle)) {
            $row = fgetcsv($handle);
            // if (in_array($userId,(array)$row)) {
            //     echo "i'm not in";
            // }
            if (in_array($userId,(array)$row)){
                foreach ((array)$row as $key => $value) {
                    // echo "$value";
                    if (in_array($userId,(array)$row)){
                        if ($value===$userId) {
                            // echo "$row[$key]";
                            // echo "UserId:$row["userId"]</br>,
                            // userName: $row["firstName"]." "."$row[lastName]"</br>,
                            // userEmail: $row["email"]</br>,
                            // user Contact:$row["phone"]</br>,
                            // gender : $row["gender"]
                            // ";
                            echo "User Info:";
                            foreach((array)$row as  $value1){
                                echo "$value1\t";
                            }

                        }
                        // elseif ($value === $userId) {
                        //     echo "User Info:";
                        //     foreach((array)$row as  $value1){
                        //         echo "$value1\t";
                        //     }
                        // }
                        // else {
                        //     echo "these are just the abstuctions";
                        // }
                    }
                }
            }
            // else {
            //     echo "No Data Fond";
            // }
        }
        fclose($handle);
    }
    elseif (isset($_POST['deleteUser'])) {//not working properly
           $userId = $_POST['deleteId'];
           $myfile = "data.csv";
           $wholeData = array();
           $handle = fopen($myfile,'r+') or die("Your file"."$myfile"."is't accessible");
           while(!feof($handle)){
               $row = fgetcsv($handle);
               $row = implode(",",(array)$row);
               if(in_array($userId,(array)$row)===FALSE){
                //    fputcsv($handle,(array)$row).PHP_EOL;
                
                array_push($wholeData,$row);
               }
           }
        //    var_dump($wholeData);
        //    echo implode(" ",$wholeData);
        
        ftruncate($handle,0);
        rewind($handle);
           foreach ($wholeData as $value) {
            //    echo implode(" ", (array)$value)."</br>";
            if(strpos($value,$userId)===FALSE){
                // echo "$value"."</br>"; 
                $value = explode(",",$value);
                fputcsv($handle,$value);
            }
           }
        echo "Data Deleted Successfully";
        fclose($handle);
    }
    elseif (isset($_POST['updateUser'])) {
        // echo "i'm running";
        // $myfile = 'data.csv';
        // $handle = fopen($myfile,'w+') or die("Your file is not accessible");
        // fclose($handle);
        // $userId = $_POST['updationId'];
        // session_start();
        // $_SESSION['updationId'] = $userId;
        $header = 'http://localhost/TrialPhp/index.html';
        header("Location: $header");
    }
           
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User info Trial</title>
    <style>
        *{
            margin: 0;
        }
        form{
            text-align: center;
            background-color: gray;
            color: white;
            margin: auto;
            max-width: 70%;
        }
        input{
            width: 60%;
            margin-top: 2%;
            padding: 1%;
            border-radius: 23px;
            text-align: center;
        }
        button{
            width: 10%;
            margin-top: 2%;
            background-color: black;
            padding: 1%;
            border-radius: 23px;
            text-align: center;
            color: white;
            font-size: 28px;

        }
       
    </style>
</head>
<body>
    <form action="" method="POST" autocomplete="off">
        <input type="text" name="firstName" id="firstName" placeholder="enter your First name">
        <input type="text" name="lastName" id="lastName" placeholder="enter your last name">
        <input type="email" name="email" id="email" placeholder="enter your email">
        <input type="phone" name="phone" id="phone" placeholder="Enter your contact number">
        <input type="text" name="gender" id="gender" placeholder="Enter Your Gender"><br/>
        <button name="submit">Submit</button>
        <button name="showUsers" style="background-color:green;width:20%">View Users</button></br></br>
        <h3 >Enter User Id to get the user information.</h3>
        <!-- <input type="email" name="searchingId" id="searchingEmail" placeholder="Enter Email to find the detail of the User" > -->
        <input type="text" name="searchingId" id="searchingId" placeholder="Enter User Id to find the detail of the User">
        <button name="searchUser"  style="background-color:pink;width:20%">Search User</button>
        <br/></br>
        <h3 >Enter User Id to delete the user information.</h3>
        <input type="text" name="deleteId" id="deleteId" placeholder="Enter User Id to delete the detail of the User">
        <button name="deleteUser"  style="background-color:pink;width:20%">Delete User</button>
        </br></br>
        <button name="updateUser" style="background-color:zeal;width:50%" >Click To Update the User</button>

    </form>
    
    
</body>
</html>
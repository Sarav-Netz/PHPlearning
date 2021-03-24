<?php
    $server="localhost";
    $username="root";
    $password="root";
    $db="masterdb";

    #$con=new PDO("mysql:host=$server;dbname=$db",$username,$password,$db);
    // $conn = new PDO("mysql:host=$server;dbname=myDB", $username, $password,$db);
    $conn = mysqli_connect($servername, $username, $password,$db);
    if(!$conn){
        // die("connection is failed due to".mysqli_connect_error());
        echo "i'm down";
    }
    else{
        echo "Connection Established";
    }
    // if(isset($_POST['submit'])){
    //     $firstName = $_POST['firstName'];
    //     $lastName = $_POST['lastName'];
    //     $email = $_POST['email'];
    //     $phone = $_POST['phone'];
    //     $gender = $_POST['gender'];
    //     $myfile = "data.csv";
    //     INSERT INTO `masterdb`.`vaatitable` (`id`, `First Name`, `Last Name`, `Email`, `Contact Number`, `Gender`) VALUES ('1', 'saravjeet', 'singh', 'singh@gmail.com', '8976554', 'male');
    //     echo "<p>Data Saved Successfully</p>";
    //     fclose($handle);   
    // }
    // elseif (isset($_POST['showUsers'])) {
    //     $myfile = "data.csv";
    //     $handle =fopen("$myfile","r") or die("can't open the file".$myfile);
    //     echo "<html><body><table border='2%'>\n\n";
    //     while(!feof($handle)){
    //         $row = fgetcsv($handle);
            
    //         if(!empty($row)){
    //             echo "<tr>";
    //             foreach ($row as $value) {
                    
    //                 echo "<td>"."$value"."</td>";
    //             }
    //             echo "</tr>";

    //         }            
    //     }
    //     echo "</table></body></html>";
    //     fclose($handle);
    // }
    // elseif (isset($_POST['searchUser'])) {
    //     $userId = $_POST['searchingId'];
    //     $myfile = "data.csv";
    //     $handle = fopen($myfile,'r+') or die("Your file"."$myfile"."is't accessible");
    //     $row = fgetcsv($handle);
    //     while (!feof($handle)) {
    //         $row = fgetcsv($handle);
    //         if (in_array($userId,(array)$row)){
    //             foreach ((array)$row as $key => $value) {
    //                 if (in_array($userId,(array)$row)){
    //                     if ($value===$userId) {
    //                         echo "User Info:";
    //                         foreach((array)$row as  $value1){
    //                             echo "$value1\t";
    //                         }

    //                     }
    //                 }
    //             }
    //         }
    //     }
    //     fclose($handle);
    // }
    // elseif (isset($_POST['deleteUser'])) {//not working properly
    //        $userId = $_POST['deleteId'];
    //        $myfile = "data.csv";
    //        $wholeData = array();
    //        $handle = fopen($myfile,'r+') or die("Your file"."$myfile"."is't accessible");
    //        while(!feof($handle)){
    //            $row = fgetcsv($handle);
    //            $row = implode(",",(array)$row);
    //            if(in_array($userId,(array)$row)===FALSE){
    //             array_push($wholeData,$row);
    //            }
    //        }        
    //     ftruncate($handle,0);
    //     rewind($handle);
    //        foreach ($wholeData as $value) {
    //         if(strpos($value,$userId)===FALSE){
    //             $value = explode(",",$value);
    //             fputcsv($handle,$value);
    //         }
    //        }
    //     echo "Data Deleted Successfully";
    //     fclose($handle);
    // }
    // elseif (isset($_POST['updateUser'])) {
    //     $header = 'http://localhost/TrialPhp/index.html';
    //     header("Location: $header");
    // }
           
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
        form {
            margin:auto:
            width:100%;
            background-color: rgb(153, 200, 238);
            max-width:600px;
            margin-left:30%;
        }

        label {
            font-size: x-large;

        }

        input {
            font-size: x-large;
            width: 100%;
            text-align: center;
        }

        button {
            font-size: x-large;
            width: auto;
            color: brown;
            
            background-color: black;
        }
       
    </style>
</head>
<body>
    <form action="" method="POST" autocomplete="off">
        <div>
            <input type="text" name="firstName" id="firstName" placeholder="enter your First name"></br></br>
            <input type="text" name="lastName" id="lastName" placeholder="enter your last name"></br></br>
            <input type="email" name="email" id="email" placeholder="enter your email"></br></br>
            <input type="phone" name="phone" id="phone" placeholder="Enter your contact number"></br></br>
            <input type="text" name="gender" id="gender" placeholder="Enter Your Gender"><br/></br>
            <button name="submit">Submit</button>
            <button name="showUsers" style="background-color:green;">View Users</button></br></br>
            <h3 >Enter User Id to get the user information.</h3>
            <!-- <input type="email" name="searchingId" id="searchingEmail" placeholder="Enter Email to find the detail of the User" > -->
            <input type="text" name="searchingId" id="searchingId" placeholder="Enter User Id to find the detail of the User"></br></br>
            <button name="searchUser"  style="background-color:orange;width:20%">Search User</button>
            <br/></br>
            <h3 >Enter User Id to delete the user information.</h3>
            <input type="text" name="deleteId" id="deleteId" placeholder="Enter User Id to delete the detail of the User"></br></br>
            <button name="deleteUser"  style="background-color:pink;">Delete User</button>
            <button name="updateUser" style="background-color:zeal;" >Click To Update the User</button>
        </div>

    </form>
    
    
</body>
</html>
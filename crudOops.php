<?php
class DataBase{

}
class fileHandling{      
    public function __construct(){
        $this->userID="";
        $this->firstName="" ;
        $this->lastName="";
        $this->email="";
        $this->phone="";
        $this->gender="";
        
    }
    public function setUser($userId,$firstName,$lastName,$email,$phone,$gender){
        $this->userID =  $userId;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->phone = $phone;
        $this->gender = $gender;
    }
    public function addHeader($myfile){
        $this->userID =  "User Id";
        $this->firstName = "First Name";
        $this->lastName = "Last Name";
        $this->email = "Email";
        $this->phone = "Phone";
        $this->gender =  "Gender";
    }
    public function makeUserId($myfile){
        return count(file($myfile))+100;
    }
    public function addUser($handle,$obj){
        fputcsv($handle,(array)$obj);
        
    }
    public function showUsers($handle){
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
        fclose($handle);
    }
    public function searchUser($handle,$userId){
        while (!feof($handle)) {
            $row = fgetcsv($handle);
            if (in_array($userId,(array)$row)){
                foreach ((array)$row as $key => $value) {
                    if (in_array($userId,(array)$row)){
                        if ($value===$userId) {
                            echo "User Info:";
                            foreach((array)$row as  $value1){
                                echo "$value1\t";
                            }
                        }
                    }
                }
            }
        }
        fclose($handle);
    }
    public function deleteUser($handle,$userId){
        $wholeData = array();
        while(!feof($handle)){
           $row = fgetcsv($handle);
           $row = implode(",",(array)$row);
           if(in_array($userId,(array)$row)===FALSE){
            array_push($wholeData,$row);
           }
        } 
        ftruncate($handle,0);
        rewind($handle);
        foreach ($wholeData as $value) {
            if(strpos($value,$userId)===FALSE){
                $value = explode(",",$value);
                fputcsv($handle,$value);
            }
        }
        echo "Data Deleted Successfully";
        fclose($handle);
    }
    public function updateUser($handle,$userId,$obj1){
        $wholeData = array();
        while(!feof($handle)){
            $row = fgetcsv($handle);
            if(in_array($userId,(array)$row)===FALSE){
                array_push($wholeData,$row);
            }
        }
        ftruncate($handle,1);
        rewind($handle);
        array_push($wholeData,(array)$obj1);
        foreach ($wholeData as $value) {
            fputcsv($handle,(array)$value);
            // print_r($value);
        }
        fclose($handle);
        echo "Data updated Successfully";
            // print_r($obj1);
                        
    }

}
$myfile = "detail.csv";
$handle = fopen("$myfile","a+") or die("Slected file is not accessible.");
// if(count(file($myfile))==0){
//     $obj1 = new fileHandling();
//     $obj1->addHeader($myfile);
//     $obj1->addUser($handle,$obj1);
// }
if(isset($_POST['addUser'])){
    $obj1 = new fileHandling();
    if(count(file($myfile))==0){
        $obj1->addHeader($myfile);
        $obj1->addUser($handle,$obj1);
        echo "<h2>we make sorry! please enter Your detail again</h2>";
    }else{
        $userId = $obj1->makeUserId($myfile);
        $obj1->setUser($userId,$_POST['firstName'],$_POST['lastName'],$_POST['email'],$_POST['phone'],$_POST['gender']);
        $obj1->addUser($handle,$obj1);
        echo "<h4>Data set Successfully.</h4>"; 
    }
}
elseif (isset($_POST['showUsers'])) {
    $obj1 = new fileHandling();
    $obj1->showUsers($handle);
}
elseif (isset($_POST['searchUser'])) {
    $userId = $_POST['searchingId'];
    $obj1 = new fileHandling();
    $obj1->searchUser($handle,$userId);
}
elseif (isset($_POST['deleteUser'])) {
       $userId = $_POST['deleteId'];
       $obj1 = new fileHandling();
       $obj1->deleteUser($handle,$userId);
}
elseif (isset($_POST['updateUser'])) {
    $header = 'http://localhost/TrialPhp/OOPs/updation.html';
    header("Location: $header");
}
elseif (isset($_POST['letsUpdate'])) {
    $userId = $_POST['userId'];
    $obj1 = new fileHandling();
    $obj1->setUser($userId,$_POST['firstName'],$_POST['lastName'],$_POST['email'],$_POST['phone'],$_POST['gender']);
    $obj1->updateUser($handle,$userId,$obj1);
}

?>
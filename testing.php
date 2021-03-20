<?php
    // class TrialClass{
    //     public $var1 = "i'm here";
    //     public $var2 = "i'm here again";
    //     public function __construct(){
    //         echo $this->constructorVar1="i'm firstly made by the use of consturctor";
    //         echo $this->constructorVar2="i'm secondly made by the use of consturctor";
    //         echo $this->constructorVar3="i'm finally made by the use of consturctor";
    //     }
    //     public function trialFunc()
    //     {
    //         echo $this->var;
    //     } 
    //     public function __destruct(){
    //         echo $this->destructorVar="i'm made by the use of destructor";
    //     }
    // }

    // $trialObj = new TrialClass;
    // print_r($trialObj);
    // print_r($trialObj);
    
    // class hotel
    // {
    // var $var1;
    // var $var2;
    // function __construct( $bill, $food )
    // {
    // $this->var1 = $bill;
    // $this->var2 = $food;
    // }
    // }
    // // Creating object
    // $food = new hotel(500, "biriyani");
    // echo "Before conversion:";
    // echo "<br>";
    // var_dump($food);
    // echo "<br>";
    // // Converting object to associative array
    // $foodArray =  (array) $food;//json_decode(json_encode($food), true);
    // echo "After conversion:";
    // var_dump($foodArray);
    // class fileOpening{
    //     protected $myfile="detail.csv";
    //     public $handle ;
    //     public function __construct(){
    //         $this->handle = fopen($this->myfile,"a+") or die("Slected file is not accessible.");
    //         // $data=fgetcsv($this->handle);
    //         // var_dump($data);
    //     }
    //     // public function createUserId(){
    //     //     if(count(file($this->myfile))==0){
    //     //         return $userId="userId";
    //     //     }
    //     //     else{
    //     //         $userId=count(file($this->myfile))+1;
    //     //     }
    //     // }
    // }
    // class addMember extends fileOpening{
    //     // use fileOpening;
    //     public function __construct(){
    //         parent::__construct();
    //         $this->userID ;
    //         $this->firstName ;
    //         $this->lastName;
    //         $this->email;
    //         $this->phone;
    //         $this->gender;
    //     }
    //     public function addUser($userId,$firstName,$lastName,$email,$phone,$gender){
    //         // $dateArray = json_decode(json_encode($this));
    //         // var_dump($dateArray);
    //         fputcsv($this->handle,array($this->userID,$this->firstName,$this->lastName,$this->email ,$this->phone ,$this->gender));
    //         fclose($this->handle);
    //         echo "<h4>Data Added Successfully.</h4>";
    //     }

    // }
    // // $on1 = new fileOpening();
   
    // $obj1 = new addMember();
    // var_dump((array)$obj1);
    // // $obj1->addUser('1',"ee","rr","eeee","rrrr","dafas");
    // echo "<h3>still working perfectly</h3>";











        
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
        public function addUser($handle,$obj){
            fputcsv($handle,(array)$obj);
            echo "<h4>Data set Successfully.</h4>";
        }
        public function showUsers(){}
        public function deleteUser(){}
        public function updateUser(){}

    }
    $handle = fopen("detail.csv","a+") or die("Slected file is not accessible.");

    if(isset())
    
    echo "<h3>still working perfectly</h3>";
    
?>

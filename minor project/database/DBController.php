<?php 
    class DBController{

        //Databbase Connection Credential
        protected $host="localhost";
        protected $user="suraj";
        protected $password="Suraj@1234";
        protected $database="paliwal";
 
        //Connection property
        public $con=null;

        //Call Constructor
        public function __construct(){
            $this->con= mysqli_connect($this->host,$this->user,$this->password,$this->database);
            if($this->con->connect_error){
                echo "Fail".$this->con->connect_error;
            }
        }

         //Call Destructor
        public function __destruct(){
            $this->closeConnection();
        }


         //For Closing Connection
         protected function closeConnection(){
             if($this->con!=null){
                 $this->con->close();
                 $this->con=null;
             }
         }
    }
    
?>

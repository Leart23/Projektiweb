<?php
    class Model{
        private $server='localhost';
        private $username='root';
        private $password;
        private $database='user_db';
        private $conn;


        public function __construct(){
            try{
                $this->conn=new mysqli($this->server,$this->username,$this->password,$this->database);
            }
            catch(Exception $exc){
                echo 'Connection failed'.$exc->getMessage();
            }
        }
        
        public function insert(){
            if(isset($_POST['submit'])){

                $name = mysqli_real_escape_string($conn, $_POST['name']);
                $email = mysqli_real_escape_string($conn, $_POST['email']);
                $pass = md5($_POST['password']);
                $cpass = md5($_POST['cpassword']);
                $user_type = $_POST['user_type'];
                
                
                if(!(strlen($name)<3||strlen($email)<3||strlen($pass)<3)){

                    $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
                    
                    if($sql=$this->conn->query($query)){
                        echo "<script>alert('records added successfully');</script>";
                        echo "<script>window.location.href = 'index.php';</script>";
                    }
                    else{
                        echo "<script>alert('Data insertion failed!');</script>";
                        echo "<script>window.location.href = 'index.php';</script>";
                    }
                }
                else{
                    echo "<script>alert('Something went wrong');</script>";
                    echo "<script>window.location.href = 'index.php';</script>";
                }
            }
        }

        public function fetch(){
            $data=null;
            $query="SELECT * FROM user_form";

            if($sql=$this->conn->query($query)){
                while($row=mysqli_fetch_assoc($sql)){
                    $data[]=$row;
                }
            }
            return $data;
        }

        public function delete($id){
            $query="DELETE FROM user_form WHERE ID='$id'";
            if($sql=$this->conn->query($query)){
                return true;
            }
            else{
                return false;
            }
        }
        
        public function edit($id){
            $data=null;
            $query="SELECT * from user_form where ID='$id'";
            if($sql = $this->conn->query($query)){
                while($row=$sql->fetch_assoc()){
                    $data=$row;
                }
            }
            return $data;
        }
        public function update($data){
            $query = "UPDATE user_form SET name='$data[name]', email='$data[email]', password='$data[password]', user_type='$data[user_type]' WHERE id='$data[id] '";

            if ($sql = $this->conn->query($query)) {
                return true;
            } else {
                return false;
            }
        }
    }
    
?>

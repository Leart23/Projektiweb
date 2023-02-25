<?php
    class Model1{
        private $server='localhost';
        private $username='root';
        private $password;
        private $database='user_db';
        private $conn1;


        public function __construct(){
            try{
                $this->conn1=new mysqli($this->server,$this->username,$this->password,$this->database);
            }
            catch(Exception $exc){
                echo 'Connection failed'.$exc->getMessage();
            }
        }
        
        public function insert(){
            if(isset($_POST['submit'])){

                $name = mysqli_real_escape_string($conn1, $_POST['name']);
                $price = md5($_POST['price']);

                
                if(!(strlen($name)<3)){

                    $insert = "INSERT INTO products(name, price) VALUES('$name','$price')";
                    
                    if($sql=$this->conn1->query($query)){
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
            $query="SELECT * FROM products";

            if($sql=$this->conn1->query($query)){
                while($row=mysqli_fetch_assoc($sql)){
                    $data[]=$row;
                }
            }
            return $data;
        }

        public function delete($id){
            $query="DELETE FROM products WHERE ID='$id'";
            if($sql=$this->conn1->query($query)){
                return true;
            }
            else{
                return false;
            }
        }
        
        public function edit($id){
            $data=null;
            $query="SELECT * from products where ID='$id'";
            if($sql = $this->conn1->query($query)){
                while($row=$sql->fetch_assoc()){
                    $data=$row;
                }
            }
            return $data;
        }
        public function update($data){
            $query = "UPDATE products SET name='$data[name]', price='$data[price]' WHERE id='$data[id] '";

            if ($sql = $this->conn1->query($query)) {
                return true;
            } else {
                return false;
            }
        }
    }
?>

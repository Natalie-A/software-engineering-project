<?php
    include_once "account.php";
    include "db.php";
    class USER implements Account
    {
        protected $id;
        protected $fullName;
        protected $email;
        protected $password;

        function __construct($user,$pass)
        {
            $this->email=$user;
            $this->password=$pass;
        }
        public function setFullName ($name)
        {   
            $this->fullName = $name;       
        }
        public function getFullName ()
        {        
            return $this->fullName;       
        } 
        public function setEmail ($emailAdd)
        {   
            $this->email = $emailAdd;       
        }
        public function getEmail ()
        {        
            return $this->email;       
        } 
        public function setPassword ($passworde)
        {   
            $this->password = $passworde;   
        } 
        public function getPassword ()
        {        
            return $this->password;       
        } 
        public function register ($pdo)
        {           
            $passwordHash = password_hash($this->password,PASSWORD_DEFAULT);     
            try 
            {  
                session_start(); 
                $stmt = $pdo->prepare ('INSERT INTO user_details (full_name,email_address,user_password) VALUES(?,?,?)');
                $stmt->execute([$this->getFullName(),$this->email,$passwordHash]);
                $_SESSION["name"]=$this->getFullName();   
            } 
            catch (PDOException $e) 
            {            	
                return $e->getMessage();        
            }                   
        }
        public function login ($pdo)
        {            
            try 
            {  
                session_start();
                $stmt = $pdo->prepare("SELECT user_password,full_name FROM user_details WHERE email_address=?");
                $stmt->execute([$this->email]);   
                $row = $stmt->fetch();  
                if($row == null)
                {
                    return "uee";//user exist error
                }          
                if (password_verify($this->password,$row['user_password']))
                {       
                    $_SESSION["name"]=$row["full_name"];    
                    return "sl";
                }                
                return "ip";
            } 
            catch (PDOException $e) 
            {     
                return $e->getMessage();
            }   
        } 
        public function logout($pdo)
        {
        try
            {
                session_start();
                unset($_SESSION["id"]);
                unset($_SESSION["name"]);
        }
        catch (PDOException $e) 
            {            	
                return $e->getMessage();        
            }     
        }  
    }
?>
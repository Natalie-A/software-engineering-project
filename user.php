<?php
    include_once "account.php";
    include "db.php";
    class USER implements Account
    {
        protected $id;
        protected $fullName;
        protected $email;
        protected $password;
        protected $cityOfResidence;
        protected $profile;

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
        public function setCityOfResidence ($city)
        {   
            $this->cityOfResidence = $city;       
        }
        public function getCityOfResidence ()
        {        
            return $this->cityOfResidence;       
        } 
        public function setProfile ($profilePhoto)
        {   
            $this->profile = $profilePhoto;       
        }
        public function getProfile ()
        {        
            return $this->profile;       
        } 
        public function register ($pdo)
        {           
            $passwordHash = password_hash($this->password,PASSWORD_DEFAULT);     
            try 
            {  
                session_start(); 
                $stmt = $pdo->prepare ('INSERT INTO account_details(full_name,email_address,user_password) VALUES(?,?,?)');
                $stmt->execute([$this->fullName,$this->email,$passwordHash]);
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
                $stmt = $pdo->prepare("SELECT UserPassword,FullName FROM users WHERE Email=?");
                $stmt->execute([$this->email]);   
                $row = $stmt->fetch();  
                if($row == null)
                {
                    return "uee";//user exist error
                }          
                if (password_verify($this->password,$row['UserPassword']))
                {       
                    $_SESSION["name"]=$row["FullName"];    
                    return "sl";
                }                
                return "ip";
            } 
            catch (PDOException $e) 
            {     
                return $e->getMessage();
            }   
        } 
        public function changePassword($pdo)
        {
            $passwordHash = password_hash($this->password,PASSWORD_DEFAULT);     
            try 
            {   
                $stmt = $pdo->prepare ('UPDATE UserPassword where Email=?');
                $stmt->execute([$this->email,$passwordHash]);  
                return "Update was successful";
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
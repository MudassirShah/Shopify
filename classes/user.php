
   <?php
    //require("../db/dbcon.php");
//session_start();

    class User{
		protected $db;
		protected $query;
		private $user_id;
		private $password;
		private $login_status;
		private $name;
		private $age;
		private $gender;
		private $address;
		private $dateOfBirth;
		private $createdDate;
		private $status;
		private $addressId;
		private $user_role;
	    public $message="";
		
	    function __construct(){
			$this->db=new databaseManager();
			
		}		


		public function registerUser($name,$cnic,$dob,$password,$phone,$gender,$province,$district,$city,$tehsil,$address){
			$this->query="insert into user (name,cnic,dob,password,phone,gender,province,district,city,tehsil,address) values (?,?,?,?,?,?,?,?,?,?,?)";
				$row=$this->db->executeQuery($this->query,array($name,$cnic,$dob,$password,$phone,$gender,$province,$district,$city,$tehsil,$address),"create");
			if($row){
				echo "user registered";}
				else{
					echo "error occured during user regestration";					
				}
			}
		  
	  /*  public function logIn($number,$password,$type){	
          
			if ( session_status() == PHP_SESSION_NONE ) {
				session_start();
			} 
		    $this->query="select * from user where  user_phone=? AND password=? AND user_type=?";			   
			   if($row=$this->db->executeQuery($this->query,array($number,$password,$type),"cread")){				   
				  $_SESSION["user"]=$row[0]["user_id"];
				  	  $_SESSION["username"]=$row[0]["user_name"];
					   $_SESSION["image"]=$row[0]["user_img"];
				  $_SESSION["userType"]= $type;
				  //$_SESSION["userData"] = $row[0];				  
				  echo "login ".$_SESSION["user"];
					//return row[0];
				   
				}				
				else{
					$message = "Username and/or Password incorrect.\\nTry again.";
						echo "<script type='text/javascript'>alert('Username and/or Password incorrect');</script>";
					
  									//echo "<script >show();</script>";
					
			    }				   
		}*/
		

		public function loginUser($id,$password){
			$this->query="select * from user where id=? AND password=?";
				$row=$this->db->executeQuery($this->query,array($id,$password),"cread");
				if($row){

					session_start();
					$_SESSION['user_id'] = $row[0]['id'];
					$_SESSION['user_name'] = $row[0]['name'];
					$_SESSION['image'] = $row[0]['image'];
					if($row[0]["user_type"]==1)
					echo "<script type='text/javascript'>window.location.replace('../main1.php');</script>";
					elseif($row[0]["user_type"]==2)
						echo "<script type='text/javascript'>window.location.replace('../admin_panel.php');</script>";
				}
				else{
					echo "Credentials Doesn't Match";
				}
		}
		

		public function validateuser($id,$password){
			$this->query="select * from user where id=? AND password=?";
				$row=$this->db->executeQuery($this->query,array($id,$password),"cread");
				if($row){
					return true;
				}
				else{
					return false;
				}
		}
		
		
		 function  viewUser($userId){
			 $this->query="select * from user where id=?";
			 $result=$this->db->executeQuery($this->query,array($userId),"cread");
			 return $result;
			}
	
 			public function updateUser($name,$cnic,$dob,$password,$phone,$gender,$province,$district,$city,$tehsil,$address,$id){
 			 $this->query="update user set name=?, cnic=?, dob=?, password=?, phone=?, gender=?, province=?, district=?, city=?, tehsil=?, address=? where id=?";
			 $result=$this->db->executeQuery($this->query,array($name,$cnic,$dob,$password,$phone,$gender,$province,$district,$city,$tehsil,$address,$id),"cread");
			print_r($result);
 		}

 			public function updateUserWithoutPassword($name,$cnic,$dob,$phone,$gender,$province,$district,$city,$tehsil,$address,$id){
 			 $this->query="update user set name=?, cnic=?, dob=?, phone=?, gender=?, province=?, district=?, city=?, tehsil=?, address=? where id=?";
			 $result=$this->db->executeQuery($this->query,array($name,$cnic,$dob,$phone,$gender,$province,$district,$city,$tehsil,$address,$id),"cread");
			print_r($result);
 		}
			
			
			public function getLastUserId(){
			$this->query="select user_id from user order by user_id desc limit 1";
			$data=$this->db->executeQuery($this->query,array(),"sread");
			return $data;
		}
			
			public function insertIntoUserRatingTable($userID,$itemID){
			$this->query="insert into rating(userID,itemID) values (?,?)";
				$row=$this->db->executeQuery($this->query,array($userID,$itemID),"create");
			if($row){
				//echo "inserted into rating table";
				}
				else{
					echo "error occured";					
				}
			}
			
			
	}
	 
	
	/*class Customer extends User{
		function __construct(){
			
		}
		
		public function register(){}
	}*/
	//$t= new DATE();
	
	//$b->registerUser("ubaid","12/12/12","1234567890","asd",3344246365,1,1,'Y-m-d H:i:s',1,"KPK","Abbottabad","Havailian","Havailian","mera pain PO Bodla","");
	
	
?>







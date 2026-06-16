	<?php 

	session_start();

	class bank
	{
		public $hostname  	= NULL;
		public $username  	= NULL;
		public $password  	= NULL;
		public $database  	= NULL;
		public $connection  = NULL;
		public $query       = NULL;
		public $result      = NULL;

		public function __construct($hostname,$username,$password,$database)
		{
			$this->hostname = $hostname;
			$this->username = $username;
			$this->password = $password;
			$this->database = $database;

			$this->connection = mysqli_connect($this->hostname,$this->username,$this->password,$this->database);

			if (mysqli_connect_errno()) {
				echo "Database no connected"."<br/>";
				echo "Error No :-".mysqli_connect_errno()."<br/>";
				echo "Error Message :-".mysqli_connect_error()."<br/>";
			}

		}

		public function set_query_fectch_data($columns,$table){

			// $this->query 	= "select".$columns."from".$table."";
			$this->query = "SELECT $columns FROM $table";
			$this->result 	= mysqli_query($this->connection,$this->query);

		}
		public function show_user_account_information($account_no)
		{
		    $this->query = "SELECT * FROM users WHERE account_no='$account_no'";
		    $this->result = mysqli_query($this->connection,$this->query);
		
		    if(mysqli_num_rows($this->result) > 0)
		    {
		        $row = mysqli_fetch_assoc($this->result);
		        echo "<pre>";
		
		        $_SESSION['users'] = $row;
		
		        header("Location: dashboard.php");
		        exit();
		    }
		    else
		    {
		        header("Location: index.php?msg=Account Not Found");
		        exit();
		    }
		}
		public function withdraw($account_no,$amount)
		{
		    $this->query = "SELECT * FROM users
		                    WHERE account_no='$account_no'";
		
		    $this->result = mysqli_query($this->connection,$this->query);
		
		    if(mysqli_num_rows($this->result) > 0)
		    {
		        $row = mysqli_fetch_assoc($this->result);
		
		        if($row['amount'] >= $amount)
		        {
		            $this->query = "UPDATE users
		                            SET amount = amount - $amount
		                            WHERE account_no='$account_no'";
		
		            mysqli_query($this->connection,$this->query);
		
		            header("Location: index.php?msg=Amount Withdraw Successfully");
		            exit();
		        }
		        else
		        {
		            header("Location: index.php?msg=Insufficient Balance");
		            exit();
		        }
		    }
		    else
		    {
		        header("Location: index.php?msg=Account Not Found");
		        exit();
		    }
		}

		public function deposit($account_no,$amount)
		{
		    $this->query = "UPDATE users
		                    SET amount = amount + $amount
		                    WHERE account_no='$account_no'";
		
		    mysqli_query($this->connection,$this->query);
		
		    header("Location: index.php?msg=Amount Deposited Successfully");
		    exit();
		}

		public function user_information($name,$email,$account_no)
		{
		    $this->query = "INSERT INTO users(name,email,account_no,amount)
		                    VALUES('$name','$email','$account_no',0)";
		
		    mysqli_query($this->connection,$this->query);
		
		    header("Location: index.php?msg=Account Created Successfully");
		    exit();
		}


	}


	?>
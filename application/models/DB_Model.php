<?php
	/**
	* database
	*/
	class Users_Model
	{
		public $ID;
		public $Name;
		public $E_mail;
		public $Password;
		public $Role;
		
		function __construct($_id,$_name,$_email,$_password,$_role)
		{
			$this->ID=$_id;
			$this->Name=$_name;
			$this->E_mail=$_email;
			$this->Password=$_password;
			$this->Role=$_role;
		}
		
	}

	class Swales_Model
	{
		public $ID;
		public $Name;
		public $Location;
		public $Description;
		public $Capacity;
		public $Seasonality;
		public $Grade;
		
		function __construct($_id,$_name,$_location,$_description,$_capacity,$_seasonality,$_grade)
		{
			$this->ID=$_id;
			$this->Name=$_name;
			$this->Location=$_location;
			$this->Description=$_description;
			$this->Capacity=$_capacity;
			$this->Seasonality=$_seasonality;
			$this->Grade=$_grade;
		}
		
	}

	class Points_Model
	{
		public $ID;
		public $Name;
		public $Location;
		public $Description;
		public $Capacity;
		public $Type;
		
		function __construct($_id,$_name,$_location,$_description,$_capacity,$_type)
		{
			$this->ID=$_id;
			$this->Name=$_name;
			$this->Location=$_location;
			$this->Description=$_description;
			$this->Capacity=$_capacity;
			$this->Type=$_type;
		}
		
	}

	class Alarm_Model
	{
		public $UserID;
		public $UserName;
		public $Location;
		public $Description;
		public $Time;
		public $Need;
		
		function __construct($_userid,$_username,$_location,$_description,$_time,$_need)
		{
			$this->UserID=$_userid;
			$this->UserName=$_username;
			$this->Location=$_location;
			$this->Description=$_description;
			$this->Time=$_time;
			$this->Need=$_need;
		}
		
	}
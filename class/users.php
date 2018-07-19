<?php

session_start();

class users{

	public $host = "localhost";
	public $user = "root";
	public $pass = "";
	public $db_name = "quiz_oops";
	public $conn;
	public $data;
	public $cat;
	public $qus;
	public $qust;
	


	
	


	public function __construct()
	{
		$this->conn=new mysqli($this->host,$this->user,$this->pass,$this->db_name);

	if($this->conn->connect_errno)
	{
		die("database connection failed".$this->conn->connect_errno);
	}
}
public function signup($data)
{
    $this->conn->query($data);
    return true;
}

public function signin($cpf,$pass){

	$query=$this->conn->query("SELECT cpf,pass from signup where cpf='$cpf' and pass='$pass'");
	$query->fetch_array(MYSQLI_ASSOC);
	if($query->num_rows>0)
	{
		$_SESSION['cpf']=$cpf;
		return true;
	}

	else
	{
		return false;
	}
}
public function users_profile($cpf)
{

$query=$this->conn->query("select * from signup where cpf='$cpf'");
	$row=$query->fetch_array(MYSQLI_ASSOC);
	if($query->num_rows>0)
	{
		$this->data[]=$row;
	}
	return $this->data;

}
public function cat_shows(){
	$query=$this->conn->query("select * from category");
	while($row=$query->fetch_array(MYSQLI_ASSOC))
	{
		$this->cat[]=$row;
	}
	return $this->cat;

}

public function qus_show($qus){
	
	$query=$this->conn->query("select * from questions where cat_id='$qus'");
	while($row=$query->fetch_array(MYSQLI_ASSOC))
	{
		$this->qus[]=$row;
	}
	return $this->qus;
	

}

public function answer($data){
	$ans=implode('',$data);
	$right=0;
	$wrong=0;
	$no_answer=0;
	$query=$this->conn->query("select id,ans from questions where cat_id='".$_SESSION['cat']."'");
	while($qust=$query->fetch_array(MYSQLI_ASSOC))
	{
		if($qust['ans']==$_POST[$qust['id']])
		{
			$right++;
		}
		elseif($_POST[$qust['id']]=="no_attempt")
		{
            $no_answer++;
		}
		else{
			$wrong++;
		}
	}

	

$array=array();
$array['right']=$right;
$array['wrong']=$wrong;
$array['no-answer']=$no_answer;
return $array;

}



public function url($url)
{
	header("location:".$url);
}


}



?>


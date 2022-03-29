<?php

include 'config.php';

class auth extends database
{

    public function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    public function upload_img($file)
    {
        $allow = array('jpg', 'jpeg', 'png');
        $exntension = explode('.', $file['name']);
        $fileActExt = strtolower(end($exntension));
        $fileNew = rand() . "." . $fileActExt;  // rand function create the rand number 
        $filePath = '../../uploads/' . $fileNew;

        if (in_array($fileActExt, $allow)) {
            if ($file['size'] > 0 && $file['error'] == 0) {
                if (move_uploaded_file($file['tmp_name'], $filePath)) {
                    return $fileNew;
                } else {
                    return false;
                }
            }
        }
    }

    public function signin($email, $password_2)
    {
        $sql = "SELECT * from users where email=:email && password=:password";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['email' => $email, 'password' => $password_2]);
        $count =  $stmt->rowCount();
        return $count;
    }
    public function today_attendence($user_id)
    {
        $date_today = date('Y-m-d');
        $sql = "SELECT * FROM `attendence` WHERE user_id =:user_id AND DATE(created_on) =:date_today";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['user_id' => $user_id, 'date_today' => $date_today]);
        $today_attendence_check =  $stmt->rowCount();
        return $today_attendence_check;
    }
    public function login_attendence_entry($user_id)
    {
        $sql = "INSERT into attendence (user_id, status) VALUES (:user_id,'1')";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['user_id' => $user_id]);
    }
    public function fetch_user_id($email)
    {
        $sql = "SELECT id from users where email=:email";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['email' => $email]);
        $user_fetched = $stmt->fetch();
        return $user_fetched['id'];
    }
    public function session_user($email)
    {
        $sql = "SELECT id,email from users where email=:email";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['email' => $email]);
        $user_fetched = $stmt->fetch();
        $_SESSION['id'] = $user_fetched['id'];
        $_SESSION['email'] = $user_fetched['email'];
    }
    public function fetch_ip()
    {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }
    public function fetch_ip_from_db()
    {
        $sql = "SELECT ip_address from ip";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $fetched_ip = $stmt->fetch();
        return $fetched_ip['ip_address'];
    }

    public function attendence_update($user_id, $today_date, $now_time)
    {

        $sql = "UPDATE attendence set to_time=:now_time where user_id = :user_id AND date(created_on)=$today_date ";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['user_id' => $user_id, 'now_time' => $now_time]);
        return true;
    }
    public function fetch_today_attendence($today_date, $user_id)
    {
        $sql = "SELECT created_on,to_time,from_time from attendence where user_id= :user_id and created_on=:today_date";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['user_id' => $user_id, '$created_on' => $today_date]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    public function fetch_office_hour()
    {
        $sql = "SELECT * from office_hour";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
   public function insert_project($project_name,$project_description,$project_budget,$project_deadline,$client_name,$client_email,$client_number,$file){
       $sql="INSERT into projects(project_name,project_description,project_budget,project_deadline,client_name,client_email,client_number,file) VALUES(:project_name,:project_description,:project_budget,:project_deadline,:client_name,:client_email,:client_number,:file)";
       $stmt=$this->conn->prepare($sql);
$stmt->execute(['project_name'=>$project_name,'project_description'=>$project_description,'project_budget'=>$project_budget,'project_deadline'=>$project_deadline,'client_name'=>$client_name,'client_email'=>$client_email,'client_number'=>$client_number,'file'=>$file]);
return true;
   }

 public function fetch_all_project(){
     $sql="SELECT * from projects";
     $stmt=$this->conn->prepare($sql);
$stmt->execute();
$result=$stmt->fetchAll(PDO::FETCH_ASSOC);
return $result;

 }
 public function fetch_assigned_project(){
$sql="SELECT project_assigned.project_deadline as employee_deadline,users.name as employee_name,projects.project_name as project, project_assigned.project_status as status from project_assigned inner join users on project_assigned.user_id=users.id inner join projects on project_assigned.project_id=projects.id";
$stmt=$this->conn->prepare($sql);
$stmt->execute();
$result=$stmt->fetchAll(PDO::FETCH_ASSOC);
return $result;

 }
    
    public function add_loan($name, $purpose, $amount, $deadline, $date_taken, $file)
    {
        $file_upload = $this->upload_img($file);
        $sql = "INSERT into loans (name,purpose,amount,deadline,date_taken,file) VALUES (:name,:purpose, :amount,:deadline,:date_taken,:file)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam('name', $name);
        $stmt->bindParam('purpose', $purpose);
        $stmt->bindParam('amount', $amount);
        $stmt->bindParam('deadline', $deadline);
        $stmt->bindParam('date_taken', $date_taken);
        $stmt->bindParam('file', $file_upload);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function add_expenses($name, $amount, $file)
    {
        $file_upload = $this->upload_img($file);
        $sql = "INSERT into expense (name,budget,file) VALUES (:name,:amount,:file)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam('name', $name);
        $stmt->bindParam('amount', $amount);
        $stmt->bindParam('file', $file_upload);
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function add_funds($name, $amount, $file)
    {
        $file_upload = $this->upload_img($file);
        $sql = "INSERT into fund (name,budget,file) VALUES (:name,:amount,:file)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam('name', $name);
        $stmt->bindParam('amount', $amount);
        $stmt->bindParam('file', $file_upload);
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}

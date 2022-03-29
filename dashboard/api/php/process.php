<?php
ob_start();
include 'auth.php';
$cuser = new auth();

if (isset($_POST['submit']) && $_POST['submit'] == "signin") {
    $email = $cuser->test_input($_POST['email']);
    $password = $cuser->test_input($_POST['password']);
    $salt = ")(*&^%$#(*&^%$#*&^%$#";
    $password_2 = md5($password . $salt);
    $result = $cuser->signin($email, $password_2);

    if ($result > 0) {
        $user_id_fetched = $cuser->fetch_user_id($email);
        $check_attendence = $cuser->today_attendence($user_id_fetched);
        $_SESSION['email'] = $email;
        $_SESSION['id'] = $user_id_fetched;
        if ($cuser->fetch_ip_from_db() == $cuser->fetch_ip()) {

            if ($check_attendence > 0) {
                header("Location: /index.php");
            } else {
                $cuser->login_attendence_entry($user_id_fetched);
                header("Location: /index.php?auth=yes");
            }
        } else {
            header("Location: /index.php?noip");
        }
    } else {
        echo "<script>window.location.href='../../login.php?action=incorrect';</script>";
        exit;
    }
}
if (isset($_POST['action']) && $_POST['action'] == "attendence_update") {
    $now_time = date('H:i:s');
    $today_date = date('Y-m-d');

    $office_hour = $cuser->fetch_office_hour();
    if ($now_time > $office_hour['from_hour'] && $now_time < $office_hour['to_hour']) {
        $cuser->attendence_update($_SESSION['id'], $today_date, $now_time);
    } else {
        echo "office hour are over";
    }
}
if (isset($_POST['action']) && $_POST['action'] == "Submit Project"){


    $project_name=$cuser->test_input($_POST['pname']);
    $project_description=$cuser->test_input($_POST['pdescription']);
    $project_budget=$cuser->test_input($_POST['pbudget']);
    $project_deadline=$cuser->test_input($_POST['pdeadline']);
    $client_name=$cuser->test_input($_POST['cname']);
    $client_email=$cuser->test_input($_POST['cemail']);
    $client_number=$cuser->test_input($_POST['cnumber']);
    print_r($_FILES);
    if(isset($_FILES['img'])){
      
        $img_name = $_FILES['img']['name'];
        $img_size =$_FILES['img']['size'];
        $img_tmp =$_FILES['img']['tmp_name'];
        $img_type=$_FILES['img']['type'];
    
        $tmp = explode('.',$_FILES['img']['name']);
        $img_ext=strtolower(end($tmp));
        
        $extensions= array("jpeg","jpg","png");
        
        if(in_array($img_ext,$extensions)=== false){
           header("Location: ../../Project_submission.php?alert=invalid_type");
        }
        
        if($img_size > 5 * 1024 * 1024){
            header("Location: ../../Project_submission?alert=Too_Big_img");
        }
        
        if(empty($errors)==true){
          $img = "../../uploads/".uniqid("img_").".".$img_ext;
          move_uploaded_file($img_tmp,$img);
           
        }
     }

     $result=$cuser->insert_project($project_name,$project_description,$project_budget,$project_deadline,$client_name,$client_email,$client_number,$img);
     
    if($result){
        echo "<script>window.location.href='../../project_submission.php?action=successfullproject';</script>";
        exit;
    }else{
        echo "bye";
    }

}

if (isset($_POST['submit_loan'])) {
    $name = htmlspecialchars($_POST['name']);
    $purpose  = htmlspecialchars($_POST['purpose']);
    $amount = htmlspecialchars($_POST['amount']);
    $deadline = htmlspecialchars($_POST['deadline']);
    $date_taken = htmlspecialchars($_POST['date_of_loan']);
    $deadline_up = date("Y-m-d", strtotime($deadline));
    $date_taken_up = date("Y-m-d", strtotime($date_taken));
    $result = $cuser->add_loan($name, $purpose, $amount, $deadline_up, $date_taken_up, $_FILES['recipt']);
    if ($result == true) {
        header("Location: ../../Loans.php?alert=success");
    } else {
        header("Location: ../../Loans.php?alert=error");
    }
}
if (isset($_POST['expenses'])) {
    $name = htmlspecialchars($_POST['name']);
    $amount = htmlspecialchars($_POST['amount']);
    $result = $cuser->add_expenses($name, $amount, $_FILES['img']);
    if ($result == true) {
        header("Location: ../../Expenses.php?alert=success");
    } else {
        header("Location: ../../Expenses.php?alert=error");
    }
}
if (isset($_POST['submit_funds'])) {
    $name = htmlspecialchars($_POST['name']);
    $amount = htmlspecialchars($_POST['amount']);
    $result = $cuser->add_funds($name, $amount, $_FILES['recipt']);
    if ($result == true) {
        header("Location: ../../Expenses.php?alert=success");
    } else {
        header("Location: ../../Expenses.php?alert=error");
    }
} 
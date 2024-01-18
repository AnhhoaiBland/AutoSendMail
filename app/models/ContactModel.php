<?php
class ContactModel extends  Database {

function Contact(){
    if (!empty($_POST['SendContact'])) {
        $name = $_POST['name'];
        $email= $_POST['c_email'];
        $phone =$_POST['c_phone'];
        $subject = $_POST['c_subject'];
        $content=$_POST['c_message'];
        $date = date('h:i:s A d/m/Y');
        $this->InsertContact($name,$email,$phone,$date,$content,$subject);
    }
}
function InsertContact($name,$email,$phone,$date,$content,$subject){
    $stmt = $this->conn->prepare("INSERT INTO `contact` (contact_name, contact_email,contact_phone,contact_date,contact_content,contact_subject) VALUES (?,?,?,?,?,?)");

    $stmt->bind_param('ssssss', $name,$email,$phone,$date,$content,$subject);
    if (!empty($email)) {
        if ($stmt->execute()) {
            header('Location: /dashboard');
        } else {
           echo 'Lỗi';
        }
    } else {
        header('Location: /dasboard/');
    }
}
function Send(){

}

}
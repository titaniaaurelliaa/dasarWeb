<?php  
include('../lib/Session.php'); 
include('../lib/Connection.php'); 

$session = new Session(); 
 
$act = isset($_GET['act'])? strtolower($_GET['act']) : ''; 
 
if($act == 'login'){ 
 
    $username = $_POST['username']; 
    $password = $_POST['password'];
    
    include('../model/UserModel.php'); 
    // digunakan untuk query user 
    $user = new UserModel(); 
    $data = $user->getSingleDataByKeyword('username', $username);
 
    // digunakan untuk query user 
    // $query = $db->prepare('select * from m_user where username = ?'); 
    // $query->bind_param('s', $username); 
    // $query->execute(); 
 
    // untuk ambil datanya 
    //$data = $query->get_result()->fetch_assoc(); 
 
    // jika password sesuai 
    if(password_verify($password, $data['password'])){ 
        $session->set('is_login', true); 
        $session->set('username', $data['username']); 
        $session->set('name', $data['nama']); 
        $session->set('level', $data['level']); 
        $session->commit(); 
 
        header('Location: ../index.php', false); 
    }else{ 
        $session->setFlash('status', false); 
        $session->setFlash('message', 'Username dan password salah.'); 
        $session->commit(); 
        header('Location: ../login.php', false); 
    } 
}else if($act == 'logout'){ 
 
    $session->deleteAll(); 
 
    header('Location: ../login.php', false); 
} 
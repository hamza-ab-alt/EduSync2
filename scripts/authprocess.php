<?php
require_once '../includes/connection.php';
session_start();
if (isset($_POST['register'])) {
    
    $nom          = $_POST['nom'];
    $prenom       = $_POST['prenom'];
    $email        = $_POST['email'];
    $pass         = $_POST['password'];
    $pass_confirm = $_POST['password_confirm']; 
    if (!empty($nom) && !empty($prenom) && !empty($email) && !empty($pass)) {
        if ($pass !== $pass_confirm) {
            header("Location: ../public/registrer.php?error=password_mismatch");
            exit();
        }
        $pass_safe = password_hash($pass, PASSWORD_DEFAULT);
        try {
            $sql = "INSERT INTO users (firstname, lastename, email, password,role_id) VALUES (?, ?, ?, ?,?)";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$nom, $prenom, $email, $pass_safe,3]);
            header("Location: ../public/dashboard.php");
            exit();
        } catch (PDOException $e) {
            header("Location: ../public/registrer.php?error=email_exists");
            exit();
        }
    } else {
        header("Location: ../public/registrer.php?error=empty_fields");
        exit();
    }
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $pass  = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$email]);
    $user = $stmt->fetch();
    if ($user && password_verify($pass, $user['password'])) {
        session_start();
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['nom']     = $user['nom'];

        header("Location: ../public/dashboard.php");
        exit();
    } else {
        header("Location: ../public/login.php?error=wrong_creds");
        exit();
    }
}
?>
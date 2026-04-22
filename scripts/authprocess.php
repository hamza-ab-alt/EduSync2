<?php
// 1. N-jib khit l-connection (darori hwa l-awel)
require_once '../includes/connection.php';

// 2. Start session (bach l-user y-bqa m-connecter)
session_start();

// ---------------------------------------------------------
// PARTIE 1 : L-INSCRIPTION (REGISTER)
// ---------------------------------------------------------
if (isset($_POST['register'])) {
    
    // N-khdu l-m3loumat mn l-formulaire
    $nom          = $_POST['nom'];
    $prenom       = $_POST['prenom'];
    $email        = $_POST['email'];
    $pass         = $_POST['password'];
    $pass_confirm = $_POST['password_confirm']; // L-khanya l-jdida

    // Vériﬁcation 1: Wach kolchi 3amer?
    if (!empty($nom) && !empty($prenom) && !empty($email) && !empty($pass)) {
        
        // Vériﬁcation 2: Wach l-passwords b-jouj bhal bhal?
        if ($pass !== $pass_confirm) {
            header("Location: ../public/registrer.php?error=password_mismatch");
            exit();
        }

        // Chiffrage dyal password (Hash) bach y-koun safe
        $pass_safe = password_hash($pass, PASSWORD_DEFAULT);

        try {
            // N-7et-ou l-user l-jdid f l-base de données
            $sql = "INSERT INTO users (firstname, lastename, email, password,role_id) VALUES (?, ?, ?, ?,?)";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$nom, $prenom, $email, $pass_safe,3]);

            // Safi t-زاد! n-siftouh l-login
            header("Location: ../public/login.php?status=success");
            exit();

        } catch (PDOException $e) {
            // echo $e->getMessage();
            // Ila kyn chi email m-3awed (UNIQUE)
            header("Location: ../public/registrer.php?error=email_exists");
            exit();
        }
    } else {
        header("Location: ../public/registrer.php?error=empty_fields");
        exit();
    }
}

// ---------------------------------------------------------
// PARTIE 2 : L-CONNEXION (LOGIN)
// ---------------------------------------------------------
if (isset($_POST['login'])) {
    
    $email = $_POST['email'];
    $pass  = $_POST['password'];

    if (!empty($email) && !empty($pass)) {
        
        // 1. N-qelbou 3la l-user f l-base de données b l-email
        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$email]);
        $user = $stmt->fetch();

        // 2. Vériﬁcation: Wach password li kteb hwa li 3ndna m-khbi?
        if ($user && password_verify($pass, $user['password'])) {
            
            // 3. N-3tiwh l-badge (Session)
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['nom']     = $user['nom'];

            // Dkhal l-Dashboard
            header("Location: ../public/dashboard.php");
            exit();
        } else {
            // Error: Email awla Password ghalat
            header("Location: ../public/login.php?error=wrong_creds");
            exit();
        }
    }
}
?>
<?php 
session_start();
$nom=$_SESSION['firstname'];
if(!isset($nom)){
    header('location: ../scripts/logout.php');
    exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <h1 class='text-red-500 '>Welcome  <?php echo $nom; ?> in the dashboard page</h1>
    <a href="../scripts/logout.php" cl>logout</a>
</body>
</html>
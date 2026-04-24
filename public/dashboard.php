<?php 
session_start();
$nom=$_SESSION['firstname'];
if(!isset($nom)){
    header('location: ../scripts/logout.php');
    exit();
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduSync - Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style> body { font-family: 'Inter', sans-serif; } </style>
</head>
<body class="bg-slate-50 flex flex-col min-h-screen">

    <nav class="w-full py-4 px-8 bg-white border-b border-gray-100 flex justify-between items-center">
        <span class="text-xl font-bold text-blue-600 tracking-tight">EduSync</span>
        
        <a href="../scripts/logout.php" class="flex items-center gap-2 text-gray-500 hover:text-red-600 transition-all duration-300 text-sm font-medium border border-gray-200 hover:border-red-200 px-4 py-2 rounded-full hover:bg-red-50">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/><polyline points="16 17 21 12 16 7"/><line x1="21" y1="12" x2="9" y2="12"/></svg>
            Se déconnecter
        </a>
    </nav>

    <div class="flex-1 flex items-center justify-center p-6">
        
        <div class="max-w-2xl w-full text-center">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-blue-100 text-blue-600 rounded-3xl mb-6 shadow-sm">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
            </div>

            <h1 class="text-4xl font-extrabold text-slate-800 mb-2">
                Welcome to <span class="text-gray-600">EduSync</span>
            </h1>
            


</body>
</html>
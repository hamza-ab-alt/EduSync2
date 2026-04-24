<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - EduSync</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">

    <div class="bg-white p-8 rounded-lg shadow-lg w-96">
        <h2 class="text-2xl font-bold mb-6 text-center text-gray-600">EduSync - Inscription</h2>

        <form action="../scripts/authprocess.php" method="POST" class="space-y-4">
            
            <div>
                <label class="block text-sm font-medium text-gray-700">Nom</label>
                <input type="text" name="nom" required class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Prénom</label>
                <input type="text" name="prenom" required class="w-full mt-1 p-2 border border-gray-300 rounded-md">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" required class="w-full mt-1 p-2 border border-gray-300 rounded-md">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Mot de passe</label>
                <input type="password" name="password" required class="w-full mt-1 p-2 border border-gray-300 rounded-md">
            </div>
            <div>
    <label class="block text-sm font-medium text-gray-700">Confirmez le mot de passe</label>
    <input type="password" name="password_confirm" required class="w-full mt-1 p-2 border border-gray-300 rounded-md">
</div>

            <button type="submit" name="register" class="w-full bg-gray-500 text-white p-2 rounded-md hover:bg-blue-700 transition duration-200">
                S'inscrire
            </button>

        </form>
<div class="mt-6 text-center">
    <p class="text-sm text-gray-600">
        Déjà membre ? 
        <a href="login.php" class="text-blue-600 font-bold hover:underline cursor-pointer">
            Se connecter
        </a>
    </p>
</div>
    </div>

</body>
</html>
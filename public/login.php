<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - EduSync</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">

    <div class="bg-white p-8 rounded-lg shadow-lg w-96">
        <h2 class="text-2xl font-bold mb-6 text-center text-blue-600">EduSync - Connexion</h2>

        <form action="../scripts/authprocess.php" method="POST" class="space-y-4">
            
            <div>
                <label class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" required class="w-full mt-1 p-2 border border-gray-300 rounded-md">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Mot de passe</label>
                <input type="password" name="password" required class="w-full mt-1 p-2 border border-gray-300 rounded-md">
            </div>

            <button type="submit" name="login" class="w-full bg-blue-600 text-white p-2 rounded-md hover:bg-blue-700 transition duration-200">
                Se connecter
            </button>

        </form>

        <p class="mt-4 text-center text-sm">
            Pas encore de compte ? <a href="registrer.php" class="text-blue-600 hover:underline">S'inscrire</a>
        </p>
    </div>

</body>
</html>
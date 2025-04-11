<?php
$errors = $_SESSION["errors"] ?? [];
$email = $_SESSION["email"] ?? "";
unset($_SESSION["errors"], $_SESSION["email"]);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.min.css"
      rel="stylesheet"
    />
    <title>Connexion</title>
  </head>
  <body class="h-screen flex bg-white">
    <div class="w-1/2 hidden lg:block">
      <img
        src="../public/asset/bougie-livre-main-dessin-illustration_98292-4165.avif"
        alt=""
        class="w-full h-full object-cover"
      />
    </div>
    <div class="flex-1 flex flex-col justify-center items-center gap-5">
      <div class="flex justify-between">
        <!-- <div class="flex items-center text-white gap-1">
          <div class="p-2 bg-blue-500 rounded text-white self-center">Gp</div>
          <div class="flex flex-col text-gray-800 font-medium">
            <span>Gestion</span>
            <span>Prets</span>
          </div>
        </div> -->
        <div class="lg:hidden" id="sidebar-close">
          <i class="ri-layout-right-line text-lg font-semibold"></i>
        </div>
      </div>
      <h1 class="font-bold text-3xl text-start ">
         Se connectez 
      </h1>
      <form method="post" class="w-full md:w-[500px] mx-auto p-3 mt-4 space-y-4">
    <div>
        <label for="email" class="block text-sm font-medium text-gray-600">Adresse Email</label>
        <div class="relative">
            <input 
                type="email" 
                id="email" 
                name="email" 
                class="w-full px-4 py-2 mt-1 text-gray-700 bg-gray-100 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" 
                placeholder="Entrez votre email" 
                value="<?= $_POST["email"] ?? "" ?>"
            >
            <i class="ri-mail-line absolute right-3 top-3 text-gray-500"></i>
        </div>
        <span class="text-red-500"><?= $_SESSION["error"]["email"] ?? "" ?></span>
    </div>

    <div>
        <label for="password" class="block text-sm font-medium text-gray-600">Mot de passe</label>
        <div class="relative">
            <input 
                type="password" 
                id="password" 
                name="password" 
                class="w-full px-4 py-2 mt-1 text-gray-700 bg-gray-100 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" 
                placeholder="Entrez votre mot de passe"
            >
            <i class="ri-lock-2-line absolute right-3 top-3 text-gray-500"></i>
        </div>
        <span class="text-red-500"><?= $_SESSION["error"]["mot_de_passe"] ?? "" ?></span>
    </div>

    <button 
        type="submit" 
        class="w-full px-4 py-2 font-bold text-white bg-blue-600 rounded-lg hover:bg-blue-700"
    >
        Se connecter
    </button>
</form>

      <div id="notifications" class="fixed top-4 right-4 space-y-2"></div>
    </div>
    <script type="module" src="../src/login.js"></script>
  </body>
</html>

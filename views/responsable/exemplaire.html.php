<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">
    <title>Liste des Ouvrages</title>
</head>
<body class="bg-gray-100 p-6">

    <div class="container mx-auto">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold">Liste des Ouvrages</h2>
            <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg" onclick="my_modal_1.showModal()">
                Nouveau
            </button>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php foreach ($exemplaires as $exemplaire): ?>
            <div class="bg-white shadow-lg rounded-lg p-5">
                <h3 class="text-lg font-semibold text-gray-700">📖 Ouvrage #<?= htmlspecialchars($exemplaire['code']) ?></h3>
                <p class="text-gray-600"><strong>Ouvrage Code :</strong> <?= htmlspecialchars($exemplaire['ouvrage_code']) ?></p>
                <p class="text-gray-600"><strong>Date Enregistrement :</strong> <?= htmlspecialchars($exemplaire['dateEnregistrement']) ?></p>
                <p class="text-gray-600"><strong>État :</strong> 
                    <span class="px-2 py-1 rounded-lg text-white 
                        <?= $exemplaire['etat'] == 'Neuf' ? 'bg-green-500' : ($exemplaire['etat'] == 'Bon état' ? 'bg-yellow-500' : 'bg-red-500') ?>">
                        <?= htmlspecialchars($exemplaire['etat']) ?>
                    </span>
                </p>
                <div class="mt-4 flex justify-between">
                    <a href="edit.php?id=<?= $exemplaire['code'] ?>" class="text-blue-500 hover:text-blue-700">
                        <i class="ri-edit-line"></i> Modifier
                    </a>
                    <a href="delete.php?id=<?= $exemplaire['code'] ?>" class="text-red-500 hover:text-red-700" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet ouvrage ?');">
                        <i class="ri-delete-bin-line"></i> Supprimer
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

</body>
</html>


    <div class="flex h-screen">
        <!-- Main Content -->
        <main class="flex-1 p-6">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold">Liste des Ouvrages</h2>
                <button class="bg-blue-400 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition-colors btn" onclick="my_modal_1.showModal()">
                    Nouveau
                </button>
            </div>
            <div class="flex space-x-2 mt-2 sm:mt-0">
                <input type="text" placeholder="Rechercher un ouvrage..." class="border rounded-lg px-3 py-1 w-32 sm:w-48">
                <button class="bg-blue-500 text-white px-4 py-1 rounded-lg">Chercher</button>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 p-6">
                <!-- Card Template - Répété pour chaque exemplaire -->
                <?php foreach ($ouvrages as $ouvrage): ?>
                <div class="bg-white p-4 rounded-lg shadow-md flex flex-col">
                    <img src="./asset/pile-livres-bleus_1308-171795.avif" alt="Couverture du livre" class="mb-2 w-full h-40 object-cover">
                    <h3 class="text-lg font-semibold"><?= htmlspecialchars($ouvrage['titre']) ?></h3>
                    <div class="flex justify-between border-t border-gray-300 pt-4 mt-auto">
                        <button class="flex items-center text-sm font-medium text-indigo-600 hover:text-indigo-800 transition-colors">
                            <i class="ri-eye-line mr-1"></i>
                            Détails
                        </button>
                        
                        <div class="flex space-x-2">
                            <a href="#" class="p-2 rounded-lg bg-indigo-50 text-indigo-600 hover:bg-indigo-100 transition-colors" title="Modifier">
                                <i class="ri-archive-fill"></i>
                            </a>
                            
                        </div>
                    </div>
                </div>
                
                <!-- Répéter la carte pour chaque exemplaire -->
                <div class="bg-white p-4 rounded-lg shadow-md flex flex-col">
                    <img src="./asset/pile-livres-bleus_1308-171795.avif" alt="Couverture du livre" class="mb-2 w-full h-40 object-cover">
                    <h3 class="text-lg font-semibold"><?= htmlspecialchars($ouvrage['titre']) ?></h3>
                    <div class="flex justify-between border-t border-gray-300 pt-4 mt-auto">
                        <button class="flex items-center text-sm font-medium text-indigo-600 hover:text-indigo-800 transition-colors">
                            <i class="ri-eye-line mr-1"></i>
                            Détails
                        </button>
                        
                        <div class="flex space-x-2">
                            <a href="#" class="p-2 rounded-lg bg-indigo-50 text-indigo-600 hover:bg-indigo-100 transition-colors" title="Modifier">
                                <i class="ri-archive-fill"></i>
                            </a>
                           
                        </div>
                    </div>
                </div>
                
                <div class="bg-white p-4 rounded-lg shadow-md flex flex-col">
                    <img src="./asset/pile-livres-bleus_1308-171795.avif" alt="Couverture du livre" class="mb-2 w-full h-40 object-cover">
                    <h3 class="text-lg font-semibold"><?= htmlspecialchars($ouvrage['titre']) ?></h3>
                    <div class="flex justify-between border-t border-gray-300 pt-4 mt-auto">
                        <button class="flex items-center text-sm font-medium text-indigo-600 hover:text-indigo-800 transition-colors">
                            <i class="ri-eye-line mr-1"></i>
                            Détails
                        </button>
                        
                        <div class="flex space-x-2">
                            <a href="#" class="p-2 rounded-lg bg-indigo-50 text-indigo-600 hover:bg-indigo-100 transition-colors" title="Modifier">
                                <i class="ri-archive-fill"></i>
                            </a>
                           
                        </div>
                    </div>
                </div>
                
                <div class="bg-white p-4 rounded-lg shadow-md flex flex-col">
                    <img src="./asset/pile-livres-bleus_1308-171795.avif" alt="Couverture du livre" class="mb-2 w-full h-40 object-cover">
                    <h3 class="text-lg font-semibold">Le rêve</h3>
                    <div class="flex justify-between border-t border-gray-300 pt-4 mt-auto">
                        <button class="flex items-center text-sm font-medium text-indigo-600 hover:text-indigo-800 transition-colors">
                            <a href="#" class="p-2 rounded-lg bg-indigo-50 text-indigo-600 hover:bg-indigo-100 transition-colors" title="Modifier">
                                <i class="ri-archive-fill"></i>
                            </a>
                            Détails
                        </button>
                        
                        <div class="flex space-x-2">
                            <a href="#" class="p-2 rounded-lg bg-indigo-50 text-indigo-600 hover:bg-indigo-100 transition-colors" title="Modifier">
                                <i class="ri-archive-fill"></i>
                            </a>
                           
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- Pagination -->
            <div class="flex justify-center space-x-2 mt-6">
                <button class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded transition-colors">&laquo;</button>
                <button class="bg-blue-500 text-white px-3 py-1 rounded">1</button>
                <button class="bg-gray-300 hover:bg-gray-400 px-3 py-1 rounded transition-colors">2</button>
                <button class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded transition-colors">&raquo;</button>
            </div>
        </main>
    </div>




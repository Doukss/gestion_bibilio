

    <div class="flex h-screen ">
        
        

        <!-- Main Content -->
   

        <!-- Main Content -->
        <main class="flex-1 overflow-y-auto p-6">
            <div class="w-full max-w-6xl mx-auto p-8 bg-white rounded-xl shadow-sm border border-gray-100">
                <div class="flex justify-between items-center mb-8">
                    <h1 class="text-2xl font-semibold text-gray-800 flex items-center">
                        <i class="ri-dashboard-line mr-3 text-blue-500"></i>Tableau de Bord
                    </h1>
                    <div class="text-sm text-gray-500 flex items-center">
                        <i class="ri-time-line mr-1"></i>Mis à jour à 
                    </div>
                </div>
                
                <!-- Cartes de statistiques -->
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-5 mb-8">
                    <!-- Carte Ouvrages -->
                    <div class="bg-white p-5 rounded-lg border border-gray-200 shadow-xs hover:shadow-md transition-shadow">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-500">Ouvrages</p>
                                <p class="text-3xl font-bold text-gray-800 mt-1"><?= $ouvrage["nb_ouvrages"] ?></p>
                            </div>
                            <div class="p-3 rounded-full bg-indigo-50 text-indigo-600">
                                <i class="ri-book-2-line text-xl"></i>
                            </div>
                        </div>
                        <div class="mt-4 text-xs text-gray-500 flex items-center">
                            <span class="text-green-500 flex items-center">
                                <i class="ri-arrow-up-line mr-1"></i>
                                8% vs mois dernier
                            </span>
                        </div>
                    </div>

                    <!-- Carte Acteurs -->
                    <div class="bg-white p-5 rounded-lg border border-gray-200 shadow-xs hover:shadow-md transition-shadow">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-500">Auteurs</p>
                                <p class="text-3xl font-bold text-gray-800 mt-1"><?= $auteur["nb_auteurs"] ?></p>
                            </div>
                            <div class="p-3 rounded-full bg-green-50 text-green-600">
                                <i class="ri-user-3-line text-xl"></i>
                            </div>
                        </div>
                        <div class="mt-4 text-xs text-gray-500 flex items-center">
                            <span class="text-green-500 flex items-center">
                                <i class="ri-arrow-up-line mr-1"></i>
                                5% vs mois dernier
                            </span>
                        </div>
                    </div>

                    <!-- Carte Exemplaires -->
                    <div class="bg-white p-5 rounded-lg border border-gray-200 shadow-xs hover:shadow-md transition-shadow">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-500">Exemplaires</p>
                                <p class="text-3xl font-bold text-gray-800 mt-1"><?= $exemplaire["nb_exemplaires"] ?></p>
                            </div>
                            <div class="p-3 rounded-full bg-purple-50 text-purple-600">
                                <i class="ri-stack-line text-xl"></i>
                            </div>
                        </div>
                        <div class="mt-4 text-xs text-gray-500 flex items-center">
                            <span class="text-green-500 flex items-center">
                                <i class="ri-arrow-up-line mr-1"></i>
                                12% vs mois dernier
                            </span>
                        </div>
                    </div>
                </div>
                
                <!-- Graphiques -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <!-- Répartition par Rayon -->
                    <div class="bg-white p-6 rounded-xl border border-gray-200">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-lg font-medium text-gray-800 flex items-center">
                                <i class="ri-bar-chart-2-line mr-2 text-blue-500"></i>Répartition par Rayon
                            </h3>
                            <span class="text-xs px-2 py-1 bg-blue-50 text-blue-600 rounded-full">Mois en cours</span>
                        </div>
                        <div class="space-y-3">
                            <div>
                                <div class="flex justify-between text-sm text-gray-600 mb-1">
                                    <span>Littérature</span>
                                    <span>35%</span>
                                </div>
                                <div class="w-full h-2 bg-gray-200 rounded-full overflow-hidden">
                                    <div class="h-2 bg-blue-500 rounded-full" style="width: 35%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between text-sm text-gray-600 mb-1">
                                    <span>Sciences</span>
                                    <span>25%</span>
                                </div>
                                <div class="w-full h-2 bg-gray-200 rounded-full overflow-hidden">
                                    <div class="h-2 bg-green-500 rounded-full" style="width: 25%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between text-sm text-gray-600 mb-1">
                                    <span>Histoire</span>
                                    <span>20%</span>
                                </div>
                                <div class="w-full h-2 bg-gray-200 rounded-full overflow-hidden">
                                    <div class="h-2 bg-purple-500 rounded-full" style="width: 20%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between text-sm text-gray-600 mb-1">
                                    <span>Autres</span>
                                    <span>20%</span>
                                </div>
                                <div class="w-full h-2 bg-gray-200 rounded-full overflow-hidden">
                                    <div class="h-2 bg-gray-400 rounded-full" style="width: 20%"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Statut des Exemplaires -->
                    <div class="bg-white p-6 rounded-xl border border-gray-200">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-lg font-medium text-gray-800 flex items-center">
                                <i class="ri-pie-chart-2-line mr-2 text-green-500"></i>Statut des Exemplaires
                            </h3>
                            <span class="text-xs px-2 py-1 bg-green-50 text-green-600 rounded-full">Total: <?= $exemplaire["nb_exemplaires"] ?></span>
                        </div>
                        <div class="space-y-3">
                            <div>
                                <div class="flex justify-between text-sm text-gray-600 mb-1">
                                    <span>Disponibles</span>
                                    <span>65%</span>
                                </div>
                                <div class="w-full h-2 bg-gray-200 rounded-full overflow-hidden">
                                    <div class="h-2 bg-green-500 rounded-full" style="width: 65%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between text-sm text-gray-600 mb-1">
                                    <span>Empruntés</span>
                                    <span>25%</span>
                                </div>
                                <div class="w-full h-2 bg-gray-200 rounded-full overflow-hidden">
                                    <div class="h-2 bg-yellow-500 rounded-full" style="width: 25%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between text-sm text-gray-600 mb-1">
                                    <span>En réparation</span>
                                    <span>10%</span>
                                </div>
                                <div class="w-full h-2 bg-gray-200 rounded-full overflow-hidden">
                                    <div class="h-2 bg-red-500 rounded-full" style="width: 10%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Dernières activités -->
                <div class="mt-8 bg-white p-6 rounded-xl border border-gray-200">
                    <h3 class="text-lg font-medium text-gray-800 mb-4 flex items-center">
                        <i class="ri-notification-3-line mr-2 text-purple-500"></i>Dernières Activités
                    </h3>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="p-2 bg-blue-50 text-blue-600 rounded-full mr-3">
                                <i class="ri-book-mark-line"></i>
                            </div>
                            <div class="flex-1">
                                <p class="text-sm font-medium">Nouvel ouvrage ajouté</p>
                                <p class="text-xs text-gray-500">"Les Misérables" par Victor Hugo</p>
                                <p class="text-xs text-gray-400 mt-1">Il y a 2 heures</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="p-2 bg-green-50 text-green-600 rounded-full mr-3">
                                <i class="ri-user-add-line"></i>
                            </div>
                            <div class="flex-1">
                                <p class="text-sm font-medium">Nouvel acteur enregistré</p>
                                <p class="text-xs text-gray-500">Jean Dupont (Auteur)</p>
                                <p class="text-xs text-gray-400 mt-1">Aujourd'hui, 09:45</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="p-2 bg-yellow-50 text-yellow-600 rounded-full mr-3">
                                <i class="ri-exchange-line"></i>
                            </div>
                            <div class="flex-1">
                                <p class="text-sm font-medium">Exemplaire emprunté</p>
                                <p class="text-xs text-gray-500">"Le Petit Prince" (ID: EX-7845)</p>
                                <p class="text-xs text-gray-400 mt-1">Hier, 16:30</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>




</body>
</html>
<div
    id="sidebar"
    class="flex flex-col justify-between p-3 fixed left-0 shadow-md h-full text-white bg-gray-900 w-64 lg:w-52 md:flex transform transition-transform duration-300 ease-in-out -translate-x-full md:translate-x-0 z-50">
    <div class="flex flex-col gap-6">
        <div class="flex justify-between">
            <div class="flex items-center gap-2 text-md">
                <i class="ri-funds-fill text-xl"></i>
                <span class="font-medium">My Bibilio</span>
            </div>
            <div class="lg:hidden" id="sidebar-close">
                <i class="ri-layout-right-line text-lg font-semibold"></i>
            </div>
        </div>
        <?php if ($role === "responsable"): ?>
            <nav>
                <ul>
                    <li class="py-2 px-4 <?= $page === 'dashboard' ? 'bg-orange-600 text-white shadow' : 'hover:bg-gray-700' ?> rounded-3xl">
                        <a
                            href="<?= WEBROOT ?>controller=resbibilio&page=dashboard"
                            class="font-medium gap-3 flex items-center text-sm">
                            <i class="ri-home-3-line text-lg"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="py-2 px-4 <?= $page === 'ouvrage' ? 'bg-orange-600 text-white shadow' : 'hover:bg-gray-700' ?> rounded-3xl">
                        <a
                            href="<?= WEBROOT ?>controller=resbibilio&page=ouvrage"
                            class="font-medium gap-3 flex items-center text-sm">
                            <i class="ri-group-line text-lg"></i>
                            <span>Ouvrages</span>
                        </a>
                    </li>
                    <li class="py-2 px-4 <?= $page === 'rayon' ? 'bg-orange-600 text-white shadow' : 'hover:bg-gray-700' ?> rounded-3xl">
                        <a
                            href="<?= WEBROOT ?>controller=resbibilio&page=rayon"
                            class="font-medium gap-3 flex items-center text-sm">
                            <i class="ri-user-line text-lg"></i>
                            <span>Rayon</span>
                        </a>
                    </li>
                    <li class="py-2 px-4 <?= $page === 'exemplaire' ? 'bg-orange-600 text-white shadow' : 'hover:bg-gray-700' ?> rounded-3xl">
                        <a
                            href="<?= WEBROOT ?>controller=resbibilio&page=exemplaire"
                            class="font-medium gap-3 flex items-center text-sm">
                            <i class="ri-book-open-line text-lg"></i>
                            <span>Exemplaire</span>
                        </a>
                    </li>
                    
                </ul>
            </nav>
        
        <?php endif; ?>
    </div>
    <a href="<?= WEBROOT ?>controllers=security&page=deconnexion">
        <button
            class="px-2 py-2 hover:bg-gray-700 hover:rounded-3xl font-medium rounded w-full">
            <span>Deconnexion</span>
            <i class="ri-logout-box-line"></i>
        </button>
    </a>
</div>
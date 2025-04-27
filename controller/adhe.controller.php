<?php
verifyUserAuth();
require_once "../boostrap/required.php";





$page = isset($_GET["page"]) ? $_GET["page"] : "dashboard";
$role = $_SESSION["user"]["role"];
$data = ["role" => $role, "page" => $page];

switch ($page) {
    case 'dashboard':
        
        $data += [
            "ouvrage" => getCountAllOuvrage(),
            "auteur" => getCountAllAuteur(),
            "exemplaire" => getCountAllExemplaire()

        ];
            renderView("responsable/dashboard", $data, "dashboard");
            break;      
    case 'catalogue': 
        // $catalogues = getAllCatalogues();
        // $data = [
        //     "role" => $role,
        //     "page" => $page,
        //     "catalogues" => $catalogues
        // ];
    renderView("responsable/ouvrage", $data, "dashboard");
    break;
    case 'compte':
        $comptes = getAllComptes();
        $data = [
            "role" => $role,
            "page" => $page,
            "comptes" => $comptes
        ];
        renderView("responsable/cours", $data, "dashboard");
        break;
    case 'pret':
        $prets = getPrets();
        $data = [
            "role" => $role,
            "page" => $page,
            "prets" => $prets
        ];
            renderView("responsable/prets", $data, "dashboard");
            break;
    
    default:
        redirection("notFound", "error");
        break;
}

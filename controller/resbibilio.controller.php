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
    case 'ouvrage': 
        $ouvrages = getOuvrages();
        // dd($ouvrages);
        $data = [
            "role" => $role,
            "page" => $page,
            "ouvrages" => $ouvrages
        ];
    renderView("responsable/ouvrage", $data, "dashboard");
    break;
    case 'auteur':
        $auteurs = getAllAuteur();
        $data = [
            "role" => $role,
            "page" => $page,
            "auteurs" => $auteurs
        ];
        renderView("responsable/cours", $data, "dashboard");
        break;
    case 'rayon':
        $rayons = getRyons();
        $data = [
            "role" => $role,
            "page" => $page,
            "rayons" => $rayons
        ];
            renderView("responsable/rayon", $data, "dashboard");
            break;
        
    case 'exemplaire':
        $exemplaires = getExemplaire();
        $data = [
            "role" => $role,
            "page" => $page,
            "exemplaires" => $exemplaires
        ];
        renderView("responsable/exemplaire", $data, "dashboard");
        break;
    
    default:
        redirection("notFound", "error");
        break;
}

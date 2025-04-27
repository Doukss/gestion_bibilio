<?php

function renderView(string $view, array $datas = [], string $layout = "base"): void
{
    ob_start();
    extract($datas);
    require_once "../views/$view.html.php";
    $content = ob_get_clean();
    require_once "../views/layout/$layout.layout.php";
}

function redirection(string $controller, string $page)
{
    header("Location:" . WEBROOT . "controller=$controller&page=$page");
    exit();
}

function redirectAfterError(string $role)
{
    switch ($role) {
        case 'responsable':
            return "controller=resbibilio&page=dashboard";
        case 'adherent':
            return "controller=adherent&page=dashboard";
            return "";
        default:
            redirection("security", "connexion");
            break;
    }
}

function redirectByRole($role)
{
    switch ($role) {
        case 'responsable':
            redirection("resbibilio", "dashboard");
            break;
        case 'adherent':
            redirection("adherent", "dashboard");
            break;
        default:
            redirection("security", "connexion");
    }
    exit();
}

function isPost(): bool
{
    return $_SERVER["REQUEST_METHOD"] == "POST";
}

function isGet(): bool
{
    return $_SERVER["REQUEST_METHOD"] == "GET";
}

function dd($data)
{
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    die();
}

function verifyUserAuth()
{
    if (!isset($_SESSION['user'])) {
        redirection("security", "connexion");
        exit();
    }
}

function isConnect(): bool
{
    return isset($_SESSION["user"]);
}

function getUser()
{
    return $_SESSION["user"];
}

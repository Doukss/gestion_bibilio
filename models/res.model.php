<?php
require_once __DIR__.'/../data/db.php';

function getCountAllOuvrage()
{
    $sql = "SELECT COUNT(*) nb_ouvrages FROM ouvrage";
    return fetchResult($sql, [], false);
}

function getCountAllAuteur()
{
    $sql = "SELECT COUNT(*) nb_auteurs FROM auteur";
    return fetchResult($sql, [], false);
}


function getCountAllExemplaire()
{
    $sql = "SELECT COUNT(*) nb_exemplaires FROM exemplaire";
    return fetchResult($sql, [], false);
}
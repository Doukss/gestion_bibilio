<?php
require_once __DIR__.'/../data/db.php';


function getExemplaire(){  
    
    try {
        $sql = "SELECT * FROM exemplaire";
        
        
        return fetchResult($sql);
    } catch (PDOException $e) {
        die("Erreur dans getAllCours: " . $e->getMessage());
    }
}
<?php
require_once __DIR__.'/../data/db.php';


function getOuvrages() {  
    
    try {
        $sql = "SELECT * FROM ouvrage";
        
        
        return fetchResult($sql);
    } catch (PDOException $e) {
        die("Erreur dans getAllCours: " . $e->getMessage());
    }
}
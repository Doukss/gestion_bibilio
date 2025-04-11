<?php
require_once __DIR__.'/../data/db.php';


function getRyons() {  
    
    try {
        $sql = "SELECT * FROM rayon";
        
        
        return fetchResult($sql);
    } catch (PDOException $e) {
        die("Erreur dans getAllCours: " . $e->getMessage());
    }
}
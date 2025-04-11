<?php

function credentialUser(string $email, string $motDePasse): ?array
{
    $sql = "
    SELECT u.nom, u.email,u.role
            FROM utilisateur u WHERE u.email = ? AND u.motDePasse = ?";
    
    $params = [$email, $motDePasse];
    
    $user = fetchResult($sql, $params, false);
    return $user ?: null;
}


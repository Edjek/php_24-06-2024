<?php

function getAllAuthors($conn)
{
    $stmt = $conn->query('SELECT id, nom, prenom FROM author');
    return $stmt->fetchAll();
}

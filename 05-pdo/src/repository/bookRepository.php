<?php

function getAllBooks($pdo)
{
    $stmt = $pdo->query('SELECT * FROM book');
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getBookDetailsById($pdo, $bookId)
{
    $stmt = $pdo->prepare(
        'SELECT book.*, author.nom, author.prenom, author.date_naissance, author.pays_origine
        FROM book
        JOIN author ON book.id_auteur = author.id
        WHERE book.id = :bookId'
    );
    $stmt->bindParam(':bookId', $bookId, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function addBook($conn, $title, $description, $year, $idAuteur)
{
    $stmt = $conn->prepare('INSERT INTO book (nom, description, annee_parution, id_auteur) VALUES (:title, :description, :year, :idAuteur)');

    $stmt->bindParam(':title', $title, PDO::PARAM_STR);
    $stmt->bindParam(':description', $description, PDO::PARAM_STR);
    $stmt->bindParam(':year', $year, PDO::PARAM_INT);
    $stmt->bindParam(':idAuteur', $idAuteur, PDO::PARAM_INT);

    $stmt->exec();
}

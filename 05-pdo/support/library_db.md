## Création de la base de données

```sql
CREATE DATABASE library_db;
```

## Utilisation de la base de données

```sql
USE library_db;
```

## Création de la table author

```sql
CREATE TABLE author (
id INT AUTO_INCREMENT PRIMARY KEY,
nom VARCHAR(100) NOT NULL,
prenom VARCHAR(100) NOT NULL,
date_naissance DATE,
pays_origine VARCHAR(100)
);
```

## Création de la table book

```sql
CREATE TABLE book (
id INT AUTO_INCREMENT PRIMARY KEY,
titre VARCHAR(255) NOT NULL,
description TEXT,
annee_parution INT(4),
id_auteur INT,
FOREIGN KEY (id_auteur) REFERENCES author(id)
);
```

Pour insérer plusieurs enregistrements dans les tables `author` et `book`, nous allons d'abord insérer les auteurs, puis les livres en utilisant les identifiants des auteurs.

### Requête SQL pour insérer 4 auteurs

-- Insérer 4 auteurs dans la table author

```sql
INSERT INTO author (nom, prenom, date_naissance, pays_origine)
VALUES
('Hugo', 'Victor', '1802-02-26', 'France'),
('Austen', 'Jane', '1775-12-16', 'United Kingdom'),
('Tolkien', 'J.R.R.', '1892-01-03', 'United Kingdom'),
('Hemingway', 'Ernest', '1899-07-21', 'United States');
```

### Requête SQL pour insérer 10 livres

-- Insérer 10 livres dans la table book

```sql
INSERT INTO book (titre, description, annee_parution, id_auteur)
VALUES
('Les Misérables', 'Un roman historique', 1862, 1),
('Notre-Dame de Paris', 'Une histoire tragique d\'amour', 1831, 1),
('Pride and Prejudice', 'Une histoire d\'amour et de malentendus', 1813, 2),
('Sense and Sensibility', 'Les aventures de deux soeurs', 1811, 2),
('The Hobbit', 'Une aventure fantastique', 1937, 3),
('The Lord of the Rings', 'Une quête épique', 1954, 3),
('The Old Man and the Sea', 'Un vieux pêcheur et son combat avec un poisson', 1952, 4),
('A Farewell to Arms', 'Une histoire d\'amour en temps de guerre', 1929, 4),
('For Whom the Bell Tolls', 'Un roman sur la guerre civile espagnole', 1940, 4),
('Emma', 'Une comédie romantique', 1815, 2);
```

### Insertion des auteurs et des livres

1. **Insertion des auteurs** :

    ```sql
    INSERT INTO author (nom, prenom, date_naissance, pays_origine)
    VALUES
    ('Hugo', 'Victor', '1802-02-26', 'France'),
    ('Austen', 'Jane', '1775-12-16', 'United Kingdom'),
    ('Tolkien', 'J.R.R.', '1892-01-03', 'United Kingdom'),
    ('Hemingway', 'Ernest', '1899-07-21', 'United States');
    ```

2. **Insertion des livres** :

    ```sql
    INSERT INTO book (titre, description, annee_parution, id_auteur)
    VALUES
    ('Les Misérables', 'Un roman historique', 1862, 1),
    ('Notre-Dame de Paris', 'Une histoire tragique d\'amour', 1831, 1),
    ('Pride and Prejudice', 'Une histoire d\'amour et de malentendus', 1813, 2),
    ('Sense and Sensibility', 'Les aventures de deux soeurs', 1811, 2),
    ('The Hobbit', 'Une aventure fantastique', 1937, 3),
    ('The Lord of the Rings', 'Une quête épique', 1954, 3),
    ('The Old Man and the Sea', 'Un vieux pêcheur et son combat avec un poisson', 1952, 4),
    ('A Farewell to Arms', 'Une histoire d\'amour en temps de guerre', 1929, 4),
    ('For Whom the Bell Tolls', 'Un roman sur la guerre civile espagnole', 1940, 4),
    ('Emma', 'Une comédie romantique', 1815, 2);
    ```

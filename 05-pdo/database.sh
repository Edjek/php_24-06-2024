# Créer une base de donnée : pdo
    CREATE DATABASE pdo;

# Utiliser pdo
    USE pdo;

# Créer une table : manga
    CREATE TABLE manga (
        id int PRIMARY KEY AUTO_INCREMENT,
        title VARCHAR(255),
        description TEXT,
        price DECIMAL(10,2)
    );

# Créer une table : user
    CREATE TABLE user (
        id INT PRIMARY KEY AUTO_INCREMENT,
        pseudo VARCHAR(255),
        password VARCHAR(255),
        statut BOOL
    );

# Inserer des données
    INSERT INTO user (pseudo, password, statut) VALUES('rachid','pswd', false), ('admin','pswd',false);

    INSERT INTO manga (title, description, price)
    VALUES
    ("BERSEK","Guts est un guerrier solitaire qui est né d'un cadavre pendu et élevé comme mercenaire par son père adoptif, abusif Gambino. Cela a atteint son paroxysme lorsque Guts a été forcé de tuer un Gambino ivre en légitime défense, fuyant son groupe de mercenaires et devenant un soldat de fortune. Sa redoutable réputation attire l'attention de Griffith, le chef charismatique d'un groupe de mercenaires connu sous le nom de 'Troupe du Faucon'. Griffith force Guts à rejoindre le groupe après l'avoir vaincu au combat, Guts devenant son meilleur combattant et son principal confident. Le groupe est engagé par le royaume de Midland pour l'aider dans sa guerre d'un siècle contre l'empire Chuder. Guts découvre le désir de Griffith de diriger son propre royaume et son mystérieux pendentif connu sous le nom de Behelit.",19.99),
    ("Baki the Grappler","À moins d'un mois de son affrontement avec Yûjirô, Baki est envoyé dans les forêts les plus profondes de Hokkaidô pour se confronter avec 5 soldats d'élite dont l'un se révèle être Gaia, une légende vivante aussi forte que 'l'Ogre'. Alors que la Nature elle-même paraît avoir son mot à dire, Baki arrivera-t-il à sortir vainqueur de leur duel et à se dépêtrer de là où il est englué ? Parviendra-t-il à faire sien l'état d'esprit de ces hommes qui partent à la guerre en sachant qu'ils peuvent mourir ? Et de son côté, à quoi Yûjirô occupe-t-il donc ses journées ? Quelle est la nature de la relation qu'il entretient avec la mère de Baki ? Entre odeurs fortes de la jungle et effluves enivrantes de bourbon, découvrez dans ce tome plein d'émotions, des réponses à toutes ces questions",19.99),
    ("Détective Conan"," D'après la rumeur, c'est ici que la mort a pris ses quartiers... Kris Minel s'est installé dans la cité mondiale du crime. Il forge son caractère dans un but bien précis : Tuer cet homme. Aujourd'hui, il va passer la journée à la plage avec sa cousine Saki. Vivre une histoire d'amour ou mettre son plan à exécution ? Entre ces deux options, son coeur balance... Mais c'est peut-être son destin, maintenant qu'il vit à Beika-chô",19.99),
    ("One Piece","L'histoire de One Piece se déroule dans un monde fictif dominé par les océans, où certains pirates aspirent à une ère de liberté et d'aventure connue comme « l'âge d'or de la piraterie ». Cette époque fut inaugurée à la suite des derniers mots prononcés par le roi des pirates, Gol D. Roger, surnommé Gold Roger avant son exécution. Roger annonce au monde que ses habitants étaient libres de chercher toutes les richesses qu'il avait accumulées durant sa vie entière, le « One Piece",19.99);

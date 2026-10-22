START TRANSACTION;

    CREATE TABLE `parametrage_commande`(
        id INT PRIMARY KEY AUTO_INCREMENT,
        numero INT NOT NULL,
        montant_min_livraison DOUBLE NOT NULL,
        montant_frais_port DOUBLE NOT NULL,
        marge DOUBLE,
        date_modification DATETIME
    );

    ALTER TABLE `parametrage_commande`
        ADD CONSTRAINT fk_commande FOREIGN KEY (numero) REFERENCES commande(numero);

    ALTER TABLE `commande`
        ADD COLUMN `finaliser` BOOLEAN DEFAULT FALSE,
        ADD COLUMN `en_ligne` BOOLEAN DEFAULT FALSE,
        ADD COLUMN `montant_rembourse` DOUBLE,
        ADD COLUMN `payer_frais_liraison` BOOLEAN;

    ALTER TABLE `client`
        ADD COLUMN `actif` BOOLEAN,
        ADD COLUMN `email` VARCHAR(255),
        ADD COLUMN `mot_de_passe` VARCHAR(255),
        ADD COLUMN `modifier_mdp` BOOLEAN DEFAULT TRUE;

    ALTER TABLE `ligne_commande`
        ADD COLUMN `prix_vendu` DOUBLE;

COMMIT;
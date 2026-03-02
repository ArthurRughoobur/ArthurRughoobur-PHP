CREATE TABLE articles (
	identifiant INT(11) NOT NULL AUTO_INCREMENT,
	libelle VARCHAR(40) NOT NULL,
	prix DECIMAL(5,2) DEFAULT '0' NOT NULL,
	PRIMARY KEY (identifiant)
) DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

ALTER TABLE articles ENGINE=InnoDB;

INSERT INTO articles (libelle, prix) VALUES ('Poires 🍐', 35.5);
INSERT INTO articles (libelle, prix) VALUES ('Cerises 🍒', 48.9);
INSERT INTO articles (libelle, prix) VALUES ('Fraises 🍓', 29.95);
INSERT INTO articles (libelle, prix) VALUES ('Maïs 🌽', 37.2);


DELIMITER |
CREATE PROCEDURE statistiques()
BEGIN
	SELECT COUNT(*) nbArticles, AVG(prix) prixMoyen FROM articles;
END|

DELIMITER |
CREATE PROCEDURE info(IN id INT)
BEGIN
	SELECT libelle, prix FROM articles WHERE identifiant = id;
END|

DELIMITER |
CREATE FUNCTION nomArticle(id INT) RETURNS VARCHAR(40)
BEGIN
	DECLARE lib VARCHAR(40);
	SELECT libelle INTO lib FROM articles WHERE identifiant = id;
	RETURN lib;
END|


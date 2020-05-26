DROP TABLE IF EXISTS user ;
CREATE TABLE user (nom_user VARCHAR(250) AUTO_INCREMENT NOT NULL,
prenom_user VARCHAR(250),
login_user VARCHAR(250),
mdp_user VARCHAR(250),
PRIMARY KEY (nom_user)) ENGINE=InnoDB;

DROP TABLE IF EXISTS score ;
CREATE TABLE score (bonnereponce_score INT(11) AUTO_INCREMENT NOT NULL,
mauvaisereponse_score INT(11),
PRIMARY KEY (bonnereponce_score)) ENGINE=InnoDB;




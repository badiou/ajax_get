# ajax_get
Ce bout de code permet à partir de Ajax (JQUERY) de filtrer les données d'un tableau.Il s'agit d'une petite base de données de produits regroupés par catégories.

Il s'agit d'un exemple pour mes étudiants de ESGIS dans le cours d'initiation à Jquery.

Ci-joint le script de création de la base données nommée: catprod_db


#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: CATEGORIE
#------------------------------------------------------------

CREATE TABLE CATEGORIE(
        ID_CATEGORIE      Int  Auto_increment  NOT NULL ,
        LIBELLE_CATEGORIE Varchar (50) NOT NULL
	,CONSTRAINT CATEGORIE_PK PRIMARY KEY (ID_CATEGORIE)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: PRODUIT
#------------------------------------------------------------

CREATE TABLE PRODUIT(
        ID_PRODUIT   Int  Auto_increment  NOT NULL ,
        DESIGNATION  Varchar (50) NOT NULL ,
        PRIX         Int NOT NULL ,
        QUANTITE     Int NOT NULL ,
        PROMO        Int NOT NULL ,
        ID_CATEGORIE Int NOT NULL
	,CONSTRAINT PRODUIT_PK PRIMARY KEY (ID_PRODUIT)

	,CONSTRAINT PRODUIT_CATEGORIE_FK FOREIGN KEY (ID_CATEGORIE) REFERENCES CATEGORIE(ID_CATEGORIE)
)ENGINE=InnoDB;




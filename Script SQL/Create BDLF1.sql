Drop table CATEGORIE;
CREATE TABLE CATEGORIE
(cat_code VARCHAR(3) NOT NULL,
cat_libelle VARCHAR(50),
CONSTRAINT PK_CAT PRIMARY KEY(cat_code)
)ENGINE=innodb;

Drop table PRODUIT;
CREATE TABLE PRODUIT
(pdt_ref VARCHAR(3) NOT NULL,
pdt_designation VARCHAR(50),
pdt_prix DECIMAL(5,2),
pdt_image VARCHAR(50),
pdt_categorie VARCHAR(3),
CONSTRAINT Pk_PROD PRIMARY KEY(pdt_ref)
)ENGINE=innodb;
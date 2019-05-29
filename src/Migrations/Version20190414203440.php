<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190414203440 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE admin (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, nomAdmin VARCHAR(255) NOT NULL, emailAdmin VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_880E0D76F85E0677 (username), UNIQUE INDEX UNIQ_880E0D768BDC72EC (emailAdmin), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE annonceur (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(255) NOT NULL, nomAnnonceur VARCHAR(255) DEFAULT NULL, prenomAnnonceur VARCHAR(255) DEFAULT NULL, num_annonceur INT NOT NULL, email_annonceur VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, image_annonceur VARCHAR(255) NOT NULL, confirmed TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_E795BC5EF85E0677 (username), UNIQUE INDEX UNIQ_E795BC5EE89E2375 (email_annonceur), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE archive (id INT AUTO_INCREMENT NOT NULL, categorie INT DEFAULT NULL, region INT DEFAULT NULL, ville INT DEFAULT NULL, id_annonceur INT DEFAULT NULL, nomprod VARCHAR(255) NOT NULL, prix DOUBLE PRECISION NOT NULL, description VARCHAR(255) NOT NULL, date_ajout DATETIME NOT NULL, date_suppression DATETIME NOT NULL, type VARCHAR(255) NOT NULL, afficherNum TINYINT(1) NOT NULL, sousCategorie INT DEFAULT NULL, INDEX IDX_D5FC5D9C497DD634 (categorie), INDEX IDX_D5FC5D9CED0225A2 (sousCategorie), INDEX IDX_D5FC5D9CF62F176 (region), INDEX IDX_D5FC5D9C43C3D9C3 (ville), INDEX IDX_D5FC5D9C67A00079 (id_annonceur), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE categorie (id INT AUTO_INCREMENT NOT NULL, nomCategorie VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_497DD6347006D47E (nomCategorie), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE image (id INT AUTO_INCREMENT NOT NULL, produit INT DEFAULT NULL, archive INT DEFAULT NULL, name VARCHAR(255) NOT NULL, INDEX IDX_C53D045F29A5EC27 (produit), INDEX IDX_C53D045FD5FC5D9C (archive), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE produit (id INT AUTO_INCREMENT NOT NULL, categorie INT DEFAULT NULL, region INT DEFAULT NULL, ville INT DEFAULT NULL, id_annonceur INT DEFAULT NULL, nomprod VARCHAR(255) NOT NULL, prix DOUBLE PRECISION NOT NULL, description VARCHAR(255) NOT NULL, date_ajout DATETIME NOT NULL, type VARCHAR(255) NOT NULL, afficherNum TINYINT(1) NOT NULL, sousCategorie INT DEFAULT NULL, INDEX IDX_29A5EC27497DD634 (categorie), INDEX IDX_29A5EC27ED0225A2 (sousCategorie), INDEX IDX_29A5EC27F62F176 (region), INDEX IDX_29A5EC2743C3D9C3 (ville), INDEX IDX_29A5EC2767A00079 (id_annonceur), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE region (id INT AUTO_INCREMENT NOT NULL, nomRegion VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_F62F176280E8449 (nomRegion), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reglages (id INT AUTO_INCREMENT NOT NULL, publicite TINYINT(1) NOT NULL, nom VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_46E7DCF6C6E55B5 (nom), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sous_categorie (id INT AUTO_INCREMENT NOT NULL, categorie INT DEFAULT NULL, nomSousCategorie VARCHAR(255) NOT NULL, INDEX IDX_52743D7B497DD634 (categorie), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ville (id INT AUTO_INCREMENT NOT NULL, region INT DEFAULT NULL, nomVille VARCHAR(255) NOT NULL, INDEX IDX_43C3D9C3F62F176 (region), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE archive ADD CONSTRAINT FK_D5FC5D9C497DD634 FOREIGN KEY (categorie) REFERENCES categorie (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE archive ADD CONSTRAINT FK_D5FC5D9CED0225A2 FOREIGN KEY (sousCategorie) REFERENCES sous_categorie (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE archive ADD CONSTRAINT FK_D5FC5D9CF62F176 FOREIGN KEY (region) REFERENCES region (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE archive ADD CONSTRAINT FK_D5FC5D9C43C3D9C3 FOREIGN KEY (ville) REFERENCES ville (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE archive ADD CONSTRAINT FK_D5FC5D9C67A00079 FOREIGN KEY (id_annonceur) REFERENCES annonceur (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE image ADD CONSTRAINT FK_C53D045F29A5EC27 FOREIGN KEY (produit) REFERENCES produit (id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE image ADD CONSTRAINT FK_C53D045FD5FC5D9C FOREIGN KEY (archive) REFERENCES archive (id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC27497DD634 FOREIGN KEY (categorie) REFERENCES categorie (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC27ED0225A2 FOREIGN KEY (sousCategorie) REFERENCES sous_categorie (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC27F62F176 FOREIGN KEY (region) REFERENCES region (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC2743C3D9C3 FOREIGN KEY (ville) REFERENCES ville (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC2767A00079 FOREIGN KEY (id_annonceur) REFERENCES annonceur (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE sous_categorie ADD CONSTRAINT FK_52743D7B497DD634 FOREIGN KEY (categorie) REFERENCES categorie (id)');
        $this->addSql('ALTER TABLE ville ADD CONSTRAINT FK_43C3D9C3F62F176 FOREIGN KEY (region) REFERENCES region (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE archive DROP FOREIGN KEY FK_D5FC5D9C67A00079');
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC2767A00079');
        $this->addSql('ALTER TABLE image DROP FOREIGN KEY FK_C53D045FD5FC5D9C');
        $this->addSql('ALTER TABLE archive DROP FOREIGN KEY FK_D5FC5D9C497DD634');
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC27497DD634');
        $this->addSql('ALTER TABLE sous_categorie DROP FOREIGN KEY FK_52743D7B497DD634');
        $this->addSql('ALTER TABLE image DROP FOREIGN KEY FK_C53D045F29A5EC27');
        $this->addSql('ALTER TABLE archive DROP FOREIGN KEY FK_D5FC5D9CF62F176');
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC27F62F176');
        $this->addSql('ALTER TABLE ville DROP FOREIGN KEY FK_43C3D9C3F62F176');
        $this->addSql('ALTER TABLE archive DROP FOREIGN KEY FK_D5FC5D9CED0225A2');
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC27ED0225A2');
        $this->addSql('ALTER TABLE archive DROP FOREIGN KEY FK_D5FC5D9C43C3D9C3');
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC2743C3D9C3');
        $this->addSql('DROP TABLE admin');
        $this->addSql('DROP TABLE annonceur');
        $this->addSql('DROP TABLE archive');
        $this->addSql('DROP TABLE categorie');
        $this->addSql('DROP TABLE image');
        $this->addSql('DROP TABLE produit');
        $this->addSql('DROP TABLE region');
        $this->addSql('DROP TABLE reglages');
        $this->addSql('DROP TABLE sous_categorie');
        $this->addSql('DROP TABLE ville');
    }
}

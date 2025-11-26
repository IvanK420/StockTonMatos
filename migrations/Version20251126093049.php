<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251126093049 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, dtype VARCHAR(255) NOT NULL, PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE emplacement (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, qr_code_data VARCHAR(255) NOT NULL, PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE fil (taille VARCHAR(255) NOT NULL, resistance INT NOT NULL, quantite INT NOT NULL, id INT NOT NULL, PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE leurre (taille VARCHAR(255) NOT NULL, poids INT NOT NULL, quantite INT NOT NULL, description VARCHAR(255) DEFAULT NULL, id INT NOT NULL, PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE materiel (id INT AUTO_INCREMENT NOT NULL, marque VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, discr VARCHAR(255) NOT NULL, PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE materiel_detail (id INT AUTO_INCREMENT NOT NULL, contenu VARCHAR(255) NOT NULL, PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE montage (taille VARCHAR(255) NOT NULL, quantite INT NOT NULL, id INT NOT NULL, PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE moulin (taille INT NOT NULL, poids INT NOT NULL, description VARCHAR(255) DEFAULT NULL, id INT NOT NULL, PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE technique (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('ALTER TABLE fil ADD CONSTRAINT FK_4320931DBF396750 FOREIGN KEY (id) REFERENCES materiel (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE leurre ADD CONSTRAINT FK_B463F48CBF396750 FOREIGN KEY (id) REFERENCES materiel (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE montage ADD CONSTRAINT FK_12817893BF396750 FOREIGN KEY (id) REFERENCES materiel (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE moulin ADD CONSTRAINT FK_1DD3A3E0BF396750 FOREIGN KEY (id) REFERENCES materiel (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE fil DROP FOREIGN KEY FK_4320931DBF396750');
        $this->addSql('ALTER TABLE leurre DROP FOREIGN KEY FK_B463F48CBF396750');
        $this->addSql('ALTER TABLE montage DROP FOREIGN KEY FK_12817893BF396750');
        $this->addSql('ALTER TABLE moulin DROP FOREIGN KEY FK_1DD3A3E0BF396750');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE emplacement');
        $this->addSql('DROP TABLE fil');
        $this->addSql('DROP TABLE leurre');
        $this->addSql('DROP TABLE materiel');
        $this->addSql('DROP TABLE materiel_detail');
        $this->addSql('DROP TABLE montage');
        $this->addSql('DROP TABLE moulin');
        $this->addSql('DROP TABLE technique');
        $this->addSql('DROP TABLE messenger_messages');
    }
}

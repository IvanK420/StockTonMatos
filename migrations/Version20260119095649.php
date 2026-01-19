<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260119095649 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE canne ADD CONSTRAINT FK_1FC55F32BF396750 FOREIGN KEY (id) REFERENCES materiel (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE category ADD image VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE fil ADD CONSTRAINT FK_4320931DBF396750 FOREIGN KEY (id) REFERENCES materiel (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE leurre ADD CONSTRAINT FK_B463F48CBF396750 FOREIGN KEY (id) REFERENCES materiel (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE materiel ADD CONSTRAINT FK_18D2B09112469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE materiel ADD CONSTRAINT FK_18D2B091C4598A51 FOREIGN KEY (emplacement_id) REFERENCES emplacement (id)');
        $this->addSql('ALTER TABLE materiel ADD CONSTRAINT FK_18D2B091E3482224 FOREIGN KEY (materiel_detail_id) REFERENCES materiel_detail (id)');
        $this->addSql('ALTER TABLE montage ADD CONSTRAINT FK_12817893BF396750 FOREIGN KEY (id) REFERENCES materiel (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE moulin ADD CONSTRAINT FK_1DD3A3E0BF396750 FOREIGN KEY (id) REFERENCES materiel (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE canne DROP FOREIGN KEY FK_1FC55F32BF396750');
        $this->addSql('ALTER TABLE category DROP image');
        $this->addSql('ALTER TABLE fil DROP FOREIGN KEY FK_4320931DBF396750');
        $this->addSql('ALTER TABLE leurre DROP FOREIGN KEY FK_B463F48CBF396750');
        $this->addSql('ALTER TABLE materiel DROP FOREIGN KEY FK_18D2B09112469DE2');
        $this->addSql('ALTER TABLE materiel DROP FOREIGN KEY FK_18D2B091C4598A51');
        $this->addSql('ALTER TABLE materiel DROP FOREIGN KEY FK_18D2B091E3482224');
        $this->addSql('ALTER TABLE montage DROP FOREIGN KEY FK_12817893BF396750');
        $this->addSql('ALTER TABLE moulin DROP FOREIGN KEY FK_1DD3A3E0BF396750');
    }
}

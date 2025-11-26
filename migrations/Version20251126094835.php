<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251126094835 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE fil ADD CONSTRAINT FK_4320931DBF396750 FOREIGN KEY (id) REFERENCES materiel (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE leurre ADD CONSTRAINT FK_B463F48CBF396750 FOREIGN KEY (id) REFERENCES materiel (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE materiel ADD category_id INT DEFAULT NULL, ADD emplacement_id INT DEFAULT NULL, ADD materiel_detail_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE materiel ADD CONSTRAINT FK_18D2B09112469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE materiel ADD CONSTRAINT FK_18D2B091C4598A51 FOREIGN KEY (emplacement_id) REFERENCES emplacement (id)');
        $this->addSql('ALTER TABLE materiel ADD CONSTRAINT FK_18D2B091E3482224 FOREIGN KEY (materiel_detail_id) REFERENCES materiel_detail (id)');
        $this->addSql('CREATE INDEX IDX_18D2B09112469DE2 ON materiel (category_id)');
        $this->addSql('CREATE INDEX IDX_18D2B091C4598A51 ON materiel (emplacement_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_18D2B091E3482224 ON materiel (materiel_detail_id)');
        $this->addSql('ALTER TABLE montage ADD CONSTRAINT FK_12817893BF396750 FOREIGN KEY (id) REFERENCES materiel (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE moulin ADD CONSTRAINT FK_1DD3A3E0BF396750 FOREIGN KEY (id) REFERENCES materiel (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE fil DROP FOREIGN KEY FK_4320931DBF396750');
        $this->addSql('ALTER TABLE leurre DROP FOREIGN KEY FK_B463F48CBF396750');
        $this->addSql('ALTER TABLE materiel DROP FOREIGN KEY FK_18D2B09112469DE2');
        $this->addSql('ALTER TABLE materiel DROP FOREIGN KEY FK_18D2B091C4598A51');
        $this->addSql('ALTER TABLE materiel DROP FOREIGN KEY FK_18D2B091E3482224');
        $this->addSql('DROP INDEX IDX_18D2B09112469DE2 ON materiel');
        $this->addSql('DROP INDEX IDX_18D2B091C4598A51 ON materiel');
        $this->addSql('DROP INDEX UNIQ_18D2B091E3482224 ON materiel');
        $this->addSql('ALTER TABLE materiel DROP category_id, DROP emplacement_id, DROP materiel_detail_id');
        $this->addSql('ALTER TABLE montage DROP FOREIGN KEY FK_12817893BF396750');
        $this->addSql('ALTER TABLE moulin DROP FOREIGN KEY FK_1DD3A3E0BF396750');
    }
}

<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220303133555 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE mesaj_audio ADD marturii_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE mesaj_audio ADD CONSTRAINT FK_1E2792D3E4727F35 FOREIGN KEY (marturii_id_id) REFERENCES marturii (id)');
        $this->addSql('CREATE INDEX IDX_1E2792D3E4727F35 ON mesaj_audio (marturii_id_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE marturii CHANGE prenume prenume VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE continut continut VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE mesaj_audio DROP FOREIGN KEY FK_1E2792D3E4727F35');
        $this->addSql('DROP INDEX IDX_1E2792D3E4727F35 ON mesaj_audio');
        $this->addSql('ALTER TABLE mesaj_audio DROP marturii_id_id, CHANGE nume nume VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE titlu titlu VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE path path VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}

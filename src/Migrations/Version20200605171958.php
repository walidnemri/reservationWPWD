<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200605171958 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE shows CHANGE location_id location_id INT DEFAULT NULL, CHANGE poster_url poster_url VARCHAR(255) DEFAULT NULL, CHANGE price price NUMERIC(12, 2) DEFAULT NULL');
        $this->addSql('ALTER TABLE representations CHANGE location_id location_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE locations CHANGE website website VARCHAR(255) DEFAULT NULL, CHANGE phone phone VARCHAR(30) DEFAULT NULL');
        $this->addSql('ALTER TABLE artists CHANGE agent_id agent_id INT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE artists CHANGE agent_id agent_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE locations CHANGE website website VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE phone phone VARCHAR(30) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE representations CHANGE location_id location_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE `shows` CHANGE location_id location_id INT DEFAULT NULL, CHANGE poster_url poster_url VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE price price NUMERIC(12, 2) DEFAULT \'NULL\'');
    }
}

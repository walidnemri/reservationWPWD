<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200618131020 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE shows DROP FOREIGN KEY FK_6C3BF144F8697D13');
        $this->addSql('DROP INDEX IDX_6C3BF144F8697D13 ON shows');
        $this->addSql('ALTER TABLE shows DROP comment_id, CHANGE location_id location_id INT DEFAULT NULL, CHANGE poster_url poster_url VARCHAR(255) DEFAULT NULL, CHANGE price price NUMERIC(12, 2) DEFAULT NULL');
        $this->addSql('ALTER TABLE users DROP FOREIGN KEY FK_1483A5E9F8697D13');
        $this->addSql('DROP INDEX IDX_1483A5E9F8697D13 ON users');
        $this->addSql('ALTER TABLE users DROP comment_id');
        $this->addSql('ALTER TABLE representations CHANGE location_id location_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE comment ADD user_id INT DEFAULT NULL, ADD the_show_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526CA76ED395 FOREIGN KEY (user_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526C3013D282 FOREIGN KEY (the_show_id) REFERENCES `shows` (id)');
        $this->addSql('CREATE INDEX IDX_9474526CA76ED395 ON comment (user_id)');
        $this->addSql('CREATE INDEX IDX_9474526C3013D282 ON comment (the_show_id)');
        $this->addSql('ALTER TABLE locations CHANGE website website VARCHAR(255) DEFAULT NULL, CHANGE phone phone VARCHAR(30) DEFAULT NULL');
        $this->addSql('ALTER TABLE artists CHANGE agent_id agent_id INT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE artists CHANGE agent_id agent_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526CA76ED395');
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526C3013D282');
        $this->addSql('DROP INDEX IDX_9474526CA76ED395 ON comment');
        $this->addSql('DROP INDEX IDX_9474526C3013D282 ON comment');
        $this->addSql('ALTER TABLE comment DROP user_id, DROP the_show_id');
        $this->addSql('ALTER TABLE locations CHANGE website website VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE phone phone VARCHAR(30) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE representations CHANGE location_id location_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE `shows` ADD comment_id INT DEFAULT NULL, CHANGE location_id location_id INT DEFAULT NULL, CHANGE poster_url poster_url VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE price price NUMERIC(12, 2) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE `shows` ADD CONSTRAINT FK_6C3BF144F8697D13 FOREIGN KEY (comment_id) REFERENCES comment (id)');
        $this->addSql('CREATE INDEX IDX_6C3BF144F8697D13 ON `shows` (comment_id)');
        $this->addSql('ALTER TABLE users ADD comment_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE users ADD CONSTRAINT FK_1483A5E9F8697D13 FOREIGN KEY (comment_id) REFERENCES comment (id)');
        $this->addSql('CREATE INDEX IDX_1483A5E9F8697D13 ON users (comment_id)');
    }
}

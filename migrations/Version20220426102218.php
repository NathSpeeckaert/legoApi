<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220426102218 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `set` ADD status_id INT DEFAULT NULL, DROP status');
        $this->addSql('ALTER TABLE `set` ADD CONSTRAINT FK_E61425DC6BF700BD FOREIGN KEY (status_id) REFERENCES statuses (id)');
        $this->addSql('CREATE INDEX IDX_E61425DC6BF700BD ON `set` (status_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `set` DROP FOREIGN KEY FK_E61425DC6BF700BD');
        $this->addSql('DROP INDEX IDX_E61425DC6BF700BD ON `set`');
        $this->addSql('ALTER TABLE `set` ADD status INT NOT NULL, DROP status_id');
    }
}

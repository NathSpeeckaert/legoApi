<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220428100040 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `set` DROP FOREIGN KEY FK_E61425DC6BF700BD');
        $this->addSql('DROP TABLE statuses');
        $this->addSql('DROP INDEX IDX_E61425DC6BF700BD ON `set`');
        $this->addSql('ALTER TABLE `set` ADD status INT NOT NULL, DROP status_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE statuses (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(25) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE `set` ADD status_id INT DEFAULT NULL, DROP status');
        $this->addSql('ALTER TABLE `set` ADD CONSTRAINT FK_E61425DC6BF700BD FOREIGN KEY (status_id) REFERENCES statuses (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_E61425DC6BF700BD ON `set` (status_id)');
    }
}

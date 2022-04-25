<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220425133355 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE statuses (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE `set` CHANGE set_img_url set_img_url VARCHAR(255) NOT NULL, CHANGE set_url set_url VARCHAR(255) NOT NULL, CHANGE sale_date sale_date DATE DEFAULT NULL, CHANGE sale_price sale_price INT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE statuses');
        $this->addSql('ALTER TABLE `set` CHANGE set_img_url set_img_url VARCHAR(255) DEFAULT NULL, CHANGE set_url set_url VARCHAR(255) DEFAULT NULL, CHANGE sale_date sale_date DATE NOT NULL, CHANGE sale_price sale_price INT NOT NULL');
    }
}

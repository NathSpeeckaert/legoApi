<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220427070858 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `set` CHANGE set_num set_num VARCHAR(8) NOT NULL, CHANGE lego_price lego_price DOUBLE PRECISION DEFAULT \'0\', CHANGE buy_price buy_price DOUBLE PRECISION DEFAULT \'0\' NOT NULL, CHANGE buy_loc buy_loc VARCHAR(100) NOT NULL, CHANGE sale_price sale_price DOUBLE PRECISION DEFAULT \'0\'');
        $this->addSql('ALTER TABLE statuses CHANGE name name VARCHAR(25) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `set` CHANGE set_num set_num VARCHAR(255) NOT NULL, CHANGE lego_price lego_price INT NOT NULL, CHANGE buy_price buy_price INT NOT NULL, CHANGE buy_loc buy_loc VARCHAR(255) NOT NULL, CHANGE sale_price sale_price INT DEFAULT NULL');
        $this->addSql('ALTER TABLE statuses CHANGE name name VARCHAR(255) NOT NULL');
    }
}

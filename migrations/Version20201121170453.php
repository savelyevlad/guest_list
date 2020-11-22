<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201121170453 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649F85E0677 (username), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE record MODIFY idrecord INT NOT NULL');
        $this->addSql('ALTER TABLE record DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE record CHANGE name name VARCHAR(45) NOT NULL, CHANGE email email VARCHAR(45) NOT NULL, CHANGE content content VARCHAR(255) NOT NULL, CHANGE idrecord id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE record ADD PRIMARY KEY (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE user');
        $this->addSql('ALTER TABLE record MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE record DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE record CHANGE name name VARCHAR(45) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_0900_ai_ci`, CHANGE email email VARCHAR(45) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_0900_ai_ci`, CHANGE content content VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_0900_ai_ci`, CHANGE id idrecord INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE record ADD PRIMARY KEY (idrecord)');
    }
}

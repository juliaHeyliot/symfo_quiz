<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201123112455 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE answers (id INT AUTO_INCREMENT NOT NULL, steps_id INT NOT NULL, title VARCHAR(255) NOT NULL, is_correct TINYINT(1) NOT NULL, INDEX IDX_50D0C6061EBBD054 (steps_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE missions (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, description LONGTEXT DEFAULT NULL, countdown TIME NOT NULL, image VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE steps (id INT AUTO_INCREMENT NOT NULL, missions_id INT NOT NULL, question VARCHAR(255) NOT NULL, INDEX IDX_34220A7217C042CF (missions_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE answers ADD CONSTRAINT FK_50D0C6061EBBD054 FOREIGN KEY (steps_id) REFERENCES steps (id)');
        $this->addSql('ALTER TABLE steps ADD CONSTRAINT FK_34220A7217C042CF FOREIGN KEY (missions_id) REFERENCES missions (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE steps DROP FOREIGN KEY FK_34220A7217C042CF');
        $this->addSql('ALTER TABLE answers DROP FOREIGN KEY FK_50D0C6061EBBD054');
        $this->addSql('DROP TABLE answers');
        $this->addSql('DROP TABLE missions');
        $this->addSql('DROP TABLE steps');
        $this->addSql('DROP TABLE user');
    }
}

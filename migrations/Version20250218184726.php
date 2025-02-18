<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250218184726 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE "like" (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, id_user INTEGER NOT NULL, id_sujet INTEGER NOT NULL)');
        $this->addSql('ALTER TABLE reponse ADD COLUMN is_reported BOOLEAN NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE "like"');
        $this->addSql('CREATE TEMPORARY TABLE __temp__reponse AS SELECT id, contenu, id_sujet, id_user FROM reponse');
        $this->addSql('DROP TABLE reponse');
        $this->addSql('CREATE TABLE reponse (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, contenu VARCHAR(255) NOT NULL, id_sujet INTEGER NOT NULL, id_user INTEGER NOT NULL)');
        $this->addSql('INSERT INTO reponse (id, contenu, id_sujet, id_user) SELECT id, contenu, id_sujet, id_user FROM __temp__reponse');
        $this->addSql('DROP TABLE __temp__reponse');
    }
}

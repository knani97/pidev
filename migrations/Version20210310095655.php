<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210310095655 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE panier DROP FOREIGN KEY FK_24CC0DF2B1628B99');
        $this->addSql('DROP INDEX IDX_24CC0DF2B1628B99 ON panier');
        $this->addSql('ALTER TABLE panier DROP idvid_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE panier ADD idvid_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE panier ADD CONSTRAINT FK_24CC0DF2B1628B99 FOREIGN KEY (idvid_id) REFERENCES video (id)');
        $this->addSql('CREATE INDEX IDX_24CC0DF2B1628B99 ON panier (idvid_id)');
    }
}
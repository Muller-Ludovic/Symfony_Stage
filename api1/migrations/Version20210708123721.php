<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210708123721 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE agence_a ADD entreprise VARCHAR(50) DEFAULT NULL, ADD email VARCHAR(50) DEFAULT NULL, ADD tel VARCHAR(50) DEFAULT NULL');
        $this->addSql('ALTER TABLE agence_b ADD entreprise VARCHAR(50) DEFAULT NULL, ADD email VARCHAR(50) DEFAULT NULL, ADD tel VARCHAR(50) DEFAULT NULL');
        $this->addSql('ALTER TABLE agence_c ADD entreprise VARCHAR(50) DEFAULT NULL, ADD email VARCHAR(50) DEFAULT NULL, ADD tel VARCHAR(50) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE agence_a DROP entreprise, DROP email, DROP tel');
        $this->addSql('ALTER TABLE agence_b DROP entreprise, DROP email, DROP tel');
        $this->addSql('ALTER TABLE agence_c DROP entreprise, DROP email, DROP tel');
    }
}

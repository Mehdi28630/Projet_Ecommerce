<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211216074605 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE appartient_a (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE appartient_a_produit (appartient_a_id INT NOT NULL, produit_id INT NOT NULL, INDEX IDX_51B2CD0215BE898B (appartient_a_id), INDEX IDX_51B2CD02F347EFB (produit_id), PRIMARY KEY(appartient_a_id, produit_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE appartient_a_categorie (appartient_a_id INT NOT NULL, categorie_id INT NOT NULL, INDEX IDX_EDE76E9A15BE898B (appartient_a_id), INDEX IDX_EDE76E9ABCF5E72D (categorie_id), PRIMARY KEY(appartient_a_id, categorie_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE appartient_a_produit ADD CONSTRAINT FK_51B2CD0215BE898B FOREIGN KEY (appartient_a_id) REFERENCES appartient_a (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE appartient_a_produit ADD CONSTRAINT FK_51B2CD02F347EFB FOREIGN KEY (produit_id) REFERENCES produit (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE appartient_a_categorie ADD CONSTRAINT FK_EDE76E9A15BE898B FOREIGN KEY (appartient_a_id) REFERENCES appartient_a (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE appartient_a_categorie ADD CONSTRAINT FK_EDE76E9ABCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE appartient_a_produit DROP FOREIGN KEY FK_51B2CD0215BE898B');
        $this->addSql('ALTER TABLE appartient_a_categorie DROP FOREIGN KEY FK_EDE76E9A15BE898B');
        $this->addSql('DROP TABLE appartient_a');
        $this->addSql('DROP TABLE appartient_a_produit');
        $this->addSql('DROP TABLE appartient_a_categorie');
    }
}

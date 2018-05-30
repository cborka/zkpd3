<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180529033037 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('ALTER SEQUENCE slova_id_seq INCREMENT BY 1');
        $this->addSql('ALTER TABLE slova ADD added_at TIMESTAMP(0) WITH TIME ZONE NOT NULL');
        $this->addSql('ALTER TABLE slova ADD author VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE slova ADD oslove TEXT NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER SEQUENCE slova_id_seq INCREMENT BY 1');
        $this->addSql('ALTER TABLE slova DROP added_at');
        $this->addSql('ALTER TABLE slova DROP author');
        $this->addSql('ALTER TABLE slova DROP oslove');
    }
}

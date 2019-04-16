<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190415161121 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE comment DROP INDEX UNIQ_9474526C67B3B43D, ADD INDEX IDX_9474526C67B3B43D (users_id)');
        $this->addSql('ALTER TABLE comment ADD look_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526C469DC8DC FOREIGN KEY (look_id) REFERENCES looks (id)');
        $this->addSql('CREATE INDEX IDX_9474526C469DC8DC ON comment (look_id)');
        $this->addSql('ALTER TABLE response ADD category_id INT DEFAULT NULL, ADD asks_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE response ADD CONSTRAINT FK_3E7B0BFB12469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE response ADD CONSTRAINT FK_3E7B0BFB3373B24C FOREIGN KEY (asks_id) REFERENCES asks (id)');
        $this->addSql('CREATE INDEX IDX_3E7B0BFB12469DE2 ON response (category_id)');
        $this->addSql('CREATE INDEX IDX_3E7B0BFB3373B24C ON response (asks_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE comment DROP INDEX IDX_9474526C67B3B43D, ADD UNIQUE INDEX UNIQ_9474526C67B3B43D (users_id)');
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526C469DC8DC');
        $this->addSql('DROP INDEX IDX_9474526C469DC8DC ON comment');
        $this->addSql('ALTER TABLE comment DROP look_id');
        $this->addSql('ALTER TABLE response DROP FOREIGN KEY FK_3E7B0BFB12469DE2');
        $this->addSql('ALTER TABLE response DROP FOREIGN KEY FK_3E7B0BFB3373B24C');
        $this->addSql('DROP INDEX IDX_3E7B0BFB12469DE2 ON response');
        $this->addSql('DROP INDEX IDX_3E7B0BFB3373B24C ON response');
        $this->addSql('ALTER TABLE response DROP category_id, DROP asks_id');
    }
}

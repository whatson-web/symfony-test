<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200312160706 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE appointment (id INT AUTO_INCREMENT NOT NULL, id_place_id INT NOT NULL, date DATE NOT NULL, INDEX IDX_FE38F8445D7D4E8C (id_place_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE appointment_user (appointment_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_9E501E88E5B533F9 (appointment_id), INDEX IDX_9E501E88A76ED395 (user_id), PRIMARY KEY(appointment_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE appointment_customer (appointment_id INT NOT NULL, customer_id INT NOT NULL, INDEX IDX_B41D05C1E5B533F9 (appointment_id), INDEX IDX_B41D05C19395C3F3 (customer_id), PRIMARY KEY(appointment_id, customer_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE customer (id INT AUTO_INCREMENT NOT NULL, first_name VARCHAR(255) NOT NULL, last_name VARCHAR(255) NOT NULL, birth_date DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE place (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, address VARCHAR(255) NOT NULL, zip_code VARCHAR(255) NOT NULL, city VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE appointment ADD CONSTRAINT FK_FE38F8445D7D4E8C FOREIGN KEY (id_place_id) REFERENCES place (id)');
        $this->addSql('ALTER TABLE appointment_user ADD CONSTRAINT FK_9E501E88E5B533F9 FOREIGN KEY (appointment_id) REFERENCES appointment (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE appointment_user ADD CONSTRAINT FK_9E501E88A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE appointment_customer ADD CONSTRAINT FK_B41D05C1E5B533F9 FOREIGN KEY (appointment_id) REFERENCES appointment (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE appointment_customer ADD CONSTRAINT FK_B41D05C19395C3F3 FOREIGN KEY (customer_id) REFERENCES customer (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE appointment_user DROP FOREIGN KEY FK_9E501E88E5B533F9');
        $this->addSql('ALTER TABLE appointment_customer DROP FOREIGN KEY FK_B41D05C1E5B533F9');
        $this->addSql('ALTER TABLE appointment_customer DROP FOREIGN KEY FK_B41D05C19395C3F3');
        $this->addSql('ALTER TABLE appointment DROP FOREIGN KEY FK_FE38F8445D7D4E8C');
        $this->addSql('DROP TABLE appointment');
        $this->addSql('DROP TABLE appointment_user');
        $this->addSql('DROP TABLE appointment_customer');
        $this->addSql('DROP TABLE customer');
        $this->addSql('DROP TABLE place');
    }
}

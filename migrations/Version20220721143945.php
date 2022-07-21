<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220721143945 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE city_activities_activities DROP FOREIGN KEY FK_FEF0370C2A4DB562');
        $this->addSql('ALTER TABLE city_activities_activities DROP FOREIGN KEY FK_FEF0370C57DAB77A');
        $this->addSql('ALTER TABLE city_activities_cities DROP FOREIGN KEY FK_40D9016457DAB77A');
        $this->addSql('DROP TABLE activities');
        $this->addSql('DROP TABLE city_activities');
        $this->addSql('DROP TABLE city_activities_activities');
        $this->addSql('DROP TABLE city_activities_cities');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE activities (id INT AUTO_INCREMENT NOT NULL, activity_name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE city_activities (id INT AUTO_INCREMENT NOT NULL, added_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', deleted_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE city_activities_activities (city_activities_id INT NOT NULL, activities_id INT NOT NULL, INDEX IDX_FEF0370C57DAB77A (city_activities_id), INDEX IDX_FEF0370C2A4DB562 (activities_id), PRIMARY KEY(city_activities_id, activities_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE city_activities_cities (city_activities_id INT NOT NULL, cities_id INT NOT NULL, INDEX IDX_40D9016457DAB77A (city_activities_id), INDEX IDX_40D90164CAC75398 (cities_id), PRIMARY KEY(city_activities_id, cities_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE city_activities_activities ADD CONSTRAINT FK_FEF0370C57DAB77A FOREIGN KEY (city_activities_id) REFERENCES city_activities (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE city_activities_activities ADD CONSTRAINT FK_FEF0370C2A4DB562 FOREIGN KEY (activities_id) REFERENCES activities (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE city_activities_cities ADD CONSTRAINT FK_40D90164CAC75398 FOREIGN KEY (cities_id) REFERENCES cities (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE city_activities_cities ADD CONSTRAINT FK_40D9016457DAB77A FOREIGN KEY (city_activities_id) REFERENCES city_activities (id) ON DELETE CASCADE');
    }
}

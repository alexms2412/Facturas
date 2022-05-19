<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220519143813 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE cliente (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(100) NOT NULL, apellidos VARCHAR(100) NOT NULL, direccion VARCHAR(200) NOT NULL, telefono INT NOT NULL, correo_electronico VARCHAR(100) NOT NULL, dni VARCHAR(9) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE detalle (id INT AUTO_INCREMENT NOT NULL, pedido_id INT DEFAULT NULL, producto_id INT DEFAULT NULL, cantidad INT NOT NULL, precio DOUBLE PRECISION NOT NULL, INDEX IDX_80397C304854653A (pedido_id), INDEX IDX_80397C307645698E (producto_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE empresa (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, nombre_empresa VARCHAR(100) NOT NULL, correo_electronico VARCHAR(100) NOT NULL, codigo_postal INT NOT NULL, direccion VARCHAR(200) NOT NULL, telefono INT NOT NULL, dni VARCHAR(9) NOT NULL, logo VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_B8D75A50F85E0677 (username), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pedido (id INT AUTO_INCREMENT NOT NULL, empresa_id INT DEFAULT NULL, cliente_id INT DEFAULT NULL, fecha DATE NOT NULL, estado TINYINT(1) NOT NULL, nombre_pedido VARCHAR(50) NOT NULL, INDEX IDX_C4EC16CE521E1991 (empresa_id), INDEX IDX_C4EC16CEDE734E51 (cliente_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE producto (id INT AUTO_INCREMENT NOT NULL, empresa_id INT DEFAULT NULL, nombre VARCHAR(200) NOT NULL, precio DOUBLE PRECISION NOT NULL, descripcion VARCHAR(255) DEFAULT NULL, INDEX IDX_A7BB0615521E1991 (empresa_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE detalle ADD CONSTRAINT FK_80397C304854653A FOREIGN KEY (pedido_id) REFERENCES pedido (id)');
        $this->addSql('ALTER TABLE detalle ADD CONSTRAINT FK_80397C307645698E FOREIGN KEY (producto_id) REFERENCES producto (id)');
        $this->addSql('ALTER TABLE pedido ADD CONSTRAINT FK_C4EC16CE521E1991 FOREIGN KEY (empresa_id) REFERENCES empresa (id)');
        $this->addSql('ALTER TABLE pedido ADD CONSTRAINT FK_C4EC16CEDE734E51 FOREIGN KEY (cliente_id) REFERENCES cliente (id)');
        $this->addSql('ALTER TABLE producto ADD CONSTRAINT FK_A7BB0615521E1991 FOREIGN KEY (empresa_id) REFERENCES empresa (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE pedido DROP FOREIGN KEY FK_C4EC16CEDE734E51');
        $this->addSql('ALTER TABLE pedido DROP FOREIGN KEY FK_C4EC16CE521E1991');
        $this->addSql('ALTER TABLE producto DROP FOREIGN KEY FK_A7BB0615521E1991');
        $this->addSql('ALTER TABLE detalle DROP FOREIGN KEY FK_80397C304854653A');
        $this->addSql('ALTER TABLE detalle DROP FOREIGN KEY FK_80397C307645698E');
        $this->addSql('DROP TABLE cliente');
        $this->addSql('DROP TABLE detalle');
        $this->addSql('DROP TABLE empresa');
        $this->addSql('DROP TABLE pedido');
        $this->addSql('DROP TABLE producto');
    }
}

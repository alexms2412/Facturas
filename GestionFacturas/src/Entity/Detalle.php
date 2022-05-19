<?php

namespace App\Entity;

use App\Repository\DetalleRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DetalleRepository::class)]
class Detalle
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $Cantidad;

    #[ORM\Column(type: 'float')]
    private $precio;

    #[ORM\ManyToOne(targetEntity: Pedido::class, inversedBy: 'detalles')]
    private $pedido;

    #[ORM\ManyToOne(targetEntity: Producto::class, inversedBy: 'detalles')]
    private $producto;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCantidad(): ?int
    {
        return $this->Cantidad;
    }

    public function setCantidad(int $Cantidad): self
    {
        $this->Cantidad = $Cantidad;

        return $this;
    }

    public function getPedido(): ?Pedido
    {
        return $this->pedido;
    }

    public function setPedido(?Pedido $pedido): self
    {
        $this->pedido = $pedido;

        return $this;
    }

    public function getProducto(): ?Producto
    {
        return $this->producto;
    }

    public function setProducto(?Producto $producto): self
    {
        $this->producto = $producto;

        return $this;
    }

    public function getPrecio(): ?float
    {
        return $this->precio;
    }

    public function setPrecio(float $precio): self
    {
        $this->precio = $precio;

        return $this;
    }

    public function __toString(){
        // para mostrar el nombre de la categoría en la selección
        return $this->producto;
        // para mostrar el id de la categoría en la selección
        // return $this->id;
    }
    
}

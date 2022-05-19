<?php

namespace App\Entity;

use App\Repository\PedidoRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PedidoRepository::class)]
class Pedido
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'date')]
    private $fecha;

    #[ORM\Column(type: 'boolean')]
    private $estado;

    #[ORM\ManyToOne(targetEntity: Empresa::class, inversedBy: 'pedidos')]
    private $empresa;

    #[ORM\OneToMany(mappedBy: 'pedido', targetEntity: Detalle::class)]
    private $detalles;

    #[ORM\ManyToOne(targetEntity: Cliente::class, inversedBy: 'pedidos')]
    private $cliente;

    #[ORM\Column(type: 'string', length: 50)]
    private $nombrePedido;

    public function __construct($empresa)
    {
        $this->setEmpresa($empresa);
        $this->detalles = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEstado(): ?bool
    {
        return $this->estado;
    }

    public function setEstado(bool $estado): self
    {
        $this->estado = $estado;

        return $this;
    }

    public function getFecha()
    {
        return $this->fecha;
    }

    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function getEmpresa(): ?Empresa
    {
        return $this->empresa;
    }

    public function setEmpresa(?Empresa $empresa): self
    {
        $this->empresa = $empresa;

        return $this;
    }

    /**
     * @return Collection<int, Detalle>
     */
    public function getDetalles(): Collection
    {
        return $this->detalles;
    }

    public function addDetalle(Detalle $detalle): self
    {
        if (!$this->detalles->contains($detalle)) {
            $this->detalles[] = $detalle;
            $detalle->setPedido($this);
        }

        return $this;
    }

    public function removeDetalle(Detalle $detalle): self
    {
        if ($this->detalles->removeElement($detalle)) {
            // set the owning side to null (unless already changed)
            if ($detalle->getPedido() === $this) {
                $detalle->setPedido(null);
            }
        }

        return $this;
    }

    public function getCliente(): ?Cliente
    {
        return $this->cliente;
    }

    public function setCliente(?Cliente $cliente): self
    {
        $this->cliente = $cliente;

        return $this;
    }

    public function __toString(){
        // para mostrar el nombre de la categoría en la selección
        return $this->id;
        // para mostrar el id de la categoría en la selección
        // return $this->id;
    }

    public function getNombrePedido(): ?string
    {
        return $this->nombrePedido;
    }

    public function setNombrePedido(string $nombrePedido): self
    {
        $this->nombrePedido = $nombrePedido;

        return $this;
    }
}

<?php

namespace Sicoob\SiccadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sicoob\SiccadBundle\Entity\ReservasProponentes
 *
 * @ORM\Table(name="reservas_proponentes")
 * @ORM\Entity
 */
class ReservasProponentes
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="reservas_proponentes_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var ReservasImoveis
     *
     * @ORM\ManyToOne(targetEntity="ReservasImoveis")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reservas_imoveis_id", referencedColumnName="id")
     * })
     */
    private $reservasImoveis;

    /**
     * @var Clientes
     *
     * @ORM\ManyToOne(targetEntity="Clientes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="clientes_id", referencedColumnName="id")
     * })
     */
    private $clientes;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set reservasImoveis
     *
     * @param Sicoob\SiccadBundle\Entity\ReservasImoveis $reservasImoveis
     */
    public function setReservasImoveis(\Sicoob\SiccadBundle\Entity\ReservasImoveis $reservasImoveis)
    {
        $this->reservasImoveis = $reservasImoveis;
    }

    /**
     * Get reservasImoveis
     *
     * @return Sicoob\SiccadBundle\Entity\ReservasImoveis 
     */
    public function getReservasImoveis()
    {
        return $this->reservasImoveis;
    }

    /**
     * Set clientes
     *
     * @param Sicoob\SiccadBundle\Entity\Clientes $clientes
     */
    public function setClientes(\Sicoob\SiccadBundle\Entity\Clientes $clientes)
    {
        $this->clientes = $clientes;
    }

    /**
     * Get clientes
     *
     * @return Sicoob\SiccadBundle\Entity\Clientes 
     */
    public function getClientes()
    {
        return $this->clientes;
    }
}
<?php

namespace Sicoob\SiccadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sicoob\SiccadBundle\Entity\ReservasCorretores
 *
 * @ORM\Table(name="reservas_corretores")
 * @ORM\Entity
 */
class ReservasCorretores
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="reservas_corretores_id_seq", allocationSize="1", initialValue="1")
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
     * @var Corretores
     *
     * @ORM\ManyToOne(targetEntity="Corretores")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="corretores_id", referencedColumnName="id")
     * })
     */
    private $corretores;



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
     * Set corretores
     *
     * @param Sicoob\SiccadBundle\Entity\Corretores $corretores
     */
    public function setCorretores(\Sicoob\SiccadBundle\Entity\Corretores $corretores)
    {
        $this->corretores = $corretores;
    }

    /**
     * Get corretores
     *
     * @return Sicoob\SiccadBundle\Entity\Corretores 
     */
    public function getCorretores()
    {
        return $this->corretores;
    }
}
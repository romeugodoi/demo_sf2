<?php

namespace Sicoob\SiccadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sicoob\SiccadBundle\Entity\ReservasItensEmpreendimentos
 *
 * @ORM\Table(name="reservas_itens_empreendimentos")
 * @ORM\Entity
 */
class ReservasItensEmpreendimentos
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="reservas_itens_empreendimentos_id_seq", allocationSize="1", initialValue="1")
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
     * @var ItensEmpreendimentos
     *
     * @ORM\ManyToOne(targetEntity="ItensEmpreendimentos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="itens_empreendimentos_id", referencedColumnName="id")
     * })
     */
    private $itensEmpreendimentos;



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
     * Set itensEmpreendimentos
     *
     * @param Sicoob\SiccadBundle\Entity\ItensEmpreendimentos $itensEmpreendimentos
     */
    public function setItensEmpreendimentos(\Sicoob\SiccadBundle\Entity\ItensEmpreendimentos $itensEmpreendimentos)
    {
        $this->itensEmpreendimentos = $itensEmpreendimentos;
    }

    /**
     * Get itensEmpreendimentos
     *
     * @return Sicoob\SiccadBundle\Entity\ItensEmpreendimentos 
     */
    public function getItensEmpreendimentos()
    {
        return $this->itensEmpreendimentos;
    }
}
<?php

namespace Sicoob\SiccadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sicoob\SiccadBundle\Entity\VendasImoveis
 *
 * @ORM\Table(name="vendas_imoveis")
 * @ORM\Entity
 */
class VendasImoveis
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="vendas_imoveis_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var datetime $dataEfetivacao
     *
     * @ORM\Column(name="data_efetivacao", type="datetime", nullable=false)
     */
    private $dataEfetivacao;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dataEfetivacao
     *
     * @param datetime $dataEfetivacao
     */
    public function setDataEfetivacao($dataEfetivacao)
    {
        $this->dataEfetivacao = $dataEfetivacao;
    }

    /**
     * Get dataEfetivacao
     *
     * @return datetime 
     */
    public function getDataEfetivacao()
    {
        return $this->dataEfetivacao;
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
}
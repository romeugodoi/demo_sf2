<?php

namespace Sicoob\SiccadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sicoob\SiccadBundle\Entity\ImoveisItensEmpreendimentos
 *
 * @ORM\Table(name="imoveis_itens_empreendimentos")
 * @ORM\Entity
 */
class ImoveisItensEmpreendimentos
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="imoveis_itens_empreendimentos_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var Imoveis
     *
     * @ORM\ManyToOne(targetEntity="Imoveis")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="imoveis_id", referencedColumnName="id")
     * })
     */
    private $imoveis;

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
     * Set imoveis
     *
     * @param Sicoob\SiccadBundle\Entity\Imoveis $imoveis
     */
    public function setImoveis(\Sicoob\SiccadBundle\Entity\Imoveis $imoveis)
    {
        $this->imoveis = $imoveis;
    }

    /**
     * Get imoveis
     *
     * @return Sicoob\SiccadBundle\Entity\Imoveis 
     */
    public function getImoveis()
    {
        return $this->imoveis;
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
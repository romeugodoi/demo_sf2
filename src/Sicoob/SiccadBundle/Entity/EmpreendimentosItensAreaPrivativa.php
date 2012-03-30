<?php

namespace Sicoob\SiccadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sicoob\SiccadBundle\Entity\EmpreendimentosItensAreaPrivativa
 *
 * @ORM\Table(name="empreendimentos_itens_area_privativa")
 * @ORM\Entity
 */
class EmpreendimentosItensAreaPrivativa
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="empreendimentos_itens_area_privativa_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var ItensAreaPrivativa
     *
     * @ORM\ManyToOne(targetEntity="ItensAreaPrivativa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="itens_area_privativa_id", referencedColumnName="id")
     * })
     */
    private $itensAreaPrivativa;

    /**
     * @var Empreendimentos
     *
     * @ORM\ManyToOne(targetEntity="Empreendimentos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="empreendimentos_id", referencedColumnName="id")
     * })
     */
    private $empreendimentos;



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
     * Set itensAreaPrivativa
     *
     * @param Sicoob\SiccadBundle\Entity\ItensAreaPrivativa $itensAreaPrivativa
     */
    public function setItensAreaPrivativa(\Sicoob\SiccadBundle\Entity\ItensAreaPrivativa $itensAreaPrivativa)
    {
        $this->itensAreaPrivativa = $itensAreaPrivativa;
    }

    /**
     * Get itensAreaPrivativa
     *
     * @return Sicoob\SiccadBundle\Entity\ItensAreaPrivativa 
     */
    public function getItensAreaPrivativa()
    {
        return $this->itensAreaPrivativa;
    }

    /**
     * Set empreendimentos
     *
     * @param Sicoob\SiccadBundle\Entity\Empreendimentos $empreendimentos
     */
    public function setEmpreendimentos(\Sicoob\SiccadBundle\Entity\Empreendimentos $empreendimentos)
    {
        $this->empreendimentos = $empreendimentos;
    }

    /**
     * Get empreendimentos
     *
     * @return Sicoob\SiccadBundle\Entity\Empreendimentos 
     */
    public function getEmpreendimentos()
    {
        return $this->empreendimentos;
    }
}
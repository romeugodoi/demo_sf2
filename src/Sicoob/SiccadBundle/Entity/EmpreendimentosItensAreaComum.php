<?php

namespace Sicoob\SiccadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sicoob\SiccadBundle\Entity\EmpreendimentosItensAreaComum
 *
 * @ORM\Table(name="empreendimentos_itens_area_comum")
 * @ORM\Entity
 */
class EmpreendimentosItensAreaComum
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="empreendimentos_itens_area_comum_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var ItensAreaComum
     *
     * @ORM\ManyToOne(targetEntity="ItensAreaComum")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="itens_area_comum_id", referencedColumnName="id")
     * })
     */
    private $itensAreaComum;

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
     * Set itensAreaComum
     *
     * @param Sicoob\SiccadBundle\Entity\ItensAreaComum $itensAreaComum
     */
    public function setItensAreaComum(\Sicoob\SiccadBundle\Entity\ItensAreaComum $itensAreaComum)
    {
        $this->itensAreaComum = $itensAreaComum;
    }

    /**
     * Get itensAreaComum
     *
     * @return Sicoob\SiccadBundle\Entity\ItensAreaComum 
     */
    public function getItensAreaComum()
    {
        return $this->itensAreaComum;
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
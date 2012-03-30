<?php

namespace Sicoob\SiccadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sicoob\SiccadBundle\Entity\ImoveisItensAreaPrivativa
 *
 * @ORM\Table(name="imoveis_itens_area_privativa")
 * @ORM\Entity
 */
class ImoveisItensAreaPrivativa
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="imoveis_itens_area_privativa_id_seq", allocationSize="1", initialValue="1")
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
     * @var ItensAreaPrivativa
     *
     * @ORM\ManyToOne(targetEntity="ItensAreaPrivativa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="itens_area_privativa_id", referencedColumnName="id")
     * })
     */
    private $itensAreaPrivativa;



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
}
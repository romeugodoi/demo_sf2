<?php

namespace Sicoob\SiccadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sicoob\SiccadBundle\Entity\ImoveisItensAreaComum
 *
 * @ORM\Table(name="imoveis_itens_area_comum")
 * @ORM\Entity
 */
class ImoveisItensAreaComum
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="imoveis_itens_area_comum_id_seq", allocationSize="1", initialValue="1")
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
     * @var Imoveis
     *
     * @ORM\ManyToOne(targetEntity="Imoveis")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="imoveis_id", referencedColumnName="id")
     * })
     */
    private $imoveis;



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
}
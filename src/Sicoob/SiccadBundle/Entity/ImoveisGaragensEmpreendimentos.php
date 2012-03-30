<?php

namespace Sicoob\SiccadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sicoob\SiccadBundle\Entity\ImoveisGaragensEmpreendimentos
 *
 * @ORM\Table(name="imoveis_garagens_empreendimentos")
 * @ORM\Entity
 */
class ImoveisGaragensEmpreendimentos
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="imoveis_garagens_empreendimentos_id_seq", allocationSize="1", initialValue="1")
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
     * @var GaragensEmpreendimentos
     *
     * @ORM\ManyToOne(targetEntity="GaragensEmpreendimentos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="garagens_empreendimentos_id", referencedColumnName="id")
     * })
     */
    private $garagensEmpreendimentos;



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
     * Set garagensEmpreendimentos
     *
     * @param Sicoob\SiccadBundle\Entity\GaragensEmpreendimentos $garagensEmpreendimentos
     */
    public function setGaragensEmpreendimentos(\Sicoob\SiccadBundle\Entity\GaragensEmpreendimentos $garagensEmpreendimentos)
    {
        $this->garagensEmpreendimentos = $garagensEmpreendimentos;
    }

    /**
     * Get garagensEmpreendimentos
     *
     * @return Sicoob\SiccadBundle\Entity\GaragensEmpreendimentos 
     */
    public function getGaragensEmpreendimentos()
    {
        return $this->garagensEmpreendimentos;
    }
}
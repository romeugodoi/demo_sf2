<?php

namespace Sicoob\SiccadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sicoob\SiccadBundle\Entity\ImoveisGaleriasFotos
 *
 * @ORM\Table(name="imoveis_galerias_fotos")
 * @ORM\Entity
 */
class ImoveisGaleriasFotos
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="imoveis_galerias_fotos_id_seq", allocationSize="1", initialValue="1")
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
     * @var GaleriasFotos
     *
     * @ORM\ManyToOne(targetEntity="GaleriasFotos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="galerias_fotos_id", referencedColumnName="id")
     * })
     */
    private $galeriasFotos;



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
     * Set galeriasFotos
     *
     * @param Sicoob\SiccadBundle\Entity\GaleriasFotos $galeriasFotos
     */
    public function setGaleriasFotos(\Sicoob\SiccadBundle\Entity\GaleriasFotos $galeriasFotos)
    {
        $this->galeriasFotos = $galeriasFotos;
    }

    /**
     * Get galeriasFotos
     *
     * @return Sicoob\SiccadBundle\Entity\GaleriasFotos 
     */
    public function getGaleriasFotos()
    {
        return $this->galeriasFotos;
    }
}
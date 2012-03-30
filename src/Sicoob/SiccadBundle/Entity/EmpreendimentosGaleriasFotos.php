<?php

namespace Sicoob\SiccadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sicoob\SiccadBundle\Entity\EmpreendimentosGaleriasFotos
 *
 * @ORM\Table(name="empreendimentos_galerias_fotos")
 * @ORM\Entity
 */
class EmpreendimentosGaleriasFotos
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="empreendimentos_galerias_fotos_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

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
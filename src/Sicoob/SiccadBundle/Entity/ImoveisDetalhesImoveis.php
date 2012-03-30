<?php

namespace Sicoob\SiccadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sicoob\SiccadBundle\Entity\ImoveisDetalhesImoveis
 *
 * @ORM\Table(name="imoveis_detalhes_imoveis")
 * @ORM\Entity
 */
class ImoveisDetalhesImoveis
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="imoveis_detalhes_imoveis_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $valor
     *
     * @ORM\Column(name="valor", type="string", length=255, nullable=false)
     */
    private $valor;

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
     * @var DetalhesImoveis
     *
     * @ORM\ManyToOne(targetEntity="DetalhesImoveis")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="detalhes_imoveis_id", referencedColumnName="id")
     * })
     */
    private $detalhesImoveis;



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
     * Set valor
     *
     * @param string $valor
     */
    public function setValor($valor)
    {
        $this->valor = $valor;
    }

    /**
     * Get valor
     *
     * @return string 
     */
    public function getValor()
    {
        return $this->valor;
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
     * Set detalhesImoveis
     *
     * @param Sicoob\SiccadBundle\Entity\DetalhesImoveis $detalhesImoveis
     */
    public function setDetalhesImoveis(\Sicoob\SiccadBundle\Entity\DetalhesImoveis $detalhesImoveis)
    {
        $this->detalhesImoveis = $detalhesImoveis;
    }

    /**
     * Get detalhesImoveis
     *
     * @return Sicoob\SiccadBundle\Entity\DetalhesImoveis 
     */
    public function getDetalhesImoveis()
    {
        return $this->detalhesImoveis;
    }
}
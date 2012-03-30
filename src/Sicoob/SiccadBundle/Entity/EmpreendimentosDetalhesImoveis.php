<?php

namespace Sicoob\SiccadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sicoob\SiccadBundle\Entity\EmpreendimentosDetalhesImoveis
 *
 * @ORM\Table(name="empreendimentos_detalhes_imoveis")
 * @ORM\Entity
 */
class EmpreendimentosDetalhesImoveis
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="empreendimentos_detalhes_imoveis_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $valor
     *
     * @ORM\Column(name="valor", type="string", length=255, nullable=false)
     */
    private $valor;

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
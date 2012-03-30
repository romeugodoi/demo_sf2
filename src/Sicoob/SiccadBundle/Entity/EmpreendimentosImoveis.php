<?php

namespace Sicoob\SiccadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sicoob\SiccadBundle\Entity\EmpreendimentosImoveis
 *
 * @ORM\Table(name="empreendimentos_imoveis")
 * @ORM\Entity
 */
class EmpreendimentosImoveis
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="empreendimentos_imoveis_id_seq", allocationSize="1", initialValue="1")
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
     * @var Empreendimentos
     *
     * @ORM\ManyToOne(targetEntity="Empreendimentos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="empreendimentos_id", referencedColumnName="id")
     * })
     */
    private $empreendimentos;

    /**
     * @var DivisoesEmpreendimentos
     *
     * @ORM\ManyToOne(targetEntity="DivisoesEmpreendimentos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="divisoes_empreendimentos_id", referencedColumnName="id")
     * })
     */
    private $divisoesEmpreendimentos;



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
     * Set divisoesEmpreendimentos
     *
     * @param Sicoob\SiccadBundle\Entity\DivisoesEmpreendimentos $divisoesEmpreendimentos
     */
    public function setDivisoesEmpreendimentos(\Sicoob\SiccadBundle\Entity\DivisoesEmpreendimentos $divisoesEmpreendimentos)
    {
        $this->divisoesEmpreendimentos = $divisoesEmpreendimentos;
    }

    /**
     * Get divisoesEmpreendimentos
     *
     * @return Sicoob\SiccadBundle\Entity\DivisoesEmpreendimentos 
     */
    public function getDivisoesEmpreendimentos()
    {
        return $this->divisoesEmpreendimentos;
    }
}
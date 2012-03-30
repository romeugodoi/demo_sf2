<?php

namespace Sicoob\SiccadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sicoob\SiccadBundle\Entity\EmpreendimentosIncorporadoras
 *
 * @ORM\Table(name="empreendimentos_incorporadoras")
 * @ORM\Entity
 */
class EmpreendimentosIncorporadoras
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="empreendimentos_incorporadoras_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var Incorporadoras
     *
     * @ORM\ManyToOne(targetEntity="Incorporadoras")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="incorporadoras_id", referencedColumnName="id")
     * })
     */
    private $incorporadoras;

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
     * Set incorporadoras
     *
     * @param Sicoob\SiccadBundle\Entity\Incorporadoras $incorporadoras
     */
    public function setIncorporadoras(\Sicoob\SiccadBundle\Entity\Incorporadoras $incorporadoras)
    {
        $this->incorporadoras = $incorporadoras;
    }

    /**
     * Get incorporadoras
     *
     * @return Sicoob\SiccadBundle\Entity\Incorporadoras 
     */
    public function getIncorporadoras()
    {
        return $this->incorporadoras;
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
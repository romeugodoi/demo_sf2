<?php

namespace Sicoob\SiccadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sicoob\SiccadBundle\Entity\Contato
 *
 * @ORM\Table(name="contato")
 * @ORM\Entity
 */
class Contato
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="contato_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var integer $ddi
     *
     * @ORM\Column(name="ddi", type="integer", nullable=true)
     */
    private $ddi;

    /**
     * @var smallint $ddd
     *
     * @ORM\Column(name="ddd", type="smallint", nullable=false)
     */
    private $ddd;

    /**
     * @var string $telefone
     *
     * @ORM\Column(name="telefone", type="string", length=255, nullable=false)
     */
    private $telefone;

    /**
     * @var datetime $createdAt
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var datetime $updatedAt
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=false)
     */
    private $updatedAt;

    /**
     * @var TiposContatos
     *
     * @ORM\ManyToOne(targetEntity="TiposContatos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipos_contatos_id", referencedColumnName="id")
     * })
     */
    private $tiposContatos;



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
     * Set ddi
     *
     * @param integer $ddi
     */
    public function setDdi($ddi)
    {
        $this->ddi = $ddi;
    }

    /**
     * Get ddi
     *
     * @return integer 
     */
    public function getDdi()
    {
        return $this->ddi;
    }

    /**
     * Set ddd
     *
     * @param smallint $ddd
     */
    public function setDdd($ddd)
    {
        $this->ddd = $ddd;
    }

    /**
     * Get ddd
     *
     * @return smallint 
     */
    public function getDdd()
    {
        return $this->ddd;
    }

    /**
     * Set telefone
     *
     * @param string $telefone
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    /**
     * Get telefone
     *
     * @return string 
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * Set createdAt
     *
     * @param datetime $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Get createdAt
     *
     * @return datetime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param datetime $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * Get updatedAt
     *
     * @return datetime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set tiposContatos
     *
     * @param Sicoob\SiccadBundle\Entity\TiposContatos $tiposContatos
     */
    public function setTiposContatos(\Sicoob\SiccadBundle\Entity\TiposContatos $tiposContatos)
    {
        $this->tiposContatos = $tiposContatos;
    }

    /**
     * Get tiposContatos
     *
     * @return Sicoob\SiccadBundle\Entity\TiposContatos 
     */
    public function getTiposContatos()
    {
        return $this->tiposContatos;
    }
}
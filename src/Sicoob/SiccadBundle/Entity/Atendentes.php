<?php

namespace Sicoob\SiccadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sicoob\SiccadBundle\Entity\Atendentes
 *
 * @ORM\Table(name="atendentes")
 * @ORM\Entity
 */
class Atendentes
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="atendentes_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $tipo
     *
     * @ORM\Column(name="tipo", type="string", length=255, nullable=false)
     */
    private $tipo;

    /**
     * @var boolean $isInterno
     *
     * @ORM\Column(name="is_interno", type="boolean", nullable=false)
     */
    private $isInterno;

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
     * @var Colaboradores
     *
     * @ORM\ManyToOne(targetEntity="Colaboradores")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="colaboradores_id", referencedColumnName="id")
     * })
     */
    private $colaboradores;



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
     * Set tipo
     *
     * @param string $tipo
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    /**
     * Get tipo
     *
     * @return string 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set isInterno
     *
     * @param boolean $isInterno
     */
    public function setIsInterno($isInterno)
    {
        $this->isInterno = $isInterno;
    }

    /**
     * Get isInterno
     *
     * @return boolean 
     */
    public function getIsInterno()
    {
        return $this->isInterno;
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
     * Set colaboradores
     *
     * @param Sicoob\SiccadBundle\Entity\Colaboradores $colaboradores
     */
    public function setColaboradores(\Sicoob\SiccadBundle\Entity\Colaboradores $colaboradores)
    {
        $this->colaboradores = $colaboradores;
    }

    /**
     * Get colaboradores
     *
     * @return Sicoob\SiccadBundle\Entity\Colaboradores 
     */
    public function getColaboradores()
    {
        return $this->colaboradores;
    }
}
<?php

namespace Sicoob\SiccadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sicoob\SiccadBundle\Entity\Bairros
 *
 * @ORM\Table(name="bairros")
 * @ORM\Entity
 */
class Bairros
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="bairros_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $nome
     *
     * @ORM\Column(name="nome", type="string", length=72, nullable=false)
     */
    private $nome;

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
     * @var Cidades
     *
     * @ORM\ManyToOne(targetEntity="Cidades")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cidades_id", referencedColumnName="id")
     * })
     */
    private $cidades;



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
     * Set nome
     *
     * @param string $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * Get nome
     *
     * @return string 
     */
    public function getNome()
    {
        return $this->nome;
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
     * Set cidades
     *
     * @param Sicoob\SiccadBundle\Entity\Cidades $cidades
     */
    public function setCidades(\Sicoob\SiccadBundle\Entity\Cidades $cidades)
    {
        $this->cidades = $cidades;
    }

    /**
     * Get cidades
     *
     * @return Sicoob\SiccadBundle\Entity\Cidades 
     */
    public function getCidades()
    {
        return $this->cidades;
    }
}
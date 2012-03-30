<?php

namespace Sicoob\SiccadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sicoob\SiccadBundle\Entity\ItensAreaComum
 *
 * @ORM\Table(name="itens_area_comum")
 * @ORM\Entity
 */
class ItensAreaComum
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="itens_area_comum_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $titulo
     *
     * @ORM\Column(name="titulo", type="string", length=100, nullable=false)
     */
    private $titulo;

    /**
     * @var string $descricao
     *
     * @ORM\Column(name="descricao", type="string", length=1000, nullable=true)
     */
    private $descricao;

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
     * @var CategoriasItensAreaComum
     *
     * @ORM\ManyToOne(targetEntity="CategoriasItensAreaComum")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="categorias_itens_area_comum_id", referencedColumnName="id")
     * })
     */
    private $categoriasItensAreaComum;



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
     * Set titulo
     *
     * @param string $titulo
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    /**
     * Get descricao
     *
     * @return string 
     */
    public function getDescricao()
    {
        return $this->descricao;
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
     * Set categoriasItensAreaComum
     *
     * @param Sicoob\SiccadBundle\Entity\CategoriasItensAreaComum $categoriasItensAreaComum
     */
    public function setCategoriasItensAreaComum(\Sicoob\SiccadBundle\Entity\CategoriasItensAreaComum $categoriasItensAreaComum)
    {
        $this->categoriasItensAreaComum = $categoriasItensAreaComum;
    }

    /**
     * Get categoriasItensAreaComum
     *
     * @return Sicoob\SiccadBundle\Entity\CategoriasItensAreaComum 
     */
    public function getCategoriasItensAreaComum()
    {
        return $this->categoriasItensAreaComum;
    }
}
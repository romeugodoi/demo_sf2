<?php

namespace Sicoob\SiccadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sicoob\SiccadBundle\Entity\ItensAreaPrivativa
 *
 * @ORM\Table(name="itens_area_privativa")
 * @ORM\Entity
 */
class ItensAreaPrivativa
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="itens_area_privativa_id_seq", allocationSize="1", initialValue="1")
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
     * @var CategoriasItensAreaPrivativa
     *
     * @ORM\ManyToOne(targetEntity="CategoriasItensAreaPrivativa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="categorias_itens_area_privativa_id", referencedColumnName="id")
     * })
     */
    private $categoriasItensAreaPrivativa;



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
     * Set categoriasItensAreaPrivativa
     *
     * @param Sicoob\SiccadBundle\Entity\CategoriasItensAreaPrivativa $categoriasItensAreaPrivativa
     */
    public function setCategoriasItensAreaPrivativa(\Sicoob\SiccadBundle\Entity\CategoriasItensAreaPrivativa $categoriasItensAreaPrivativa)
    {
        $this->categoriasItensAreaPrivativa = $categoriasItensAreaPrivativa;
    }

    /**
     * Get categoriasItensAreaPrivativa
     *
     * @return Sicoob\SiccadBundle\Entity\CategoriasItensAreaPrivativa 
     */
    public function getCategoriasItensAreaPrivativa()
    {
        return $this->categoriasItensAreaPrivativa;
    }
}
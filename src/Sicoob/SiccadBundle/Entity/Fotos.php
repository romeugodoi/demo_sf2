<?php

namespace Sicoob\SiccadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sicoob\SiccadBundle\Entity\Fotos
 *
 * @ORM\Table(name="fotos")
 * @ORM\Entity
 */
class Fotos
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="fotos_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $titulo
     *
     * @ORM\Column(name="titulo", type="string", length=100, nullable=false)
     */
    private $titulo;

    /**
     * @var string $arquivo
     *
     * @ORM\Column(name="arquivo", type="string", length=255, nullable=true)
     */
    private $arquivo;

    /**
     * @var string $legenda
     *
     * @ORM\Column(name="legenda", type="string", length=255, nullable=true)
     */
    private $legenda;

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
     * @var GaleriasFotos
     *
     * @ORM\ManyToOne(targetEntity="GaleriasFotos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="galerias_fotos_id", referencedColumnName="id")
     * })
     */
    private $galeriasFotos;



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
     * Set arquivo
     *
     * @param string $arquivo
     */
    public function setArquivo($arquivo)
    {
        $this->arquivo = $arquivo;
    }

    /**
     * Get arquivo
     *
     * @return string 
     */
    public function getArquivo()
    {
        return $this->arquivo;
    }

    /**
     * Set legenda
     *
     * @param string $legenda
     */
    public function setLegenda($legenda)
    {
        $this->legenda = $legenda;
    }

    /**
     * Get legenda
     *
     * @return string 
     */
    public function getLegenda()
    {
        return $this->legenda;
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
}
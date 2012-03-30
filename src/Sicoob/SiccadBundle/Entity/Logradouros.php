<?php

namespace Sicoob\SiccadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sicoob\SiccadBundle\Entity\Logradouros
 *
 * @ORM\Table(name="logradouros")
 * @ORM\Entity
 */
class Logradouros
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="logradouros_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $cep
     *
     * @ORM\Column(name="cep", type="string", length=9, nullable=false)
     */
    private $cep;

    /**
     * @var string $logradouro
     *
     * @ORM\Column(name="logradouro", type="string", length=72, nullable=false)
     */
    private $logradouro;

    /**
     * @var string $detalhes
     *
     * @ORM\Column(name="detalhes", type="string", length=72, nullable=true)
     */
    private $detalhes;

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
     * @var Bairros
     *
     * @ORM\ManyToOne(targetEntity="Bairros")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bairros_id", referencedColumnName="id")
     * })
     */
    private $bairros;



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
     * Set cep
     *
     * @param string $cep
     */
    public function setCep($cep)
    {
        $this->cep = $cep;
    }

    /**
     * Get cep
     *
     * @return string 
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * Set logradouro
     *
     * @param string $logradouro
     */
    public function setLogradouro($logradouro)
    {
        $this->logradouro = $logradouro;
    }

    /**
     * Get logradouro
     *
     * @return string 
     */
    public function getLogradouro()
    {
        return $this->logradouro;
    }

    /**
     * Set detalhes
     *
     * @param string $detalhes
     */
    public function setDetalhes($detalhes)
    {
        $this->detalhes = $detalhes;
    }

    /**
     * Get detalhes
     *
     * @return string 
     */
    public function getDetalhes()
    {
        return $this->detalhes;
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
     * Set bairros
     *
     * @param Sicoob\SiccadBundle\Entity\Bairros $bairros
     */
    public function setBairros(\Sicoob\SiccadBundle\Entity\Bairros $bairros)
    {
        $this->bairros = $bairros;
    }

    /**
     * Get bairros
     *
     * @return Sicoob\SiccadBundle\Entity\Bairros 
     */
    public function getBairros()
    {
        return $this->bairros;
    }
}
<?php

namespace Sicoob\SiccadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sicoob\SiccadBundle\Entity\DivisoesEmpreendimentos
 *
 * @ORM\Table(name="divisoes_empreendimentos")
 * @ORM\Entity
 */
class DivisoesEmpreendimentos
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="divisoes_empreendimentos_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $nome
     *
     * @ORM\Column(name="nome", type="string", length=100, nullable=false)
     */
    private $nome;

    /**
     * @var string $observacoes
     *
     * @ORM\Column(name="observacoes", type="string", length=1000, nullable=true)
     */
    private $observacoes;

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
     * @var TiposDivisoes
     *
     * @ORM\ManyToOne(targetEntity="TiposDivisoes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipos_divisoes_id", referencedColumnName="id")
     * })
     */
    private $tiposDivisoes;



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
     * Set observacoes
     *
     * @param string $observacoes
     */
    public function setObservacoes($observacoes)
    {
        $this->observacoes = $observacoes;
    }

    /**
     * Get observacoes
     *
     * @return string 
     */
    public function getObservacoes()
    {
        return $this->observacoes;
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
     * Set tiposDivisoes
     *
     * @param Sicoob\SiccadBundle\Entity\TiposDivisoes $tiposDivisoes
     */
    public function setTiposDivisoes(\Sicoob\SiccadBundle\Entity\TiposDivisoes $tiposDivisoes)
    {
        $this->tiposDivisoes = $tiposDivisoes;
    }

    /**
     * Get tiposDivisoes
     *
     * @return Sicoob\SiccadBundle\Entity\TiposDivisoes 
     */
    public function getTiposDivisoes()
    {
        return $this->tiposDivisoes;
    }
}
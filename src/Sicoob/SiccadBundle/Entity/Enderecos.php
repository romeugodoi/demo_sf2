<?php

namespace Sicoob\SiccadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sicoob\SiccadBundle\Entity\Enderecos
 *
 * @ORM\Table(name="enderecos")
 * @ORM\Entity
 */
class Enderecos
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="enderecos_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var integer $numero
     *
     * @ORM\Column(name="numero", type="integer", nullable=true)
     */
    private $numero;

    /**
     * @var string $quadra
     *
     * @ORM\Column(name="quadra", type="string", length=10, nullable=true)
     */
    private $quadra;

    /**
     * @var string $lote
     *
     * @ORM\Column(name="lote", type="string", length=10, nullable=true)
     */
    private $lote;

    /**
     * @var string $complemento
     *
     * @ORM\Column(name="complemento", type="string", length=150, nullable=true)
     */
    private $complemento;

    /**
     * @var string $pontoReferencia
     *
     * @ORM\Column(name="ponto_referencia", type="string", length=72, nullable=true)
     */
    private $pontoReferencia;

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
     * @var TiposEnderecos
     *
     * @ORM\ManyToOne(targetEntity="TiposEnderecos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipos_enderecos_id", referencedColumnName="id")
     * })
     */
    private $tiposEnderecos;

    /**
     * @var Logradouros
     *
     * @ORM\ManyToOne(targetEntity="Logradouros")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="logradouros_id", referencedColumnName="id")
     * })
     */
    private $logradouros;



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
     * Set numero
     *
     * @param integer $numero
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    /**
     * Get numero
     *
     * @return integer 
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set quadra
     *
     * @param string $quadra
     */
    public function setQuadra($quadra)
    {
        $this->quadra = $quadra;
    }

    /**
     * Get quadra
     *
     * @return string 
     */
    public function getQuadra()
    {
        return $this->quadra;
    }

    /**
     * Set lote
     *
     * @param string $lote
     */
    public function setLote($lote)
    {
        $this->lote = $lote;
    }

    /**
     * Get lote
     *
     * @return string 
     */
    public function getLote()
    {
        return $this->lote;
    }

    /**
     * Set complemento
     *
     * @param string $complemento
     */
    public function setComplemento($complemento)
    {
        $this->complemento = $complemento;
    }

    /**
     * Get complemento
     *
     * @return string 
     */
    public function getComplemento()
    {
        return $this->complemento;
    }

    /**
     * Set pontoReferencia
     *
     * @param string $pontoReferencia
     */
    public function setPontoReferencia($pontoReferencia)
    {
        $this->pontoReferencia = $pontoReferencia;
    }

    /**
     * Get pontoReferencia
     *
     * @return string 
     */
    public function getPontoReferencia()
    {
        return $this->pontoReferencia;
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
     * Set tiposEnderecos
     *
     * @param Sicoob\SiccadBundle\Entity\TiposEnderecos $tiposEnderecos
     */
    public function setTiposEnderecos(\Sicoob\SiccadBundle\Entity\TiposEnderecos $tiposEnderecos)
    {
        $this->tiposEnderecos = $tiposEnderecos;
    }

    /**
     * Get tiposEnderecos
     *
     * @return Sicoob\SiccadBundle\Entity\TiposEnderecos 
     */
    public function getTiposEnderecos()
    {
        return $this->tiposEnderecos;
    }

    /**
     * Set logradouros
     *
     * @param Sicoob\SiccadBundle\Entity\Logradouros $logradouros
     */
    public function setLogradouros(\Sicoob\SiccadBundle\Entity\Logradouros $logradouros)
    {
        $this->logradouros = $logradouros;
    }

    /**
     * Get logradouros
     *
     * @return Sicoob\SiccadBundle\Entity\Logradouros 
     */
    public function getLogradouros()
    {
        return $this->logradouros;
    }
}
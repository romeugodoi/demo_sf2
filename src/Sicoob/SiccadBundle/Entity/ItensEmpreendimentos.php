<?php

namespace Sicoob\SiccadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sicoob\SiccadBundle\Entity\ItensEmpreendimentos
 *
 * @ORM\Table(name="itens_empreendimentos")
 * @ORM\Entity
 */
class ItensEmpreendimentos
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="itens_empreendimentos_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $numero
     *
     * @ORM\Column(name="numero", type="string", length=10, nullable=false)
     */
    private $numero;

    /**
     * @var string $local
     *
     * @ORM\Column(name="local", type="string", length=255, nullable=false)
     */
    private $local;

    /**
     * @var decimal $metragem
     *
     * @ORM\Column(name="metragem", type="decimal", nullable=false)
     */
    private $metragem;

    /**
     * @var decimal $valor
     *
     * @ORM\Column(name="valor", type="decimal", nullable=false)
     */
    private $valor;

    /**
     * @var string $observacoes
     *
     * @ORM\Column(name="observacoes", type="string", length=50, nullable=true)
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
     * @var TiposItensEmpreendimentos
     *
     * @ORM\ManyToOne(targetEntity="TiposItensEmpreendimentos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipos_itens_empreendimentos_id", referencedColumnName="id")
     * })
     */
    private $tiposItensEmpreendimentos;

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
     * Set numero
     *
     * @param string $numero
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    /**
     * Get numero
     *
     * @return string 
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set local
     *
     * @param string $local
     */
    public function setLocal($local)
    {
        $this->local = $local;
    }

    /**
     * Get local
     *
     * @return string 
     */
    public function getLocal()
    {
        return $this->local;
    }

    /**
     * Set metragem
     *
     * @param decimal $metragem
     */
    public function setMetragem($metragem)
    {
        $this->metragem = $metragem;
    }

    /**
     * Get metragem
     *
     * @return decimal 
     */
    public function getMetragem()
    {
        return $this->metragem;
    }

    /**
     * Set valor
     *
     * @param decimal $valor
     */
    public function setValor($valor)
    {
        $this->valor = $valor;
    }

    /**
     * Get valor
     *
     * @return decimal 
     */
    public function getValor()
    {
        return $this->valor;
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
     * Set tiposItensEmpreendimentos
     *
     * @param Sicoob\SiccadBundle\Entity\TiposItensEmpreendimentos $tiposItensEmpreendimentos
     */
    public function setTiposItensEmpreendimentos(\Sicoob\SiccadBundle\Entity\TiposItensEmpreendimentos $tiposItensEmpreendimentos)
    {
        $this->tiposItensEmpreendimentos = $tiposItensEmpreendimentos;
    }

    /**
     * Get tiposItensEmpreendimentos
     *
     * @return Sicoob\SiccadBundle\Entity\TiposItensEmpreendimentos 
     */
    public function getTiposItensEmpreendimentos()
    {
        return $this->tiposItensEmpreendimentos;
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
<?php

namespace Sicoob\SiccadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sicoob\SiccadBundle\Entity\Atendimentos
 *
 * @ORM\Table(name="atendimentos")
 * @ORM\Entity
 */
class Atendimentos
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="atendimentos_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

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
     * @var TiposOperacoes
     *
     * @ORM\ManyToOne(targetEntity="TiposOperacoes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipos_operacoes_id", referencedColumnName="id")
     * })
     */
    private $tiposOperacoes;

    /**
     * @var TiposMidias
     *
     * @ORM\ManyToOne(targetEntity="TiposMidias")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipos_midias_id", referencedColumnName="id")
     * })
     */
    private $tiposMidias;

    /**
     * @var TiposImoveis
     *
     * @ORM\ManyToOne(targetEntity="TiposImoveis")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipos_imoveis_id", referencedColumnName="id")
     * })
     */
    private $tiposImoveis;

    /**
     * @var StatusAtendimentos
     *
     * @ORM\ManyToOne(targetEntity="StatusAtendimentos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="status_atendimentos_id", referencedColumnName="id")
     * })
     */
    private $statusAtendimentos;

    /**
     * @var Pessoa
     *
     * @ORM\ManyToOne(targetEntity="Pessoa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pessoas_id", referencedColumnName="id")
     * })
     */
    private $pessoas;

    /**
     * @var Corretores
     *
     * @ORM\ManyToOne(targetEntity="Corretores")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="corretores_id", referencedColumnName="id")
     * })
     */
    private $corretores;

    /**
     * @var Contatos
     *
     * @ORM\ManyToOne(targetEntity="Contatos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="contatos_id", referencedColumnName="id")
     * })
     */
    private $contatos;

    /**
     * @var Atendentes
     *
     * @ORM\ManyToOne(targetEntity="Atendentes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="atendentes_id", referencedColumnName="id")
     * })
     */
    private $atendentes;



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
     * Set tiposOperacoes
     *
     * @param Sicoob\SiccadBundle\Entity\TiposOperacoes $tiposOperacoes
     */
    public function setTiposOperacoes(\Sicoob\SiccadBundle\Entity\TiposOperacoes $tiposOperacoes)
    {
        $this->tiposOperacoes = $tiposOperacoes;
    }

    /**
     * Get tiposOperacoes
     *
     * @return Sicoob\SiccadBundle\Entity\TiposOperacoes 
     */
    public function getTiposOperacoes()
    {
        return $this->tiposOperacoes;
    }

    /**
     * Set tiposMidias
     *
     * @param Sicoob\SiccadBundle\Entity\TiposMidias $tiposMidias
     */
    public function setTiposMidias(\Sicoob\SiccadBundle\Entity\TiposMidias $tiposMidias)
    {
        $this->tiposMidias = $tiposMidias;
    }

    /**
     * Get tiposMidias
     *
     * @return Sicoob\SiccadBundle\Entity\TiposMidias 
     */
    public function getTiposMidias()
    {
        return $this->tiposMidias;
    }

    /**
     * Set tiposImoveis
     *
     * @param Sicoob\SiccadBundle\Entity\TiposImoveis $tiposImoveis
     */
    public function setTiposImoveis(\Sicoob\SiccadBundle\Entity\TiposImoveis $tiposImoveis)
    {
        $this->tiposImoveis = $tiposImoveis;
    }

    /**
     * Get tiposImoveis
     *
     * @return Sicoob\SiccadBundle\Entity\TiposImoveis 
     */
    public function getTiposImoveis()
    {
        return $this->tiposImoveis;
    }

    /**
     * Set statusAtendimentos
     *
     * @param Sicoob\SiccadBundle\Entity\StatusAtendimentos $statusAtendimentos
     */
    public function setStatusAtendimentos(\Sicoob\SiccadBundle\Entity\StatusAtendimentos $statusAtendimentos)
    {
        $this->statusAtendimentos = $statusAtendimentos;
    }

    /**
     * Get statusAtendimentos
     *
     * @return Sicoob\SiccadBundle\Entity\StatusAtendimentos 
     */
    public function getStatusAtendimentos()
    {
        return $this->statusAtendimentos;
    }

    /**
     * Set pessoas
     *
     * @param Sicoob\SiccadBundle\Entity\Pessoa $pessoas
     */
    public function setPessoas(\Sicoob\SiccadBundle\Entity\Pessoa $pessoas)
    {
        $this->pessoas = $pessoas;
    }

    /**
     * Get pessoas
     *
     * @return Sicoob\SiccadBundle\Entity\Pessoa 
     */
    public function getPessoas()
    {
        return $this->pessoas;
    }

    /**
     * Set corretores
     *
     * @param Sicoob\SiccadBundle\Entity\Corretores $corretores
     */
    public function setCorretores(\Sicoob\SiccadBundle\Entity\Corretores $corretores)
    {
        $this->corretores = $corretores;
    }

    /**
     * Get corretores
     *
     * @return Sicoob\SiccadBundle\Entity\Corretores 
     */
    public function getCorretores()
    {
        return $this->corretores;
    }

    /**
     * Set contatos
     *
     * @param Sicoob\SiccadBundle\Entity\Contatos $contatos
     */
    public function setContatos(\Sicoob\SiccadBundle\Entity\Contatos $contatos)
    {
        $this->contatos = $contatos;
    }

    /**
     * Get contatos
     *
     * @return Sicoob\SiccadBundle\Entity\Contatos 
     */
    public function getContatos()
    {
        return $this->contatos;
    }

    /**
     * Set atendentes
     *
     * @param Sicoob\SiccadBundle\Entity\Atendentes $atendentes
     */
    public function setAtendentes(\Sicoob\SiccadBundle\Entity\Atendentes $atendentes)
    {
        $this->atendentes = $atendentes;
    }

    /**
     * Get atendentes
     *
     * @return Sicoob\SiccadBundle\Entity\Atendentes 
     */
    public function getAtendentes()
    {
        return $this->atendentes;
    }
}
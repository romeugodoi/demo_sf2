<?php

namespace Sicoob\SiccadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sicoob\SiccadBundle\Entity\Proponentes
 *
 * @ORM\Table(name="proponentes")
 * @ORM\Entity
 */
class Proponentes
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="proponentes_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var boolean $isConjuge
     *
     * @ORM\Column(name="is_conjuge", type="boolean", nullable=false)
     */
    private $isConjuge;

    /**
     * @var string $cpf
     *
     * @ORM\Column(name="cpf", type="string", length=15, nullable=false)
     */
    private $cpf;

    /**
     * @var string $rg
     *
     * @ORM\Column(name="rg", type="string", length=12, nullable=false)
     */
    private $rg;

    /**
     * @var string $orgaoExpeditor
     *
     * @ORM\Column(name="orgao_expeditor", type="string", nullable=true)
     */
    private $orgaoExpeditor;

    /**
     * @var date $dataEmissao
     *
     * @ORM\Column(name="data_emissao", type="date", nullable=true)
     */
    private $dataEmissao;

    /**
     * @var string $sexo
     *
     * @ORM\Column(name="sexo", type="string", length=255, nullable=false)
     */
    private $sexo;

    /**
     * @var date $dataNascimento
     *
     * @ORM\Column(name="data_nascimento", type="date", nullable=false)
     */
    private $dataNascimento;

    /**
     * @var string $estadoCivil
     *
     * @ORM\Column(name="estado_civil", type="string", length=255, nullable=false)
     */
    private $estadoCivil;

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
     * @var Profissoes
     *
     * @ORM\ManyToOne(targetEntity="Profissoes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="profissoes_id", referencedColumnName="id")
     * })
     */
    private $profissoes;

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
     * @var Naturalidades
     *
     * @ORM\ManyToOne(targetEntity="Naturalidades")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="naturalidades_id", referencedColumnName="id")
     * })
     */
    private $naturalidades;

    /**
     * @var Nacionalidades
     *
     * @ORM\ManyToOne(targetEntity="Nacionalidades")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="nacionalidades_id", referencedColumnName="id")
     * })
     */
    private $nacionalidades;

    /**
     * @var Enderecos
     *
     * @ORM\ManyToOne(targetEntity="Enderecos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="enderecos_id", referencedColumnName="id")
     * })
     */
    private $enderecos;



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
     * Set isConjuge
     *
     * @param boolean $isConjuge
     */
    public function setIsConjuge($isConjuge)
    {
        $this->isConjuge = $isConjuge;
    }

    /**
     * Get isConjuge
     *
     * @return boolean 
     */
    public function getIsConjuge()
    {
        return $this->isConjuge;
    }

    /**
     * Set cpf
     *
     * @param string $cpf
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    /**
     * Get cpf
     *
     * @return string 
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * Set rg
     *
     * @param string $rg
     */
    public function setRg($rg)
    {
        $this->rg = $rg;
    }

    /**
     * Get rg
     *
     * @return string 
     */
    public function getRg()
    {
        return $this->rg;
    }

    /**
     * Set orgaoExpeditor
     *
     * @param string $orgaoExpeditor
     */
    public function setOrgaoExpeditor($orgaoExpeditor)
    {
        $this->orgaoExpeditor = $orgaoExpeditor;
    }

    /**
     * Get orgaoExpeditor
     *
     * @return string 
     */
    public function getOrgaoExpeditor()
    {
        return $this->orgaoExpeditor;
    }

    /**
     * Set dataEmissao
     *
     * @param date $dataEmissao
     */
    public function setDataEmissao($dataEmissao)
    {
        $this->dataEmissao = $dataEmissao;
    }

    /**
     * Get dataEmissao
     *
     * @return date 
     */
    public function getDataEmissao()
    {
        return $this->dataEmissao;
    }

    /**
     * Set sexo
     *
     * @param string $sexo
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }

    /**
     * Get sexo
     *
     * @return string 
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set dataNascimento
     *
     * @param date $dataNascimento
     */
    public function setDataNascimento($dataNascimento)
    {
        $this->dataNascimento = $dataNascimento;
    }

    /**
     * Get dataNascimento
     *
     * @return date 
     */
    public function getDataNascimento()
    {
        return $this->dataNascimento;
    }

    /**
     * Set estadoCivil
     *
     * @param string $estadoCivil
     */
    public function setEstadoCivil($estadoCivil)
    {
        $this->estadoCivil = $estadoCivil;
    }

    /**
     * Get estadoCivil
     *
     * @return string 
     */
    public function getEstadoCivil()
    {
        return $this->estadoCivil;
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
     * Set profissoes
     *
     * @param Sicoob\SiccadBundle\Entity\Profissoes $profissoes
     */
    public function setProfissoes(\Sicoob\SiccadBundle\Entity\Profissoes $profissoes)
    {
        $this->profissoes = $profissoes;
    }

    /**
     * Get profissoes
     *
     * @return Sicoob\SiccadBundle\Entity\Profissoes 
     */
    public function getProfissoes()
    {
        return $this->profissoes;
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
     * Set naturalidades
     *
     * @param Sicoob\SiccadBundle\Entity\Naturalidades $naturalidades
     */
    public function setNaturalidades(\Sicoob\SiccadBundle\Entity\Naturalidades $naturalidades)
    {
        $this->naturalidades = $naturalidades;
    }

    /**
     * Get naturalidades
     *
     * @return Sicoob\SiccadBundle\Entity\Naturalidades 
     */
    public function getNaturalidades()
    {
        return $this->naturalidades;
    }

    /**
     * Set nacionalidades
     *
     * @param Sicoob\SiccadBundle\Entity\Nacionalidades $nacionalidades
     */
    public function setNacionalidades(\Sicoob\SiccadBundle\Entity\Nacionalidades $nacionalidades)
    {
        $this->nacionalidades = $nacionalidades;
    }

    /**
     * Get nacionalidades
     *
     * @return Sicoob\SiccadBundle\Entity\Nacionalidades 
     */
    public function getNacionalidades()
    {
        return $this->nacionalidades;
    }

    /**
     * Set enderecos
     *
     * @param Sicoob\SiccadBundle\Entity\Enderecos $enderecos
     */
    public function setEnderecos(\Sicoob\SiccadBundle\Entity\Enderecos $enderecos)
    {
        $this->enderecos = $enderecos;
    }

    /**
     * Get enderecos
     *
     * @return Sicoob\SiccadBundle\Entity\Enderecos 
     */
    public function getEnderecos()
    {
        return $this->enderecos;
    }
}
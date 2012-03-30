<?php

namespace Sicoob\SiccadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sicoob\SiccadBundle\Entity\PessoaFisica
 *
 * @ORM\Table(name="pessoa_fisica")
 * @ORM\Entity
 */
class PessoaFisica
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="pessoa_fisica_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $sexo
     *
     * @ORM\Column(name="sexo", type="string", length=255, nullable=false)
     */
    private $sexo;

    /**
     * @var date $dataNascimento
     *
     * @ORM\Column(name="data_nascimento", type="date", nullable=true)
     */
    private $dataNascimento;

    /**
     * @var string $cpf
     *
     * @ORM\Column(name="cpf", type="string", length=15, nullable=true)
     */
    private $cpf;

    /**
     * @var string $rg
     *
     * @ORM\Column(name="rg", type="string", length=12, nullable=true)
     */
    private $rg;

    /**
     * @var smallint $rgVia
     *
     * @ORM\Column(name="rg_via", type="smallint", nullable=true)
     */
    private $rgVia;

    /**
     * @var string $rgOrgaoExpeditor
     *
     * @ORM\Column(name="rg_orgao_expeditor", type="string", nullable=true)
     */
    private $rgOrgaoExpeditor;

    /**
     * @var date $rgDataEmissao
     *
     * @ORM\Column(name="rg_data_emissao", type="date", nullable=true)
     */
    private $rgDataEmissao;

    /**
     * @var string $rgUfEmissao
     *
     * @ORM\Column(name="rg_uf_emissao", type="string", nullable=true)
     */
    private $rgUfEmissao;

    /**
     * @var string $estadoCivil
     *
     * @ORM\Column(name="estado_civil", type="string", length=255, nullable=true)
     */
    private $estadoCivil;

    /**
     * @var string $nomePai
     *
     * @ORM\Column(name="nome_pai", type="string", length=150, nullable=true)
     */
    private $nomePai;

    /**
     * @var string $nomeMae
     *
     * @ORM\Column(name="nome_mae", type="string", length=150, nullable=true)
     */
    private $nomeMae;

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
     * @var SfGuardUser
     *
     * @ORM\ManyToOne(targetEntity="SfGuardUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

    /**
     * @var PessoaFisica
     *
     * @ORM\ManyToOne(targetEntity="PessoaFisica")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="root_id", referencedColumnName="id")
     * })
     */
    private $root;

    /**
     * @var Profissoes
     *
     * @ORM\ManyToOne(targetEntity="Profissoes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="profissao_id", referencedColumnName="id")
     * })
     */
    private $profissao;

    /**
     * @var Pessoa
     *
     * @ORM\ManyToOne(targetEntity="Pessoa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pessoa_id", referencedColumnName="id")
     * })
     */
    private $pessoa;

    /**
     * @var Naturalidades
     *
     * @ORM\ManyToOne(targetEntity="Naturalidades")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="naturalidade_id", referencedColumnName="id")
     * })
     */
    private $naturalidade;

    /**
     * @var Nacionalidades
     *
     * @ORM\ManyToOne(targetEntity="Nacionalidades")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="nacionalidade_id", referencedColumnName="id")
     * })
     */
    private $nacionalidade;



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
     * Set rgVia
     *
     * @param smallint $rgVia
     */
    public function setRgVia($rgVia)
    {
        $this->rgVia = $rgVia;
    }

    /**
     * Get rgVia
     *
     * @return smallint 
     */
    public function getRgVia()
    {
        return $this->rgVia;
    }

    /**
     * Set rgOrgaoExpeditor
     *
     * @param string $rgOrgaoExpeditor
     */
    public function setRgOrgaoExpeditor($rgOrgaoExpeditor)
    {
        $this->rgOrgaoExpeditor = $rgOrgaoExpeditor;
    }

    /**
     * Get rgOrgaoExpeditor
     *
     * @return string 
     */
    public function getRgOrgaoExpeditor()
    {
        return $this->rgOrgaoExpeditor;
    }

    /**
     * Set rgDataEmissao
     *
     * @param date $rgDataEmissao
     */
    public function setRgDataEmissao($rgDataEmissao)
    {
        $this->rgDataEmissao = $rgDataEmissao;
    }

    /**
     * Get rgDataEmissao
     *
     * @return date 
     */
    public function getRgDataEmissao()
    {
        return $this->rgDataEmissao;
    }

    /**
     * Set rgUfEmissao
     *
     * @param string $rgUfEmissao
     */
    public function setRgUfEmissao($rgUfEmissao)
    {
        $this->rgUfEmissao = $rgUfEmissao;
    }

    /**
     * Get rgUfEmissao
     *
     * @return string 
     */
    public function getRgUfEmissao()
    {
        return $this->rgUfEmissao;
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
     * Set nomePai
     *
     * @param string $nomePai
     */
    public function setNomePai($nomePai)
    {
        $this->nomePai = $nomePai;
    }

    /**
     * Get nomePai
     *
     * @return string 
     */
    public function getNomePai()
    {
        return $this->nomePai;
    }

    /**
     * Set nomeMae
     *
     * @param string $nomeMae
     */
    public function setNomeMae($nomeMae)
    {
        $this->nomeMae = $nomeMae;
    }

    /**
     * Get nomeMae
     *
     * @return string 
     */
    public function getNomeMae()
    {
        return $this->nomeMae;
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
     * Set user
     *
     * @param Sicoob\SiccadBundle\Entity\SfGuardUser $user
     */
    public function setUser(\Sicoob\SiccadBundle\Entity\SfGuardUser $user)
    {
        $this->user = $user;
    }

    /**
     * Get user
     *
     * @return Sicoob\SiccadBundle\Entity\SfGuardUser 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set root
     *
     * @param Sicoob\SiccadBundle\Entity\PessoaFisica $root
     */
    public function setRoot(\Sicoob\SiccadBundle\Entity\PessoaFisica $root)
    {
        $this->root = $root;
    }

    /**
     * Get root
     *
     * @return Sicoob\SiccadBundle\Entity\PessoaFisica 
     */
    public function getRoot()
    {
        return $this->root;
    }

    /**
     * Set profissao
     *
     * @param Sicoob\SiccadBundle\Entity\Profissoes $profissao
     */
    public function setProfissao(\Sicoob\SiccadBundle\Entity\Profissoes $profissao)
    {
        $this->profissao = $profissao;
    }

    /**
     * Get profissao
     *
     * @return Sicoob\SiccadBundle\Entity\Profissoes 
     */
    public function getProfissao()
    {
        return $this->profissao;
    }

    /**
     * Set pessoa
     *
     * @param Sicoob\SiccadBundle\Entity\Pessoa $pessoa
     */
    public function setPessoa(\Sicoob\SiccadBundle\Entity\Pessoa $pessoa)
    {
        $this->pessoa = $pessoa;
    }

    /**
     * Get pessoa
     *
     * @return Sicoob\SiccadBundle\Entity\Pessoa 
     */
    public function getPessoa()
    {
        return $this->pessoa;
    }

    /**
     * Set naturalidade
     *
     * @param Sicoob\SiccadBundle\Entity\Naturalidades $naturalidade
     */
    public function setNaturalidade(\Sicoob\SiccadBundle\Entity\Naturalidades $naturalidade)
    {
        $this->naturalidade = $naturalidade;
    }

    /**
     * Get naturalidade
     *
     * @return Sicoob\SiccadBundle\Entity\Naturalidades 
     */
    public function getNaturalidade()
    {
        return $this->naturalidade;
    }

    /**
     * Set nacionalidade
     *
     * @param Sicoob\SiccadBundle\Entity\Nacionalidades $nacionalidade
     */
    public function setNacionalidade(\Sicoob\SiccadBundle\Entity\Nacionalidades $nacionalidade)
    {
        $this->nacionalidade = $nacionalidade;
    }

    /**
     * Get nacionalidade
     *
     * @return Sicoob\SiccadBundle\Entity\Nacionalidades 
     */
    public function getNacionalidade()
    {
        return $this->nacionalidade;
    }
}
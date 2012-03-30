<?php

namespace Sicoob\SiccadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sicoob\SiccadBundle\Entity\PessoaJuridica
 *
 * @ORM\Table(name="pessoa_juridica")
 * @ORM\Entity
 */
class PessoaJuridica
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="pessoa_juridica_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $razaoSocial
     *
     * @ORM\Column(name="razao_social", type="string", length=100, nullable=false)
     */
    private $razaoSocial;

    /**
     * @var string $cnpj
     *
     * @ORM\Column(name="cnpj", type="string", length=20, nullable=false)
     */
    private $cnpj;

    /**
     * @var string $inscricaoEstadual
     *
     * @ORM\Column(name="inscricao_estadual", type="string", length=10, nullable=true)
     */
    private $inscricaoEstadual;

    /**
     * @var string $inscricaoMunicipal
     *
     * @ORM\Column(name="inscricao_municipal", type="string", length=10, nullable=true)
     */
    private $inscricaoMunicipal;

    /**
     * @var date $dataAbertura
     *
     * @ORM\Column(name="data_abertura", type="date", nullable=true)
     */
    private $dataAbertura;

    /**
     * @var date $dataEncerramento
     *
     * @ORM\Column(name="data_encerramento", type="date", nullable=true)
     */
    private $dataEncerramento;

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
     * @var Pessoa
     *
     * @ORM\ManyToOne(targetEntity="Pessoa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pessoa_id", referencedColumnName="id")
     * })
     */
    private $pessoa;

    /**
     * @var Enderecos
     *
     * @ORM\ManyToOne(targetEntity="Enderecos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="endereco_id", referencedColumnName="id")
     * })
     */
    private $endereco;



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
     * Set razaoSocial
     *
     * @param string $razaoSocial
     */
    public function setRazaoSocial($razaoSocial)
    {
        $this->razaoSocial = $razaoSocial;
    }

    /**
     * Get razaoSocial
     *
     * @return string 
     */
    public function getRazaoSocial()
    {
        return $this->razaoSocial;
    }

    /**
     * Set cnpj
     *
     * @param string $cnpj
     */
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
    }

    /**
     * Get cnpj
     *
     * @return string 
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }

    /**
     * Set inscricaoEstadual
     *
     * @param string $inscricaoEstadual
     */
    public function setInscricaoEstadual($inscricaoEstadual)
    {
        $this->inscricaoEstadual = $inscricaoEstadual;
    }

    /**
     * Get inscricaoEstadual
     *
     * @return string 
     */
    public function getInscricaoEstadual()
    {
        return $this->inscricaoEstadual;
    }

    /**
     * Set inscricaoMunicipal
     *
     * @param string $inscricaoMunicipal
     */
    public function setInscricaoMunicipal($inscricaoMunicipal)
    {
        $this->inscricaoMunicipal = $inscricaoMunicipal;
    }

    /**
     * Get inscricaoMunicipal
     *
     * @return string 
     */
    public function getInscricaoMunicipal()
    {
        return $this->inscricaoMunicipal;
    }

    /**
     * Set dataAbertura
     *
     * @param date $dataAbertura
     */
    public function setDataAbertura($dataAbertura)
    {
        $this->dataAbertura = $dataAbertura;
    }

    /**
     * Get dataAbertura
     *
     * @return date 
     */
    public function getDataAbertura()
    {
        return $this->dataAbertura;
    }

    /**
     * Set dataEncerramento
     *
     * @param date $dataEncerramento
     */
    public function setDataEncerramento($dataEncerramento)
    {
        $this->dataEncerramento = $dataEncerramento;
    }

    /**
     * Get dataEncerramento
     *
     * @return date 
     */
    public function getDataEncerramento()
    {
        return $this->dataEncerramento;
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
     * Set endereco
     *
     * @param Sicoob\SiccadBundle\Entity\Enderecos $endereco
     */
    public function setEndereco(\Sicoob\SiccadBundle\Entity\Enderecos $endereco)
    {
        $this->endereco = $endereco;
    }

    /**
     * Get endereco
     *
     * @return Sicoob\SiccadBundle\Entity\Enderecos 
     */
    public function getEndereco()
    {
        return $this->endereco;
    }
}
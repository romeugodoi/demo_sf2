<?php

namespace Sicoob\SiccadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sicoob\SiccadBundle\Entity\Colaboradores
 *
 * @ORM\Table(name="colaboradores")
 * @ORM\Entity
 */
class Colaboradores
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="colaboradores_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var integer $matricula
     *
     * @ORM\Column(name="matricula", type="integer", nullable=false)
     */
    private $matricula;

    /**
     * @var string $reservista
     *
     * @ORM\Column(name="reservista", type="string", length=10, nullable=true)
     */
    private $reservista;

    /**
     * @var string $tituloEleitor
     *
     * @ORM\Column(name="titulo_eleitor", type="string", length=12, nullable=true)
     */
    private $tituloEleitor;

    /**
     * @var string $secaoEleitoral
     *
     * @ORM\Column(name="secao_eleitoral", type="string", nullable=true)
     */
    private $secaoEleitoral;

    /**
     * @var string $zonaEleitoral
     *
     * @ORM\Column(name="zona_eleitoral", type="string", nullable=true)
     */
    private $zonaEleitoral;

    /**
     * @var string $ctps
     *
     * @ORM\Column(name="ctps", type="string", length=20, nullable=true)
     */
    private $ctps;

    /**
     * @var string $ctpsSerie
     *
     * @ORM\Column(name="ctps_serie", type="string", nullable=true)
     */
    private $ctpsSerie;

    /**
     * @var string $ctpsUfEmissao
     *
     * @ORM\Column(name="ctps_uf_emissao", type="string", nullable=true)
     */
    private $ctpsUfEmissao;

    /**
     * @var string $pis
     *
     * @ORM\Column(name="pis", type="string", length=10, nullable=true)
     */
    private $pis;

    /**
     * @var string $habilitacao
     *
     * @ORM\Column(name="habilitacao", type="string", length=11, nullable=true)
     */
    private $habilitacao;

    /**
     * @var string $habilitacaoCategoria
     *
     * @ORM\Column(name="habilitacao_categoria", type="string", nullable=true)
     */
    private $habilitacaoCategoria;

    /**
     * @var date $habilitacaoValidade
     *
     * @ORM\Column(name="habilitacao_validade", type="date", nullable=true)
     */
    private $habilitacaoValidade;

    /**
     * @var string $raca
     *
     * @ORM\Column(name="raca", type="string", length=255, nullable=true)
     */
    private $raca;

    /**
     * @var boolean $estrangeiro
     *
     * @ORM\Column(name="estrangeiro", type="boolean", nullable=false)
     */
    private $estrangeiro;

    /**
     * @var bigint $anoChegada
     *
     * @ORM\Column(name="ano_chegada", type="bigint", nullable=true)
     */
    private $anoChegada;

    /**
     * @var string $passaporte
     *
     * @ORM\Column(name="passaporte", type="string", length=20, nullable=true)
     */
    private $passaporte;

    /**
     * @var string $situacao
     *
     * @ORM\Column(name="situacao", type="string", length=255, nullable=false)
     */
    private $situacao;

    /**
     * @var date $dataAdmissao
     *
     * @ORM\Column(name="data_admissao", type="date", nullable=true)
     */
    private $dataAdmissao;

    /**
     * @var date $dataRecisao
     *
     * @ORM\Column(name="data_recisao", type="date", nullable=true)
     */
    private $dataRecisao;

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
     * @var PessoaFisica
     *
     * @ORM\ManyToOne(targetEntity="PessoaFisica")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pessoas_fisica_id", referencedColumnName="id")
     * })
     */
    private $pessoasFisica;

    /**
     * @var CargosImobiliarias
     *
     * @ORM\ManyToOne(targetEntity="CargosImobiliarias")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cargos_imobiliarias_id", referencedColumnName="id")
     * })
     */
    private $cargosImobiliarias;



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
     * Set matricula
     *
     * @param integer $matricula
     */
    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;
    }

    /**
     * Get matricula
     *
     * @return integer 
     */
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * Set reservista
     *
     * @param string $reservista
     */
    public function setReservista($reservista)
    {
        $this->reservista = $reservista;
    }

    /**
     * Get reservista
     *
     * @return string 
     */
    public function getReservista()
    {
        return $this->reservista;
    }

    /**
     * Set tituloEleitor
     *
     * @param string $tituloEleitor
     */
    public function setTituloEleitor($tituloEleitor)
    {
        $this->tituloEleitor = $tituloEleitor;
    }

    /**
     * Get tituloEleitor
     *
     * @return string 
     */
    public function getTituloEleitor()
    {
        return $this->tituloEleitor;
    }

    /**
     * Set secaoEleitoral
     *
     * @param string $secaoEleitoral
     */
    public function setSecaoEleitoral($secaoEleitoral)
    {
        $this->secaoEleitoral = $secaoEleitoral;
    }

    /**
     * Get secaoEleitoral
     *
     * @return string 
     */
    public function getSecaoEleitoral()
    {
        return $this->secaoEleitoral;
    }

    /**
     * Set zonaEleitoral
     *
     * @param string $zonaEleitoral
     */
    public function setZonaEleitoral($zonaEleitoral)
    {
        $this->zonaEleitoral = $zonaEleitoral;
    }

    /**
     * Get zonaEleitoral
     *
     * @return string 
     */
    public function getZonaEleitoral()
    {
        return $this->zonaEleitoral;
    }

    /**
     * Set ctps
     *
     * @param string $ctps
     */
    public function setCtps($ctps)
    {
        $this->ctps = $ctps;
    }

    /**
     * Get ctps
     *
     * @return string 
     */
    public function getCtps()
    {
        return $this->ctps;
    }

    /**
     * Set ctpsSerie
     *
     * @param string $ctpsSerie
     */
    public function setCtpsSerie($ctpsSerie)
    {
        $this->ctpsSerie = $ctpsSerie;
    }

    /**
     * Get ctpsSerie
     *
     * @return string 
     */
    public function getCtpsSerie()
    {
        return $this->ctpsSerie;
    }

    /**
     * Set ctpsUfEmissao
     *
     * @param string $ctpsUfEmissao
     */
    public function setCtpsUfEmissao($ctpsUfEmissao)
    {
        $this->ctpsUfEmissao = $ctpsUfEmissao;
    }

    /**
     * Get ctpsUfEmissao
     *
     * @return string 
     */
    public function getCtpsUfEmissao()
    {
        return $this->ctpsUfEmissao;
    }

    /**
     * Set pis
     *
     * @param string $pis
     */
    public function setPis($pis)
    {
        $this->pis = $pis;
    }

    /**
     * Get pis
     *
     * @return string 
     */
    public function getPis()
    {
        return $this->pis;
    }

    /**
     * Set habilitacao
     *
     * @param string $habilitacao
     */
    public function setHabilitacao($habilitacao)
    {
        $this->habilitacao = $habilitacao;
    }

    /**
     * Get habilitacao
     *
     * @return string 
     */
    public function getHabilitacao()
    {
        return $this->habilitacao;
    }

    /**
     * Set habilitacaoCategoria
     *
     * @param string $habilitacaoCategoria
     */
    public function setHabilitacaoCategoria($habilitacaoCategoria)
    {
        $this->habilitacaoCategoria = $habilitacaoCategoria;
    }

    /**
     * Get habilitacaoCategoria
     *
     * @return string 
     */
    public function getHabilitacaoCategoria()
    {
        return $this->habilitacaoCategoria;
    }

    /**
     * Set habilitacaoValidade
     *
     * @param date $habilitacaoValidade
     */
    public function setHabilitacaoValidade($habilitacaoValidade)
    {
        $this->habilitacaoValidade = $habilitacaoValidade;
    }

    /**
     * Get habilitacaoValidade
     *
     * @return date 
     */
    public function getHabilitacaoValidade()
    {
        return $this->habilitacaoValidade;
    }

    /**
     * Set raca
     *
     * @param string $raca
     */
    public function setRaca($raca)
    {
        $this->raca = $raca;
    }

    /**
     * Get raca
     *
     * @return string 
     */
    public function getRaca()
    {
        return $this->raca;
    }

    /**
     * Set estrangeiro
     *
     * @param boolean $estrangeiro
     */
    public function setEstrangeiro($estrangeiro)
    {
        $this->estrangeiro = $estrangeiro;
    }

    /**
     * Get estrangeiro
     *
     * @return boolean 
     */
    public function getEstrangeiro()
    {
        return $this->estrangeiro;
    }

    /**
     * Set anoChegada
     *
     * @param bigint $anoChegada
     */
    public function setAnoChegada($anoChegada)
    {
        $this->anoChegada = $anoChegada;
    }

    /**
     * Get anoChegada
     *
     * @return bigint 
     */
    public function getAnoChegada()
    {
        return $this->anoChegada;
    }

    /**
     * Set passaporte
     *
     * @param string $passaporte
     */
    public function setPassaporte($passaporte)
    {
        $this->passaporte = $passaporte;
    }

    /**
     * Get passaporte
     *
     * @return string 
     */
    public function getPassaporte()
    {
        return $this->passaporte;
    }

    /**
     * Set situacao
     *
     * @param string $situacao
     */
    public function setSituacao($situacao)
    {
        $this->situacao = $situacao;
    }

    /**
     * Get situacao
     *
     * @return string 
     */
    public function getSituacao()
    {
        return $this->situacao;
    }

    /**
     * Set dataAdmissao
     *
     * @param date $dataAdmissao
     */
    public function setDataAdmissao($dataAdmissao)
    {
        $this->dataAdmissao = $dataAdmissao;
    }

    /**
     * Get dataAdmissao
     *
     * @return date 
     */
    public function getDataAdmissao()
    {
        return $this->dataAdmissao;
    }

    /**
     * Set dataRecisao
     *
     * @param date $dataRecisao
     */
    public function setDataRecisao($dataRecisao)
    {
        $this->dataRecisao = $dataRecisao;
    }

    /**
     * Get dataRecisao
     *
     * @return date 
     */
    public function getDataRecisao()
    {
        return $this->dataRecisao;
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
     * Set pessoasFisica
     *
     * @param Sicoob\SiccadBundle\Entity\PessoaFisica $pessoasFisica
     */
    public function setPessoasFisica(\Sicoob\SiccadBundle\Entity\PessoaFisica $pessoasFisica)
    {
        $this->pessoasFisica = $pessoasFisica;
    }

    /**
     * Get pessoasFisica
     *
     * @return Sicoob\SiccadBundle\Entity\PessoaFisica 
     */
    public function getPessoasFisica()
    {
        return $this->pessoasFisica;
    }

    /**
     * Set cargosImobiliarias
     *
     * @param Sicoob\SiccadBundle\Entity\CargosImobiliarias $cargosImobiliarias
     */
    public function setCargosImobiliarias(\Sicoob\SiccadBundle\Entity\CargosImobiliarias $cargosImobiliarias)
    {
        $this->cargosImobiliarias = $cargosImobiliarias;
    }

    /**
     * Get cargosImobiliarias
     *
     * @return Sicoob\SiccadBundle\Entity\CargosImobiliarias 
     */
    public function getCargosImobiliarias()
    {
        return $this->cargosImobiliarias;
    }
}
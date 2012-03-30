<?php

namespace Sicoob\SiccadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sicoob\SiccadBundle\Entity\Imoveis
 *
 * @ORM\Table(name="imoveis")
 * @ORM\Entity
 */
class Imoveis
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="imoveis_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var integer $unidadeAutonoma
     *
     * @ORM\Column(name="unidade_autonoma", type="integer", nullable=true)
     */
    private $unidadeAutonoma;

    /**
     * @var integer $qtdQuartos
     *
     * @ORM\Column(name="qtd_quartos", type="integer", nullable=true)
     */
    private $qtdQuartos;

    /**
     * @var integer $qtdSuites
     *
     * @ORM\Column(name="qtd_suites", type="integer", nullable=true)
     */
    private $qtdSuites;

    /**
     * @var integer $qtdBanheiros
     *
     * @ORM\Column(name="qtd_banheiros", type="integer", nullable=true)
     */
    private $qtdBanheiros;

    /**
     * @var integer $qtdGaragens
     *
     * @ORM\Column(name="qtd_garagens", type="integer", nullable=true)
     */
    private $qtdGaragens;

    /**
     * @var boolean $escaninho
     *
     * @ORM\Column(name="escaninho", type="boolean", nullable=false)
     */
    private $escaninho;

    /**
     * @var integer $qtdEscaninhos
     *
     * @ORM\Column(name="qtd_escaninhos", type="integer", nullable=false)
     */
    private $qtdEscaninhos;

    /**
     * @var decimal $valorCondominio
     *
     * @ORM\Column(name="valor_condominio", type="decimal", nullable=false)
     */
    private $valorCondominio;

    /**
     * @var decimal $valorImovel
     *
     * @ORM\Column(name="valor_imovel", type="decimal", nullable=false)
     */
    private $valorImovel;

    /**
     * @var decimal $areaPrivativa
     *
     * @ORM\Column(name="area_privativa", type="decimal", nullable=false)
     */
    private $areaPrivativa;

    /**
     * @var decimal $areaComum
     *
     * @ORM\Column(name="area_comum", type="decimal", nullable=false)
     */
    private $areaComum;

    /**
     * @var decimal $areaTerreno
     *
     * @ORM\Column(name="area_terreno", type="decimal", nullable=false)
     */
    private $areaTerreno;

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
     * @var TiposImoveis
     *
     * @ORM\ManyToOne(targetEntity="TiposImoveis")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipos_imoveis_id", referencedColumnName="id")
     * })
     */
    private $tiposImoveis;

    /**
     * @var SituacoesImoveis
     *
     * @ORM\ManyToOne(targetEntity="SituacoesImoveis")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="situacoes_id", referencedColumnName="id")
     * })
     */
    private $situacoes;

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
     * @var Corretores
     *
     * @ORM\ManyToOne(targetEntity="Corretores")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="corretores_id", referencedColumnName="id")
     * })
     */
    private $corretores;

    /**
     * @var CategoriasImoveis
     *
     * @ORM\ManyToOne(targetEntity="CategoriasImoveis")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="categorias_imoveis_id", referencedColumnName="id")
     * })
     */
    private $categoriasImoveis;



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
     * Set unidadeAutonoma
     *
     * @param integer $unidadeAutonoma
     */
    public function setUnidadeAutonoma($unidadeAutonoma)
    {
        $this->unidadeAutonoma = $unidadeAutonoma;
    }

    /**
     * Get unidadeAutonoma
     *
     * @return integer 
     */
    public function getUnidadeAutonoma()
    {
        return $this->unidadeAutonoma;
    }

    /**
     * Set qtdQuartos
     *
     * @param integer $qtdQuartos
     */
    public function setQtdQuartos($qtdQuartos)
    {
        $this->qtdQuartos = $qtdQuartos;
    }

    /**
     * Get qtdQuartos
     *
     * @return integer 
     */
    public function getQtdQuartos()
    {
        return $this->qtdQuartos;
    }

    /**
     * Set qtdSuites
     *
     * @param integer $qtdSuites
     */
    public function setQtdSuites($qtdSuites)
    {
        $this->qtdSuites = $qtdSuites;
    }

    /**
     * Get qtdSuites
     *
     * @return integer 
     */
    public function getQtdSuites()
    {
        return $this->qtdSuites;
    }

    /**
     * Set qtdBanheiros
     *
     * @param integer $qtdBanheiros
     */
    public function setQtdBanheiros($qtdBanheiros)
    {
        $this->qtdBanheiros = $qtdBanheiros;
    }

    /**
     * Get qtdBanheiros
     *
     * @return integer 
     */
    public function getQtdBanheiros()
    {
        return $this->qtdBanheiros;
    }

    /**
     * Set qtdGaragens
     *
     * @param integer $qtdGaragens
     */
    public function setQtdGaragens($qtdGaragens)
    {
        $this->qtdGaragens = $qtdGaragens;
    }

    /**
     * Get qtdGaragens
     *
     * @return integer 
     */
    public function getQtdGaragens()
    {
        return $this->qtdGaragens;
    }

    /**
     * Set escaninho
     *
     * @param boolean $escaninho
     */
    public function setEscaninho($escaninho)
    {
        $this->escaninho = $escaninho;
    }

    /**
     * Get escaninho
     *
     * @return boolean 
     */
    public function getEscaninho()
    {
        return $this->escaninho;
    }

    /**
     * Set qtdEscaninhos
     *
     * @param integer $qtdEscaninhos
     */
    public function setQtdEscaninhos($qtdEscaninhos)
    {
        $this->qtdEscaninhos = $qtdEscaninhos;
    }

    /**
     * Get qtdEscaninhos
     *
     * @return integer 
     */
    public function getQtdEscaninhos()
    {
        return $this->qtdEscaninhos;
    }

    /**
     * Set valorCondominio
     *
     * @param decimal $valorCondominio
     */
    public function setValorCondominio($valorCondominio)
    {
        $this->valorCondominio = $valorCondominio;
    }

    /**
     * Get valorCondominio
     *
     * @return decimal 
     */
    public function getValorCondominio()
    {
        return $this->valorCondominio;
    }

    /**
     * Set valorImovel
     *
     * @param decimal $valorImovel
     */
    public function setValorImovel($valorImovel)
    {
        $this->valorImovel = $valorImovel;
    }

    /**
     * Get valorImovel
     *
     * @return decimal 
     */
    public function getValorImovel()
    {
        return $this->valorImovel;
    }

    /**
     * Set areaPrivativa
     *
     * @param decimal $areaPrivativa
     */
    public function setAreaPrivativa($areaPrivativa)
    {
        $this->areaPrivativa = $areaPrivativa;
    }

    /**
     * Get areaPrivativa
     *
     * @return decimal 
     */
    public function getAreaPrivativa()
    {
        return $this->areaPrivativa;
    }

    /**
     * Set areaComum
     *
     * @param decimal $areaComum
     */
    public function setAreaComum($areaComum)
    {
        $this->areaComum = $areaComum;
    }

    /**
     * Get areaComum
     *
     * @return decimal 
     */
    public function getAreaComum()
    {
        return $this->areaComum;
    }

    /**
     * Set areaTerreno
     *
     * @param decimal $areaTerreno
     */
    public function setAreaTerreno($areaTerreno)
    {
        $this->areaTerreno = $areaTerreno;
    }

    /**
     * Get areaTerreno
     *
     * @return decimal 
     */
    public function getAreaTerreno()
    {
        return $this->areaTerreno;
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
     * Set situacoes
     *
     * @param Sicoob\SiccadBundle\Entity\SituacoesImoveis $situacoes
     */
    public function setSituacoes(\Sicoob\SiccadBundle\Entity\SituacoesImoveis $situacoes)
    {
        $this->situacoes = $situacoes;
    }

    /**
     * Get situacoes
     *
     * @return Sicoob\SiccadBundle\Entity\SituacoesImoveis 
     */
    public function getSituacoes()
    {
        return $this->situacoes;
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
     * Set categoriasImoveis
     *
     * @param Sicoob\SiccadBundle\Entity\CategoriasImoveis $categoriasImoveis
     */
    public function setCategoriasImoveis(\Sicoob\SiccadBundle\Entity\CategoriasImoveis $categoriasImoveis)
    {
        $this->categoriasImoveis = $categoriasImoveis;
    }

    /**
     * Get categoriasImoveis
     *
     * @return Sicoob\SiccadBundle\Entity\CategoriasImoveis 
     */
    public function getCategoriasImoveis()
    {
        return $this->categoriasImoveis;
    }
}
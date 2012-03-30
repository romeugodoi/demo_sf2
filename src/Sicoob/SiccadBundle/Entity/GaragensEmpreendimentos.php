<?php

namespace Sicoob\SiccadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sicoob\SiccadBundle\Entity\GaragensEmpreendimentos
 *
 * @ORM\Table(name="garagens_empreendimentos")
 * @ORM\Entity
 */
class GaragensEmpreendimentos
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="garagens_empreendimentos_id_seq", allocationSize="1", initialValue="1")
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
     * @var TiposGaragens
     *
     * @ORM\ManyToOne(targetEntity="TiposGaragens")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipos_garagens_id", referencedColumnName="id")
     * })
     */
    private $tiposGaragens;

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
     * Set tiposGaragens
     *
     * @param Sicoob\SiccadBundle\Entity\TiposGaragens $tiposGaragens
     */
    public function setTiposGaragens(\Sicoob\SiccadBundle\Entity\TiposGaragens $tiposGaragens)
    {
        $this->tiposGaragens = $tiposGaragens;
    }

    /**
     * Get tiposGaragens
     *
     * @return Sicoob\SiccadBundle\Entity\TiposGaragens 
     */
    public function getTiposGaragens()
    {
        return $this->tiposGaragens;
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
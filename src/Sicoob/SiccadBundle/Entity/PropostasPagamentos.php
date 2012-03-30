<?php

namespace Sicoob\SiccadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sicoob\SiccadBundle\Entity\PropostasPagamentos
 *
 * @ORM\Table(name="propostas_pagamentos")
 * @ORM\Entity
 */
class PropostasPagamentos
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="propostas_pagamentos_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $correcoes
     *
     * @ORM\Column(name="correcoes", type="string", length=255, nullable=false)
     */
    private $correcoes;

    /**
     * @var date $dataVencimento
     *
     * @ORM\Column(name="data_vencimento", type="date", nullable=true)
     */
    private $dataVencimento;

    /**
     * @var integer $qtdVezes
     *
     * @ORM\Column(name="qtd_vezes", type="integer", nullable=false)
     */
    private $qtdVezes;

    /**
     * @var decimal $valor
     *
     * @ORM\Column(name="valor", type="decimal", nullable=false)
     */
    private $valor;

    /**
     * @var TiposPagamentos
     *
     * @ORM\ManyToOne(targetEntity="TiposPagamentos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipos_pagamentos_id", referencedColumnName="id")
     * })
     */
    private $tiposPagamentos;

    /**
     * @var Propostas
     *
     * @ORM\ManyToOne(targetEntity="Propostas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="propostas_id", referencedColumnName="id")
     * })
     */
    private $propostas;



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
     * Set correcoes
     *
     * @param string $correcoes
     */
    public function setCorrecoes($correcoes)
    {
        $this->correcoes = $correcoes;
    }

    /**
     * Get correcoes
     *
     * @return string 
     */
    public function getCorrecoes()
    {
        return $this->correcoes;
    }

    /**
     * Set dataVencimento
     *
     * @param date $dataVencimento
     */
    public function setDataVencimento($dataVencimento)
    {
        $this->dataVencimento = $dataVencimento;
    }

    /**
     * Get dataVencimento
     *
     * @return date 
     */
    public function getDataVencimento()
    {
        return $this->dataVencimento;
    }

    /**
     * Set qtdVezes
     *
     * @param integer $qtdVezes
     */
    public function setQtdVezes($qtdVezes)
    {
        $this->qtdVezes = $qtdVezes;
    }

    /**
     * Get qtdVezes
     *
     * @return integer 
     */
    public function getQtdVezes()
    {
        return $this->qtdVezes;
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
     * Set tiposPagamentos
     *
     * @param Sicoob\SiccadBundle\Entity\TiposPagamentos $tiposPagamentos
     */
    public function setTiposPagamentos(\Sicoob\SiccadBundle\Entity\TiposPagamentos $tiposPagamentos)
    {
        $this->tiposPagamentos = $tiposPagamentos;
    }

    /**
     * Get tiposPagamentos
     *
     * @return Sicoob\SiccadBundle\Entity\TiposPagamentos 
     */
    public function getTiposPagamentos()
    {
        return $this->tiposPagamentos;
    }

    /**
     * Set propostas
     *
     * @param Sicoob\SiccadBundle\Entity\Propostas $propostas
     */
    public function setPropostas(\Sicoob\SiccadBundle\Entity\Propostas $propostas)
    {
        $this->propostas = $propostas;
    }

    /**
     * Get propostas
     *
     * @return Sicoob\SiccadBundle\Entity\Propostas 
     */
    public function getPropostas()
    {
        return $this->propostas;
    }
}
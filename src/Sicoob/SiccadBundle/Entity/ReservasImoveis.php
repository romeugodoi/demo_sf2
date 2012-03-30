<?php

namespace Sicoob\SiccadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sicoob\SiccadBundle\Entity\ReservasImoveis
 *
 * @ORM\Table(name="reservas_imoveis")
 * @ORM\Entity
 */
class ReservasImoveis
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="reservas_imoveis_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $tipoReserva
     *
     * @ORM\Column(name="tipo_reserva", type="string", length=255, nullable=false)
     */
    private $tipoReserva;

    /**
     * @var date $dataInicio
     *
     * @ORM\Column(name="data_inicio", type="date", nullable=false)
     */
    private $dataInicio;

    /**
     * @var date $dataFim
     *
     * @ORM\Column(name="data_fim", type="date", nullable=false)
     */
    private $dataFim;

    /**
     * @var date $dataReservado
     *
     * @ORM\Column(name="data_reservado", type="date", nullable=true)
     */
    private $dataReservado;

    /**
     * @var date $dataVendido
     *
     * @ORM\Column(name="data_vendido", type="date", nullable=true)
     */
    private $dataVendido;

    /**
     * @var string $situacao
     *
     * @ORM\Column(name="situacao", type="string", length=255, nullable=false)
     */
    private $situacao;

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
     * @var Incorporadoras
     *
     * @ORM\ManyToOne(targetEntity="Incorporadoras")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="incorporadoras_id", referencedColumnName="id")
     * })
     */
    private $incorporadoras;

    /**
     * @var Imoveis
     *
     * @ORM\ManyToOne(targetEntity="Imoveis")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="imoveis_id", referencedColumnName="id")
     * })
     */
    private $imoveis;

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
     * Set tipoReserva
     *
     * @param string $tipoReserva
     */
    public function setTipoReserva($tipoReserva)
    {
        $this->tipoReserva = $tipoReserva;
    }

    /**
     * Get tipoReserva
     *
     * @return string 
     */
    public function getTipoReserva()
    {
        return $this->tipoReserva;
    }

    /**
     * Set dataInicio
     *
     * @param date $dataInicio
     */
    public function setDataInicio($dataInicio)
    {
        $this->dataInicio = $dataInicio;
    }

    /**
     * Get dataInicio
     *
     * @return date 
     */
    public function getDataInicio()
    {
        return $this->dataInicio;
    }

    /**
     * Set dataFim
     *
     * @param date $dataFim
     */
    public function setDataFim($dataFim)
    {
        $this->dataFim = $dataFim;
    }

    /**
     * Get dataFim
     *
     * @return date 
     */
    public function getDataFim()
    {
        return $this->dataFim;
    }

    /**
     * Set dataReservado
     *
     * @param date $dataReservado
     */
    public function setDataReservado($dataReservado)
    {
        $this->dataReservado = $dataReservado;
    }

    /**
     * Get dataReservado
     *
     * @return date 
     */
    public function getDataReservado()
    {
        return $this->dataReservado;
    }

    /**
     * Set dataVendido
     *
     * @param date $dataVendido
     */
    public function setDataVendido($dataVendido)
    {
        $this->dataVendido = $dataVendido;
    }

    /**
     * Get dataVendido
     *
     * @return date 
     */
    public function getDataVendido()
    {
        return $this->dataVendido;
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
     * Set incorporadoras
     *
     * @param Sicoob\SiccadBundle\Entity\Incorporadoras $incorporadoras
     */
    public function setIncorporadoras(\Sicoob\SiccadBundle\Entity\Incorporadoras $incorporadoras)
    {
        $this->incorporadoras = $incorporadoras;
    }

    /**
     * Get incorporadoras
     *
     * @return Sicoob\SiccadBundle\Entity\Incorporadoras 
     */
    public function getIncorporadoras()
    {
        return $this->incorporadoras;
    }

    /**
     * Set imoveis
     *
     * @param Sicoob\SiccadBundle\Entity\Imoveis $imoveis
     */
    public function setImoveis(\Sicoob\SiccadBundle\Entity\Imoveis $imoveis)
    {
        $this->imoveis = $imoveis;
    }

    /**
     * Get imoveis
     *
     * @return Sicoob\SiccadBundle\Entity\Imoveis 
     */
    public function getImoveis()
    {
        return $this->imoveis;
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
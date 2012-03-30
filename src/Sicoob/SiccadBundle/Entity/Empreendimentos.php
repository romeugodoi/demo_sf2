<?php

namespace Sicoob\SiccadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sicoob\SiccadBundle\Entity\Empreendimentos
 *
 * @ORM\Table(name="empreendimentos")
 * @ORM\Entity
 */
class Empreendimentos
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="empreendimentos_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $nomeEmpreendimento
     *
     * @ORM\Column(name="nome_empreendimento", type="string", length=100, nullable=false)
     */
    private $nomeEmpreendimento;

    /**
     * @var string $ri
     *
     * @ORM\Column(name="ri", type="string", length=20, nullable=false)
     */
    private $ri;

    /**
     * @var date $dataInicioObra
     *
     * @ORM\Column(name="data_inicio_obra", type="date", nullable=true)
     */
    private $dataInicioObra;

    /**
     * @var date $dataLancamento
     *
     * @ORM\Column(name="data_lancamento", type="date", nullable=true)
     */
    private $dataLancamento;

    /**
     * @var date $dataEntrega
     *
     * @ORM\Column(name="data_entrega", type="date", nullable=true)
     */
    private $dataEntrega;

    /**
     * @var integer $periodoInicialReserva
     *
     * @ORM\Column(name="periodo_inicial_reserva", type="integer", nullable=false)
     */
    private $periodoInicialReserva;

    /**
     * @var string $logo
     *
     * @ORM\Column(name="logo", type="string", length=255, nullable=true)
     */
    private $logo;

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
     * @var PessoaJuridica
     *
     * @ORM\ManyToOne(targetEntity="PessoaJuridica")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pessoas_juridica_id", referencedColumnName="id")
     * })
     */
    private $pessoasJuridica;



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
     * Set nomeEmpreendimento
     *
     * @param string $nomeEmpreendimento
     */
    public function setNomeEmpreendimento($nomeEmpreendimento)
    {
        $this->nomeEmpreendimento = $nomeEmpreendimento;
    }

    /**
     * Get nomeEmpreendimento
     *
     * @return string 
     */
    public function getNomeEmpreendimento()
    {
        return $this->nomeEmpreendimento;
    }

    /**
     * Set ri
     *
     * @param string $ri
     */
    public function setRi($ri)
    {
        $this->ri = $ri;
    }

    /**
     * Get ri
     *
     * @return string 
     */
    public function getRi()
    {
        return $this->ri;
    }

    /**
     * Set dataInicioObra
     *
     * @param date $dataInicioObra
     */
    public function setDataInicioObra($dataInicioObra)
    {
        $this->dataInicioObra = $dataInicioObra;
    }

    /**
     * Get dataInicioObra
     *
     * @return date 
     */
    public function getDataInicioObra()
    {
        return $this->dataInicioObra;
    }

    /**
     * Set dataLancamento
     *
     * @param date $dataLancamento
     */
    public function setDataLancamento($dataLancamento)
    {
        $this->dataLancamento = $dataLancamento;
    }

    /**
     * Get dataLancamento
     *
     * @return date 
     */
    public function getDataLancamento()
    {
        return $this->dataLancamento;
    }

    /**
     * Set dataEntrega
     *
     * @param date $dataEntrega
     */
    public function setDataEntrega($dataEntrega)
    {
        $this->dataEntrega = $dataEntrega;
    }

    /**
     * Get dataEntrega
     *
     * @return date 
     */
    public function getDataEntrega()
    {
        return $this->dataEntrega;
    }

    /**
     * Set periodoInicialReserva
     *
     * @param integer $periodoInicialReserva
     */
    public function setPeriodoInicialReserva($periodoInicialReserva)
    {
        $this->periodoInicialReserva = $periodoInicialReserva;
    }

    /**
     * Get periodoInicialReserva
     *
     * @return integer 
     */
    public function getPeriodoInicialReserva()
    {
        return $this->periodoInicialReserva;
    }

    /**
     * Set logo
     *
     * @param string $logo
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;
    }

    /**
     * Get logo
     *
     * @return string 
     */
    public function getLogo()
    {
        return $this->logo;
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
     * Set pessoasJuridica
     *
     * @param Sicoob\SiccadBundle\Entity\PessoaJuridica $pessoasJuridica
     */
    public function setPessoasJuridica(\Sicoob\SiccadBundle\Entity\PessoaJuridica $pessoasJuridica)
    {
        $this->pessoasJuridica = $pessoasJuridica;
    }

    /**
     * Get pessoasJuridica
     *
     * @return Sicoob\SiccadBundle\Entity\PessoaJuridica 
     */
    public function getPessoasJuridica()
    {
        return $this->pessoasJuridica;
    }
}
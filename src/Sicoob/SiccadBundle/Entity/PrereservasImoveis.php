<?php

namespace Sicoob\SiccadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sicoob\SiccadBundle\Entity\PrereservasImoveis
 *
 * @ORM\Table(name="prereservas_imoveis")
 * @ORM\Entity
 */
class PrereservasImoveis
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="prereservas_imoveis_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var datetime $dataInicio
     *
     * @ORM\Column(name="data_inicio", type="datetime", nullable=false)
     */
    private $dataInicio;

    /**
     * @var datetime $dataFim
     *
     * @ORM\Column(name="data_fim", type="datetime", nullable=false)
     */
    private $dataFim;

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
     * @var Empreendimentos
     *
     * @ORM\ManyToOne(targetEntity="Empreendimentos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="empreendimentos_id", referencedColumnName="id")
     * })
     */
    private $empreendimentos;

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
     * @var Atendimentos
     *
     * @ORM\ManyToOne(targetEntity="Atendimentos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="atendimentos_id", referencedColumnName="id")
     * })
     */
    private $atendimentos;

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
     * Set dataInicio
     *
     * @param datetime $dataInicio
     */
    public function setDataInicio($dataInicio)
    {
        $this->dataInicio = $dataInicio;
    }

    /**
     * Get dataInicio
     *
     * @return datetime 
     */
    public function getDataInicio()
    {
        return $this->dataInicio;
    }

    /**
     * Set dataFim
     *
     * @param datetime $dataFim
     */
    public function setDataFim($dataFim)
    {
        $this->dataFim = $dataFim;
    }

    /**
     * Get dataFim
     *
     * @return datetime 
     */
    public function getDataFim()
    {
        return $this->dataFim;
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
     * Set atendimentos
     *
     * @param Sicoob\SiccadBundle\Entity\Atendimentos $atendimentos
     */
    public function setAtendimentos(\Sicoob\SiccadBundle\Entity\Atendimentos $atendimentos)
    {
        $this->atendimentos = $atendimentos;
    }

    /**
     * Get atendimentos
     *
     * @return Sicoob\SiccadBundle\Entity\Atendimentos 
     */
    public function getAtendimentos()
    {
        return $this->atendimentos;
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
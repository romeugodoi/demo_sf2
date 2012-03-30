<?php

namespace Sicoob\SiccadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sicoob\SiccadBundle\Entity\ReservasLogSituacao
 *
 * @ORM\Table(name="reservas_log_situacao")
 * @ORM\Entity
 */
class ReservasLogSituacao
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="reservas_log_situacao_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $situacao
     *
     * @ORM\Column(name="situacao", type="string", length=2, nullable=false)
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
     * @var SfGuardUser
     *
     * @ORM\ManyToOne(targetEntity="SfGuardUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

    /**
     * @var ReservasImoveis
     *
     * @ORM\ManyToOne(targetEntity="ReservasImoveis")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reservas_imoveis_id", referencedColumnName="id")
     * })
     */
    private $reservasImoveis;



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
     * Set reservasImoveis
     *
     * @param Sicoob\SiccadBundle\Entity\ReservasImoveis $reservasImoveis
     */
    public function setReservasImoveis(\Sicoob\SiccadBundle\Entity\ReservasImoveis $reservasImoveis)
    {
        $this->reservasImoveis = $reservasImoveis;
    }

    /**
     * Get reservasImoveis
     *
     * @return Sicoob\SiccadBundle\Entity\ReservasImoveis 
     */
    public function getReservasImoveis()
    {
        return $this->reservasImoveis;
    }
}
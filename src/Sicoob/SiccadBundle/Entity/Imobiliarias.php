<?php

namespace Sicoob\SiccadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sicoob\SiccadBundle\Entity\Imobiliarias
 *
 * @ORM\Table(name="imobiliarias")
 * @ORM\Entity
 */
class Imobiliarias
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="imobiliarias_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var integer $cj
     *
     * @ORM\Column(name="cj", type="integer", nullable=true)
     */
    private $cj;

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
     * @var Imobiliarias
     *
     * @ORM\ManyToOne(targetEntity="Imobiliarias")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="root_id", referencedColumnName="id")
     * })
     */
    private $root;

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
     * @var PessoaFisica
     *
     * @ORM\ManyToOne(targetEntity="PessoaFisica")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pessoas_fisica_id", referencedColumnName="id")
     * })
     */
    private $pessoasFisica;



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
     * Set cj
     *
     * @param integer $cj
     */
    public function setCj($cj)
    {
        $this->cj = $cj;
    }

    /**
     * Get cj
     *
     * @return integer 
     */
    public function getCj()
    {
        return $this->cj;
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
     * Set root
     *
     * @param Sicoob\SiccadBundle\Entity\Imobiliarias $root
     */
    public function setRoot(\Sicoob\SiccadBundle\Entity\Imobiliarias $root)
    {
        $this->root = $root;
    }

    /**
     * Get root
     *
     * @return Sicoob\SiccadBundle\Entity\Imobiliarias 
     */
    public function getRoot()
    {
        return $this->root;
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
}
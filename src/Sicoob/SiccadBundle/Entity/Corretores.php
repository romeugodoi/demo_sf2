<?php

namespace Sicoob\SiccadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sicoob\SiccadBundle\Entity\Corretores
 *
 * @ORM\Table(name="corretores")
 * @ORM\Entity
 */
class Corretores
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="corretores_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $creci
     *
     * @ORM\Column(name="creci", type="string", length=10, nullable=false)
     */
    private $creci;

    /**
     * @var string $creciUf
     *
     * @ORM\Column(name="creci_uf", type="string", nullable=true)
     */
    private $creciUf;

    /**
     * @var boolean $isInterno
     *
     * @ORM\Column(name="is_interno", type="boolean", nullable=false)
     */
    private $isInterno;

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
     * @var Imobiliarias
     *
     * @ORM\ManyToOne(targetEntity="Imobiliarias")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="imobiliarias_id", referencedColumnName="id")
     * })
     */
    private $imobiliarias;

    /**
     * @var Equipes
     *
     * @ORM\ManyToOne(targetEntity="Equipes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equipes_id", referencedColumnName="id")
     * })
     */
    private $equipes;



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
     * Set creci
     *
     * @param string $creci
     */
    public function setCreci($creci)
    {
        $this->creci = $creci;
    }

    /**
     * Get creci
     *
     * @return string 
     */
    public function getCreci()
    {
        return $this->creci;
    }

    /**
     * Set creciUf
     *
     * @param string $creciUf
     */
    public function setCreciUf($creciUf)
    {
        $this->creciUf = $creciUf;
    }

    /**
     * Get creciUf
     *
     * @return string 
     */
    public function getCreciUf()
    {
        return $this->creciUf;
    }

    /**
     * Set isInterno
     *
     * @param boolean $isInterno
     */
    public function setIsInterno($isInterno)
    {
        $this->isInterno = $isInterno;
    }

    /**
     * Get isInterno
     *
     * @return boolean 
     */
    public function getIsInterno()
    {
        return $this->isInterno;
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
     * Set imobiliarias
     *
     * @param Sicoob\SiccadBundle\Entity\Imobiliarias $imobiliarias
     */
    public function setImobiliarias(\Sicoob\SiccadBundle\Entity\Imobiliarias $imobiliarias)
    {
        $this->imobiliarias = $imobiliarias;
    }

    /**
     * Get imobiliarias
     *
     * @return Sicoob\SiccadBundle\Entity\Imobiliarias 
     */
    public function getImobiliarias()
    {
        return $this->imobiliarias;
    }

    /**
     * Set equipes
     *
     * @param Sicoob\SiccadBundle\Entity\Equipes $equipes
     */
    public function setEquipes(\Sicoob\SiccadBundle\Entity\Equipes $equipes)
    {
        $this->equipes = $equipes;
    }

    /**
     * Get equipes
     *
     * @return Sicoob\SiccadBundle\Entity\Equipes 
     */
    public function getEquipes()
    {
        return $this->equipes;
    }
}
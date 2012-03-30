<?php

namespace Sicoob\SiccadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sicoob\SiccadBundle\Entity\Clientes
 *
 * @ORM\Table(name="clientes")
 * @ORM\Entity
 */
class Clientes
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="clientes_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

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
     * @var Corretores
     *
     * @ORM\ManyToOne(targetEntity="Corretores")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="corretores_id", referencedColumnName="id")
     * })
     */
    private $corretores;



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
}
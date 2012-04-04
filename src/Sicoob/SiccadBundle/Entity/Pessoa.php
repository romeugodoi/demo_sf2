<?php

namespace Sicoob\SiccadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sicoob\SiccadBundle\Entity\Pessoa
 *
 * @ORM\Table(name="pessoa")
 * @ORM\Entity
 */
class Pessoa
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="pessoa_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $nome
     *
     * @ORM\Column(name="nome", type="string", length=150, nullable=false)
     */
    private $nome;

    /**
     * @var string $apelido
     *
     * @ORM\Column(name="apelido", type="string", length=50, nullable=true)
     */
    private $apelido;

    /**
     * @var string $email
     *
     * @ORM\Column(name="email", type="string", length=150, nullable=true)
     */
    private $email;

    /**
     * @var string $site
     *
     * @ORM\Column(name="site", type="string", length=100, nullable=true)
     */
    private $site;

    /**
     * @var boolean $enviaEmail
     *
     * @ORM\Column(name="envia_email", type="boolean", nullable=false)
     */
    private $enviaEmail;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nome
     *
     * @param string $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * Get nome
     *
     * @return string 
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set apelido
     *
     * @param string $apelido
     */
    public function setApelido($apelido)
    {
        $this->apelido = $apelido;
    }

    /**
     * Get apelido
     *
     * @return string 
     */
    public function getApelido()
    {
        return $this->apelido;
    }

    /**
     * Set email
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set site
     *
     * @param string $site
     */
    public function setSite($site)
    {
        $this->site = $site;
    }

    /**
     * Get site
     *
     * @return string 
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Set enviaEmail
     *
     * @param boolean $enviaEmail
     */
    public function setEnviaEmail($enviaEmail)
    {
        $this->enviaEmail = $enviaEmail;
    }

    /**
     * Get enviaEmail
     *
     * @return boolean 
     */
    public function getEnviaEmail()
    {
        return $this->enviaEmail;
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
}
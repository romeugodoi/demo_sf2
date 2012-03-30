<?php

namespace Sicoob\SiccadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sicoob\SiccadBundle\Entity\UsuariosIncorporadoras
 *
 * @ORM\Table(name="usuarios_incorporadoras")
 * @ORM\Entity
 */
class UsuariosIncorporadoras
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="usuarios_incorporadoras_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

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
     * @var Incorporadoras
     *
     * @ORM\ManyToOne(targetEntity="Incorporadoras")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="incorporadoras_id", referencedColumnName="id")
     * })
     */
    private $incorporadoras;



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
}
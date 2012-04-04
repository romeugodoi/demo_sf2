<?php

namespace Sicoob\SiccadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sicoob\SiccadBundle\Entity\SfGuardUser
 *
 * @ORM\Table(name="sf_guard_user")
 * @ORM\Entity
 */
class SfGuardUser
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="sf_guard_user_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $username
     *
     * @ORM\Column(name="username", type="string", length=128, nullable=false)
     */
    private $username;

    /**
     * @var string $algorithm
     *
     * @ORM\Column(name="algorithm", type="string", length=128, nullable=false)
     */
    private $algorithm;

    /**
     * @var string $salt
     *
     * @ORM\Column(name="salt", type="string", length=128, nullable=true)
     */
    private $salt;

    /**
     * @var string $password
     *
     * @ORM\Column(name="password", type="string", length=128, nullable=true)
     */
    private $password;

    /**
     * @var boolean $isActive
     *
     * @ORM\Column(name="is_active", type="boolean", nullable=true)
     */
    private $isActive;

    /**
     * @var boolean $isSuperAdmin
     *
     * @ORM\Column(name="is_super_admin", type="boolean", nullable=true)
     */
    private $isSuperAdmin;

    /**
     * @var datetime $lastLogin
     *
     * @ORM\Column(name="last_login", type="datetime", nullable=true)
     */
    private $lastLogin;

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
     * @var SfGuardGroup
     *
     * @ORM\ManyToMany(targetEntity="SfGuardGroup", inversedBy="user")
     * @ORM\JoinTable(name="sf_guard_user_group",
     *   joinColumns={
     *     @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="group_id", referencedColumnName="id")
     *   }
     * )
     */
    private $group;

    /**
     * @var SfGuardPermission
     *
     * @ORM\ManyToMany(targetEntity="SfGuardPermission", inversedBy="user")
     * @ORM\JoinTable(name="sf_guard_user_permission",
     *   joinColumns={
     *     @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="permission_id", referencedColumnName="id")
     *   }
     * )
     */
    private $permission;

    public function __construct()
    {
        $this->group = new \Doctrine\Common\Collections\ArrayCollection();
    $this->permission = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
}
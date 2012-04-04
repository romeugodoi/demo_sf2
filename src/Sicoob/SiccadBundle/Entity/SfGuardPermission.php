<?php

namespace Sicoob\SiccadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sicoob\SiccadBundle\Entity\SfGuardPermission
 *
 * @ORM\Table(name="sf_guard_permission")
 * @ORM\Entity
 */
class SfGuardPermission
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="sf_guard_permission_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string $description
     *
     * @ORM\Column(name="description", type="string", length=1000, nullable=true)
     */
    private $description;

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
     * @ORM\ManyToMany(targetEntity="SfGuardGroup", mappedBy="permission")
     */
    private $group;

    /**
     * @var SfGuardUser
     *
     * @ORM\ManyToMany(targetEntity="SfGuardUser", mappedBy="permission")
     */
    private $user;

    public function __construct()
    {
        $this->group = new \Doctrine\Common\Collections\ArrayCollection();
    $this->user = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
}
<?php

namespace Sicoob\SiccadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sicoob\SiccadBundle\Entity\CargosImobiliarias
 *
 * @ORM\Table(name="cargos_imobiliarias")
 * @ORM\Entity
 */
class CargosImobiliarias
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="cargos_imobiliarias_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

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
     * @var Cargos
     *
     * @ORM\ManyToOne(targetEntity="Cargos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cargos_id", referencedColumnName="id")
     * })
     */
    private $cargos;



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
     * Set cargos
     *
     * @param Sicoob\SiccadBundle\Entity\Cargos $cargos
     */
    public function setCargos(\Sicoob\SiccadBundle\Entity\Cargos $cargos)
    {
        $this->cargos = $cargos;
    }

    /**
     * Get cargos
     *
     * @return Sicoob\SiccadBundle\Entity\Cargos 
     */
    public function getCargos()
    {
        return $this->cargos;
    }
}
<?php

namespace Sicoob\SiccadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sicoob\SiccadBundle\Entity\PessoaFisicaContatos
 *
 * @ORM\Table(name="pessoa_fisica_contatos")
 * @ORM\Entity
 */
class PessoaFisicaContatos
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="pessoa_fisica_contatos_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var PessoaFisica
     *
     * @ORM\ManyToOne(targetEntity="PessoaFisica")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pessoa_fisica_id", referencedColumnName="id")
     * })
     */
    private $pessoaFisica;

    /**
     * @var Contatos
     *
     * @ORM\ManyToOne(targetEntity="Contatos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="contato_id", referencedColumnName="id")
     * })
     */
    private $contato;



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
     * Set pessoaFisica
     *
     * @param Sicoob\SiccadBundle\Entity\PessoaFisica $pessoaFisica
     */
    public function setPessoaFisica(\Sicoob\SiccadBundle\Entity\PessoaFisica $pessoaFisica)
    {
        $this->pessoaFisica = $pessoaFisica;
    }

    /**
     * Get pessoaFisica
     *
     * @return Sicoob\SiccadBundle\Entity\PessoaFisica 
     */
    public function getPessoaFisica()
    {
        return $this->pessoaFisica;
    }

    /**
     * Set contato
     *
     * @param Sicoob\SiccadBundle\Entity\Contatos $contato
     */
    public function setContato(\Sicoob\SiccadBundle\Entity\Contatos $contato)
    {
        $this->contato = $contato;
    }

    /**
     * Get contato
     *
     * @return Sicoob\SiccadBundle\Entity\Contatos 
     */
    public function getContato()
    {
        return $this->contato;
    }
}
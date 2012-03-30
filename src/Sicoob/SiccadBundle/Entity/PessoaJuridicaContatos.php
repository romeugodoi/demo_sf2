<?php

namespace Sicoob\SiccadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sicoob\SiccadBundle\Entity\PessoaJuridicaContatos
 *
 * @ORM\Table(name="pessoa_juridica_contatos")
 * @ORM\Entity
 */
class PessoaJuridicaContatos
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="pessoa_juridica_contatos_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var PessoaJuridica
     *
     * @ORM\ManyToOne(targetEntity="PessoaJuridica")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pessoa_juridica_id", referencedColumnName="id")
     * })
     */
    private $pessoaJuridica;

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
     * Set pessoaJuridica
     *
     * @param Sicoob\SiccadBundle\Entity\PessoaJuridica $pessoaJuridica
     */
    public function setPessoaJuridica(\Sicoob\SiccadBundle\Entity\PessoaJuridica $pessoaJuridica)
    {
        $this->pessoaJuridica = $pessoaJuridica;
    }

    /**
     * Get pessoaJuridica
     *
     * @return Sicoob\SiccadBundle\Entity\PessoaJuridica 
     */
    public function getPessoaJuridica()
    {
        return $this->pessoaJuridica;
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
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
     * @var Contato
     *
     * @ORM\ManyToOne(targetEntity="Contato")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="contato_id", referencedColumnName="id")
     * })
     */
    private $contato;


}
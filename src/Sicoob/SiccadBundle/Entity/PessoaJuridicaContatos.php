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
     * @var Contato
     *
     * @ORM\ManyToOne(targetEntity="Contato")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="contato_id", referencedColumnName="id")
     * })
     */
    private $contato;


}
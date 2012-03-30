<?php

namespace Sicoob\SiccadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sicoob\SiccadBundle\Entity\PessoaFisicaEnderecos
 *
 * @ORM\Table(name="pessoa_fisica_enderecos")
 * @ORM\Entity
 */
class PessoaFisicaEnderecos
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="pessoa_fisica_enderecos_id_seq", allocationSize="1", initialValue="1")
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
     * @var Enderecos
     *
     * @ORM\ManyToOne(targetEntity="Enderecos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="endereco_id", referencedColumnName="id")
     * })
     */
    private $endereco;



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
     * Set endereco
     *
     * @param Sicoob\SiccadBundle\Entity\Enderecos $endereco
     */
    public function setEndereco(\Sicoob\SiccadBundle\Entity\Enderecos $endereco)
    {
        $this->endereco = $endereco;
    }

    /**
     * Get endereco
     *
     * @return Sicoob\SiccadBundle\Entity\Enderecos 
     */
    public function getEndereco()
    {
        return $this->endereco;
    }
}
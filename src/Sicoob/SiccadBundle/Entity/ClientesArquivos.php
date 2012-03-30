<?php

namespace Sicoob\SiccadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sicoob\SiccadBundle\Entity\ClientesArquivos
 *
 * @ORM\Table(name="clientes_arquivos")
 * @ORM\Entity
 */
class ClientesArquivos
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="clientes_arquivos_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $nome
     *
     * @ORM\Column(name="nome", type="string", length=100, nullable=false)
     */
    private $nome;

    /**
     * @var string $arquivo
     *
     * @ORM\Column(name="arquivo", type="string", length=255, nullable=false)
     */
    private $arquivo;

    /**
     * @var Clientes
     *
     * @ORM\ManyToOne(targetEntity="Clientes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="clientes_id", referencedColumnName="id")
     * })
     */
    private $clientes;



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
     * Set arquivo
     *
     * @param string $arquivo
     */
    public function setArquivo($arquivo)
    {
        $this->arquivo = $arquivo;
    }

    /**
     * Get arquivo
     *
     * @return string 
     */
    public function getArquivo()
    {
        return $this->arquivo;
    }

    /**
     * Set clientes
     *
     * @param Sicoob\SiccadBundle\Entity\Clientes $clientes
     */
    public function setClientes(\Sicoob\SiccadBundle\Entity\Clientes $clientes)
    {
        $this->clientes = $clientes;
    }

    /**
     * Get clientes
     *
     * @return Sicoob\SiccadBundle\Entity\Clientes 
     */
    public function getClientes()
    {
        return $this->clientes;
    }
}
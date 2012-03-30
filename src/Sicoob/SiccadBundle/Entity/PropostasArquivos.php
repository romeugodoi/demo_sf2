<?php

namespace Sicoob\SiccadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sicoob\SiccadBundle\Entity\PropostasArquivos
 *
 * @ORM\Table(name="propostas_arquivos")
 * @ORM\Entity
 */
class PropostasArquivos
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="propostas_arquivos_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $origem
     *
     * @ORM\Column(name="origem", type="string", length=255, nullable=false)
     */
    private $origem;

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
     * @var TiposArquivosPropostas
     *
     * @ORM\ManyToOne(targetEntity="TiposArquivosPropostas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipos_arquivos_propostas_id", referencedColumnName="id")
     * })
     */
    private $tiposArquivosPropostas;

    /**
     * @var Propostas
     *
     * @ORM\ManyToOne(targetEntity="Propostas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="propostas_id", referencedColumnName="id")
     * })
     */
    private $propostas;



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
     * Set origem
     *
     * @param string $origem
     */
    public function setOrigem($origem)
    {
        $this->origem = $origem;
    }

    /**
     * Get origem
     *
     * @return string 
     */
    public function getOrigem()
    {
        return $this->origem;
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
     * Set tiposArquivosPropostas
     *
     * @param Sicoob\SiccadBundle\Entity\TiposArquivosPropostas $tiposArquivosPropostas
     */
    public function setTiposArquivosPropostas(\Sicoob\SiccadBundle\Entity\TiposArquivosPropostas $tiposArquivosPropostas)
    {
        $this->tiposArquivosPropostas = $tiposArquivosPropostas;
    }

    /**
     * Get tiposArquivosPropostas
     *
     * @return Sicoob\SiccadBundle\Entity\TiposArquivosPropostas 
     */
    public function getTiposArquivosPropostas()
    {
        return $this->tiposArquivosPropostas;
    }

    /**
     * Set propostas
     *
     * @param Sicoob\SiccadBundle\Entity\Propostas $propostas
     */
    public function setPropostas(\Sicoob\SiccadBundle\Entity\Propostas $propostas)
    {
        $this->propostas = $propostas;
    }

    /**
     * Get propostas
     *
     * @return Sicoob\SiccadBundle\Entity\Propostas 
     */
    public function getPropostas()
    {
        return $this->propostas;
    }
}
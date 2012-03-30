<?php

namespace Sicoob\SiccadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sicoob\SiccadBundle\Entity\EmpreendimentosArquivos
 *
 * @ORM\Table(name="empreendimentos_arquivos")
 * @ORM\Entity
 */
class EmpreendimentosArquivos
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="empreendimentos_arquivos_id_seq", allocationSize="1", initialValue="1")
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
     * @var TiposArquivosEmpreendimentos
     *
     * @ORM\ManyToOne(targetEntity="TiposArquivosEmpreendimentos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipos_arquivos_id", referencedColumnName="id")
     * })
     */
    private $tiposArquivos;

    /**
     * @var Empreendimentos
     *
     * @ORM\ManyToOne(targetEntity="Empreendimentos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="empreendimentos_id", referencedColumnName="id")
     * })
     */
    private $empreendimentos;



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
     * Set tiposArquivos
     *
     * @param Sicoob\SiccadBundle\Entity\TiposArquivosEmpreendimentos $tiposArquivos
     */
    public function setTiposArquivos(\Sicoob\SiccadBundle\Entity\TiposArquivosEmpreendimentos $tiposArquivos)
    {
        $this->tiposArquivos = $tiposArquivos;
    }

    /**
     * Get tiposArquivos
     *
     * @return Sicoob\SiccadBundle\Entity\TiposArquivosEmpreendimentos 
     */
    public function getTiposArquivos()
    {
        return $this->tiposArquivos;
    }

    /**
     * Set empreendimentos
     *
     * @param Sicoob\SiccadBundle\Entity\Empreendimentos $empreendimentos
     */
    public function setEmpreendimentos(\Sicoob\SiccadBundle\Entity\Empreendimentos $empreendimentos)
    {
        $this->empreendimentos = $empreendimentos;
    }

    /**
     * Get empreendimentos
     *
     * @return Sicoob\SiccadBundle\Entity\Empreendimentos 
     */
    public function getEmpreendimentos()
    {
        return $this->empreendimentos;
    }
}
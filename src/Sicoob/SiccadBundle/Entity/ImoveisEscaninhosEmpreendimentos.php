<?php

namespace Sicoob\SiccadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sicoob\SiccadBundle\Entity\ImoveisEscaninhosEmpreendimentos
 *
 * @ORM\Table(name="imoveis_escaninhos_empreendimentos")
 * @ORM\Entity
 */
class ImoveisEscaninhosEmpreendimentos
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="imoveis_escaninhos_empreendimentos_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var Imoveis
     *
     * @ORM\ManyToOne(targetEntity="Imoveis")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="imoveis_id", referencedColumnName="id")
     * })
     */
    private $imoveis;

    /**
     * @var EscaninhosEmpreendimentos
     *
     * @ORM\ManyToOne(targetEntity="EscaninhosEmpreendimentos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="escaninhos_empreendimentos_id", referencedColumnName="id")
     * })
     */
    private $escaninhosEmpreendimentos;



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
     * Set imoveis
     *
     * @param Sicoob\SiccadBundle\Entity\Imoveis $imoveis
     */
    public function setImoveis(\Sicoob\SiccadBundle\Entity\Imoveis $imoveis)
    {
        $this->imoveis = $imoveis;
    }

    /**
     * Get imoveis
     *
     * @return Sicoob\SiccadBundle\Entity\Imoveis 
     */
    public function getImoveis()
    {
        return $this->imoveis;
    }

    /**
     * Set escaninhosEmpreendimentos
     *
     * @param Sicoob\SiccadBundle\Entity\EscaninhosEmpreendimentos $escaninhosEmpreendimentos
     */
    public function setEscaninhosEmpreendimentos(\Sicoob\SiccadBundle\Entity\EscaninhosEmpreendimentos $escaninhosEmpreendimentos)
    {
        $this->escaninhosEmpreendimentos = $escaninhosEmpreendimentos;
    }

    /**
     * Get escaninhosEmpreendimentos
     *
     * @return Sicoob\SiccadBundle\Entity\EscaninhosEmpreendimentos 
     */
    public function getEscaninhosEmpreendimentos()
    {
        return $this->escaninhosEmpreendimentos;
    }
}
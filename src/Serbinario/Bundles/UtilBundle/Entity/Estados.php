<?php

namespace Serbinario\Bundles\UtilBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Estados
 *
 * @ORM\Table(name="estados")
 * @ORM\Entity
 */
class Estados
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_estados", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEstados;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_estados", type="string", length=50, nullable=true)
     */
    private $nomeEstados;

    /**
     * @var string
     *
     * @ORM\Column(name="prefixo_estados", type="string", length=3, nullable=true)
     */
    private $prefixoEstados;



    /**
     * Get idEstados
     *
     * @return integer
     */
    public function getIdEstados()
    {
        return $this->idEstados;
    }

    /**
     * Set nomeEstados
     *
     * @param string $nomeEstados
     *
     * @return Estados
     */
    public function setNomeEstados($nomeEstados)
    {
        $this->nomeEstados = $nomeEstados;

        return $this;
    }

    /**
     * Get nomeEstados
     *
     * @return string
     */
    public function getNomeEstados()
    {
        return $this->nomeEstados;
    }

    /**
     * Set prefixoEstados
     *
     * @param string $prefixoEstados
     *
     * @return Estados
     */
    public function setPrefixoEstados($prefixoEstados)
    {
        $this->prefixoEstados = $prefixoEstados;

        return $this;
    }

    /**
     * Get prefixoEstados
     *
     * @return string
     */
    public function getPrefixoEstados()
    {
        return $this->prefixoEstados;
    }
}

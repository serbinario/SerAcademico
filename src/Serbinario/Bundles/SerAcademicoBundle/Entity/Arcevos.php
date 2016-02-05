<?php

namespace Serbinario\Bundles\SerAcademicoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Arcevos
 *
 * @ORM\Table(name="arcevos", indexes={@ORM\Index(name="fk_arcevos_tipos_acervos1_idx", columns={"tipos_acervos_id_tipos_acervos"})})
 * @ORM\Entity
 */
class Arcevos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_arcevos", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idArcevos;

    /**
     * @var string
     *
     * @ORM\Column(name="entrada_principal_arcevos", type="string", length=50, nullable=true)
     */
    private $entradaPrincipalArcevos;

    /**
     * @var string
     *
     * @ORM\Column(name="entrada_secundaria_arcevos", type="string", length=50, nullable=true)
     */
    private $entradaSecundariaArcevos;

    /**
     * @var integer
     *
     * @ORM\Column(name="classificacao_decimal_arcevos", type="integer", nullable=true)
     */
    private $classificacaoDecimalArcevos;

    /**
     * @var string
     *
     * @ORM\Column(name="assunto_arcevos", type="string", length=100, nullable=true)
     */
    private $assuntoArcevos;

    /**
     * @var string
     *
     * @ORM\Column(name="titulo_arcevos", type="string", length=100, nullable=true)
     */
    private $tituloArcevos;

    /**
     * @var string
     *
     * @ORM\Column(name="subtitulo_arcevos", type="string", length=100, nullable=true)
     */
    private $subtituloArcevos;

    /**
     * @var string
     *
     * @ORM\Column(name="cutter_arcevos", type="string", length=50, nullable=true)
     */
    private $cutterArcevos;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_chamada_arcevos", type="string", length=10, nullable=true)
     */
    private $numeroChamadaArcevos;

    /**
     * @var \TiposAcervos
     *
     * @ORM\ManyToOne(targetEntity="TiposAcervos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipos_acervos_id_tipos_acervos", referencedColumnName="id_tipos_acervos")
     * })
     */
    private $tiposAcervosTiposAcervos;



    /**
     * Get idArcevos
     *
     * @return integer
     */
    public function getIdArcevos()
    {
        return $this->idArcevos;
    }

    /**
     * Set entradaPrincipalArcevos
     *
     * @param string $entradaPrincipalArcevos
     *
     * @return Arcevos
     */
    public function setEntradaPrincipalArcevos($entradaPrincipalArcevos)
    {
        $this->entradaPrincipalArcevos = $entradaPrincipalArcevos;

        return $this;
    }

    /**
     * Get entradaPrincipalArcevos
     *
     * @return string
     */
    public function getEntradaPrincipalArcevos()
    {
        return $this->entradaPrincipalArcevos;
    }

    /**
     * Set entradaSecundariaArcevos
     *
     * @param string $entradaSecundariaArcevos
     *
     * @return Arcevos
     */
    public function setEntradaSecundariaArcevos($entradaSecundariaArcevos)
    {
        $this->entradaSecundariaArcevos = $entradaSecundariaArcevos;

        return $this;
    }

    /**
     * Get entradaSecundariaArcevos
     *
     * @return string
     */
    public function getEntradaSecundariaArcevos()
    {
        return $this->entradaSecundariaArcevos;
    }

    /**
     * Set classificacaoDecimalArcevos
     *
     * @param integer $classificacaoDecimalArcevos
     *
     * @return Arcevos
     */
    public function setClassificacaoDecimalArcevos($classificacaoDecimalArcevos)
    {
        $this->classificacaoDecimalArcevos = $classificacaoDecimalArcevos;

        return $this;
    }

    /**
     * Get classificacaoDecimalArcevos
     *
     * @return integer
     */
    public function getClassificacaoDecimalArcevos()
    {
        return $this->classificacaoDecimalArcevos;
    }

    /**
     * Set assuntoArcevos
     *
     * @param string $assuntoArcevos
     *
     * @return Arcevos
     */
    public function setAssuntoArcevos($assuntoArcevos)
    {
        $this->assuntoArcevos = $assuntoArcevos;

        return $this;
    }

    /**
     * Get assuntoArcevos
     *
     * @return string
     */
    public function getAssuntoArcevos()
    {
        return $this->assuntoArcevos;
    }

    /**
     * Set tituloArcevos
     *
     * @param string $tituloArcevos
     *
     * @return Arcevos
     */
    public function setTituloArcevos($tituloArcevos)
    {
        $this->tituloArcevos = $tituloArcevos;

        return $this;
    }

    /**
     * Get tituloArcevos
     *
     * @return string
     */
    public function getTituloArcevos()
    {
        return $this->tituloArcevos;
    }

    /**
     * Set subtituloArcevos
     *
     * @param string $subtituloArcevos
     *
     * @return Arcevos
     */
    public function setSubtituloArcevos($subtituloArcevos)
    {
        $this->subtituloArcevos = $subtituloArcevos;

        return $this;
    }

    /**
     * Get subtituloArcevos
     *
     * @return string
     */
    public function getSubtituloArcevos()
    {
        return $this->subtituloArcevos;
    }

    /**
     * Set cutterArcevos
     *
     * @param string $cutterArcevos
     *
     * @return Arcevos
     */
    public function setCutterArcevos($cutterArcevos)
    {
        $this->cutterArcevos = $cutterArcevos;

        return $this;
    }

    /**
     * Get cutterArcevos
     *
     * @return string
     */
    public function getCutterArcevos()
    {
        return $this->cutterArcevos;
    }

    /**
     * Set numeroChamadaArcevos
     *
     * @param string $numeroChamadaArcevos
     *
     * @return Arcevos
     */
    public function setNumeroChamadaArcevos($numeroChamadaArcevos)
    {
        $this->numeroChamadaArcevos = $numeroChamadaArcevos;

        return $this;
    }

    /**
     * Get numeroChamadaArcevos
     *
     * @return string
     */
    public function getNumeroChamadaArcevos()
    {
        return $this->numeroChamadaArcevos;
    }

    /**
     * Set tiposAcervosTiposAcervos
     *
     * @param \Serbinario\Bundles\SerAcademicoBundle\Entity\TiposAcervos $tiposAcervosTiposAcervos
     *
     * @return Arcevos
     */
    public function setTiposAcervosTiposAcervos(\Serbinario\Bundles\SerAcademicoBundle\Entity\TiposAcervos $tiposAcervosTiposAcervos = null)
    {
        $this->tiposAcervosTiposAcervos = $tiposAcervosTiposAcervos;

        return $this;
    }

    /**
     * Get tiposAcervosTiposAcervos
     *
     * @return \Serbinario\Bundles\SerAcademicoBundle\Entity\TiposAcervos
     */
    public function getTiposAcervosTiposAcervos()
    {
        return $this->tiposAcervosTiposAcervos;
    }
}

<?php

namespace Serbinario\Bundles\SerAcademicoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Exemplares
 *
 * @ORM\Table(name="exemplares", indexes={@ORM\Index(name="fk_exemplares_obras_idx", columns={"obras_id_obras"}), @ORM\Index(name="fk_exemplares_editoras1_idx", columns={"editoras_id_editoras"}), @ORM\Index(name="fk_exemplares_ilustracoes1_idx", columns={"ilustracoes_id_ilustracoes"}), @ORM\Index(name="fk_exemplares_idiomas1_idx", columns={"idiomas_id_idiomas"})})
 * @ORM\Entity
 */
class Exemplares
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_exemplares", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idExemplares;

    /**
     * @var integer
     *
     * @ORM\Column(name="ano_exemplares", type="integer", nullable=true)
     */
    private $anoExemplares;

    /**
     * @var string
     *
     * @ORM\Column(name="notas_gerais_exemplares", type="string", length=100, nullable=true)
     */
    private $notasGeraisExemplares;

    /**
     * @var string
     *
     * @ORM\Column(name="notas_bibliograficas_exemplares", type="string", length=100, nullable=true)
     */
    private $notasBibliograficasExemplares;

    /**
     * @var string
     *
     * @ORM\Column(name="isbn_exemplares", type="string", length=10, nullable=true)
     */
    private $isbnExemplares;

    /**
     * @var string
     *
     * @ORM\Column(name="registros_exemplares", type="string", length=45, nullable=true)
     */
    private $registrosExemplares;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_catagolacao_exemplares", type="date", nullable=true)
     */
    private $dataCatagolacaoExemplares;

    /**
     * @var integer
     *
     * @ORM\Column(name="numero_pag_exemplares", type="integer", nullable=true)
     */
    private $numeroPagExemplares;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_edicao_exemplares", type="string", length=10, nullable=true)
     */
    private $numeroEdicaoExemplares;

    /**
     * @var string
     *
     * @ORM\Column(name="palavras_chaves_exemplares", type="string", length=100, nullable=true)
     */
    private $palavrasChavesExemplares;

    /**
     * @var \Editoras
     *
     * @ORM\ManyToOne(targetEntity="Editoras")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="editoras_id_editoras", referencedColumnName="id_editoras")
     * })
     */
    private $editorasEditoras;

    /**
     * @var \Idiomas
     *
     * @ORM\ManyToOne(targetEntity="Idiomas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idiomas_id_idiomas", referencedColumnName="id_idiomas")
     * })
     */
    private $idiomasiomas;

    /**
     * @var \Ilustracoes
     *
     * @ORM\ManyToOne(targetEntity="Ilustracoes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ilustracoes_id_ilustracoes", referencedColumnName="id_ilustracoes")
     * })
     */
    private $ilustracoesIlustracoes;

    /**
     * @var \Arcevos
     *
     * @ORM\ManyToOne(targetEntity="Arcevos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="obras_id_obras", referencedColumnName="id_arcevos")
     * })
     */
    private $obrasObras;



    /**
     * Get idExemplares
     *
     * @return integer
     */
    public function getIdExemplares()
    {
        return $this->idExemplares;
    }

    /**
     * Set anoExemplares
     *
     * @param integer $anoExemplares
     *
     * @return Exemplares
     */
    public function setAnoExemplares($anoExemplares)
    {
        $this->anoExemplares = $anoExemplares;

        return $this;
    }

    /**
     * Get anoExemplares
     *
     * @return integer
     */
    public function getAnoExemplares()
    {
        return $this->anoExemplares;
    }

    /**
     * Set notasGeraisExemplares
     *
     * @param string $notasGeraisExemplares
     *
     * @return Exemplares
     */
    public function setNotasGeraisExemplares($notasGeraisExemplares)
    {
        $this->notasGeraisExemplares = $notasGeraisExemplares;

        return $this;
    }

    /**
     * Get notasGeraisExemplares
     *
     * @return string
     */
    public function getNotasGeraisExemplares()
    {
        return $this->notasGeraisExemplares;
    }

    /**
     * Set notasBibliograficasExemplares
     *
     * @param string $notasBibliograficasExemplares
     *
     * @return Exemplares
     */
    public function setNotasBibliograficasExemplares($notasBibliograficasExemplares)
    {
        $this->notasBibliograficasExemplares = $notasBibliograficasExemplares;

        return $this;
    }

    /**
     * Get notasBibliograficasExemplares
     *
     * @return string
     */
    public function getNotasBibliograficasExemplares()
    {
        return $this->notasBibliograficasExemplares;
    }

    /**
     * Set isbnExemplares
     *
     * @param string $isbnExemplares
     *
     * @return Exemplares
     */
    public function setIsbnExemplares($isbnExemplares)
    {
        $this->isbnExemplares = $isbnExemplares;

        return $this;
    }

    /**
     * Get isbnExemplares
     *
     * @return string
     */
    public function getIsbnExemplares()
    {
        return $this->isbnExemplares;
    }

    /**
     * Set registrosExemplares
     *
     * @param string $registrosExemplares
     *
     * @return Exemplares
     */
    public function setRegistrosExemplares($registrosExemplares)
    {
        $this->registrosExemplares = $registrosExemplares;

        return $this;
    }

    /**
     * Get registrosExemplares
     *
     * @return string
     */
    public function getRegistrosExemplares()
    {
        return $this->registrosExemplares;
    }

    /**
     * Set dataCatagolacaoExemplares
     *
     * @param \DateTime $dataCatagolacaoExemplares
     *
     * @return Exemplares
     */
    public function setDataCatagolacaoExemplares($dataCatagolacaoExemplares)
    {
        $this->dataCatagolacaoExemplares = $dataCatagolacaoExemplares;

        return $this;
    }

    /**
     * Get dataCatagolacaoExemplares
     *
     * @return \DateTime
     */
    public function getDataCatagolacaoExemplares()
    {
        return $this->dataCatagolacaoExemplares;
    }

    /**
     * Set numeroPagExemplares
     *
     * @param integer $numeroPagExemplares
     *
     * @return Exemplares
     */
    public function setNumeroPagExemplares($numeroPagExemplares)
    {
        $this->numeroPagExemplares = $numeroPagExemplares;

        return $this;
    }

    /**
     * Get numeroPagExemplares
     *
     * @return integer
     */
    public function getNumeroPagExemplares()
    {
        return $this->numeroPagExemplares;
    }

    /**
     * Set numeroEdicaoExemplares
     *
     * @param string $numeroEdicaoExemplares
     *
     * @return Exemplares
     */
    public function setNumeroEdicaoExemplares($numeroEdicaoExemplares)
    {
        $this->numeroEdicaoExemplares = $numeroEdicaoExemplares;

        return $this;
    }

    /**
     * Get numeroEdicaoExemplares
     *
     * @return string
     */
    public function getNumeroEdicaoExemplares()
    {
        return $this->numeroEdicaoExemplares;
    }

    /**
     * Set palavrasChavesExemplares
     *
     * @param string $palavrasChavesExemplares
     *
     * @return Exemplares
     */
    public function setPalavrasChavesExemplares($palavrasChavesExemplares)
    {
        $this->palavrasChavesExemplares = $palavrasChavesExemplares;

        return $this;
    }

    /**
     * Get palavrasChavesExemplares
     *
     * @return string
     */
    public function getPalavrasChavesExemplares()
    {
        return $this->palavrasChavesExemplares;
    }

    /**
     * Set editorasEditoras
     *
     * @param \Serbinario\Bundles\SerAcademicoBundle\Entity\Editoras $editorasEditoras
     *
     * @return Exemplares
     */
    public function setEditorasEditoras(\Serbinario\Bundles\SerAcademicoBundle\Entity\Editoras $editorasEditoras = null)
    {
        $this->editorasEditoras = $editorasEditoras;

        return $this;
    }

    /**
     * Get editorasEditoras
     *
     * @return \Serbinario\Bundles\SerAcademicoBundle\Entity\Editoras
     */
    public function getEditorasEditoras()
    {
        return $this->editorasEditoras;
    }

    /**
     * Set idiomasiomas
     *
     * @param \Serbinario\Bundles\SerAcademicoBundle\Entity\Idiomas $idiomasiomas
     *
     * @return Exemplares
     */
    public function setIdiomasiomas(\Serbinario\Bundles\SerAcademicoBundle\Entity\Idiomas $idiomasiomas = null)
    {
        $this->idiomasiomas = $idiomasiomas;

        return $this;
    }

    /**
     * Get idiomasiomas
     *
     * @return \Serbinario\Bundles\SerAcademicoBundle\Entity\Idiomas
     */
    public function getIdiomasiomas()
    {
        return $this->idiomasiomas;
    }

    /**
     * Set ilustracoesIlustracoes
     *
     * @param \Serbinario\Bundles\SerAcademicoBundle\Entity\Ilustracoes $ilustracoesIlustracoes
     *
     * @return Exemplares
     */
    public function setIlustracoesIlustracoes(\Serbinario\Bundles\SerAcademicoBundle\Entity\Ilustracoes $ilustracoesIlustracoes = null)
    {
        $this->ilustracoesIlustracoes = $ilustracoesIlustracoes;

        return $this;
    }

    /**
     * Get ilustracoesIlustracoes
     *
     * @return \Serbinario\Bundles\SerAcademicoBundle\Entity\Ilustracoes
     */
    public function getIlustracoesIlustracoes()
    {
        return $this->ilustracoesIlustracoes;
    }

    /**
     * Set obrasObras
     *
     * @param \Serbinario\Bundles\SerAcademicoBundle\Entity\Arcevos $obrasObras
     *
     * @return Exemplares
     */
    public function setObrasObras(\Serbinario\Bundles\SerAcademicoBundle\Entity\Arcevos $obrasObras = null)
    {
        $this->obrasObras = $obrasObras;

        return $this;
    }

    /**
     * Get obrasObras
     *
     * @return \Serbinario\Bundles\SerAcademicoBundle\Entity\Arcevos
     */
    public function getObrasObras()
    {
        return $this->obrasObras;
    }
}

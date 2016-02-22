<?php

namespace Serbinario\Bundles\SerAcademicoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Editoras
 *
 * @ORM\Table(name="editoras", indexes={@ORM\Index(name="fk_editoras_enderecos1_idx", columns={"enderecos_id_enderecos"})})
 * @ORM\Entity
 */
class Editoras
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_editoras", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEditoras;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_editoras", type="string", length=50, nullable=true)
     */
    private $nomeEditoras;

    /**
     * @var string
     *
     * @ORM\Column(name="email_editoras", type="string", length=50, nullable=true)
     */
    private $emailEditoras;

    /**
     * @var string
     *
     * @ORM\Column(name="site_editoras", type="string", length=50, nullable=true)
     */
    private $siteEditoras;

    /**
     * @var string
     *
     * @ORM\Column(name="cnpj_editoras", type="string", length=50, nullable=true)
     */
    private $cnpjEditoras;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_cadastro_editoras", type="date", nullable=true)
     */
    private $dataCadastroEditoras;

    /**
     * @var string
     *
     * @ORM\Column(name="razao_social_editoras", type="string", length=50, nullable=true)
     */
    private $razaoSocialEditoras;

    /**
     * @var string
     *
     * @ORM\Column(name="agencia_editoras", type="string", length=20, nullable=true)
     */
    private $agenciaEditoras;

    /**
     * @var string
     *
     * @ORM\Column(name="conta_editoras", type="string", length=20, nullable=true)
     */
    private $contaEditoras;

    /**
     * @var \Enderecos
     *
     * @ORM\ManyToOne(targetEntity="Serbinario\Bundles\UtilBundle\Entity\Enderecos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="enderecos_id_enderecos", referencedColumnName="id_enderecos")
     * })
     */
    private $enderecosEnderecos;



    /**
     * Get idEditoras
     *
     * @return integer
     */
    public function getIdEditoras()
    {
        return $this->idEditoras;
    }

    /**
     * Set nomeEditoras
     *
     * @param string $nomeEditoras
     *
     * @return Editoras
     */
    public function setNomeEditoras($nomeEditoras)
    {
        $this->nomeEditoras = $nomeEditoras;

        return $this;
    }

    /**
     * Get nomeEditoras
     *
     * @return string
     */
    public function getNomeEditoras()
    {
        return $this->nomeEditoras;
    }

    /**
     * Set emailEditoras
     *
     * @param string $emailEditoras
     *
     * @return Editoras
     */
    public function setEmailEditoras($emailEditoras)
    {
        $this->emailEditoras = $emailEditoras;

        return $this;
    }

    /**
     * Get emailEditoras
     *
     * @return string
     */
    public function getEmailEditoras()
    {
        return $this->emailEditoras;
    }

    /**
     * Set siteEditoras
     *
     * @param string $siteEditoras
     *
     * @return Editoras
     */
    public function setSiteEditoras($siteEditoras)
    {
        $this->siteEditoras = $siteEditoras;

        return $this;
    }

    /**
     * Get siteEditoras
     *
     * @return string
     */
    public function getSiteEditoras()
    {
        return $this->siteEditoras;
    }

    /**
     * Set cnpjEditoras
     *
     * @param string $cnpjEditoras
     *
     * @return Editoras
     */
    public function setCnpjEditoras($cnpjEditoras)
    {
        $this->cnpjEditoras = $cnpjEditoras;

        return $this;
    }

    /**
     * Get cnpjEditoras
     *
     * @return string
     */
    public function getCnpjEditoras()
    {
        return $this->cnpjEditoras;
    }

    /**
     * Set dataCadastroEditoras
     *
     * @param \DateTime $dataCadastroEditoras
     *
     * @return Editoras
     */
    public function setDataCadastroEditoras($dataCadastroEditoras)
    {
        $this->dataCadastroEditoras = $dataCadastroEditoras;

        return $this;
    }

    /**
     * Get dataCadastroEditoras
     *
     * @return \DateTime
     */
    public function getDataCadastroEditoras()
    {
        return $this->dataCadastroEditoras;
    }

    /**
     * Set razaoSocialEditoras
     *
     * @param string $razaoSocialEditoras
     *
     * @return Editoras
     */
    public function setRazaoSocialEditoras($razaoSocialEditoras)
    {
        $this->razaoSocialEditoras = $razaoSocialEditoras;

        return $this;
    }

    /**
     * Get razaoSocialEditoras
     *
     * @return string
     */
    public function getRazaoSocialEditoras()
    {
        return $this->razaoSocialEditoras;
    }

    /**
     * Set agenciaEditoras
     *
     * @param string $agenciaEditoras
     *
     * @return Editoras
     */
    public function setAgenciaEditoras($agenciaEditoras)
    {
        $this->agenciaEditoras = $agenciaEditoras;

        return $this;
    }

    /**
     * Get agenciaEditoras
     *
     * @return string
     */
    public function getAgenciaEditoras()
    {
        return $this->agenciaEditoras;
    }

    /**
     * Set contaEditoras
     *
     * @param string $contaEditoras
     *
     * @return Editoras
     */
    public function setContaEditoras($contaEditoras)
    {
        $this->contaEditoras = $contaEditoras;

        return $this;
    }

    /**
     * Get contaEditoras
     *
     * @return string
     */
    public function getContaEditoras()
    {
        return $this->contaEditoras;
    }

    /**
     * Set enderecosEnderecos
     *
     * @param \Serbinario\Bundles\SerAcademicoBundle\Entity\Enderecos $enderecosEnderecos
     *
     * @return Editoras
     */
    public function setEnderecosEnderecos(\Serbinario\Bundles\UtilBundle\Entity\Enderecos $enderecosEnderecos = null)
    {
        $this->enderecosEnderecos = $enderecosEnderecos;

        return $this;
    }

    /**
     * Get enderecosEnderecos
     *
     * @return \Serbinario\Bundles\SerAcademicoBundle\Entity\Enderecos
     */
    public function getEnderecosEnderecos()
    {
        return $this->enderecosEnderecos;
    }
}

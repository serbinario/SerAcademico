<?php

namespace Serbinario\Bundles\SerAcademicoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\SerializedName;

/**
 * Alunos
 *
 * @ORM\Table(name="alunos", indexes={@ORM\Index(name="fk_enderecos1_idx", columns={"enderecos_id_enderecos"}), @ORM\Index(name="fk_sexos1_idx", columns={"sexos_id_sexos"}), @ORM\Index(name="fk_turnos1_idx", columns={"turnos_id_turnos"}), @ORM\Index(name="fk_grau_instrucoes1_idx", columns={"grau_instrucoes_id_grau_instrucoes"}), @ORM\Index(name="fk_profissoes1_idx", columns={"profissoes_id_profissoes"}), @ORM\Index(name="fk_religioes1_idx", columns={"religioes_id_religioes"}), @ORM\Index(name="fk_estados_civis1_idx", columns={"estados_civis_id_estados_civis"}), @ORM\Index(name="fk_tipos_sanguinios1_idx", columns={"tipos_sanguinios_id_tipos_sanguinios"}), @ORM\Index(name="fk_cores_racas1_idx", columns={"cores_racas_idcores_racas"}), @ORM\Index(name="fk_estados1_idx", columns={"estados_id_estados"}), @ORM\Index(name="fk_exames1_idx", columns={"exames_id_exames"}), @ORM\Index(name="fk_exames2_idx", columns={"exames_id_exames1"}), @ORM\Index(name="fk_auditivas1_idx", columns={"auditivas_id_auditivas"}), @ORM\Index(name="fk_fisicas1_idx", columns={"fisicas_id_fisicas"}), @ORM\Index(name="fk_visuais1_idx", columns={"visuais_id_visuais"})})
 * @ORM\Entity
 *
 */
class Alunos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @SerializedName("id")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="matricula", type="string", length=20, nullable=true)
     * @SerializedName("matricula")
     */
    private $matricula;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=50, nullable=false)
     * @SerializedName("nome")
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_pai", type="string", length=50, nullable=true)
     * @SerializedName("nomePai")
     */
    private $nomePai;

     /**
     * @var string
     *
     * @ORM\Column(name="nome_mae", type="string", length=50, nullable=true)
     * @SerializedName("nomeMae")
     */
    private $nomeMae;

    /**
     * @var integer
     *
     * @ORM\Column(name="identidade", type="integer", nullable=true)
     * @SerializedName("identidade")
     */
    private $identidade;

    /**
     * @var string
     *
     * @ORM\Column(name="orgao_rg", type="string", length=30, nullable=true)
     * @SerializedName("orgaoRg")
     */
    private $orgaoRg;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_expedicao", type="date", nullable=true)
     * @SerializedName("dataExpedicao")
     *
     */
    private $dataExpedicao;

    /**
     * @var string
     *
     * @ORM\Column(name="cpf", type="string", length=11, nullable=false)
     * @SerializedName("cpf")
     */
    private $cpf;

    /**
     * @var string
     *
     * @ORM\Column(name="titulo_eleitoral", type="string", length=20, nullable=true)
     * @SerializedName("tituloEleitoral")
     */
    private $tituloEleitoral;

    /**
     * @var string
     *
     * @ORM\Column(name="zona", type="string", length=20, nullable=true)
     * @SerializedName("zona")
     */
    private $zona;

    /**
     * @var string
     *
     * @ORM\Column(name="secao", type="string", length=20, nullable=true)
     * @SerializedName("secao")
     */
    private $secao;

    /**
     * @var string
     *
     * @ORM\Column(name="resevista", type="string", length=20, nullable=true)
     * @SerializedName("resevista")
     */
    private $resevista;

    /**
     * @var string
     *
     * @ORM\Column(name="catagoria_resevista", type="string", length=20, nullable=true)
     * @SerializedName("catagoriaResevista")
     */
    private $catagoriaResevista;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_nasciemento", type="date", nullable=true)
     * @SerializedName("dataNasciemento")
     */
    private $dataNasciemento;

    /**
     * @var string
     *
     * @ORM\Column(name="nacionalidade", type="string", nullable=true)
     * @SerializedName("nacionalidade")
     */
    private $nacionalidade;

    /**
     * @var string
     *
     * @ORM\Column(name="naturalidade", type="string", nullable=true)
     * @SerializedName("naturalidade")
     */
    private $naturalidade;

    /**
     * @var integer
     *
     * @ORM\Column(name="ano_conclusao_2_grau", type="integer", nullable=true)
     * @SerializedName("anoConclusao2Grau")
     */
    private $anoConclusao2Grau;

    /**
     * @var string
     *
     * @ORM\Column(name="outra_escola", type="string", length=100, nullable=true)
     * @SerializedName("outraEscola")
     */
    private $outraEscola;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_exame_nacional_um", type="datetime", nullable=true)
     * @SerializedName("dataExameNacionalUm")
     */
    private $dataExameNacionalUm;

    /**
     * @var float
     *
     * @ORM\Column(name="nota_exame_nacional_um", type="float", precision=10, scale=0, nullable=true)
     * @SerializedName("notaExameNacionalUm")
     */
    private $notaExameNacionalUm;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_exame_nacional_dois", type="datetime", nullable=true)
     * @SerializedName("dataExameNacionalDois")
     */
    private $dataExameNacionalDois;

    /**
     * @var float
     *
     * @ORM\Column(name="nota_exame_nacional_dois", type="float", precision=10, scale=0, nullable=true)
     * @SerializedName("notaExameNacionalDois")
     */
    private $notaExameNacionalDois;

    /**
     * @var \Enderecos
     *
     * @SerializedName("enderecosEnderecos")
     * @ORM\ManyToOne(targetEntity="Serbinario\Bundles\UtilBundle\Entity\Enderecos", cascade = {"all"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="enderecos_id_enderecos", referencedColumnName="id")
     * })
     */
    private $enderecosEnderecos;

    /**
     * @var \Sexos
     *
     * @SerializedName("sexosSexos")
     * @ORM\ManyToOne(targetEntity="Sexos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sexos_id_sexos", referencedColumnName="id")
     * })
     */
    private $sexosSexos;


    /**
     * @var \Turnos
     *
     * @SerializedName("turnosTurnos")
     * @ORM\ManyToOne(targetEntity="Turnos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="turnos_id_turnos", referencedColumnName="id")
     * })
     */
    private $turnosTurnos;

    /**
     * @var \GrauInstrucoes
     *
     * @SerializedName("grauInstrucoesGrauInstrucoes")
     * @ORM\ManyToOne(targetEntity="GrauInstrucoes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="grau_instrucoes_id_grau_instrucoes", referencedColumnName="id")
     * })
     */
    private $grauInstrucoesGrauInstrucoes;

    /**
     * @var \Profissoes
     *
     * @SerializedName("profissoesProfissoes")
     * @ORM\ManyToOne(targetEntity="Profissoes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="profissoes_id_profissoes", referencedColumnName="id")
     * })
     */
    private $profissoesProfissoes;

    /**
     * @var \Religioes
     *
     * @SerializedName("religioesReligioes")
     * @ORM\ManyToOne(targetEntity="Religioes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="religioes_id_religioes", referencedColumnName="id")
     * })
     */
    private $religioesReligioes;

    /**
     * @var \EstadosCivis
     *
     * @SerializedName("estadosCivisEstadosCivis")
     * @ORM\ManyToOne(targetEntity="EstadosCivis")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="estados_civis_id_estados_civis", referencedColumnName="id")
     * })
     */
    private $estadosCivisEstadosCivis;

    /**
     * @var \TiposSanguinios
     *
     * @SerializedName("tiposSanguiniosTiposSanguinios")
     * @ORM\ManyToOne(targetEntity="TiposSanguinios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipos_sanguinios_id_tipos_sanguinios", referencedColumnName="id")
     * })
     */
    private $tiposSanguiniosTiposSanguinios;

    /**
     * @var \CoresRacas
     *
     * @SerializedName("coresRacascoresRacas")
     * @ORM\ManyToOne(targetEntity="CoresRacas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cores_racas_idcores_racas", referencedColumnName="id")
     * })
     */
    private $coresRacascoresRacas;

    /**
     * @var \Estados
     *
     * @SerializedName("estadosEstados")
     * @ORM\ManyToOne(targetEntity="Serbinario\Bundles\UtilBundle\Entity\Estados")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="estados_id_estados", referencedColumnName="id")
     * })
     */
    private $estadosEstados;

    /**
     * @var \Exames
     *
     * @SerializedName("examesExames")
     * @ORM\ManyToOne(targetEntity="Exames")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="exames_id_exames", referencedColumnName="id")
     * })
     */
    private $examesExames;

    /**
     * @var \Exames
     *
     * @SerializedName("examesExames1")
     * @ORM\ManyToOne(targetEntity="Exames")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="exames_id_exames1", referencedColumnName="id")
     * })
     */
    private $examesExames1;

    /**
     * @var \Auditivas
     *
     * @SerializedName("auditivasAuditivas")
     * @ORM\ManyToOne(targetEntity="Auditivas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="auditivas_id_auditivas", referencedColumnName="id")
     * })
     */
    private $auditivasAuditivas;

    /**
     * @var \Fisicas
     *
     * @SerializedName("fisicasFisicas")
     * @ORM\ManyToOne(targetEntity="Fisicas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fisicas_id_fisicas", referencedColumnName="id")
     * })
     */
    private $fisicasFisicas;

    /**
     * @var \Visuais
     *
     * @SerializedName("visuaisVisuais")
     * @ORM\ManyToOne(targetEntity="Visuais")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="visuais_id_visuais", referencedColumnName="id")
     * })
     */
    private $visuaisVisuais;

    /**
     * @var string
     *
     * @SerializedName("img")
     * @ORM\Column(name="img", type="string", length=50, nullable=true)
     */
    private $img;

    /**
     * @var boolean
     *
     * @SerializedName("status")
     * @ORM\Column(name="status", type="boolean", nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="tel_fixo", type="string", length=20, nullable=true)
     * @SerializedName("telFixo")
     */
    private $telFixo;

    /**
     * @var string
     *
     * @ORM\Column(name="celular", type="string", length=20, nullable=true)
     * @SerializedName("celular")
     */
    private $celular;

    /**
     * @var \Instituicao
     *
     * @SerializedName("instituicao")
     * @ORM\ManyToOne(targetEntity="Instituicao")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="instituicao", referencedColumnName="id")
     * })
     */
    private $instituicao;

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
     * Set matricula
     *
     * @param string $matricula
     *
     * @return Alunos
     */
    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;

        return $this;
    }

    /**
     * Get matricula
     *
     * @return string
     */
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * Set nome
     *
     * @param string $nome
     *
     * @return Alunos
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
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
     * Set nomePai
     *
     * @param string $nomePai
     *
     * @return Alunos
     */
    public function setNomePai($nomePai)
    {
        $this->nomePai = $nomePai;

        return $this;
    }

    /**
     * Get nomePai
     *
     * @return string
     */
    public function getNomePai()
    {
        return $this->nomePai;
    }

    /**
     * Set nomeMae
     *
     * @param string $nomeMae
     *
     * @return Alunos
     */
    public function setNomeMae($nomeMae)
    {
        $this->nomeMae = $nomeMae;

        return $this;
    }

    /**
     * Get nomeMae
     *
     * @return string
     */
    public function getNomeMae()
    {
        return $this->nomeMae;
    }

    /**
     * Set identidade
     *
     * @param integer $identidade
     *
     * @return Alunos
     */
    public function setIdentidade($identidade)
    {
        $this->identidade = $identidade;

        return $this;
    }

    /**
     * Get identidade
     *
     * @return integer
     */
    public function getIdentidade()
    {
        return $this->identidade;
    }

    /**
     * Set orgaoRg
     *
     * @param string $orgaoRg
     *
     * @return Alunos
     */
    public function setOrgaoRg($orgaoRg)
    {
        $this->orgaoRg = $orgaoRg;

        return $this;
    }

    /**
     * Get orgaoRg
     *
     * @return string
     */
    public function getOrgaoRg()
    {
        return $this->orgaoRg;
    }

    /**
     * Set dataExpedicao
     *
     * @param \DateTime $dataExpedicao
     *
     * @return Alunos
     */
    public function setDataExpedicao($dataExpedicao)
    {
        $this->dataExpedicao = $dataExpedicao;

        return $this;
    }

    /**
     * Get dataExpedicao
     *
     * @return \DateTime
     */
    public function getDataExpedicao()
    {
        return $this->dataExpedicao;
    }

    /**
     * Set cpf
     *
     * @param string $cpf
     *
     * @return Alunos
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }

    /**
     * Get cpf
     *
     * @return string
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * Set tituloEleitoral
     *
     * @param string $tituloEleitoral
     *
     * @return Alunos
     */
    public function setTituloEleitoral($tituloEleitoral)
    {
        $this->tituloEleitoral = $tituloEleitoral;

        return $this;
    }

    /**
     * Get tituloEleitoral
     *
     * @return string
     */
    public function getTituloEleitoral()
    {
        return $this->tituloEleitoral;
    }

    /**
     * Set zona
     *
     * @param string $zona
     *
     * @return Alunos
     */
    public function setZona($zona)
    {
        $this->zona = $zona;

        return $this;
    }

    /**
     * Get zona
     *
     * @return string
     */
    public function getZona()
    {
        return $this->zona;
    }

    /**
     * Set secao
     *
     * @param string $secao
     *
     * @return Alunos
     */
    public function setSecao($secao)
    {
        $this->secao = $secao;

        return $this;
    }

    /**
     * Get secao
     *
     * @return string
     */
    public function getSecao()
    {
        return $this->secao;
    }

    /**
     * Set resevista
     *
     * @param string $resevista
     *
     * @return Alunos
     */
    public function setResevista($resevista)
    {
        $this->resevista = $resevista;

        return $this;
    }

    /**
     * Get resevista
     *
     * @return string
     */
    public function getResevista()
    {
        return $this->resevista;
    }

    /**
     * Set catagoriaResevista
     *
     * @param string $catagoriaResevista
     *
     * @return Alunos
     */
    public function setCatagoriaResevista($catagoriaResevista)
    {
        $this->catagoriaResevista = $catagoriaResevista;

        return $this;
    }

    /**
     * Get catagoriaResevista
     *
     * @return string
     */
    public function getCatagoriaResevista()
    {
        return $this->catagoriaResevista;
    }

    /**
     * Set dataNasciemento
     *
     * @param \DateTime $dataNasciemento
     *
     * @return Alunos
     */
    public function setDataNasciemento($dataNasciemento)
    {
        $this->dataNasciemento = $dataNasciemento;

        return $this;
    }

    /**
     * Get dataNasciemento
     *
     * @return \DateTime
     */
    public function getDataNasciemento()
    {
        return $this->dataNasciemento;
    }

    /**
     * Set nacionalidade
     *
     * @param string $nacionalidade
     *
     * @return Alunos
     */
    public function setNacionalidade($nacionalidade)
    {
        $this->nacionalidade = $nacionalidade;

        return $this;
    }

    /**
     * Get nacionalidade
     *
     * @return string
     */
    public function getNacionalidade()
    {
        return $this->nacionalidade;
    }

    /**
     * Set naturalidade
     *
     * @param string $naturalidade
     *
     * @return Alunos
     */
    public function setNaturalidade($naturalidade)
    {
        $this->naturalidade = $naturalidade;

        return $this;
    }

    /**
     * Get naturalidade
     *
     * @return string
     */
    public function getNaturalidade()
    {
        return $this->naturalidade;
    }

    /**
     * Set anoConclusao2Grau
     *
     * @param integer $anoConclusao2Grau
     *
     * @return Alunos
     */
    public function setAnoConclusao2Grau($anoConclusao2Grau)
    {
        $this->anoConclusao2Grau = $anoConclusao2Grau;

        return $this;
    }

    /**
     * Get anoConclusao2Grau
     *
     * @return integer
     */
    public function getAnoConclusao2Grau()
    {
        return $this->anoConclusao2Grau;
    }

    /**
     * Set outraEscola
     *
     * @param string $outraEscola
     *
     * @return Alunos
     */
    public function setOutraEscola($outraEscola)
    {
        $this->outraEscola = $outraEscola;

        return $this;
    }

    /**
     * Get outraEscola
     *
     * @return string
     */
    public function getOutraEscola()
    {
        return $this->outraEscola;
    }

    /**
     * Set dataExameNacionalUm
     *
     * @param \DateTime $dataExameNacionalUm
     *
     * @return Alunos
     */
    public function setDataExameNacionalUm($dataExameNacionalUm)
    {
        $this->dataExameNacionalUm = $dataExameNacionalUm;

        return $this;
    }

    /**
     * Get dataExameNacionalUm
     *
     * @return \DateTime
     */
    public function getDataExameNacionalUm()
    {
        return $this->dataExameNacionalUm;
    }

    /**
     * Set notaExameNacionalUm
     *
     * @param float $notaExameNacionalUm
     *
     * @return Alunos
     */
    public function setNotaExameNacionalUm($notaExameNacionalUm)
    {
        $this->notaExameNacionalUm = $notaExameNacionalUm;

        return $this;
    }

    /**
     * Get notaExameNacionalUm
     *
     * @return float
     */
    public function getNotaExameNacionalUm()
    {
        return $this->notaExameNacionalUm;
    }

    /**
     * Set dataExameNacionalDois
     *
     * @param \DateTime $dataExameNacionalDois
     *
     * @return Alunos
     */
    public function setDataExameNacionalDois($dataExameNacionalDois)
    {
        $this->dataExameNacionalDois = $dataExameNacionalDois;

        return $this;
    }

    /**
     * Get dataExameNacionalDois
     *
     * @return \DateTime
     */
    public function getDataExameNacionalDois()
    {
        return $this->dataExameNacionalDois;
    }

    /**
     * Set notaExameNacionalDois
     *
     * @param float $notaExameNacionalDois
     *
     * @return Alunos
     */
    public function setNotaExameNacionalDois($notaExameNacionalDois)
    {
        $this->notaExameNacionalDois = $notaExameNacionalDois;

        return $this;
    }

    /**
     * Get notaExameNacionalDois
     *
     * @return float
     */
    public function getNotaExameNacionalDois()
    {
        return $this->notaExameNacionalDois;
    }

    /**
     * Set img
     *
     * @param string $img
     *
     * @return Alunos
     */
    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }

    /**
     * Get img
     *
     * @return string
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return Alunos
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set enderecosEnderecos
     *
     * @param \Serbinario\Bundles\UtilBundle\Entity\Enderecos $enderecosEnderecos
     *
     * @return Alunos
     */
    public function setEnderecosEnderecos(\Serbinario\Bundles\UtilBundle\Entity\Enderecos $enderecosEnderecos = null)
    {
        $this->enderecosEnderecos = $enderecosEnderecos;

        return $this;
    }

    /**
     * Get enderecosEnderecos
     *
     * @return \Serbinario\Bundles\UtilBundle\Entity\Enderecos
     */
    public function getEnderecosEnderecos()
    {
        return $this->enderecosEnderecos;
    }

    /**
     * Set sexosSexos
     *
     * @param \Serbinario\Bundles\SerAcademicoBundle\Entity\Sexos $sexosSexos
     *
     * @return Alunos
     */
    public function setSexosSexos(\Serbinario\Bundles\SerAcademicoBundle\Entity\Sexos $sexosSexos = null)
    {
        $this->sexosSexos = $sexosSexos;

        return $this;
    }

    /**
     * Get sexosSexos
     *
     * @return \Serbinario\Bundles\SerAcademicoBundle\Entity\Sexos
     */
    public function getSexosSexos()
    {
        return $this->sexosSexos;
    }

    /**
     * Set turnosTurnos
     *
     * @param \Serbinario\Bundles\SerAcademicoBundle\Entity\Turnos $turnosTurnos
     *
     * @return Alunos
     */
    public function setTurnosTurnos(\Serbinario\Bundles\SerAcademicoBundle\Entity\Turnos $turnosTurnos = null)
    {
        $this->turnosTurnos = $turnosTurnos;

        return $this;
    }

    /**
     * Get turnosTurnos
     *
     * @return \Serbinario\Bundles\SerAcademicoBundle\Entity\Turnos
     */
    public function getTurnosTurnos()
    {
        return $this->turnosTurnos;
    }

    /**
     * Set grauInstrucoesGrauInstrucoes
     *
     * @param \Serbinario\Bundles\SerAcademicoBundle\Entity\GrauInstrucoes $grauInstrucoesGrauInstrucoes
     *
     * @return Alunos
     */
    public function setGrauInstrucoesGrauInstrucoes(\Serbinario\Bundles\SerAcademicoBundle\Entity\GrauInstrucoes $grauInstrucoesGrauInstrucoes = null)
    {
        $this->grauInstrucoesGrauInstrucoes = $grauInstrucoesGrauInstrucoes;

        return $this;
    }

    /**
     * Get grauInstrucoesGrauInstrucoes
     *
     * @return \Serbinario\Bundles\SerAcademicoBundle\Entity\GrauInstrucoes
     */
    public function getGrauInstrucoesGrauInstrucoes()
    {
        return $this->grauInstrucoesGrauInstrucoes;
    }

    /**
     * Set profissoesProfissoes
     *
     * @param \Serbinario\Bundles\SerAcademicoBundle\Entity\Profissoes $profissoesProfissoes
     *
     * @return Alunos
     */
    public function setProfissoesProfissoes(\Serbinario\Bundles\SerAcademicoBundle\Entity\Profissoes $profissoesProfissoes = null)
    {
        $this->profissoesProfissoes = $profissoesProfissoes;

        return $this;
    }

    /**
     * Get profissoesProfissoes
     *
     * @return \Serbinario\Bundles\SerAcademicoBundle\Entity\Profissoes
     */
    public function getProfissoesProfissoes()
    {
        return $this->profissoesProfissoes;
    }

    /**
     * Set religioesReligioes
     *
     * @param \Serbinario\Bundles\SerAcademicoBundle\Entity\Religioes $religioesReligioes
     *
     * @return Alunos
     */
    public function setReligioesReligioes(\Serbinario\Bundles\SerAcademicoBundle\Entity\Religioes $religioesReligioes = null)
    {
        $this->religioesReligioes = $religioesReligioes;

        return $this;
    }

    /**
     * Get religioesReligioes
     *
     * @return \Serbinario\Bundles\SerAcademicoBundle\Entity\Religioes
     */
    public function getReligioesReligioes()
    {
        return $this->religioesReligioes;
    }

    /**
     * Set estadosCivisEstadosCivis
     *
     * @param \Serbinario\Bundles\SerAcademicoBundle\Entity\EstadosCivis $estadosCivisEstadosCivis
     *
     * @return Alunos
     */
    public function setEstadosCivisEstadosCivis(\Serbinario\Bundles\SerAcademicoBundle\Entity\EstadosCivis $estadosCivisEstadosCivis = null)
    {
        $this->estadosCivisEstadosCivis = $estadosCivisEstadosCivis;

        return $this;
    }

    /**
     * Get estadosCivisEstadosCivis
     *
     * @return \Serbinario\Bundles\SerAcademicoBundle\Entity\EstadosCivis
     */
    public function getEstadosCivisEstadosCivis()
    {
        return $this->estadosCivisEstadosCivis;
    }

    /**
     * Set tiposSanguiniosTiposSanguinios
     *
     * @param \Serbinario\Bundles\SerAcademicoBundle\Entity\TiposSanguinios $tiposSanguiniosTiposSanguinios
     *
     * @return Alunos
     */
    public function setTiposSanguiniosTiposSanguinios(\Serbinario\Bundles\SerAcademicoBundle\Entity\TiposSanguinios $tiposSanguiniosTiposSanguinios = null)
    {
        $this->tiposSanguiniosTiposSanguinios = $tiposSanguiniosTiposSanguinios;

        return $this;
    }

    /**
     * Get tiposSanguiniosTiposSanguinios
     *
     * @return \Serbinario\Bundles\SerAcademicoBundle\Entity\TiposSanguinios
     */
    public function getTiposSanguiniosTiposSanguinios()
    {
        return $this->tiposSanguiniosTiposSanguinios;
    }

    /**
     * Set coresRacascoresRacas
     *
     * @param \Serbinario\Bundles\SerAcademicoBundle\Entity\CoresRacas $coresRacascoresRacas
     *
     * @return Alunos
     */
    public function setCoresRacascoresRacas(\Serbinario\Bundles\SerAcademicoBundle\Entity\CoresRacas $coresRacascoresRacas = null)
    {
        $this->coresRacascoresRacas = $coresRacascoresRacas;

        return $this;
    }

    /**
     * Get coresRacascoresRacas
     *
     * @return \Serbinario\Bundles\SerAcademicoBundle\Entity\CoresRacas
     */
    public function getCoresRacascoresRacas()
    {
        return $this->coresRacascoresRacas;
    }

    /**
     * Set estadosEstados
     *
     * @param \Serbinario\Bundles\UtilBundle\Entity\Estados $estadosEstados
     *
     * @return Alunos
     */
    public function setEstadosEstados(\Serbinario\Bundles\UtilBundle\Entity\Estados $estadosEstados = null)
    {
        $this->estadosEstados = $estadosEstados;

        return $this;
    }

    /**
     * Get estadosEstados
     *
     * @return \Serbinario\Bundles\UtilBundle\Entity\Estados
     */
    public function getEstadosEstados()
    {
        return $this->estadosEstados;
    }

    /**
     * Set examesExames
     *
     * @param \Serbinario\Bundles\SerAcademicoBundle\Entity\Exames $examesExames
     *
     * @return Alunos
     */
    public function setExamesExames(\Serbinario\Bundles\SerAcademicoBundle\Entity\Exames $examesExames = null)
    {
        $this->examesExames = $examesExames;

        return $this;
    }

    /**
     * Get examesExames
     *
     * @return \Serbinario\Bundles\SerAcademicoBundle\Entity\Exames
     */
    public function getExamesExames()
    {
        return $this->examesExames;
    }

    /**
     * Set examesExames1
     *
     * @param \Serbinario\Bundles\SerAcademicoBundle\Entity\Exames $examesExames1
     *
     * @return Alunos
     */
    public function setExamesExames1(\Serbinario\Bundles\SerAcademicoBundle\Entity\Exames $examesExames1 = null)
    {
        $this->examesExames1 = $examesExames1;

        return $this;
    }

    /**
     * Get examesExames1
     *
     * @return \Serbinario\Bundles\SerAcademicoBundle\Entity\Exames
     */
    public function getExamesExames1()
    {
        return $this->examesExames1;
    }

    /**
     * Set auditivasAuditivas
     *
     * @param \Serbinario\Bundles\SerAcademicoBundle\Entity\Auditivas $auditivasAuditivas
     *
     * @return Alunos
     */
    public function setAuditivasAuditivas(\Serbinario\Bundles\SerAcademicoBundle\Entity\Auditivas $auditivasAuditivas = null)
    {
        $this->auditivasAuditivas = $auditivasAuditivas;

        return $this;
    }

    /**
     * Get auditivasAuditivas
     *
     * @return \Serbinario\Bundles\SerAcademicoBundle\Entity\Auditivas
     */
    public function getAuditivasAuditivas()
    {
        return $this->auditivasAuditivas;
    }

    /**
     * Set fisicasFisicas
     *
     * @param \Serbinario\Bundles\SerAcademicoBundle\Entity\Fisicas $fisicasFisicas
     *
     * @return Alunos
     */
    public function setFisicasFisicas(\Serbinario\Bundles\SerAcademicoBundle\Entity\Fisicas $fisicasFisicas = null)
    {
        $this->fisicasFisicas = $fisicasFisicas;

        return $this;
    }

    /**
     * Get fisicasFisicas
     *
     * @return \Serbinario\Bundles\SerAcademicoBundle\Entity\Fisicas
     */
    public function getFisicasFisicas()
    {
        return $this->fisicasFisicas;
    }

    /**
     * Set visuaisVisuais
     *
     * @param \Serbinario\Bundles\SerAcademicoBundle\Entity\Visuais $visuaisVisuais
     *
     * @return Alunos
     */
    public function setVisuaisVisuais(\Serbinario\Bundles\SerAcademicoBundle\Entity\Visuais $visuaisVisuais = null)
    {
        $this->visuaisVisuais = $visuaisVisuais;

        return $this;
    }

    /**
     * Get visuaisVisuais
     *
     * @return \Serbinario\Bundles\SerAcademicoBundle\Entity\Visuais
     */
    public function getVisuaisVisuais()
    {
        return $this->visuaisVisuais;
    }

    /**
     * @return string
     */
    public function getTelFixo()
    {
        return $this->telFixo;
    }

    /**
     * @param string $telFixo
     */
    public function setTelFixo($telFixo)
    {
        $this->telFixo = $telFixo;
    }

    /**
     * @return string
     */
    public function getCelular()
    {
        return $this->celular;
    }

    /**
     * @param string $celular
     */
    public function setCelular($celular)
    {
        $this->celular = $celular;
    }

    /**
     * @return \Visuais
     */
    public function getInstituicao()
    {
        return $this->instituicao;
    }

    /**
     * @param \Visuais $instituicao
     */
    public function setInstituicao($instituicao)
    {
        $this->instituicao = $instituicao;
    }

}

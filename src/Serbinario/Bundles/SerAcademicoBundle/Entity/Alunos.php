<?php

namespace Serbinario\Bundles\SerAcademicoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Alunos
 *
 * @ORM\Table(name="alunos", indexes={@ORM\Index(name="fk_alunos_enderecos1_idx", columns={"enderecos_id_enderecos"}), @ORM\Index(name="fk_alunos_sexos1_idx", columns={"sexos_id_sexos"}), @ORM\Index(name="fk_alunos_emancipados1_idx", columns={"emancipados_id_emancipados"}), @ORM\Index(name="fk_alunos_turnos1_idx", columns={"turnos_id_turnos"}), @ORM\Index(name="fk_alunos_grau_instrucoes1_idx", columns={"grau_instrucoes_id_grau_instrucoes"}), @ORM\Index(name="fk_alunos_profissoes1_idx", columns={"profissoes_id_profissoes"}), @ORM\Index(name="fk_alunos_religioes1_idx", columns={"religioes_id_religioes"}), @ORM\Index(name="fk_alunos_estados_civis1_idx", columns={"estados_civis_id_estados_civis"}), @ORM\Index(name="fk_alunos_tipos_sanguinios1_idx", columns={"tipos_sanguinios_id_tipos_sanguinios"}), @ORM\Index(name="fk_alunos_cores_racas1_idx", columns={"cores_racas_idcores_racas"}), @ORM\Index(name="fk_alunos_estados1_idx", columns={"estados_id_estados"}), @ORM\Index(name="fk_alunos_exames1_idx", columns={"exames_id_exames"}), @ORM\Index(name="fk_alunos_exames2_idx", columns={"exames_id_exames1"}), @ORM\Index(name="fk_alunos_auditivas1_idx", columns={"auditivas_id_auditivas"}), @ORM\Index(name="fk_alunos_fisicas1_idx", columns={"fisicas_id_fisicas"}), @ORM\Index(name="fk_alunos_visuais1_idx", columns={"visuais_id_visuais"})})
 * @ORM\Entity
 */
class Alunos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_alunos", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAlunos;

    /**
     * @var string
     *
     * @ORM\Column(name="matricula_alunos", type="string", length=20, nullable=true)
     */
    private $matriculaAlunos;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_alunos", type="string", length=50, nullable=true)
     */
    private $nomeAlunos;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_pai_alunos", type="string", length=50, nullable=true)
     */
    private $nomePaiAlunos;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_social_alunos", type="string", length=50, nullable=true)
     */
    private $nomeSocialAlunos;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_mae_alunos", type="string", length=50, nullable=true)
     */
    private $nomeMaeAlunos;

    /**
     * @var integer
     *
     * @ORM\Column(name="identidade_alunos", type="integer", nullable=true)
     */
    private $identidadeAlunos;

    /**
     * @var string
     *
     * @ORM\Column(name="orgao_rg_alunos", type="string", length=30, nullable=true)
     */
    private $orgaoRgAlunos;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_expedicao_alunos", type="date", nullable=true)
     */
    private $dataExpedicaoAlunos;

    /**
     * @var string
     *
     * @ORM\Column(name="cpf_alunos", type="string", length=20, nullable=true)
     */
    private $cpfAlunos;

    /**
     * @var string
     *
     * @ORM\Column(name="titulo_eleitoral_alunos", type="string", length=20, nullable=true)
     */
    private $tituloEleitoralAlunos;

    /**
     * @var string
     *
     * @ORM\Column(name="zona_alunos", type="string", length=20, nullable=true)
     */
    private $zonaAlunos;

    /**
     * @var string
     *
     * @ORM\Column(name="secao_alunos", type="string", length=20, nullable=true)
     */
    private $secaoAlunos;

    /**
     * @var string
     *
     * @ORM\Column(name="resevista_alunos", type="string", length=20, nullable=true)
     */
    private $resevistaAlunos;

    /**
     * @var string
     *
     * @ORM\Column(name="catagoria_resevista_alunos", type="string", length=20, nullable=true)
     */
    private $catagoriaResevistaAlunos;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_nasciemento_alunos", type="date", nullable=true)
     */
    private $dataNasciementoAlunos;

    /**
     * @var string
     *
     * @ORM\Column(name="nacionalidade_aluno", type="string", nullable=true)
     */
    private $nacionalidadeAluno;

    /**
     * @var string
     *
     * @ORM\Column(name="naturalidade", type="string", nullable=true)
     */
    private $naturalidade;

    /**
     * @var integer
     *
     * @ORM\Column(name="ano_conclusao_2_grau_alunos", type="integer", nullable=true)
     */
    private $anoConclusao2GrauAlunos;

    /**
     * @var string
     *
     * @ORM\Column(name="outra_escola_alunos", type="string", length=100, nullable=true)
     */
    private $outraEscolaAlunos;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_exame_nacional_um", type="datetime", nullable=true)
     */
    private $dataExameNacionalUm;

    /**
     * @var float
     *
     * @ORM\Column(name="nota_exame_nacional_um", type="float", precision=10, scale=0, nullable=true)
     */
    private $notaExameNacionalUm;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_exame_nacional_dois", type="datetime", nullable=true)
     */
    private $dataExameNacionalDois;

    /**
     * @var float
     *
     * @ORM\Column(name="nota_exame_nacional_dois", type="float", precision=10, scale=0, nullable=true)
     */
    private $notaExameNacionalDois;

    /**
     * @var \Enderecos
     *
     * @ORM\ManyToOne(targetEntity="Serbinario\Bundles\UtilBundle\Entity\Enderecos", cascade = {"all"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="enderecos_id_enderecos", referencedColumnName="id_enderecos")
     * })
     */
    private $enderecosEnderecos;

    /**
     * @var \Sexos
     *
     * @ORM\ManyToOne(targetEntity="Sexos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sexos_id_sexos", referencedColumnName="id_sexos")
     * })
     */
    private $sexosSexos;

    /**
     * @var \Emancipados
     *
     * @ORM\ManyToOne(targetEntity="Emancipados")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="emancipados_id_emancipados", referencedColumnName="id_emancipados")
     * })
     */
    private $emancipadosEmancipados;

    /**
     * @var \Turnos
     *
     * @ORM\ManyToOne(targetEntity="Turnos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="turnos_id_turnos", referencedColumnName="id_turnos")
     * })
     */
    private $turnosTurnos;

    /**
     * @var \GrauInstrucoes
     *
     * @ORM\ManyToOne(targetEntity="GrauInstrucoes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="grau_instrucoes_id_grau_instrucoes", referencedColumnName="id_grau_instrucoes")
     * })
     */
    private $grauInstrucoesGrauInstrucoes;

    /**
     * @var \Profissoes
     *
     * @ORM\ManyToOne(targetEntity="Profissoes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="profissoes_id_profissoes", referencedColumnName="id_profissoes")
     * })
     */
    private $profissoesProfissoes;

    /**
     * @var \Religioes
     *
     * @ORM\ManyToOne(targetEntity="Religioes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="religioes_id_religioes", referencedColumnName="id_religioes")
     * })
     */
    private $religioesReligioes;

    /**
     * @var \EstadosCivis
     *
     * @ORM\ManyToOne(targetEntity="EstadosCivis")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="estados_civis_id_estados_civis", referencedColumnName="id_estados_civis")
     * })
     */
    private $estadosCivisEstadosCivis;

    /**
     * @var \TiposSanguinios
     *
     * @ORM\ManyToOne(targetEntity="TiposSanguinios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipos_sanguinios_id_tipos_sanguinios", referencedColumnName="id_tipos_sanguinios")
     * })
     */
    private $tiposSanguiniosTiposSanguinios;

    /**
     * @var \CoresRacas
     *
     * @ORM\ManyToOne(targetEntity="CoresRacas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cores_racas_idcores_racas", referencedColumnName="idcores_racas")
     * })
     */
    private $coresRacascoresRacas;

    /**
     * @var \Estados
     *
     * @ORM\ManyToOne(targetEntity="Serbinario\Bundles\UtilBundle\Entity\Estados")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="estados_id_estados", referencedColumnName="id_estados")
     * })
     */
    private $estadosEstados;

    /**
     * @var \Exames
     *
     * @ORM\ManyToOne(targetEntity="Exames")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="exames_id_exames", referencedColumnName="id_exames")
     * })
     */
    private $examesExames;

    /**
     * @var \Exames
     *
     * @ORM\ManyToOne(targetEntity="Exames")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="exames_id_exames1", referencedColumnName="id_exames")
     * })
     */
    private $examesExames1;

    /**
     * @var \Auditivas
     *
     * @ORM\ManyToOne(targetEntity="Auditivas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="auditivas_id_auditivas", referencedColumnName="id_auditivas")
     * })
     */
    private $auditivasAuditivas;

    /**
     * @var \Fisicas
     *
     * @ORM\ManyToOne(targetEntity="Fisicas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fisicas_id_fisicas", referencedColumnName="id_fisicas")
     * })
     */
    private $fisicasFisicas;

    /**
     * @var \Visuais
     *
     * @ORM\ManyToOne(targetEntity="Visuais")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="visuais_id_visuais", referencedColumnName="id_visuais")
     * })
     */
    private $visuaisVisuais;



    /**
     * Get idAlunos
     *
     * @return integer
     */
    public function getIdAlunos()
    {
        return $this->idAlunos;
    }

    /**
     * Set matriculaAlunos
     *
     * @param string $matriculaAlunos
     *
     * @return Alunos
     */
    public function setMatriculaAlunos($matriculaAlunos)
    {
        $this->matriculaAlunos = $matriculaAlunos;

        return $this;
    }

    /**
     * Get matriculaAlunos
     *
     * @return string
     */
    public function getMatriculaAlunos()
    {
        return $this->matriculaAlunos;
    }

    /**
     * Set nomeAlunos
     *
     * @param string $nomeAlunos
     *
     * @return Alunos
     */
    public function setNomeAlunos($nomeAlunos)
    {
        $this->nomeAlunos = $nomeAlunos;

        return $this;
    }

    /**
     * Get nomeAlunos
     *
     * @return string
     */
    public function getNomeAlunos()
    {
        return $this->nomeAlunos;
    }

    /**
     * Set nomePaiAlunos
     *
     * @param string $nomePaiAlunos
     *
     * @return Alunos
     */
    public function setNomePaiAlunos($nomePaiAlunos)
    {
        $this->nomePaiAlunos = $nomePaiAlunos;

        return $this;
    }

    /**
     * Get nomePaiAlunos
     *
     * @return string
     */
    public function getNomePaiAlunos()
    {
        return $this->nomePaiAlunos;
    }

    /**
     * Set nomeSocialAlunos
     *
     * @param string $nomeSocialAlunos
     *
     * @return Alunos
     */
    public function setNomeSocialAlunos($nomeSocialAlunos)
    {
        $this->nomeSocialAlunos = $nomeSocialAlunos;

        return $this;
    }

    /**
     * Get nomeSocialAlunos
     *
     * @return string
     */
    public function getNomeSocialAlunos()
    {
        return $this->nomeSocialAlunos;
    }

    /**
     * Set nomeMaeAlunos
     *
     * @param string $nomeMaeAlunos
     *
     * @return Alunos
     */
    public function setNomeMaeAlunos($nomeMaeAlunos)
    {
        $this->nomeMaeAlunos = $nomeMaeAlunos;

        return $this;
    }

    /**
     * Get nomeMaeAlunos
     *
     * @return string
     */
    public function getNomeMaeAlunos()
    {
        return $this->nomeMaeAlunos;
    }

    /**
     * Set identidadeAlunos
     *
     * @param integer $identidadeAlunos
     *
     * @return Alunos
     */
    public function setIdentidadeAlunos($identidadeAlunos)
    {
        $this->identidadeAlunos = $identidadeAlunos;

        return $this;
    }

    /**
     * Get identidadeAlunos
     *
     * @return integer
     */
    public function getIdentidadeAlunos()
    {
        return $this->identidadeAlunos;
    }

    /**
     * Set orgaoRgAlunos
     *
     * @param string $orgaoRgAlunos
     *
     * @return Alunos
     */
    public function setOrgaoRgAlunos($orgaoRgAlunos)
    {
        $this->orgaoRgAlunos = $orgaoRgAlunos;

        return $this;
    }

    /**
     * Get orgaoRgAlunos
     *
     * @return string
     */
    public function getOrgaoRgAlunos()
    {
        return $this->orgaoRgAlunos;
    }

    /**
     * Set dataExpedicaoAlunos
     *
     * @param \DateTime $dataExpedicaoAlunos
     *
     * @return Alunos
     */
    public function setDataExpedicaoAlunos($dataExpedicaoAlunos)
    {
        $this->dataExpedicaoAlunos = $dataExpedicaoAlunos;

        return $this;
    }

    /**
     * Get dataExpedicaoAlunos
     *
     * @return \DateTime
     */
    public function getDataExpedicaoAlunos()
    {
        return $this->dataExpedicaoAlunos;
    }

    /**
     * Set cpfAlunos
     *
     * @param string $cpfAlunos
     *
     * @return Alunos
     */
    public function setCpfAlunos($cpfAlunos)
    {
        $this->cpfAlunos = $cpfAlunos;

        return $this;
    }

    /**
     * Get cpfAlunos
     *
     * @return string
     */
    public function getCpfAlunos()
    {
        return $this->cpfAlunos;
    }

    /**
     * Set tituloEleitoralAlunos
     *
     * @param string $tituloEleitoralAlunos
     *
     * @return Alunos
     */
    public function setTituloEleitoralAlunos($tituloEleitoralAlunos)
    {
        $this->tituloEleitoralAlunos = $tituloEleitoralAlunos;

        return $this;
    }

    /**
     * Get tituloEleitoralAlunos
     *
     * @return string
     */
    public function getTituloEleitoralAlunos()
    {
        return $this->tituloEleitoralAlunos;
    }

    /**
     * Set zonaAlunos
     *
     * @param string $zonaAlunos
     *
     * @return Alunos
     */
    public function setZonaAlunos($zonaAlunos)
    {
        $this->zonaAlunos = $zonaAlunos;

        return $this;
    }

    /**
     * Get zonaAlunos
     *
     * @return string
     */
    public function getZonaAlunos()
    {
        return $this->zonaAlunos;
    }

    /**
     * Set secaoAlunos
     *
     * @param string $secaoAlunos
     *
     * @return Alunos
     */
    public function setSecaoAlunos($secaoAlunos)
    {
        $this->secaoAlunos = $secaoAlunos;

        return $this;
    }

    /**
     * Get secaoAlunos
     *
     * @return string
     */
    public function getSecaoAlunos()
    {
        return $this->secaoAlunos;
    }

    /**
     * Set resevistaAlunos
     *
     * @param string $resevistaAlunos
     *
     * @return Alunos
     */
    public function setResevistaAlunos($resevistaAlunos)
    {
        $this->resevistaAlunos = $resevistaAlunos;

        return $this;
    }

    /**
     * Get resevistaAlunos
     *
     * @return string
     */
    public function getResevistaAlunos()
    {
        return $this->resevistaAlunos;
    }

    /**
     * Set catagoriaResevistaAlunos
     *
     * @param string $catagoriaResevistaAlunos
     *
     * @return Alunos
     */
    public function setCatagoriaResevistaAlunos($catagoriaResevistaAlunos)
    {
        $this->catagoriaResevistaAlunos = $catagoriaResevistaAlunos;

        return $this;
    }

    /**
     * Get catagoriaResevistaAlunos
     *
     * @return string
     */
    public function getCatagoriaResevistaAlunos()
    {
        return $this->catagoriaResevistaAlunos;
    }

    /**
     * Set dataNasciementoAlunos
     *
     * @param \DateTime $dataNasciementoAlunos
     *
     * @return Alunos
     */
    public function setDataNasciementoAlunos($dataNasciementoAlunos)
    {
        $this->dataNasciementoAlunos = $dataNasciementoAlunos;

        return $this;
    }

    /**
     * Get dataNasciementoAlunos
     *
     * @return \DateTime
     */
    public function getDataNasciementoAlunos()
    {
        return $this->dataNasciementoAlunos;
    }

    /**
     * Set nacionalidadeAluno
     *
     * @param \DateTime $nacionalidadeAluno
     *
     * @return Alunos
     */
    public function setNacionalidadeAluno($nacionalidadeAluno)
    {
        $this->nacionalidadeAluno = $nacionalidadeAluno;

        return $this;
    }

    /**
     * Get nacionalidadeAluno
     *
     * @return \DateTime
     */
    public function getNacionalidadeAluno()
    {
        return $this->nacionalidadeAluno;
    }

    /**
     * Set naturalidade
     *
     * @param \DateTime $naturalidade
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
     * @return \DateTime
     */
    public function getNaturalidade()
    {
        return $this->naturalidade;
    }

    /**
     * Set anoConclusao2GrauAlunos
     *
     * @param integer $anoConclusao2GrauAlunos
     *
     * @return Alunos
     */
    public function setAnoConclusao2GrauAlunos($anoConclusao2GrauAlunos)
    {
        $this->anoConclusao2GrauAlunos = $anoConclusao2GrauAlunos;

        return $this;
    }

    /**
     * Get anoConclusao2GrauAlunos
     *
     * @return integer
     */
    public function getAnoConclusao2GrauAlunos()
    {
        return $this->anoConclusao2GrauAlunos;
    }

    /**
     * Set outraEscolaAlunos
     *
     * @param string $outraEscolaAlunos
     *
     * @return Alunos
     */
    public function setOutraEscolaAlunos($outraEscolaAlunos)
    {
        $this->outraEscolaAlunos = $outraEscolaAlunos;

        return $this;
    }

    /**
     * Get outraEscolaAlunos
     *
     * @return string
     */
    public function getOutraEscolaAlunos()
    {
        return $this->outraEscolaAlunos;
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
     * Set emancipadosEmancipados
     *
     * @param \Serbinario\Bundles\SerAcademicoBundle\Entity\Emancipados $emancipadosEmancipados
     *
     * @return Alunos
     */
    public function setEmancipadosEmancipados(\Serbinario\Bundles\SerAcademicoBundle\Entity\Emancipados $emancipadosEmancipados = null)
    {
        $this->emancipadosEmancipados = $emancipadosEmancipados;

        return $this;
    }

    /**
     * Get emancipadosEmancipados
     *
     * @return \Serbinario\Bundles\SerAcademicoBundle\Entity\Emancipados
     */
    public function getEmancipadosEmancipados()
    {
        return $this->emancipadosEmancipados;
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
}

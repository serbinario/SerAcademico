<?php

namespace Serbinario\Bundles\SerAcademicoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AlunosType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('matriculaAlunos')
            ->add('nomeAlunos')
            ->add('nomePaiAlunos')
            ->add('nomeSocialAlunos')
            ->add('nomeMaeAlunos')
            ->add('identidadeAlunos')
            ->add('orgaoRgAlunos')
            ->add('dataExpedicaoAlunos')
            ->add('cpfAlunos')
            ->add('tituloEleitoralAlunos')
            ->add('zonaAlunos')
            ->add('secaoAlunos')
            ->add('resevistaAlunos')
            ->add('catagoriaResevistaAlunos')
            ->add('dataNasciementoAlunos')
            ->add('nacionalidadeAluno')
            ->add('naturalidade')
            ->add('anoConclusao2GrauAlunos')
            ->add('outraEscolaAlunos')
            ->add('dataExameNacionalUm')
            ->add('notaExameNacionalUm')
            ->add('dataExameNacionalDois')
            ->add('notaExameNacionalDois')
            ->add('enderecosEnderecos')
            ->add('sexosSexos')
            ->add('emancipadosEmancipados')
            ->add('turnosTurnos')
            ->add('grauInstrucoesGrauInstrucoes')
            ->add('profissoesProfissoes')
            ->add('religioesReligioes')
            ->add('estadosCivisEstadosCivis')
            ->add('tiposSanguiniosTiposSanguinios')
            ->add('coresRacascoresRacas')
            ->add('estadosEstados')
            ->add('examesExames')
            ->add('examesExames1')
            ->add('auditivasAuditivas')
            ->add('fisicasFisicas')
            ->add('visuaisVisuais')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Serbinario\Bundles\SerAcademicoBundle\Entity\Alunos',
            'csrf_protection' => false,
        ));
    }
}

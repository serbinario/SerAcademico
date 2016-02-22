<?php

namespace Serbinario\Bundles\SerAcademicoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Serbinario\Bundles\UtilBundle\Form\EnderecosType;
use Symfony\Component\Validator\Constraints as Assert;

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
            ->add('nomePaiAlunos', null, [
                'constraints' =>[
                    new Assert\NotBlank([
                        'message' => "alunos.nome_pai_not_blank"
                    ]),
                    new Assert\Length([
                        'min' => "10",
                        'max' => "255",
                        'minMessage' => "Renginio pavadinimas negali būti trumpesnis nei {{ limit }} simboliai",
                        'maxMessage' => "Renginio pavadinimas negali būti ilgesnis nei {{ limit }} simboliai"
                    ])
                ]
            ])
            ->add('nomeSocialAlunos')
            ->add('nomeMaeAlunos')
            ->add('identidadeAlunos')
            ->add('orgaoRgAlunos')
            ->add('dataExpedicaoAlunos', 'date', array(
                'widget' => 'single_text',
                'format' => 'dd/MM/yyyy'
             ))
            ->add('cpfAlunos')
            ->add('tituloEleitoralAlunos')
            ->add('zonaAlunos')
            ->add('secaoAlunos')
            ->add('resevistaAlunos')
            ->add('catagoriaResevistaAlunos')
            ->add('dataNasciementoAlunos', 'date', array(
                'widget' => 'single_text',
                'format' => 'dd/MM/yyyy'
            ))
            ->add('nacionalidadeAluno')
            ->add('naturalidade')
            ->add('anoConclusao2GrauAlunos')
            ->add('outraEscolaAlunos')
            ->add('dataExameNacionalUm', 'date', array(
                'widget' => 'single_text',
                'format' => 'dd/MM/yyyy'
            ))
            ->add('notaExameNacionalUm')
            ->add('dataExameNacionalDois', 'date', array(
                'widget' => 'single_text',
                'format' => 'dd/MM/yyyy'
            ))
            ->add('notaExameNacionalDois')
            ->add('enderecosEnderecos', EnderecosType::class)
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
            ->add('imgAlunos')
            ->add('status')
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

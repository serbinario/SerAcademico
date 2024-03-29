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
            ->add('matricula')
            ->add('nome', null, [
                'constraints' =>[
                    new Assert\NotBlank([
                        'message' => "alunos.nome_aluno_not_blank"
                    ]),
                    new Assert\Length([
                        'min' => "1",
                        'max' => "50",
                        'minMessage' => "Renginio pavadinimas negali būti trumpesnis nei {{ limit }} simboliai",
                        'maxMessage' => "Renginio pavadinimas negali būti ilgesnis nei {{ limit }} simboliai"
                    ])
                ]
            ])
            ->add('nomePai')
            ->add('nomeMae')
            ->add('identidade')
            ->add('orgaoRg')
            ->add('dataExpedicao', 'date', array(
                'widget' => 'single_text',
                'format' => 'dd/MM/yyyy'
             ))
            ->add('cpf', null, [
                'constraints' =>[
                    new Assert\NotBlank([
                        'message' => "alunos.cpf_aluno_not_blank"
                    ]),
                    new Assert\Length([
                        'min' => "11",
                        'max' => "11",
                        'minMessage' => "Renginio pavadinimas negali būti trumpesnis nei {{ limit }} simboliai",
                        'maxMessage' => "Renginio pavadinimas negali būti ilgesnis nei {{ limit }} simboliai"
                    ])
                ]
            ])
            ->add('tituloEleitoral')
            ->add('zona')
            ->add('secao')
            ->add('resevista')
            ->add('catagoriaResevista')
            ->add('dataNasciemento', 'date', array(
                'widget' => 'single_text',
                'format' => 'dd/MM/yyyy'
            ))
            ->add('nacionalidade')
            ->add('naturalidade')
            ->add('anoConclusao2Grau')
            ->add('outraEscola')
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
            ->add('cursos')
            ->add('turmas')
            ->add('img')
            ->add('status')
            ->add('telFixo')
            ->add('celular')
            ->add('instituicao')
            ->add('email')
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

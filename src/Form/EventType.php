<?php

namespace App\Form;

use App\Entity\Event;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class EventType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name',null, ['label'=> 'Nome: '])
            ->add('initialDate', null, ['label'=> 'Data início: '])
            ->add('finalDate', null, ['label'=> 'Data Término: '])
            ->add('description', null, ['label'=> 'Descrição: '])
            ->add('local', null, ['label'=> 'Local: '])
            ->add('organizerName', null, ['label'=> 'Organizador: '])
            ->add('representantLocalName', null, ['label'=> 'Representante local: '])
            ->add('save', SubmitType::class, array('label' => 'Salvar'))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Event::class,
        ]);
    }
}

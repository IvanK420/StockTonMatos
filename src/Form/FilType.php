<?php

namespace App\Form;

use App\Entity\Category;
use App\Entity\Emplacement;
use App\Entity\Fil;
use App\Entity\MaterielDetail;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FilType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Marque')
            ->add('Nom')
            ->add('taille')
            ->add('resistance')
            ->add('quantite')
            ->add('Category', EntityType::class, [
                'class' => Category::class,
                'choice_label' => 'id',
            ])
            ->add('Emplacement', EntityType::class, [
                'class' => Emplacement::class,
                'choice_label' => 'id',
            ])
            ->add('MaterielDetail', EntityType::class, [
                'class' => MaterielDetail::class,
                'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Fil::class,
        ]);
    }
}

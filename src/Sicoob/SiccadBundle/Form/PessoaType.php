<?php

namespace Sicoob\SiccadBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class PessoaType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('nome')
            ->add('apelido')
            ->add('email')
            ->add('site')
            ->add('enviaEmail')
            ->add('createdAt')
            ->add('updatedAt')
        ;
    }

    public function getName()
    {
        return 'sicoob_siccadbundle_pessoatype';
    }
}

<?php
// src/Acme/TaskBundle/Form/Type/TaskType.php

namespace Trololo\HelloBundle\Form\Old;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class Old extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder->add('task');
        $builder->add('dueDate', null, array('widget' => 'single_text'));
    }

    public function getName()
    {
        return 'task';
    }
}
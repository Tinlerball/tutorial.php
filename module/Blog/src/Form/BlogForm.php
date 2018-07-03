<?php
/**
 * Created by PhpStorm.
 * User: ubuntu
 * Date: 7/2/18
 * Time: 1:08 PM
 */

namespace Blog\Form;


use Zend\Form\Form;

class BlogForm extends Form {
    public function __construct($name = null)
    {
        parent::__construct('album');

        $this->add([
            'name' => 'title',
            'type' => 'hidden',
        ]);
    }

}
<?php

namespace Application\Form;
use Zend\Form\Form;
/**
 * Description of ArticleForm
 *
 * 
 */
class ArticleForm extends Form{
    
    public function __construct($name='') {
        parent::__construct($name=='' ? 'Formulaire Article' : $name);
        $this->setAttribute("methode", "post");
        
        $this->add(array(
            'name' => 'id',
            'attributes' => array(
                'type' => 'hidden',
                'id' => 'article_id',
            ),
        ));
        
        $this->add(array(
            'name' => 'title',
            'attributes' => array(
                'type' => 'text',
                'label' => 'Titre',                
            ),
        ));
        
        $this->add(array(
            'name' => 'body',
            'attributes' => array(
                'type' => 'text',
                'label' => 'Corps',                
            ),
        ));
    }
      

}

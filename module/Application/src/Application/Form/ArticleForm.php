<?php

namespace Application\Form;
use Zend\Form\Form;
/**
 * Description of ArticleForm
 *
 * 
 */
class ArticleForm extends Form{
    
    public function __construct($name = '') {
        parent::__construct($name == '' ? 'Formulaire Article' : $name);
        $this->setAttribute("methode", "post");
        
        $this->add(array(
            'name' => 'id',
            'type' => 'Hidden',
        ));
        
        $this->add(array(
            'name' => 'title',
            'type' => 'Text',
            'options' => array(
                'label' => 'Titre: ',                
            ),
        ));
        
        $this->add(array(
            'name' => 'body',
            'type' => 'TextArea',
            'options' => array(
                'label' => 'Corps: ',                
            ),
        ));
        
        $this->add(array(
            'name' => 'ajouter',
            'type' => 'Submit',
            'attributes' => array(
                'value' => 'Ajouter',
                'id' => 'ajouterArticle',
                'class' => 'btn'
            ),
        ));
    }
      

}

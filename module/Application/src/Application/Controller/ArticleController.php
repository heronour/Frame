<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Form\ArticleForm;
/**
 * Description of ArticleController
 *
 * @author A578204
 */
class ArticleController extends AbstractActionController{
   
    public function indexAction() {
        return new ViewModel();
    }   
    
    public function addAction() {
        $form = new ArticleForm('Nouveau Article');
        
        $vm = new ViewModel();
        $vm->setVariable("form", $form);
        
        return $vm;
    }
}

<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Form\ArticleForm;
/**
 * Description of ArticleController
 *
 */
class ArticleController extends AbstractActionController{
   
    public function indexAction() {
        return new ViewModel();
    }   
    
    public function addAction() {
        $form = new ArticleForm('Nouveau Article');
        $form->get('ajouter')->setValue("Ajouter");
        $request = $this->getRequest();
        if ($request->isPost()) {
            
        }
        $vm = new ViewModel();
        $vm->setVariable("form", $form);
        
        return $vm;
    }
}

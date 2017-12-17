<?php

class AdminOrderimportController extends ModuleAdminController
{

    public function __construct()   {
        $this->bootstrap = true;
        parent::__construct();
    }

    public function createTemplate($tpl_name) {
        if (file_exists($this->getTemplatePath() . $tpl_name) && $this->viewAccess())
            return $this->context->smarty->createTemplate($this->getTemplatePath() . $tpl_name, $this->context->smarty);
            return parent::createTemplate($tpl_name);
    }

    public function initContent(){
        parent::initContent();
        $tpl = $this->createTemplate('content.tpl')->fetch();

        /* DO STUFF HERE */
        $posts = array();

        $this->context->smarty->assign('posts', $posts);

    }
}
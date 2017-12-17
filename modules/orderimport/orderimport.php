<?php

class OrderImport extends Module
{
    public function __construct()
    {
        $this->name = 'orderimport';
        $this->tab = 'Administration';
        $this->version = '1.0';
        $this->author = 'Mog';
        $this->need_instance = 0;

        parent::__construct();

        $this->displayName = $this->l('orderimport');
        $this->description = $this->l('lol');
    }

    public function install(){
        if( (parent::install() == false)||(!$this->_createTab())  )
            return false;
        return true;
    }

    private function _createTab()
    {
        $tab = new Tab();
        $tab->active = 1;
        $tab->class_name = 'AdminOrderimport';
        $tab->name = array();
        foreach (Language::getLanguages(true) as $lang) {
            $tab->name[$lang['id_lang']] = $this->l("Import Orders");
        }
        $tab->id_parent = (int)Tab::getIdFromClassName('AdminOrders'); // Set the root tab we just created as parent
        $tab->module = $this->name;
        $tab->add();
        if(!$tab->save()) return false;
        return true;
    }
}
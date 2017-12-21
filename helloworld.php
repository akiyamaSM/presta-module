<?php
if (!defined('_PS_VERSION_')) {
    exit;
}

class HelloWorld extends Module
{
    public function __construct()
    {
        $this->name = 'helloworld';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'El Houssain INANI';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Say Hello World!');
        $this->description = $this->l('A simple module to say Hello world, Be Nice.');

    }

    public function install()
    {
        parent::install();
        $this->registerHook('displayBanner');
        return true;
    }

    private function processConfiguration()
    {
        if(Tools::isSubmit('mymod_pc_form')){
            $name = Tools::getValue('name');
            Configuration::updateValue('helloworld_name', $name);
            $this->context->smarty->assign('confirmation', 'ok');
        }
    }

    private function getConfiguration()
    {
        $name = Configuration::get('helloworld_name');
        $this->context->smarty->assign('helloworld_name', $name);
    }
    public function getContent()
    {
        $this->processConfiguration();
        $this->getConfiguration();
        return $this->display(__FILE__, 'helloworld.tpl');
    }

    public function hookDisplayBanner($params)
    {
        $this->getConfiguration();
        return $this->display(__FILE__, 'displaybanner.tpl');
    }
}
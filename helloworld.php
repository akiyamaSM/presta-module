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
        if (!parent::install()) {
            return false;
        }

        return true;
    }

    public function getContent()
    {
        return $this->display(__FILE__, 'helloworld.tpl');
    }
}
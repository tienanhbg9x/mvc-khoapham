<?php

class FT_Controller
{
    protected $view = NULL;
    protected $model = NUll;
    protected $library = NULL;
    protected $helper = NULL;
    protected $config = NULL;

    public function __construct($is_controller=true)
    {
        require_once PATH_SYSTEM .'/core/loader/FT_Config_Loader.php/';
        $this->config = new FT_Config_Loader();
        $this->config->load();
    }
}

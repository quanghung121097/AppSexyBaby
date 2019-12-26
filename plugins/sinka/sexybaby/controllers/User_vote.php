<?php namespace SinKa\Sexybaby\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class User_vote extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController'    ];
    
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('SinKa.Sexybaby', 'main-menu-item');
    }
}

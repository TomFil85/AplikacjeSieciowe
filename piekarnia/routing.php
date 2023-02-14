<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('towarList');
App::getRouter()->setLoginRoute('login');


Utils::addRoute('loginShow',    'LoginCtrl');	    
Utils::addRoute('login',        'LoginCtrl');
Utils::addRoute('logout',       'LoginCtrl',	        ['user','admin']);
Utils::addRoute('userNew',      'UserEditCtrl');
Utils::addRoute('userEdit',     'UserEditCtrl',         ['admin']);
Utils::addRoute('userSave',     'UserEditCtrl');
Utils::addRoute('userDelete',   'UserEditCtrl',	        ['admin']);
Utils::addRoute('towarList',    'TowarListCtrl');	
Utils::addRoute('towarListPart','TowarListCtrl');	
Utils::addRoute('showUser',     'UserListCtrl');
Utils::addRoute('towarNew',     'TowarEditCtrl',	['admin']);
Utils::addRoute('towarEdit',    'TowarEditCtrl',	['admin']);
Utils::addRoute('towarSave',    'TowarEditCtrl',	['admin']);
Utils::addRoute('towarDelete',  'TowarEditCtrl',	['admin']);


Utils::addRoute('cartNew',      'CartListCtrl');
Utils::addRoute('cartShow',     'CartListCtrl');


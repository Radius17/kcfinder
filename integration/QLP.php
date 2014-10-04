<?php 
/** This file is part of KCFinder project
 *	@desc CMS integration code: Quick-LP
 *	@package KCFinder
 *	@version 3.12
 *	@author Radius17 <radius17@gmail.com>
 *	@copyright 2010-2014 KCFinder Project
 *	@license http://opensource.org/licenses/GPL-3.0 GPLv3
 *	@license http://opensource.org/licenses/LGPL-3.0 LGPLv3
 *	@link http://kcfinder.sunhater.com
 */
class QLP{
    protected static $authenticated = false;
    static function checkAuth() {
        $current_cwd = getcwd();
        if (!self::$authenticated) {
        	define('_QUICK_LP', 'PL_KCIUQ_');
            $init_0 = realpath(dirname(dirname(dirname(dirname(dirname(__FILE__)))))."/engine/config/config.php");
        	$init_1 = realpath(dirname(dirname(dirname(dirname(dirname(__FILE__)))))."/engine/core/QLPRegistry.php");
            $init_2 = realpath(dirname(dirname(dirname(dirname(dirname(__FILE__)))))."/engine/core/QLPSimpleObject.php");
        	$init_3 = realpath(dirname(dirname(dirname(dirname(dirname(__FILE__)))))."/engine/core/QLPSession.php");
        	$data_path=realpath(dirname(dirname(dirname(dirname(dirname(__FILE__)))))."/data/");
            include_once($init_0);
            include_once($init_1);
            include_once($init_2);
            include_once($init_3);
            if(QLPSession::getInstance()->isLoggedIn()){
            	self::$authenticated = true;
            	$_SESSION['KCFINDER']=null;
                if(!isset($_SESSION['KCFINDER'])) $_SESSION['KCFINDER'] = array();
                if(!isset($_SESSION['KCFINDER']['disabled'])) $_SESSION['KCFINDER']['disabled'] = false;
                $_SESSION['KCFINDER']['_check4htaccess'] = false;
                $_SESSION['KCFINDER']['uploadURL'] = '/data/';
                $_SESSION['KCFINDER']['uploadDir'] = $data_path;
                $_SESSION['KCFINDER']['theme'] = 'default';
                $_SESSION['KCFINDER']['types'] = array('gallery'   =>  "",'media'   =>  "");
            }
        }
        chdir($current_cwd);
        return self::$authenticated;
    }
}
QLP::checkAuth();
<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

require_once __DIR__ . '/lib/Common.php';
require_once __DIR__ . '/action/Oauth.php';

use Widget\ActionInterface;
use Utils\Helper;
use Widget\Base\Users;

class TypechoPlus_Action extends Users implements ActionInterface
{
    use TypechoPlus_Lib_Common,
        TypechoPlus_Action_Oauth;

    /**
     * 激活
     */
    public static function actionActivate()
    {
        Helper::addAction('typecho-plus', get_class());
        Helper::addRoute('typecho-plus-oauth', '/oauth', get_class(), 'oauth');
        Helper::addRoute('typecho-plus-callback', '/callback', get_class(), 'callback');
    }

    /**
     * 禁用
     */
    public static function actionDeactivate()
    {
        Helper::removeAction('typecho-plus');
        Helper::removeRoute('typecho-plus-oauth-github');
        Helper::removeRoute('typecho-plus-callback-github');
    }

    public function action()
    {
    }
}

<?php
/**
 *  {$project_id}_UrlHandler.php
 *
 *  @author     {$author}
 *  @package    {$project_id}
 *  @version    $Id$
 */

/**
 *  URL�ϥ�ɥ饯�饹
 *
 *  @author     {$author}
 *  @access     public
 *  @package    {$project_id}
 */
class {$project_id}_UrlHandler extends Ethna_UrlHandler
{
    /** @var    array   ���������ޥåԥ� */
    var $action_map = array(
        /*
        'user'  => array(
            'user_login' => array(
                'path'          => 'login',
                'path_regexp'   => false,
                'path_ext'      => false,
                'option'        => array(),
            ),
        ),
         */
    );

    /**
     *  {$project_id}_UrlHandler���饹�Υ��󥹥��󥹤��������
     *
     *  @access public
     */
    function &getInstance($class_name = null)
    {
        $instance =& parent::getInstance(__CLASS__);
        return $instance;
    }

    // {{{ �����ȥ������ꥯ������������
    /**
     *  �ꥯ������������(user�����ȥ�����)
     *
     *  @access private
     */
    /*
    function _normalizeRequest_User($http_vars)
    {
        return $http_vars;
    }
     */
    // }}}

    // {{{ �����ȥ������ѥ�����
    /**
     *  �ѥ�����(user�����ȥ�����)
     *
     *  @access private
     */
    /*
    function _getPath_User($action, $param)
    {
        return array("/user", array());
    }
     */
    // }}}

    // {{{ �ե��륿
    // }}}
}

// vim: foldmethod=marker tabstop=4 shiftwidth=4 autoindent
?>
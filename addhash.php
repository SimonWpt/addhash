<?php

if (!defined('K_COUCH_DIR')) {
    die();
} // cannot be loaded directly


function addhash($params, $node)
{
    global $FUNCS;

    extract( $FUNCS->get_named_vars(
        array('mode'=>'filedate'),
        $params)
    );

    foreach ($node->children as $child) {
        $html .= $child->get_HTML();
    }

    switch (strtolower($mode)){
        case'now':
            return $html . "?" . date("YmdHis");
            break;
        case'filedate':
            $filename = K_SITE_DIR . $html;
            if (file_exists($filename)) {
                return $html . "?" . date ("YmdHis", filemtime($filename));
                break;
            }
            return $html . "?" . date("YmdHis");;
            break;
        default:
            return $html;
    }


}


$FUNCS->register_tag('addhash', 'addhash');

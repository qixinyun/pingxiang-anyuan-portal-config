<?php
namespace SmartyConfig\Common;

class SmartyConfig
{
    public static function configDir()
    {
        $dirArray = array(
            S_ROOT.'vendor/qixinyun/pingxiang-anyuan-portal-config/src/SmartyConfig/Ay',
            S_ROOT.'vendor/qixinyun/pingxiang-anyuan-portal-config/src/SmartyConfig/Common',
            S_ROOT.'vendor/qixinyun/pingxiang-anyuan-portal-config/src/SmartyConfig/',
        );

        return $dirArray;
    }
}

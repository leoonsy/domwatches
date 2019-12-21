<?php

namespace app\modules;

use app\config\Config;

class Header
{
    public static function getScripts(array $scriptPaths)
    {
        $result = [];
        $global = 'global:';
        foreach ($scriptPaths as $scriptPath) {
            $globalPos = strpos($scriptPath, $global);
            if ($globalPos === false)
                $result[] = '<script src="' . Config::DIR_PUBLIC . "/scripts/$scriptPath" . '"></script>';
            else
                $result[] = '<script src="' . substr($scriptPath, strlen($global)) . '"></script>';
        }

        return implode('', $result);
    }

    public static function getStyles(array $stylesPaths)
    {
        $result = [];
        $global = 'global:';
        foreach ($stylesPaths as $stylePaths) {
            $globalPos = strpos($stylePaths, $global);
            if ($globalPos === false)
                $result[] = '<link rel="stylesheet" href="' . Config::DIR_PUBLIC . "/styles/$stylePaths" . '" />';
            else
                $result[] = '<link rel="stylesheet" href="' . substr($stylePaths, strlen($global)) . '" />';
        }

        return implode('', $result);
    }

    public static function getTmplFile()
    {
        return 'header';
    }
}

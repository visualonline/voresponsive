<?php

class VoResponsiveImage
{

    private $_aliases;
    private $_fallback;

    public function __construct()
    {
        $this->_ini = eZINI::instance( "voresponsive.ini" );
        $this->_aliases = $this->_ini->variable( "ImageAliasSuffixes", "AliasSuffix" );
        $this->_fallback = $this->_ini->variable( "ImageAliasSuffixes", "Fallback" );
        ksort($this->_aliases);
    }

    public function getAlias($res)
    {
        $result = $this->_fallback;

        if ($res == null)
            return $result;

        foreach (array_reverse($this->_aliases, true) as $step => $preset)
        {
            if ($res <= $step)
                $result = $preset;
        }
        return $result;
    }

}

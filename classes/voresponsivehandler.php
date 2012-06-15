<?php

class VoResponsiveHandler
{

    /*!
    Returns the template operators.
    */
    function operatorList()
    {
        return array('voresponsiveimage');
    }

    /*!
    See eZTemplateOperator::namedParameterList
    */
    function namedParameterList()
    {
        return array(
            'voresponsiveimage' => array(
                'attribute' => array(
                    'type' => 'string',
                    'required' => true,
                    'default' => null
                )
            )
        );
    }

    function modify( $tpl, $operatorName, $operatorParameters, $rootNamespace, $currentNamespace, &$operatorValue, $namedParameters )
    {
        switch ($operatorName)
        {
            case "voresponsiveimage":
                $name = $namedParameters['voresponsiveimage'];
                $vri = new VoResponsiveImage();
                $alias = $vri->getAlias($_COOKIE['resolution']);
                $operatorValue = $name . $alias;
            break;
        }
    }

}

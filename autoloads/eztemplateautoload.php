<?php

// Which operators will load automatically?
$eZTemplateOperatorArray = array();
// Operator: jacdata
$eZTemplateOperatorArray[] = array( 'script' => 'extension/voresponsive/classes/voresponsivehandler.php',
    'class' => 'VoResponsiveHandler',
    'operator_names' => array( 'voresponsiveimage' ) );


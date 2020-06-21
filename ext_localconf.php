<?php
defined('TYPO3_MODE') || die();

$GLOBALS['TYPO3_CONF_VARS']['SYS']['yamlLoader']
    ['placeholderProcessors']
    [\Susanne\Cupla\PlaceholderProcessor\CustomPlaceholderProcessor::class] = [];

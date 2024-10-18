<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') || die();

ExtensionManagementUtility::addStaticFile(
  "form_collection",
  'Configuration/TypoScript',
  'BokuNo FormCollection'
);

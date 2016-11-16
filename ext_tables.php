<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'Lv.' . $_EXTKEY,
	'Bgslides',
	'bgslides'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Hintergrundbilder Slider');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_lvimage_domain_model_slide', 'EXT:lvimage/Resources/Private/Language/locallang_csh_tx_lvimage_domain_model_slide.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_lvimage_domain_model_slide');

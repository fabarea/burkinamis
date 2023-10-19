<?php

use Fab\SitePackage\Controller\OrganizationController;

defined('TYPO3') || die('Access denied.');

(static function (): void {
    /***************
     * Add default RTE configuration
     */
    $GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['site_package'] = 'EXT:site_package/Configuration/RTE/Default.yaml';

    /***************
     * PageTS
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:site_package/Configuration/TsConfig/Page/All.tsconfig">');


    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin (
        'SitePackage',
        'Highlight',
        [
            OrganizationController::class => 'showRandom'
        ],
        // non-cacheable actions
        [
            OrganizationController::class => 'showRandom'
        ],
    );
})();

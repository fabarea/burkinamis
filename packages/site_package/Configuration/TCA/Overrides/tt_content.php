<?php
(static function (): void {

    // Register plugin
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
        'SitePackage',
        'Highlight',
        'Organisation à la une'
    );

    // Exclude list from TCA
    $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist']['sitepackage_highlight'] = 'recursive,select_key,pages';

})();

<?php
(static function (): void {

    // Register plugin
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
        'SitePackage',
        'Highlight',
        'Highlight'
    );

    // Exclude list from TCA
    $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist']['sitepackage_highlight'] = 'recursive,select_key,pages';

})();

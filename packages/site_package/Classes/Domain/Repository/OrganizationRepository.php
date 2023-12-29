<?php

namespace Fab\SitePackage\Domain\Repository;

use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Database\Query\QueryBuilder;
use TYPO3\CMS\Core\Utility\GeneralUtility;

class OrganizationRepository
{
    protected string $tableName = 'pages';

    protected int $rootPage = 99;

    public function findRandom(): array|false
    {
        $qb = $this->getQueryBuilder();
        $organizations = $qb
            ->select('*')
            ->from($this->tableName)
            ->where(
                $qb->expr()->eq('pid', $qb->createNamedParameter($this->rootPage, \PDO::PARAM_INT)),
                $qb->expr()->isNotNull('description')
            )
            ->executeQuery()
            ->fetchAllAssociative();

        // return a random organization
        return empty($organizations)
            ? false
            : $organizations[rand(0, count($organizations) - 1)];
    }

    protected function getQueryBuilder(): QueryBuilder
    {
        /** @var ConnectionPool $connectionPool */
        $connectionPool = GeneralUtility::makeInstance(ConnectionPool::class);
        return $connectionPool->getQueryBuilderForTable($this->tableName);
    }

}

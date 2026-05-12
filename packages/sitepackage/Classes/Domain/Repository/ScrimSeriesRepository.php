<?php

namespace WebneoGmbh\Sitepackage\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\QueryInterface;

class ScrimSeriesRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
    protected $defaultOrderings = [
        'scrimDate' => QueryInterface::ORDER_DESCENDING,
    ];

    public function findAllOrderedByDate()
    {
        return $this->findAll();
    }

    public function findByPid(int $pageId)
    {
        $query = $this->createQuery();
        $query->getQuerySettings()->setStoragePageIds([$pageId]);
        return $query->execute();
    }
}

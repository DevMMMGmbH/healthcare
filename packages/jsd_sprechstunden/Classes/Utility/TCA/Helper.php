<?php

declare(strict_types=1);

// namespace RobertHeyduck\JsdSprechstunden\Utility\TCA;

// use TYPO3\CMS\Core\Database\Connection;
// use TYPO3\CMS\Core\Database\ConnectionPool;
// use TYPO3\CMS\Core\Utility\GeneralUtility;

// class Helper
// {
//     /**
//      * @param array $config
//      */
//     public function getItemsByFlexFormPagesPid(&$config): void
//     {
//         debug($config);
//         $itemList = [];

//         $rows = $config['row']['settings.storagePid'];
//         // foreach ($rows as $row) {
//         //     $pagesList[] = $row['uid'];
//         // }
//         $pagesList = array($rows);

//         // debug($pagesList);

//         $items = $this->findAllItemsByTcaOrFlexformPid($pagesList);

//         // debug($items);

//         foreach ($items as $item) {
//             $itemList[] = [$item['auswahlname'] . ' - ' . $item['title'], $item['uid']];
//         }
//         debug($itemList);
//         $config['items'] = $itemList;
//     }

//     public function findAllItemsByTcaOrFlexformPid($pagesList)
//     {
//         $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)->getConnectionForTable(
//             'tx_jsdsprechstunden_domain_model_sprechstunden'
//         )->createQueryBuilder();
//         $queryBuilder
//             ->select('uid', 'title', 'auswahlname')
//             ->from('tx_jsdsprechstunden_domain_model_sprechstunden')
//             ->where(
//                 $queryBuilder->expr()
//                     ->in('pid', $queryBuilder->createNamedParameter($pagesList, Connection::PARAM_INT_ARRAY))
//             )
//             ->orderBy('auswahlname');
//         return $queryBuilder->execute()
//             ->fetchAll();
//     }
// }
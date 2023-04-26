<?php
namespace JsdModule\JsdModule\Form\FormDataProvider;

use TYPO3\CMS\Backend\Form\FormDataProviderInterface;

class TcaColPosItem implements FormDataProviderInterface
{
    /**
     * @var array
     */
    protected $supportedInlineParentFields = [
    'tx_jsdmodule_content_element_parent',
];

    /**
     * @param array $result
     * @return array
     */
    public function addData(array $result)
    {
        if ('tt_content' !== $result['tableName']
            || empty($result['databaseRow']['colPos'])
            || 999 !== (int)$result['databaseRow']['colPos']
            || ((empty($result['inlineParentUid'])
                    || !in_array($result['inlineParentConfig']['foreign_field'], $this->supportedInlineParentFields, true))
                && empty(array_filter(array_intersect_key($result['databaseRow'], array_flip($this->supportedInlineParentFields))))
            )
        ) {
            return $result;
        }

        if (!is_array($result['processedTca']['columns']['colPos']['config']['items'] ?? null)) {
            $result['processedTca']['columns']['colPos']['config']['items'] = [];
        }
        array_unshift(
            $result['processedTca']['columns']['colPos']['config']['items'],
            [
                'LLL:EXT:jsd_module/Resources/Private/Language/locallang_db.xlf:tt_content.colPos.nestedContentColPos',
                $result['databaseRow']['colPos'],
            ]
        );
        unset($result['processedTca']['columns']['colPos']['config']['itemsProcFunc']);

        return $result;
    }
}

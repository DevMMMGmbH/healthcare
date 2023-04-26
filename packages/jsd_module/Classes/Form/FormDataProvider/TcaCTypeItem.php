<?php
namespace JsdModule\JsdModule\Form\FormDataProvider;

use TYPO3\CMS\Backend\Form\FormDataProviderInterface;

class TcaCTypeItem implements FormDataProviderInterface
{
    /**
     * @var array
     */
    protected $supportedInlineParentFields = [
    'tx_jsdmodule_content_element_parent' => [
        'jsdmodule_jsdmodschnellzugriffsteaser',
    ],
];

    /**
     * @param array $result
     * @return array
     */
    public function addData(array $result)
    {
        if ('tt_content' !== $result['tableName']
            || empty($result['databaseRow']['colPos'])
            || (is_array($result['databaseRow']['colPos']) ? 999 !== (int)$result['databaseRow']['colPos'][0] : 999 !== (int)$result['databaseRow']['colPos'])
        ) {
            return $result;
        }

        if (!empty($result['inlineParentUid'])
            && in_array($result['inlineParentConfig']['foreign_field'], array_keys($this->supportedInlineParentFields), true)
        ) {
            $cTypes = $this->supportedInlineParentFields[$result['inlineParentConfig']['foreign_field']];
        } else {
            $parentField = array_filter(array_intersect_key($result['databaseRow'], $this->supportedInlineParentFields));
            if (empty($parentField)) {
                return $result;
            }

            if (count($parentField) === 1) {
                $cTypes = $this->supportedInlineParentFields[key($parentField)];
            } else {
                $cTypes = $result['databaseRow']['CType'];
            }
        }

        $result['processedTca']['columns']['CType']['config']['items'] = array_filter(
            $result['processedTca']['columns']['CType']['config']['items'],
            static function ($item) use ($cTypes) {
                return in_array($item[1], $cTypes);
            }
        );

        return $result;
    }
}

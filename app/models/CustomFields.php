<?php

use Phalcon\Mvc\Model;

class CustomFields extends Model
{
    public const STRING = 'string';
    public const DATE = 'date';
    public const SELECT = 'select';
    public const MULTI_SELECT = 'multi_select';

    /**
     * @var integer
     */
    public int $id;

    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $type;

    /**
     * @return void
     */
    public function initialize(): void
    {
        $this->setSchema("public");
        $this->setSource("custom_fields");
        $this->hasMany('id', 'ContactsCustomFields', 'custom_field_id', ['alias' => 'ContactsCustomFields']);
        $this->hasMany('id', 'CustomFieldDataSet', 'custom_field_id', ['alias' => 'CustomFieldDataSet']);
    }
}

<?php

use Phalcon\Mvc\Model;

class CustomFieldDataSet extends Model
{
    /**
     * @var integer
     */
    public int $id;

    /**
     * @var integer
     */
    public int $custom_field_id;

    /**
     * @var string
     */
    public string $data_set;

    /**
     * @return void
     */
    public function initialize(): void
    {
        $this->setSchema("public");
        $this->setSource("custom_field_data_set");
        $this->belongsTo('custom_field_id', '\CustomFields', 'id', ['alias' => 'CustomFields']);
    }
}

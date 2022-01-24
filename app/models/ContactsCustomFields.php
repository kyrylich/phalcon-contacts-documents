<?php

use Phalcon\Mvc\Model;

class ContactsCustomFields extends Model
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
     * @var integer
     */
    public int $contact_id;

    /**
     * @var string
     */
    public string $data;

    /**
     * @return void
     */
    public function initialize(): void
    {
        $this->setSchema("public");
        $this->setSource("contacts_custom_fields");
        $this->belongsTo('contact_id', '\Contacts', 'id', ['alias' => 'Contacts']);
        $this->belongsTo('custom_field_id', '\CustomFields', 'id', ['alias' => 'CustomFields']);
    }
}

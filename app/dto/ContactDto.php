<?php


class ContactDto
{
    /**
     * @var integer
     */
    public int $id;

    /**
     * @var string
     */
    public string $first_name;

    /**
     * @var string
     */
    public string $last_name;

    /**
     * @var string
     */
    public string $created_at;

    /**
     * @var array<CustomFieldDto>
     */
    public array $custom_fields = [];

    /**
     * @param int $id
     * @param string $first_name
     * @param string $last_name
     * @param string $created_at
     * @param array<CustomFieldDto> $custom_fields
     */
    public function __construct(int $id, string $first_name, string $last_name, string $created_at, array $custom_fields)
    {
        $this->id = $id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->created_at = $created_at;
        $this->custom_fields = $custom_fields;
    }
}

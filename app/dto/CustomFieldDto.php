<?php

class CustomFieldDto
{
    /**
     * @var int
     */
    public int $id;

    /**
     * @var string
     */
    public string $type;

    /**
     * @var array|string|int|null
     */
    public $data;

    /**
     * @var string
     */
    public string $name;

    /**
     * @param int $id
     * @param string $type
     * @param array|int|string|null $data
     * @param string $name
     */
    public function __construct(int $id, string $type, $data, string $name)
    {
        $this->id = $id;
        $this->type = $type;
        $this->data = $data;
        $this->name = $name;
    }
}

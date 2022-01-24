<?php

class CustomFieldsMapper
{
    /**
     * @param ContactsCustomFields $contactCustomField
     *
     * @return CustomFieldDto
     */
    public function mapToCustomFieldDto(ContactsCustomFields $contactCustomField): CustomFieldDto
    {
        /** @var CustomFields $customField */
        $customField = $contactCustomField->getRelated('CustomFields');
        $data = json_decode($contactCustomField->data);

        return new CustomFieldDto(
            $customField->id,
            $customField->type,
            $data,
            $customField->name
        );
    }
}

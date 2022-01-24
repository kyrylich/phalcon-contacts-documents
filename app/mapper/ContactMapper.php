<?php


class ContactMapper
{
    protected CustomFieldsMapper $customFieldsMapper;

    /**
     * @param CustomFieldsMapper $customFieldsMapper
     */
    public function __construct(CustomFieldsMapper $customFieldsMapper)
    {
        $this->customFieldsMapper = $customFieldsMapper;
    }

    /**
     * @param Contacts $contact
     *
     * @return ContactDto
     */
    public function mapToContactDto(Contacts $contact): ContactDto
    {
        return new ContactDto(
            $contact->id,
            $contact->first_name,
            $contact->last_name,
            $contact->created_at,
            $this->mapCustomFields($contact)
        );
    }

    /**
     * @param Contacts $contact
     *
     * @return array<CustomFieldDto>
     */
    protected function mapCustomFields(Contacts $contact): array
    {
        $customFields = [];

        /** @var ContactsCustomFields $contactCustomField */
        foreach ($contact->getRelated('ContactsCustomFields') as $contactCustomField) {
            $customFields[] = $this->customFieldsMapper->mapToCustomFieldDto($contactCustomField);
        }

        return $customFields;
    }
}

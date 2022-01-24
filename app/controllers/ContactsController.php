<?php

use Phalcon\Http\Response;
use Phalcon\Http\ResponseInterface;

class ContactsController extends ControllerBase
{
    /**
     * @return ResponseInterface
     */
    public function indexAction(): ResponseInterface
    {
        $queryMapper = new QueryMapper();
        $query = $queryMapper->mapRequestToQuery($this->request);

        $contacts = Contacts::findWithCustomFields($query);

        $contactMapper = new ContactMapper(new CustomFieldsMapper());

        $contactsDto = [];
        foreach ($contacts as $contact) {
            $contactsDto[] = $contactMapper->mapToContactDto($contact);
        }

        $this->view->disable();
        return (new Response())->setJsonContent($contactsDto);
    }
}

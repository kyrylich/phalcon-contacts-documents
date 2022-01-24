<?php

use Phalcon\Http\Response;
use Phalcon\Http\ResponseInterface;

class IndexController extends ControllerBase
{
    /**
     * @return ResponseInterface
     */
    public function indexAction(): ResponseInterface
    {
        $contacts = Contacts::findWithLastDocument();

        $this->view->disable();
        return (new Response())->setJsonContent($contacts);
    }
}


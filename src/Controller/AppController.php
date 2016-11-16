<?php

namespace Timezone\Controller;

use App\Controller\AppController as BaseController;
use Cake\Event\Event;
use Exception;

class AppController extends BaseController {

    public function initialize() {
        parent::initialize();
        $this->viewbuilder()->layout(false);
        $this->loadComponent('RequestHandler');
    }

    public function beforeRender(Event $event) {
        /* $this->RequestHandler->renderAs($this, 'json');
          $this->response->type('application/json');
          $this->set('_serialize', true); */
    }

}

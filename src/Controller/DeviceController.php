<?php

namespace Timezone\Controller;

use Timezone\Controller\AppController;

/**
 * Device Controller
 *
 * @property \Timezone\Model\Table\DeviceTable $Device
 */
class DeviceController extends AppController {

    public function user() {
        try {
            $requestData = $this->request->data;
            //$_SESSION['device']['timezone'] = $requestData['timezone'];
            $this->request->session()->write('device.timezone', $requestData['timezone']);
            
            $this->RequestHandler->renderAs($this, 'json');
            $this->response->type("application/json");
            $this->set('_serialize', true);
            
            $this->set(array('status' => true));
        } catch (exception $ex) {
            
        }
    }

}

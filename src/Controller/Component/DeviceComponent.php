<?php

namespace Timezone\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;

/**
 * Device component
 */
class DeviceComponent extends Component {

    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];
    
    /**
     * 
     * @param type $datetime
     * @param type $timezone
     * @return string $datetime
     */
    public function client($datetime){
        $date = new \DateTime($datetime);
        $client = $this->request->session()->read('device.timezone');
        
        if(!empty($client)){
            $date->setTimezone(new \DateTimeZone($client));
        }
        
        $result = $date->format('Y-m-d H:i:s');
        
        return $result;
    }
    
    /**
     * 
     * @param type $datetime
     * @param type $timezone
     * @return string $datetime
     */
    public function system() {
        $date = new \DateTime(date('Y-m-d H:i:s'));
        $client = $this->request->session()->read('device.timezone');

        if (!empty($client)) {
            $date->setTimezone(new \DateTimeZone($client));
        }

        $result = $date->format('Y-m-d H:i:s');

        return $result;
    }

}

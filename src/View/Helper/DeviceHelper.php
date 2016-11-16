<?php

namespace Timezone\View\Helper;

use Cake\View\Helper;
use Cake\View\View;

/**
 * Device helper
 */
class DeviceHelper extends Helper {

    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];
    public $helpers = ['Html'];

    /**
     * 
     * @param type $datetime
     * @param type $timezone
     * @return string $datetime
     */
    public function client($datetime) {
        $date = new \DateTime($datetime);
        $client = $this->request->session()->read('device.timezone');

        if (!empty($client)) {
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

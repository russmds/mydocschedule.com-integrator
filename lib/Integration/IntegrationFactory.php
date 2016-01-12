<?php

/**
Copyright 2011-2016 Russ Profant

This file is part of MyDocSchedule.com integration package.

phpScheduleIt is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

phpScheduleIt is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with phpScheduleIt.  If not, see <http://www.gnu.org/licenses/>.
*/

require_once(ROOT_DIR . 'lib/Config/namespace.php');
require_once('namespace.php');

class IntegrationFactory {
    
	public function __contruct() {}
    
    public function GetIntegrator()
    {
        $this->config = Configuration::Instance();
        
        $integratorType = $this->config->GetKey(ConfigKeys::INTEGRATION_WITH);
        
        switch ($integratorType)
        {
            case 'oscar': return new OscarIntegrator();
            
            default: return null;	
        }
    }
}
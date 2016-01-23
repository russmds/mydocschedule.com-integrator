<?php

/**
Copyright 2011-2016 Russ Profant

This file is part of MyDocSchedule.com Integration package.

This is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.
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
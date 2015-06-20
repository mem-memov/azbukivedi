<?php
class Configuration implements IConfiguration {
    
    private $settings;
    
    public function __construct(array $settings) {
        
        $this->settings = $settings;
        
    }
    
    public function databaseName() {
        return $this->settings['database']['name'];
    }
    
    public function databaseUser() {
        return $this->settings['database']['user'];
    }
    
    public function databasePassword() {
        return $this->settings['database']['password'];
    }
    
    public function databaseServer() {
        return $this->settings['database']['server'];
    }
    
}
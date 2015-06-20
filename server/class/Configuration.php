<?php
class Configuration implements IConfiguration {
    
    private $settings;
    
    public function __construct(array $settings) {
        
        $this->settings = $settings;
        
    }
    
    public function databaseName() {
        return $this->settings['database']['name']
    }
    
}
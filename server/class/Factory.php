<?php
class Factory {
    
    private $instances;
    private $configurationPath;
    
    public function __construct($configurationPath) {
        
        $this->instances = array();
        $this->configurationPath = $configurationPath;
        
    }

    private function configuration($configurationPath) {
        
        if (!isset($this->instances[__FUNCTION__])) {
            $this->instances[__FUNCTION__] = new Configuration($this->configurationPath);
        }
        return $this->instances[__FUNCTION__];
        
    }
    
    private function database() {
        
        if (!isset($this->instances[__FUNCTION__])) {
            $this->instances[__FUNCTION__] = new Database(
                $this->configuration()
            );
        }
        return $this->instances[__FUNCTION__];
        
    }
    
    public function tableCreator() {
        
        if (!isset($this->instances[__FUNCTION__])) {
            $this->instances[__FUNCTION__] = new TableCreator(
                $this->database()
            );
        }
        return $this->instances[__FUNCTION__];
        
    }
    
}
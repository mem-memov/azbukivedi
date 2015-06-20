<?php
class Facade implements IFacade() {
    
    private $factory;
    
    public function construct($configurationPath) {
        
        $this->factory = new Factory($configurationPath);
        
    }
    
    public function response() {
        
        $this->factory->tableCreator()->createTables();
        
    }
    
}
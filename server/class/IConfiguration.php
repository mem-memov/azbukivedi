<?php
interface IConfiguration {
    
    public function databaseName();
    public function databaseUser();
    public function databasePassword();
    public function databaseServer();
    
}
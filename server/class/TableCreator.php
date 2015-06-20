<?php
class TableCreator implements ITableCreator {
    
    private $database;
    
    public function __construct(IDatabase $database) {
        
        $this->database = $database;
        
    }
    
    public function createTables() {
        
        $this->action();
        $this->question();
        $this->actionQuestion();
        $this->notion();
        $this->object();
        $this->part();
        $this->statement();
        $this->statementPart();
        
    }
    
    private function action() {
        
        $this->database->query('
            CREATE TABLE IF NOT EXISTS
                `action` (
                    `id` INT PRIMARY_KEY AUTO_INCREMENT,
                    `action` VARCHAR NOT NULL UNIQUE
                )
            ;
        ');
        
    }
    
    private function question() {
        
        $this->database->query('
            CREATE TABLE IF NOT EXISTS
                `question` (
                    `id` INT PRIMARY_KEY AUTO_INCREMENT,
                    `question` VARCHAR NOT NULL UNIQUE
                )
            ;
        ');
        
    }
    
    private function actionQuestion() {
        
        $this->database->query('
            CREATE TABLE IF NOT EXISTS
                `action_question` (
                    `id` INT PRIMARY_KEY AUTO_INCREMENT,
                    `action_id` INT NOT NULL,
                    `question_id` INT NOT NULL
                )
            ;
        ');
        
    }
    
    private function notion() {
        
        $this->database->query('
            CREATE TABLE IF NOT EXISTS
                `notion` (
                    `id` INT PRIMARY_KEY AUTO_INCREMENT,
                    `notion` VARCHAR NOT NULL UNIQUE
                )
            ;
        ');
        
    }
    
    private function object() {
        
        $this->database->query('
            CREATE TABLE IF NOT EXISTS
                `object` (
                    `id` INT PRIMARY_KEY AUTO_INCREMENT,
                    `notion_id` INT NOT NULL
                )
            ;
        ');
        
    }
    
    private function part() {
        
        $this->database->query('
            CREATE TABLE IF NOT EXISTS
                `part` (
                    `id` INT PRIMARY_KEY AUTO_INCREMENT,
                    `part` VARCHAR NOT NULL UNIQUE
                )
            ;
        ');
        
    }
    
    private function statement() {
        
        $this->database->query('
            CREATE TABLE IF NOT EXISTS
                `statement` (
                    `id` INT PRIMARY_KEY AUTO_INCREMENT,
                    `action_id` INT NOT NULL
                )
            ;
        ');
        
    }
    
    private function statementPart() {
        
        $this->database->query('
            CREATE TABLE IF NOT EXISTS
                `statement_part` (
                    `id` INT PRIMARY_KEY AUTO_INCREMENT,
                    `statement_id` INT NOT NULL,
                    `part_id` INT NOT NULL
                )
            ;
        ');
        
    }
    
}<?php
class TableCreator implements ITableCreator {
    
    private $database;
    
    public function __construct(IDatabase $database) {
        
        $this->database = $database;
        
    }
    
    public function createTables() {
        
        $this->action();
        $this->question();
        $this->actionQuestion();
        $this->notion();
        $this->object();
        $this->part();
        $this->statement();
        $this->statementPart();
        
    }
    
    private function action() {
        
        $this->database->query('
            CREATE TABLE IF NOT EXISTS
                `action` (
                    `id` INT PRIMARY_KEY AUTO_INCREMENT,
                    `action` VARCHAR NOT NULL UNIQUE
                )
            ;
        ');
        
    }
    
    private function question() {
        
        $this->database->query('
            CREATE TABLE IF NOT EXISTS
                `question` (
                    `id` INT PRIMARY_KEY AUTO_INCREMENT,
                    `question` VARCHAR NOT NULL UNIQUE
                )
            ;
        ');
        
    }
    
    private function actionQuestion() {
        
        $this->database->query('
            CREATE TABLE IF NOT EXISTS
                `action_question` (
                    `id` INT PRIMARY_KEY AUTO_INCREMENT,
                    `action_id` INT NOT NULL,
                    `question_id` INT NOT NULL
                )
            ;
        ');
        
    }
    
    private function notion() {
        
        $this->database->query('
            CREATE TABLE IF NOT EXISTS
                `notion` (
                    `id` INT PRIMARY_KEY AUTO_INCREMENT,
                    `notion` VARCHAR NOT NULL UNIQUE
                )
            ;
        ');
        
    }
    
    private function object() {
        
        $this->database->query('
            CREATE TABLE IF NOT EXISTS
                `object` (
                    `id` INT PRIMARY_KEY AUTO_INCREMENT,
                    `notion_id` INT NOT NULL
                )
            ;
        ');
        
    }
    
    private function part() {
        
        $this->database->query('
            CREATE TABLE IF NOT EXISTS
                `part` (
                    `id` INT PRIMARY_KEY AUTO_INCREMENT,
                    `part` VARCHAR NOT NULL UNIQUE
                )
            ;
        ');
        
    }
    
    private function statement() {
        
        $this->database->query('
            CREATE TABLE IF NOT EXISTS
                `statement` (
                    `id` INT PRIMARY_KEY AUTO_INCREMENT,
                    `action_id` INT NOT NULL
                )
            ;
        ');
        
    }
    
    private function statementPart() {
        
        $this->database->query('
            CREATE TABLE IF NOT EXISTS
                `statement_part` (
                    `id` INT PRIMARY_KEY AUTO_INCREMENT,
                    `statement_id` INT NOT NULL,
                    `part_id` INT NOT NULL
                )
            ;
        ');
        
    }
    
}
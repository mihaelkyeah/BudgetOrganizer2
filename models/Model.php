<?php
class Model
{
    public $modelName;
    protected $db = null;
    public function __construct($modelName = 'model')
    {
        $this->modelName = $modelName;
        $this->db = $this->setDb();
    }
    public function sanityCheck()
    {
        return 'Hola desde modelo '.$this->modelName;
    }
    protected function getDb()
    {
        if(!isset($this->db))
            $this->db = $this->setDb();
        return $this->db;
    }
    private function setDb()
    {
        $databaseFile = getcwd().'/db/db.sqlite';
        $dbExists = file_exists($databaseFile);
        $db = new SQLite3($databaseFile);
        if(!$dbExists)
        {
            $db->exec('BEGIN TRANSACTION');
            // Create the "ingresos" table
            $db->exec('CREATE TABLE ingresos (
                id INTEGER PRIMARY KEY,
                nombre VARCHAR(255),
                detalle TEXT,
                precio REAL
            )');

            // Create the "egresos" table
            $db->exec('CREATE TABLE egresos (
                id INTEGER PRIMARY KEY,
                nombre VARCHAR(255),
                detalle TEXT,
                precio REAL
            )');
            $db->exec('COMMIT');
        }
        $db->close();
        return $db;
    }
}
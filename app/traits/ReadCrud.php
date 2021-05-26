<?php

namespace App\traits;

use PDOException;

trait ReadCrud
{
    /**
     * Returns an array
     */
    public function findAll()
    {
        try {
            $query = $this->instaceConn->query('select * from ' . $this->table);
            return $query->fetchAll();
        } catch (PDOException $e) {
            var_dump($e->getMessage());
        }
    }
    /**
     * Returns an objeto
     */
    public function find()
    {
        try {
            $query = $this->instaceConn->query('select * from ' . $this->table);
            return $query->fetch();
        } catch (PDOException $e) {
            var_dump($e->getMessage());
        }
    }

    public function findBy($field, $value)
    {
        try {
            $prepared = $this->instaceConn->prepare("SELECT * FROM {$this->table} WHERE {$field}= :{$field}");
            $prepared->bindValue(":{$field}", $value);
            $prepared->execute();

            return $prepared->fetch();
        } catch (PDOException $e) {
            var_dump($e->getMessage());
        }
    }
    public function findByAll($field, $value)
    {
        try {
            $prepared = $this->instaceConn->prepare("SELECT * FROM {$this->table} WHERE {$field}= :{$field}");
            $prepared->bindValue(":{$field}", $value);
            $prepared->execute();

            return $prepared->fetchAll();
        } catch (PDOException $e) {
            var_dump($e->getMessage());
        }
    }
}

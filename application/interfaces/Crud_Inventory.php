<?php
namespace App\Interfaces;
defined("APPPATH") OR die("Access denied");


interface Crud_Inventory
{
     
    public static function getAll();
    public static function getMake();
    public static function getModel($Make);
    
    public static function insert($data);
    public static function update($data);
    public static function delete($id);
}

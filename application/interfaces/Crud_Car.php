<?php
namespace App\Interfaces;
defined("APPPATH") OR die("Access denied");


interface Crud_Car
{
    public static function getMake();
    public static function getModel($Make);
    public static function getLast3();
    public static function getAll();
    public static function getByVIN($VIN);
    public static function getCarsByMake($Make);
    public static function getCarsByBody($Body);
   
    public static function insert($data);
    public static function update($data);
    public static function delete($id);
}

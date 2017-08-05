<?php
namespace App\Interfaces;

defined("APPPATH") OR die("Access denied");

interface Crud
{
    public static function getAll();
    public static function getById($id);
    public static function insert($data);
    public static function update($data);
    public static function delete($id);
    public static function select($username,$password);
    public static function getDetails($VIN);
    public static function getmakemodelvin($VIN);
    public static function getDetailsMakeModel($VIN,$make,$model);
    public static function import();
    public static function getAllTeamHialeah();
    public static function getAllTeamHialeahGardens();
    public static function getAllTeamDoral();
    public static function ourservices();
   
}
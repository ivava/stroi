<?php
/**
 * Created by PhpStorm.
 * User: Ann
 * Date: 13.02.2017
 * Time: 22:41
 */

namespace App;

/**
 * интерфейс для всех обьектов, все регионы города отделы должны реализовать его
 * Interface iObject
 * @package App
 */
interface iObject
{

    public function getParent();

    public function getChilds();

    public function getId();

    public function makeHierarhy();

    public function hasSqard();

    public function getSquard();

}
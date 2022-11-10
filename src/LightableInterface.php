<?php


interface LightableInterface
{
 
    public function switchOn(bool $bool): bool;
    public function switchOff(bool $bool): bool;
}
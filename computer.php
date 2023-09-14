<?php

class computer
{
    private $cpu;
    private $ram;
    private $hdd;
    
    public function __construct($cpu, $ram, $hdd)
    {
        $this->cpu = $cpu;
        $this->ram = $ram;
        $this->hdd = $hdd;
    }
    
    //utilizziamo $this -> per accedere ai componenti della classe
    function setCpu($cpu) 
    {
        $this->cpu = $cpu;
    }

    function getCpu() 
    {
        return $this->cpu;
    }

    function setRam($ram) 
    {
        $this->ram = $ram;
    }

    function getRam() 
    {
        return $this->ram;
    } 
    
    function setHdd($hdd) 
    {
        $this->hdd = $hdd;
    }

    function getHdd() 
    {
        return $this->hdd;
    }
}

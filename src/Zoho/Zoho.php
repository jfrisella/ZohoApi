<?php
/**
*   Zoho Class
*/
namespace Zoho;

class Zoho
{

    public function getModule($module)
    {
        
        $namespace = "\\Zoho\\Modules\\";
        $class = $namespace . $module;
        
        if(!class_exists($class))
        {
            throw new \Exception("Zoho : getModule : Class does not exist - {$class}", 400);    
        }
        
        return new $class();
    
    }

}
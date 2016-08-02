<?php
/**
*   ApiException Tests
*/

class ApiExceptionTest extends PHPUnit_Framework_TestCase
{

    public function testApiException(){
        
        try{
        
            throw new \Zoho\ApiException("Failed", 4000);
        
        }catch(\ApiException $e){
        
            $this->assertTrue(
                ($e instanceof \Exception)
            );
            
            $this->assertEquals(
                4000,
                $e->getCode()
            );
            
            $this->assertEquals(
                strtolower("Please use Authtoken, instead of API ticket and APIkey. Failed"),
                strtolower($e->getMessage())
            );
        
        }
    
    }

}
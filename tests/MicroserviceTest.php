<?php

/**
 * Description of MicroserviceTest
 *
 * @author arturo
 */
class MicroserviceTest extends TestCase{
    
    /**
     * Service is running
     *
     * @return void
     */
    public function testService()
    {
        $responseGET = $this->call('GET', '/');
        $responsePOST = $this->call('GET', '/');
        
        $this->assertEquals(200, $responseGET->status());
        $this->assertEquals(200, $responsePOST->status());
    }
    
    /**
     * Response is ok
     *
     * @return void
     */
    public function testJson()
    {
        $responseGET = $this->call('GET', '/');
        $responsePOST = $this->call('GET', '/');
        
        
        $this->assertArrayHasKey('notas', $responseGET->original);
        $this->assertArrayHasKey('notas', $responsePOST->original);
        
        
    }
    
}

<?php 

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class DependsTest extends TestCase
{
    /**
     * undocumented function
     *
     * @return void
     */
    public function testTrue()
    {
        $this->assertTrue(true);
        return 'first';
    }

    /**
     * undocumented function
     *
     * @return void
     */
    public function testFalse()
    {
        $this->assertFalse(false);
        return 'second';
    }
    

    /**
     * @depends testTrue
     * a ordem dos depends influencia na order dos parametros na função
     * @depends testFalse
     */
    public function testDepend($a, $b)
    {
        $this->assertEquals('first', $a);
        $this->assertSame('second', $b);
    }    
}

<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class ExceptionalTest extends TestCase
{
    /**
     * undocumented function
     *
     * @return void
     */
    public function testException()
    {
        $this->expectException(InvalidArgumentException::class);
    }
    
}

<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class DataProviderTest extends TestCase
{
	/**
	* @dataProvider dataSetBolado
	*/
	public function testSum($s1, $s2, $expected)
	{
		$this->assertSame($expected, $s1 + $s2);
	}

	/**
	 * @dataProvider namesAndLengths
	 */
	public function testLength($name, $numOfChars)
	{
		$this->assertSame($numOfChars, strlen($name));
	}

    /**
     * @dataProvider dataOne
     * @dataProvider dataTwo 
     */
    public function testMoreThanOneDataSet($p1, $p2, $expected): void
    {
        // the test will run as same for both datasets
        $this->assertSame($expected, $p1 + $p2);
    }

    /**
     * undocumented function
     *
     * @return void
     */
    public function dataOne()
    {
        return [
            'one plus one' => [1, 1, 2],
            'add two to six' =>[2, 4, 6]
        ];
    }

    public function dataTwo()
    {
        return [
            'remove one for one' => [-1, 1, 0],
            'remove 6 from two' => [-6, 2, -4]
        ];
    }
    
    

    /**
     * @dataProvider products
     */
    public function testProduct($p1, $p2, $result)
    {
        $this->assertSame($result, $p1 * $p2);
    }

    /**
     * Qualquer dataProvider PRECISA ser um array ou um array de arrays.
     */
    public function products()
    {
        // Quando são escritos assim os erros contem a linha onde o teste falha, se alguma falha ocorrer
        return [
            'product of one' => [1, 1, 2],
        ];
    }

	public function namesAndLengths()
	{
		return [
            ['andre', 5],
            ['yasmim', 6],
            ['fabricio', 8]
		];
	}

	/**
	 * Neste caso o tese somara os dois primeiros itens da lista 
	 * e irá comparar com o ultimo item do array
	 */
	public function dataSetBolado()
	{
		return [
			[0, 0, 0],
			[0, 1, 1],
			[1, 0, 1],
			[2, 3, 4]
		];
	}
}

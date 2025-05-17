<?php

namespace Tests\Phpuef\Currency;

use Phpuef\Currency\Code;
use Phpuef\Currency\Currencies;
use Phpuef\Currency\Symbol;
use Phpuef\Currency\UniqueSymbol;
use PHPUnit\Framework\TestCase;

class SymbolTest extends TestCase
{
    public function testCases()
    {
        $cases = Symbol::cases();

        $this->assertCount(160, $cases);
    }

    public function testFromOk()
    {
        $symbol = Symbol::from(Code::CZK->name);
        $this->assertEquals(Symbol::CZK, $symbol);
    }

    public function testExists()
    {
        $this->assertTrue(Symbol::exists(Code::CZK->name));
        $this->assertFalse(Symbol::exists("NONE"));
    }

    public function testUniqueGetCurrency()
    {
        $list = Currencies::List();
        $expected = $list[Code::CZK->name];

        $this->assertEquals($expected, UniqueSymbol::CZK->GetCurrency());
    }

    public function testUniqueFindCurrencyException()
    {

        $this->expectExceptionMessage("currency with unique symbol TEST not found");
        $this->expectException(\InvalidArgumentException::class);

        UniqueSymbol::FindCurrency("TEST");
    }
}

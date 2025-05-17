<?php

namespace Tests\Phpuef\Currency;

use Phpuef\Currency\Code;
use Phpuef\Currency\Currencies;
use Phpuef\Currency\Symbol;
use Phpuef\Currency\UniqueSymbol;
use PHPUnit\Framework\TestCase;

class CurrenciesTest extends TestCase
{
    public function testList()
    {
        $list = Currencies::List();

        $this->assertCount(160, $list);
    }

    public function testFindCurrency()
    {
        $list = Currencies::List();
        $valid = Currencies::FindCurrency(Code::CZK->value);

        $this->assertEquals($list[Code::CZK->name], $valid);
    }

    public function testFindCurrencyException()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("currency with code Test not found");
        Currencies::FindCurrency("Test");
    }

    public function testValidateCurrency()
    {
        $this->assertTrue(Currencies::ValidateCurrency(Code::CZK->value));
        $this->assertFalse(Currencies::ValidateCurrency("Test"));
    }

    public function testFindCurrenciesBySymbol()
    {
        $valid = Currencies::FindCurrency(Code::CZK->value);
        $expected = [Code::CZK->name => $valid];

        $this->assertEquals($expected, Currencies::FindCurrenciesBySymbol(Symbol::CZK));
    }

    public function testFindUniqueSymbolCurrency()
    {
        $expected = Currencies::FindCurrency(Code::CZK->value);

        $this->assertEquals($expected, Currencies::FindUniqueSymbolCurrency(Symbol::CZK));
    }
}

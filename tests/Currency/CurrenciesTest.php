<?php declare(strict_types = 1);

namespace Tests\Phpuef\Currency;

use Phpuef\Currency\Code;
use Phpuef\Currency\Currencies;
use Phpuef\Currency\Symbol;
use PHPUnit\Framework\TestCase;

class CurrenciesTest extends TestCase
{

    public function testList(): void
    {
        $list = Currencies::List();

        self::assertCount(160, $list);
    }

    public function testFindCurrency(): void
    {
        $list = Currencies::List();
        $valid = Currencies::FindCurrency(Code::CZK->value);

        self::assertEquals($list[Code::CZK->name], $valid);
    }

    public function testFindCurrencyException(): void
    {
        self::expectException(\InvalidArgumentException::class);
        self::expectExceptionMessage('currency with code Test not found');
        Currencies::FindCurrency('Test');
    }

    public function testValidateCurrency(): void
    {
        self::assertTrue(Currencies::ValidateCurrency(Code::CZK->value));
        self::assertFalse(Currencies::ValidateCurrency('Test'));
    }

    public function testFindCurrenciesBySymbol(): void
    {
        $valid = Currencies::FindCurrency(Code::CZK->value);
        $expected = [Code::CZK->name => $valid];

        self::assertEquals($expected, Currencies::FindCurrenciesBySymbol(Symbol::CZK));
    }

    public function testFindUniqueSymbolCurrency(): void
    {
        $expected = Currencies::FindCurrency(Code::CZK->value);

        self::assertEquals($expected, Currencies::FindUniqueSymbolCurrency(Symbol::CZK));
    }

}

<?php

namespace Tests\Phpuef\Currency;

use Phpuef\Currency\Code;
use Phpuef\Currency\Currencies;
use Phpuef\Currency\Symbol;
use Phpuef\Currency\UniqueSymbol;
use PHPUnit\Framework\TestCase;

class SymbolTest extends TestCase
{
    public function testCases(): void
    {
        $cases = Symbol::cases();

        self::assertCount(160, $cases);
    }

    public function testFromOk(): void
    {
        $symbol = Symbol::from(Code::CZK->name);
        self::assertSame(Symbol::CZK, $symbol);
    }

    public function testExists(): void
    {
        self::assertTrue(Symbol::exists(Code::CZK->name));
        self::assertFalse(Symbol::exists("NONE"));
    }

    public function testUniqueGetCurrency(): void
    {
        $list = Currencies::List();
        $expected = $list[Code::CZK->name];

        self::assertEquals($expected, UniqueSymbol::CZK->GetCurrency());
    }

    public function testUniqueFindCurrencyException(): void
    {

        self::expectExceptionMessage("currency with unique symbol TEST not found");
        self::expectException(\InvalidArgumentException::class);

        UniqueSymbol::FindCurrency("TEST");
    }
}

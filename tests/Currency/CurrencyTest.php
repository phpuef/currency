<?php declare(strict_types = 1);

namespace Tests\Phpuef\Currency;

use Phpuef\Currency\Code;
use Phpuef\Currency\Currency;
use Phpuef\Currency\Name;
use Phpuef\Currency\Symbol;
use PHPUnit\Framework\TestCase;

class CurrencyTest extends TestCase
{

    public function testHasUniqueSymbol(): void
    {
        $currency = Currency::create(Code::CZK, Name::CZK, Symbol::CZK, 2);

        self::assertTrue($currency->HasUniqueSymbol());

        $invalidCurrency = Currency::create(Code::USD, Name::USD, Symbol::USD, 2);
        self::assertFalse($invalidCurrency->HasUniqueSymbol());
    }

}

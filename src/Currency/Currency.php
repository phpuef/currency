<?php declare(strict_types = 1);

namespace Phpuef\Currency;

final class Currency
{

    public function __construct(
        public Code $code,
        public Name $name,
        public string $symbol,
        public int $minorUnits
    )
    {
        // Construct
    }

    public static function create(Code $code, Name $name, string $symbol, int $minorUnits): Currency
    {
        return new Currency($code, $name, $symbol, $minorUnits);
    }

    public function HasUniqueSymbol(): bool
    {
        try {
            UniqueSymbol::FindCurrency($this->symbol);
        } catch (\InvalidArgumentException $exception) {
            return false;
        }

        return true;
    }

}

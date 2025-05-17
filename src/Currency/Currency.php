<?php

namespace Phpuef\Currency;

final class Currency
{
    public function __construct(
        public Code $code {
            get {
                return $this->code;
            }
        },
        public Name $name {
            get {
                return $this->name;
            }
        },
        public string $symbol {
            get {
                return $this->symbol;
            }
        },
        public int $minorUnits {
            get {
                return $this->minorUnits;
            }
        }
    ) {}

    public static function create(Code $code, Name $name, string $symbol, int $minorUnits) : Currency {
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

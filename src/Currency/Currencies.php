<?php declare(strict_types = 1);

namespace Phpuef\Currency;

final class Currencies
{

    /** @var Currency[]|array<string, Currency> */
    public static ?array $currencies = null;

    /**
     * @return array<string, Currency>|Currency[]
     */
    public static function List(): array
    {
        if (self::$currencies === null) {
            self::$currencies = [
                Code::AED->name => new Currency(Code::AED, Name::AED, Symbol::AED, 2),
                Code::AFN->name => new Currency(Code::AFN, Name::AFN, Symbol::AFN, 2),
                Code::ALL->name => new Currency(Code::ALL, Name::ALL, Symbol::ALL, 2),
                Code::AMD->name => new Currency(Code::AMD, Name::AMD, Symbol::AMD, 2),
                Code::ANG->name => new Currency(Code::ANG, Name::ANG, Symbol::ANG, 2),
                Code::AOA->name => new Currency(Code::AOA, Name::AOA, Symbol::AOA, 2),
                Code::ARS->name => new Currency(Code::ARS, Name::ARS, Symbol::ARS, 2),
                Code::AUD->name => new Currency(Code::AUD, Name::AUD, Symbol::AUD, 2),
                Code::AWG->name => new Currency(Code::AWG, Name::AWG, Symbol::AWG, 2),
                Code::AZN->name => new Currency(Code::AZN, Name::AZN, Symbol::AZN, 2),
                Code::BAM->name => new Currency(Code::BAM, Name::BAM, Symbol::BAM, 2),
                Code::BBD->name => new Currency(Code::BBD, Name::BBD, Symbol::BBD, 2),
                Code::BDT->name => new Currency(Code::BDT, Name::BDT, Symbol::BDT, 2),
                Code::BGN->name => new Currency(Code::BGN, Name::BGN, Symbol::BGN, 2),
                Code::BHD->name => new Currency(Code::BHD, Name::BHD, Symbol::BHD, 3),
                Code::BIF->name => new Currency(Code::BIF, Name::BIF, Symbol::BIF, 0),
                Code::BMD->name => new Currency(Code::BMD, Name::BMD, Symbol::BMD, 2),
                Code::BND->name => new Currency(Code::BND, Name::BND, Symbol::BND, 2),
                Code::BOB->name => new Currency(Code::BOB, Name::BOB, Symbol::BOB, 2),
                Code::BRL->name => new Currency(Code::BRL, Name::BRL, Symbol::BRL, 2),
                Code::BSD->name => new Currency(Code::BSD, Name::BSD, Symbol::BSD, 2),
                Code::BTN->name => new Currency(Code::BTN, Name::BTN, Symbol::BTN, 2),
                Code::BWP->name => new Currency(Code::BWP, Name::BWP, Symbol::BWP, 2),
                Code::BYN->name => new Currency(Code::BYN, Name::BYN, Symbol::BYN, 2),
                Code::BZD->name => new Currency(Code::BZD, Name::BZD, Symbol::BZD, 2),
                Code::CAD->name => new Currency(Code::CAD, Name::CAD, Symbol::CAD, 2),
                Code::CDF->name => new Currency(Code::CDF, Name::CDF, Symbol::CDF, 2),
                Code::CHF->name => new Currency(Code::CHF, Name::CHF, Symbol::CHF, 2),
                Code::CLP->name => new Currency(Code::CLP, Name::CLP, Symbol::CLP, 0),
                Code::CNY->name => new Currency(Code::CNY, Name::CNY, Symbol::CNY, 2),
                Code::COP->name => new Currency(Code::COP, Name::COP, Symbol::COP, 2),
                Code::CRC->name => new Currency(Code::CRC, Name::CRC, Symbol::CRC, 2),
                Code::CUC->name => new Currency(Code::CUC, Name::CUC, Symbol::CUC, 2),
                Code::CUP->name => new Currency(Code::CUP, Name::CUP, Symbol::CUP, 2),
                Code::CVE->name => new Currency(Code::CVE, Name::CVE, Symbol::CVE, 2),
                Code::CZK->name => new Currency(Code::CZK, Name::CZK, Symbol::CZK, 2),
                Code::DJF->name => new Currency(Code::DJF, Name::DJF, Symbol::DJF, 0),
                Code::DKK->name => new Currency(Code::DKK, Name::DKK, Symbol::DKK, 2),
                Code::DOP->name => new Currency(Code::DOP, Name::DOP, Symbol::DOP, 2),
                Code::DZD->name => new Currency(Code::DZD, Name::DZD, Symbol::DZD, 2),
                Code::EGP->name => new Currency(Code::EGP, Name::EGP, Symbol::EGP, 2),
                Code::ERN->name => new Currency(Code::ERN, Name::ERN, Symbol::ERN, 2),
                Code::ETB->name => new Currency(Code::ETB, Name::ETB, Symbol::ETB, 2),
                Code::EUR->name => new Currency(Code::EUR, Name::EUR, Symbol::EUR, 2),
                Code::FJD->name => new Currency(Code::FJD, Name::FJD, Symbol::FJD, 2),
                Code::FKP->name => new Currency(Code::FKP, Name::FKP, Symbol::FKP, 2),
                Code::FOK->name => new Currency(Code::FOK, Name::FOK, Symbol::FOK, 2),
                Code::GBP->name => new Currency(Code::GBP, Name::GBP, Symbol::GBP, 2),
                Code::GEL->name => new Currency(Code::GEL, Name::GEL, Symbol::GEL, 2),
                Code::GGP->name => new Currency(Code::GGP, Name::GGP, Symbol::GGP, 2),
                Code::GHS->name => new Currency(Code::GHS, Name::GHS, Symbol::GHS, 2),
                Code::GIP->name => new Currency(Code::GIP, Name::GIP, Symbol::GIP, 2),
                Code::GMD->name => new Currency(Code::GMD, Name::GMD, Symbol::GMD, 2),
                Code::GNF->name => new Currency(Code::GNF, Name::GNF, Symbol::GNF, 0),
                Code::GTQ->name => new Currency(Code::GTQ, Name::GTQ, Symbol::GTQ, 2),
                Code::GYD->name => new Currency(Code::GYD, Name::GYD, Symbol::GYD, 2),
                Code::HKD->name => new Currency(Code::HKD, Name::HKD, Symbol::HKD, 2),
                Code::HNL->name => new Currency(Code::HNL, Name::HNL, Symbol::HNL, 2),
                Code::HRK->name => new Currency(Code::HRK, Name::HRK, Symbol::HRK, 2),
                Code::HTG->name => new Currency(Code::HTG, Name::HTG, Symbol::HTG, 2),
                Code::HUF->name => new Currency(Code::HUF, Name::HUF, Symbol::HUF, 2),
                Code::IDR->name => new Currency(Code::IDR, Name::IDR, Symbol::IDR, 2),
                Code::ILS->name => new Currency(Code::ILS, Name::ILS, Symbol::ILS, 2),
                Code::INR->name => new Currency(Code::INR, Name::INR, Symbol::INR, 2),
                Code::IQD->name => new Currency(Code::IQD, Name::IQD, Symbol::IQD, 3),
                Code::IRR->name => new Currency(Code::IRR, Name::IRR, Symbol::IRR, 2),
                Code::ISK->name => new Currency(Code::ISK, Name::ISK, Symbol::ISK, 0),
                Code::JMD->name => new Currency(Code::JMD, Name::JMD, Symbol::JMD, 2),
                Code::JOD->name => new Currency(Code::JOD, Name::JOD, Symbol::JOD, 3),
                Code::JPY->name => new Currency(Code::JPY, Name::JPY, Symbol::JPY, 0),
                Code::KES->name => new Currency(Code::KES, Name::KES, Symbol::KES, 2),
                Code::KGS->name => new Currency(Code::KGS, Name::KGS, Symbol::KGS, 2),
                Code::KHR->name => new Currency(Code::KHR, Name::KHR, Symbol::KHR, 2),
                Code::KMF->name => new Currency(Code::KMF, Name::KMF, Symbol::KMF, 0),
                Code::KPW->name => new Currency(Code::KPW, Name::KPW, Symbol::KPW, 2),
                Code::KRW->name => new Currency(Code::KRW, Name::KRW, Symbol::KRW, 0),
                Code::KWD->name => new Currency(Code::KWD, Name::KWD, Symbol::KWD, 3),
                Code::KYD->name => new Currency(Code::KYD, Name::KYD, Symbol::KYD, 2),
                Code::KZT->name => new Currency(Code::KZT, Name::KZT, Symbol::KZT, 2),
                Code::LAK->name => new Currency(Code::LAK, Name::LAK, Symbol::LAK, 2),
                Code::LBP->name => new Currency(Code::LBP, Name::LBP, Symbol::LBP, 2),
                Code::LKR->name => new Currency(Code::LKR, Name::LKR, Symbol::LKR, 2),
                Code::LRD->name => new Currency(Code::LRD, Name::LRD, Symbol::LRD, 2),
                Code::LSL->name => new Currency(Code::LSL, Name::LSL, Symbol::LSL, 2),
                Code::LYD->name => new Currency(Code::LYD, Name::LYD, Symbol::LYD, 3),
                Code::MAD->name => new Currency(Code::MAD, Name::MAD, Symbol::MAD, 2),
                Code::MDL->name => new Currency(Code::MDL, Name::MDL, Symbol::MDL, 2),
                Code::MGA->name => new Currency(Code::MGA, Name::MGA, Symbol::MGA, 2),
                Code::MKD->name => new Currency(Code::MKD, Name::MKD, Symbol::MKD, 2),
                Code::MMK->name => new Currency(Code::MMK, Name::MMK, Symbol::MMK, 2),
                Code::MNT->name => new Currency(Code::MNT, Name::MNT, Symbol::MNT, 2),
                Code::MOP->name => new Currency(Code::MOP, Name::MOP, Symbol::MOP, 2),
                Code::MRU->name => new Currency(Code::MRU, Name::MRU, Symbol::MRU, 2),
                Code::MUR->name => new Currency(Code::MUR, Name::MUR, Symbol::MUR, 2),
                Code::MVR->name => new Currency(Code::MVR, Name::MVR, Symbol::MVR, 2),
                Code::MWK->name => new Currency(Code::MWK, Name::MWK, Symbol::MWK, 2),
                Code::MXN->name => new Currency(Code::MXN, Name::MXN, Symbol::MXN, 2),
                Code::MYR->name => new Currency(Code::MYR, Name::MYR, Symbol::MYR, 2),
                Code::MZN->name => new Currency(Code::MZN, Name::MZN, Symbol::MZN, 2),
                Code::NAD->name => new Currency(Code::NAD, Name::NAD, Symbol::NAD, 2),
                Code::NGN->name => new Currency(Code::NGN, Name::NGN, Symbol::NGN, 2),
                Code::NIO->name => new Currency(Code::NIO, Name::NIO, Symbol::NIO, 2),
                Code::NOK->name => new Currency(Code::NOK, Name::NOK, Symbol::NOK, 2),
                Code::NPR->name => new Currency(Code::NPR, Name::NPR, Symbol::NPR, 2),
                Code::NZD->name => new Currency(Code::NZD, Name::NZD, Symbol::NZD, 2),
                Code::OMR->name => new Currency(Code::OMR, Name::OMR, Symbol::OMR, 3),
                Code::PAB->name => new Currency(Code::PAB, Name::PAB, Symbol::PAB, 2),
                Code::PEN->name => new Currency(Code::PEN, Name::PEN, Symbol::PEN, 2),
                Code::PGK->name => new Currency(Code::PGK, Name::PGK, Symbol::PGK, 2),
                Code::PHP->name => new Currency(Code::PHP, Name::PHP, Symbol::PHP, 2),
                Code::PKR->name => new Currency(Code::PKR, Name::PKR, Symbol::PKR, 2),
                Code::PLN->name => new Currency(Code::PLN, Name::PLN, Symbol::PLN, 2),
                Code::PYG->name => new Currency(Code::PYG, Name::PYG, Symbol::PYG, 0),
                Code::QAR->name => new Currency(Code::QAR, Name::QAR, Symbol::QAR, 2),
                Code::RON->name => new Currency(Code::RON, Name::RON, Symbol::RON, 2),
                Code::RSD->name => new Currency(Code::RSD, Name::RSD, Symbol::RSD, 2),
                Code::RUB->name => new Currency(Code::RUB, Name::RUB, Symbol::RUB, 2),
                Code::RWF->name => new Currency(Code::RWF, Name::RWF, Symbol::RWF, 0),
                Code::SAR->name => new Currency(Code::SAR, Name::SAR, Symbol::SAR, 2),
                Code::SBD->name => new Currency(Code::SBD, Name::SBD, Symbol::SBD, 2),
                Code::SCR->name => new Currency(Code::SCR, Name::SCR, Symbol::SCR, 2),
                Code::SDG->name => new Currency(Code::SDG, Name::SDG, Symbol::SDG, 2),
                Code::SEK->name => new Currency(Code::SEK, Name::SEK, Symbol::SEK, 2),
                Code::SGD->name => new Currency(Code::SGD, Name::SGD, Symbol::SGD, 2),
                Code::SHP->name => new Currency(Code::SHP, Name::SHP, Symbol::SHP, 2),
                Code::SLE->name => new Currency(Code::SLE, Name::SLE, Symbol::SLE, 2),
                Code::SLL->name => new Currency(Code::SLL, Name::SLL, Symbol::SLL, 2),
                Code::SOS->name => new Currency(Code::SOS, Name::SOS, Symbol::SOS, 2),
                Code::SRD->name => new Currency(Code::SRD, Name::SRD, Symbol::SRD, 2),
                Code::SSP->name => new Currency(Code::SSP, Name::SSP, Symbol::SSP, 2),
                Code::STN->name => new Currency(Code::STN, Name::STN, Symbol::STN, 2),
                Code::SYP->name => new Currency(Code::SYP, Name::SYP, Symbol::SYP, 2),
                Code::SZL->name => new Currency(Code::SZL, Name::SZL, Symbol::SZL, 2),
                Code::THB->name => new Currency(Code::THB, Name::THB, Symbol::THB, 2),
                Code::TJS->name => new Currency(Code::TJS, Name::TJS, Symbol::TJS, 2),
                Code::TMT->name => new Currency(Code::TMT, Name::TMT, Symbol::TMT, 2),
                Code::TND->name => new Currency(Code::TND, Name::TND, Symbol::TND, 3),
                Code::TOP->name => new Currency(Code::TOP, Name::TOP, Symbol::TOP, 2),
                Code::TRY->name => new Currency(Code::TRY, Name::TRY, Symbol::TRY, 2),
                Code::TTD->name => new Currency(Code::TTD, Name::TTD, Symbol::TTD, 2),
                Code::TVD->name => new Currency(Code::TVD, Name::TVD, Symbol::TVD, 2),
                Code::TWD->name => new Currency(Code::TWD, Name::TWD, Symbol::TWD, 2),
                Code::TZS->name => new Currency(Code::TZS, Name::TZS, Symbol::TZS, 2),
                Code::UAH->name => new Currency(Code::UAH, Name::UAH, Symbol::UAH, 2),
                Code::UGX->name => new Currency(Code::UGX, Name::UGX, Symbol::UGX, 0),
                Code::USD->name => new Currency(Code::USD, Name::USD, Symbol::USD, 2),
                Code::UYU->name => new Currency(Code::UYU, Name::UYU, Symbol::UYU, 2),
                Code::UZS->name => new Currency(Code::UZS, Name::UZS, Symbol::UZS, 2),
                Code::VES->name => new Currency(Code::VES, Name::VES, Symbol::VES, 2),
                Code::VND->name => new Currency(Code::VND, Name::VND, Symbol::VND, 0),
                Code::VUV->name => new Currency(Code::VUV, Name::VUV, Symbol::VUV, 0),
                Code::WST->name => new Currency(Code::WST, Name::WST, Symbol::WST, 2),
                Code::XAF->name => new Currency(Code::XAF, Name::XAF, Symbol::XAF, 0),
                Code::XCD->name => new Currency(Code::XCD, Name::XCD, Symbol::XCD, 2),
                Code::XOF->name => new Currency(Code::XOF, Name::XOF, Symbol::XOF, 0),
                Code::XPF->name => new Currency(Code::XPF, Name::XPF, Symbol::XPF, 0),
                Code::YER->name => new Currency(Code::YER, Name::YER, Symbol::YER, 2),
                Code::ZAR->name => new Currency(Code::ZAR, Name::ZAR, Symbol::ZAR, 2),
                Code::ZMW->name => new Currency(Code::ZMW, Name::ZMW, Symbol::ZMW, 2),
                Code::ZWL->name => new Currency(Code::ZWL, Name::ZWL, Symbol::ZWL, 2),
            ];
        }

        return self::$currencies;
    }

    /**
     * @throws \InvalidArgumentException
     */
    public static function FindCurrency(string $code): Currency
    {
        $upperCode = strtoupper($code);
        $list = self::List();

        $currency = $list[$upperCode] ?? null;
        if ($currency === null) {
            throw new \InvalidArgumentException(sprintf('currency with code %s not found', $code));
        }

        return $currency;
    }

    public static function ValidateCurrency(string $code): bool
    {
        try {
            self::FindCurrency($code);
        } catch (\InvalidArgumentException $exception) {
            return false;
        }

        return true;
    }

    /**
     * @return array<string, Currency>|Currency[]
     */
    public static function FindCurrenciesBySymbol(string $symbol): array
    {
        $result = [];
        $list = self::List();

        foreach ($list as $key => $currency) {
            if ($currency->symbol === $symbol) {
                $result[$key] = $currency;
            }
        }

        return $result;
    }

    /**
     * @throws \InvalidArgumentException
     */
    public static function FindUniqueSymbolCurrency(string $symbol): Currency
    {
        return UniqueSymbol::FindCurrency($symbol);
    }

}

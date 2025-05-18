<?php declare(strict_types = 1);

namespace Phpuef\Currency;

enum UniqueSymbol: string
{

    case DZD = 'د.ج';
    case KGS = 'с';
    case DOP = 'RD$';
    case KMF = 'CF';
    case TRY = '₺';
    case LBP = 'ل.ل';
    case UAH = '₴';
    case MVR = 'Rf';
    case MRU = 'UM';
    case SDG = 'ج.س.';
    case LYD = 'ل.د';
    case XOF = 'CFA';
    case NAD = 'N$';
    case LRD = 'L$';
    case LKR = 'Rs';
    case IQD = 'ع.د';
    case DJF = 'Fdj';
    case BRL = 'R$';
    case MWK = 'MK';
    case RON = 'lei';
    case AMD = '֏';
    case LAK = '₭';
    case AED = 'د.إ';
    case PYG = '₲';
    case TJS = 'ЅМ';
    case PLN = 'zł';
    case BGN = 'лв';
    case NZD = 'NZ$';
    case RUB = '₽';
    case THB = '฿';
    case VUV = 'VT';
    case MZN = 'MT';
    case ERN = 'Nfk';
    case TWD = 'NT$';
    case HUF = 'Ft';
    case FJD = 'FJ$';
    case BZD = 'BZ$';
    case MKD = 'ден';
    case XAF = 'FCFA';
    case KES = 'KSh';
    case RWF = 'FRw';
    case TOP = 'T$';
    case ILS = '₪';
    case BDT = '৳';
    case MNT = '₮';
    case RSD = 'дин';
    case KYD = 'CI$';
    case PEN = 'S/';
    case AOA = 'Kz';
    case GEL = '₾';
    case GTQ = 'Q';
    case ZAR = 'R';
    case HTG = 'G';
    case MYR = 'RM';
    case TTD = 'TT$';
    case WST = 'T';
    case TMT = 'm';
    case MGA = 'Ar';
    case NGN = '₦';
    case CZK = 'Kč';
    case INR = '₹';
    case KHR = '៛';
    case TND = 'د.ت';
    case GYD = 'G$';
    case CRC = '₡';
    case JMD = 'J$';
    case UYU = '$U';
    case CDF = 'FC';
    case HRK = 'kn';
    case MAD = 'د.م.';
    case SAR = 'ر.س';
    case STN = 'Db';
    case ZWL = 'Z$';
    case BIF = 'FBu';
    case SGD = 'S$';
    case AUD = 'A$';
    case VND = '₫';
    case CHF = 'Fr';
    case OMR = 'ر.ع.';
    case BBD = 'Bds$';
    case BHD = '.د.ب';
    case EUR = '€';
    case BAM = 'KM';
    case JOD = 'د.ا';
    case IDR = 'Rp';
    case KZT = '₸';
    case AFN = '؋';
    case GHS = '₵';
    case UZS = 'сўм';
    case KWD = 'د.ك';
    case AZN = '₼';
    case PAB = 'B/.';
    case XPF = '₣';
    case QAR = 'ر.ق';
    case GMD = 'D';
    case GNF = 'FG';
    case SBD = 'SI$';
    case BTN = 'Nu.';
    case HKD = 'HK$';

    /**
     * @throws \InvalidArgumentException
     */
    public static function FindCurrency(string $symbol): Currency
    {
        $list = Currencies::List();
        foreach (self::cases() as $uniqueSymbol) {
            if ($uniqueSymbol->value === $symbol) {
                return $list[$uniqueSymbol->name];
            }
        }

        throw new \InvalidArgumentException(sprintf('currency with unique symbol %s not found', $symbol));
    }

    public function GetCurrency(): Currency
    {
        $list = Currencies::List();

        return $list[$this->name];
    }

}

<?php
/**
 * Root Zone Database.
 *
 * This data was automatically generated by the build
 * script on 2019-04-14 04:23:31.
 *
 * @see {build/build.php}
 *
 * @author	Christopher Lass <arubacao@gmail.com>
 */

namespace Arubacao\TldChecker;

/**
 * Data Source: Root Zone Database
 * The Root Zone Database represents the delegation details of top-level domains,
 * including gTLDs such as .com, and country-code TLDs such as .uk.
 *
 * @see https://data.iana.org/TLD/tlds-alpha-by-domain.txt
 *
 * # Version 2019041300, Last Updated Sat Apr 13 07:07:01 2019 UTC
 * @version 2019041300
 */
class RootZoneDatabase
{
    const VERSION = 2019041300;

    const TLDS = [
  0 => 'AAA',
  1 => 'AARP',
  2 => 'ABARTH',
  3 => 'ABB',
  4 => 'ABBOTT',
  5 => 'ABBVIE',
  6 => 'ABC',
  7 => 'ABLE',
  8 => 'ABOGADO',
  9 => 'ABUDHABI',
  10 => 'AC',
  11 => 'ACADEMY',
  12 => 'ACCENTURE',
  13 => 'ACCOUNTANT',
  14 => 'ACCOUNTANTS',
  15 => 'ACO',
  16 => 'ACTOR',
  17 => 'AD',
  18 => 'ADAC',
  19 => 'ADS',
  20 => 'ADULT',
  21 => 'AE',
  22 => 'AEG',
  23 => 'AERO',
  24 => 'AETNA',
  25 => 'AF',
  26 => 'AFAMILYCOMPANY',
  27 => 'AFL',
  28 => 'AFRICA',
  29 => 'AG',
  30 => 'AGAKHAN',
  31 => 'AGENCY',
  32 => 'AI',
  33 => 'AIG',
  34 => 'AIGO',
  35 => 'AIRBUS',
  36 => 'AIRFORCE',
  37 => 'AIRTEL',
  38 => 'AKDN',
  39 => 'AL',
  40 => 'ALFAROMEO',
  41 => 'ALIBABA',
  42 => 'ALIPAY',
  43 => 'ALLFINANZ',
  44 => 'ALLSTATE',
  45 => 'ALLY',
  46 => 'ALSACE',
  47 => 'ALSTOM',
  48 => 'AM',
  49 => 'AMERICANEXPRESS',
  50 => 'AMERICANFAMILY',
  51 => 'AMEX',
  52 => 'AMFAM',
  53 => 'AMICA',
  54 => 'AMSTERDAM',
  55 => 'ANALYTICS',
  56 => 'ANDROID',
  57 => 'ANQUAN',
  58 => 'ANZ',
  59 => 'AO',
  60 => 'AOL',
  61 => 'APARTMENTS',
  62 => 'APP',
  63 => 'APPLE',
  64 => 'AQ',
  65 => 'AQUARELLE',
  66 => 'AR',
  67 => 'ARAB',
  68 => 'ARAMCO',
  69 => 'ARCHI',
  70 => 'ARMY',
  71 => 'ARPA',
  72 => 'ART',
  73 => 'ARTE',
  74 => 'AS',
  75 => 'ASDA',
  76 => 'ASIA',
  77 => 'ASSOCIATES',
  78 => 'AT',
  79 => 'ATHLETA',
  80 => 'ATTORNEY',
  81 => 'AU',
  82 => 'AUCTION',
  83 => 'AUDI',
  84 => 'AUDIBLE',
  85 => 'AUDIO',
  86 => 'AUSPOST',
  87 => 'AUTHOR',
  88 => 'AUTO',
  89 => 'AUTOS',
  90 => 'AVIANCA',
  91 => 'AW',
  92 => 'AWS',
  93 => 'AX',
  94 => 'AXA',
  95 => 'AZ',
  96 => 'AZURE',
  97 => 'BA',
  98 => 'BABY',
  99 => 'BAIDU',
  100 => 'BANAMEX',
  101 => 'BANANAREPUBLIC',
  102 => 'BAND',
  103 => 'BANK',
  104 => 'BAR',
  105 => 'BARCELONA',
  106 => 'BARCLAYCARD',
  107 => 'BARCLAYS',
  108 => 'BAREFOOT',
  109 => 'BARGAINS',
  110 => 'BASEBALL',
  111 => 'BASKETBALL',
  112 => 'BAUHAUS',
  113 => 'BAYERN',
  114 => 'BB',
  115 => 'BBC',
  116 => 'BBT',
  117 => 'BBVA',
  118 => 'BCG',
  119 => 'BCN',
  120 => 'BD',
  121 => 'BE',
  122 => 'BEATS',
  123 => 'BEAUTY',
  124 => 'BEER',
  125 => 'BENTLEY',
  126 => 'BERLIN',
  127 => 'BEST',
  128 => 'BESTBUY',
  129 => 'BET',
  130 => 'BF',
  131 => 'BG',
  132 => 'BH',
  133 => 'BHARTI',
  134 => 'BI',
  135 => 'BIBLE',
  136 => 'BID',
  137 => 'BIKE',
  138 => 'BING',
  139 => 'BINGO',
  140 => 'BIO',
  141 => 'BIZ',
  142 => 'BJ',
  143 => 'BLACK',
  144 => 'BLACKFRIDAY',
  145 => 'BLOCKBUSTER',
  146 => 'BLOG',
  147 => 'BLOOMBERG',
  148 => 'BLUE',
  149 => 'BM',
  150 => 'BMS',
  151 => 'BMW',
  152 => 'BN',
  153 => 'BNL',
  154 => 'BNPPARIBAS',
  155 => 'BO',
  156 => 'BOATS',
  157 => 'BOEHRINGER',
  158 => 'BOFA',
  159 => 'BOM',
  160 => 'BOND',
  161 => 'BOO',
  162 => 'BOOK',
  163 => 'BOOKING',
  164 => 'BOSCH',
  165 => 'BOSTIK',
  166 => 'BOSTON',
  167 => 'BOT',
  168 => 'BOUTIQUE',
  169 => 'BOX',
  170 => 'BR',
  171 => 'BRADESCO',
  172 => 'BRIDGESTONE',
  173 => 'BROADWAY',
  174 => 'BROKER',
  175 => 'BROTHER',
  176 => 'BRUSSELS',
  177 => 'BS',
  178 => 'BT',
  179 => 'BUDAPEST',
  180 => 'BUGATTI',
  181 => 'BUILD',
  182 => 'BUILDERS',
  183 => 'BUSINESS',
  184 => 'BUY',
  185 => 'BUZZ',
  186 => 'BV',
  187 => 'BW',
  188 => 'BY',
  189 => 'BZ',
  190 => 'BZH',
  191 => 'CA',
  192 => 'CAB',
  193 => 'CAFE',
  194 => 'CAL',
  195 => 'CALL',
  196 => 'CALVINKLEIN',
  197 => 'CAM',
  198 => 'CAMERA',
  199 => 'CAMP',
  200 => 'CANCERRESEARCH',
  201 => 'CANON',
  202 => 'CAPETOWN',
  203 => 'CAPITAL',
  204 => 'CAPITALONE',
  205 => 'CAR',
  206 => 'CARAVAN',
  207 => 'CARDS',
  208 => 'CARE',
  209 => 'CAREER',
  210 => 'CAREERS',
  211 => 'CARS',
  212 => 'CARTIER',
  213 => 'CASA',
  214 => 'CASE',
  215 => 'CASEIH',
  216 => 'CASH',
  217 => 'CASINO',
  218 => 'CAT',
  219 => 'CATERING',
  220 => 'CATHOLIC',
  221 => 'CBA',
  222 => 'CBN',
  223 => 'CBRE',
  224 => 'CBS',
  225 => 'CC',
  226 => 'CD',
  227 => 'CEB',
  228 => 'CENTER',
  229 => 'CEO',
  230 => 'CERN',
  231 => 'CF',
  232 => 'CFA',
  233 => 'CFD',
  234 => 'CG',
  235 => 'CH',
  236 => 'CHANEL',
  237 => 'CHANNEL',
  238 => 'CHARITY',
  239 => 'CHASE',
  240 => 'CHAT',
  241 => 'CHEAP',
  242 => 'CHINTAI',
  243 => 'CHRISTMAS',
  244 => 'CHROME',
  245 => 'CHRYSLER',
  246 => 'CHURCH',
  247 => 'CI',
  248 => 'CIPRIANI',
  249 => 'CIRCLE',
  250 => 'CISCO',
  251 => 'CITADEL',
  252 => 'CITI',
  253 => 'CITIC',
  254 => 'CITY',
  255 => 'CITYEATS',
  256 => 'CK',
  257 => 'CL',
  258 => 'CLAIMS',
  259 => 'CLEANING',
  260 => 'CLICK',
  261 => 'CLINIC',
  262 => 'CLINIQUE',
  263 => 'CLOTHING',
  264 => 'CLOUD',
  265 => 'CLUB',
  266 => 'CLUBMED',
  267 => 'CM',
  268 => 'CN',
  269 => 'CO',
  270 => 'COACH',
  271 => 'CODES',
  272 => 'COFFEE',
  273 => 'COLLEGE',
  274 => 'COLOGNE',
  275 => 'COM',
  276 => 'COMCAST',
  277 => 'COMMBANK',
  278 => 'COMMUNITY',
  279 => 'COMPANY',
  280 => 'COMPARE',
  281 => 'COMPUTER',
  282 => 'COMSEC',
  283 => 'CONDOS',
  284 => 'CONSTRUCTION',
  285 => 'CONSULTING',
  286 => 'CONTACT',
  287 => 'CONTRACTORS',
  288 => 'COOKING',
  289 => 'COOKINGCHANNEL',
  290 => 'COOL',
  291 => 'COOP',
  292 => 'CORSICA',
  293 => 'COUNTRY',
  294 => 'COUPON',
  295 => 'COUPONS',
  296 => 'COURSES',
  297 => 'CR',
  298 => 'CREDIT',
  299 => 'CREDITCARD',
  300 => 'CREDITUNION',
  301 => 'CRICKET',
  302 => 'CROWN',
  303 => 'CRS',
  304 => 'CRUISE',
  305 => 'CRUISES',
  306 => 'CSC',
  307 => 'CU',
  308 => 'CUISINELLA',
  309 => 'CV',
  310 => 'CW',
  311 => 'CX',
  312 => 'CY',
  313 => 'CYMRU',
  314 => 'CYOU',
  315 => 'CZ',
  316 => 'DABUR',
  317 => 'DAD',
  318 => 'DANCE',
  319 => 'DATA',
  320 => 'DATE',
  321 => 'DATING',
  322 => 'DATSUN',
  323 => 'DAY',
  324 => 'DCLK',
  325 => 'DDS',
  326 => 'DE',
  327 => 'DEAL',
  328 => 'DEALER',
  329 => 'DEALS',
  330 => 'DEGREE',
  331 => 'DELIVERY',
  332 => 'DELL',
  333 => 'DELOITTE',
  334 => 'DELTA',
  335 => 'DEMOCRAT',
  336 => 'DENTAL',
  337 => 'DENTIST',
  338 => 'DESI',
  339 => 'DESIGN',
  340 => 'DEV',
  341 => 'DHL',
  342 => 'DIAMONDS',
  343 => 'DIET',
  344 => 'DIGITAL',
  345 => 'DIRECT',
  346 => 'DIRECTORY',
  347 => 'DISCOUNT',
  348 => 'DISCOVER',
  349 => 'DISH',
  350 => 'DIY',
  351 => 'DJ',
  352 => 'DK',
  353 => 'DM',
  354 => 'DNP',
  355 => 'DO',
  356 => 'DOCS',
  357 => 'DOCTOR',
  358 => 'DODGE',
  359 => 'DOG',
  360 => 'DOMAINS',
  361 => 'DOT',
  362 => 'DOWNLOAD',
  363 => 'DRIVE',
  364 => 'DTV',
  365 => 'DUBAI',
  366 => 'DUCK',
  367 => 'DUNLOP',
  368 => 'DUNS',
  369 => 'DUPONT',
  370 => 'DURBAN',
  371 => 'DVAG',
  372 => 'DVR',
  373 => 'DZ',
  374 => 'EARTH',
  375 => 'EAT',
  376 => 'EC',
  377 => 'ECO',
  378 => 'EDEKA',
  379 => 'EDU',
  380 => 'EDUCATION',
  381 => 'EE',
  382 => 'EG',
  383 => 'EMAIL',
  384 => 'EMERCK',
  385 => 'ENERGY',
  386 => 'ENGINEER',
  387 => 'ENGINEERING',
  388 => 'ENTERPRISES',
  389 => 'EPSON',
  390 => 'EQUIPMENT',
  391 => 'ER',
  392 => 'ERICSSON',
  393 => 'ERNI',
  394 => 'ES',
  395 => 'ESQ',
  396 => 'ESTATE',
  397 => 'ESURANCE',
  398 => 'ET',
  399 => 'ETISALAT',
  400 => 'EU',
  401 => 'EUROVISION',
  402 => 'EUS',
  403 => 'EVENTS',
  404 => 'EVERBANK',
  405 => 'EXCHANGE',
  406 => 'EXPERT',
  407 => 'EXPOSED',
  408 => 'EXPRESS',
  409 => 'EXTRASPACE',
  410 => 'FAGE',
  411 => 'FAIL',
  412 => 'FAIRWINDS',
  413 => 'FAITH',
  414 => 'FAMILY',
  415 => 'FAN',
  416 => 'FANS',
  417 => 'FARM',
  418 => 'FARMERS',
  419 => 'FASHION',
  420 => 'FAST',
  421 => 'FEDEX',
  422 => 'FEEDBACK',
  423 => 'FERRARI',
  424 => 'FERRERO',
  425 => 'FI',
  426 => 'FIAT',
  427 => 'FIDELITY',
  428 => 'FIDO',
  429 => 'FILM',
  430 => 'FINAL',
  431 => 'FINANCE',
  432 => 'FINANCIAL',
  433 => 'FIRE',
  434 => 'FIRESTONE',
  435 => 'FIRMDALE',
  436 => 'FISH',
  437 => 'FISHING',
  438 => 'FIT',
  439 => 'FITNESS',
  440 => 'FJ',
  441 => 'FK',
  442 => 'FLICKR',
  443 => 'FLIGHTS',
  444 => 'FLIR',
  445 => 'FLORIST',
  446 => 'FLOWERS',
  447 => 'FLY',
  448 => 'FM',
  449 => 'FO',
  450 => 'FOO',
  451 => 'FOOD',
  452 => 'FOODNETWORK',
  453 => 'FOOTBALL',
  454 => 'FORD',
  455 => 'FOREX',
  456 => 'FORSALE',
  457 => 'FORUM',
  458 => 'FOUNDATION',
  459 => 'FOX',
  460 => 'FR',
  461 => 'FREE',
  462 => 'FRESENIUS',
  463 => 'FRL',
  464 => 'FROGANS',
  465 => 'FRONTDOOR',
  466 => 'FRONTIER',
  467 => 'FTR',
  468 => 'FUJITSU',
  469 => 'FUJIXEROX',
  470 => 'FUN',
  471 => 'FUND',
  472 => 'FURNITURE',
  473 => 'FUTBOL',
  474 => 'FYI',
  475 => 'GA',
  476 => 'GAL',
  477 => 'GALLERY',
  478 => 'GALLO',
  479 => 'GALLUP',
  480 => 'GAME',
  481 => 'GAMES',
  482 => 'GAP',
  483 => 'GARDEN',
  484 => 'GB',
  485 => 'GBIZ',
  486 => 'GD',
  487 => 'GDN',
  488 => 'GE',
  489 => 'GEA',
  490 => 'GENT',
  491 => 'GENTING',
  492 => 'GEORGE',
  493 => 'GF',
  494 => 'GG',
  495 => 'GGEE',
  496 => 'GH',
  497 => 'GI',
  498 => 'GIFT',
  499 => 'GIFTS',
  500 => 'GIVES',
  501 => 'GIVING',
  502 => 'GL',
  503 => 'GLADE',
  504 => 'GLASS',
  505 => 'GLE',
  506 => 'GLOBAL',
  507 => 'GLOBO',
  508 => 'GM',
  509 => 'GMAIL',
  510 => 'GMBH',
  511 => 'GMO',
  512 => 'GMX',
  513 => 'GN',
  514 => 'GODADDY',
  515 => 'GOLD',
  516 => 'GOLDPOINT',
  517 => 'GOLF',
  518 => 'GOO',
  519 => 'GOODYEAR',
  520 => 'GOOG',
  521 => 'GOOGLE',
  522 => 'GOP',
  523 => 'GOT',
  524 => 'GOV',
  525 => 'GP',
  526 => 'GQ',
  527 => 'GR',
  528 => 'GRAINGER',
  529 => 'GRAPHICS',
  530 => 'GRATIS',
  531 => 'GREEN',
  532 => 'GRIPE',
  533 => 'GROCERY',
  534 => 'GROUP',
  535 => 'GS',
  536 => 'GT',
  537 => 'GU',
  538 => 'GUARDIAN',
  539 => 'GUCCI',
  540 => 'GUGE',
  541 => 'GUIDE',
  542 => 'GUITARS',
  543 => 'GURU',
  544 => 'GW',
  545 => 'GY',
  546 => 'HAIR',
  547 => 'HAMBURG',
  548 => 'HANGOUT',
  549 => 'HAUS',
  550 => 'HBO',
  551 => 'HDFC',
  552 => 'HDFCBANK',
  553 => 'HEALTH',
  554 => 'HEALTHCARE',
  555 => 'HELP',
  556 => 'HELSINKI',
  557 => 'HERE',
  558 => 'HERMES',
  559 => 'HGTV',
  560 => 'HIPHOP',
  561 => 'HISAMITSU',
  562 => 'HITACHI',
  563 => 'HIV',
  564 => 'HK',
  565 => 'HKT',
  566 => 'HM',
  567 => 'HN',
  568 => 'HOCKEY',
  569 => 'HOLDINGS',
  570 => 'HOLIDAY',
  571 => 'HOMEDEPOT',
  572 => 'HOMEGOODS',
  573 => 'HOMES',
  574 => 'HOMESENSE',
  575 => 'HONDA',
  576 => 'HONEYWELL',
  577 => 'HORSE',
  578 => 'HOSPITAL',
  579 => 'HOST',
  580 => 'HOSTING',
  581 => 'HOT',
  582 => 'HOTELES',
  583 => 'HOTELS',
  584 => 'HOTMAIL',
  585 => 'HOUSE',
  586 => 'HOW',
  587 => 'HR',
  588 => 'HSBC',
  589 => 'HT',
  590 => 'HU',
  591 => 'HUGHES',
  592 => 'HYATT',
  593 => 'HYUNDAI',
  594 => 'IBM',
  595 => 'ICBC',
  596 => 'ICE',
  597 => 'ICU',
  598 => 'ID',
  599 => 'IE',
  600 => 'IEEE',
  601 => 'IFM',
  602 => 'IKANO',
  603 => 'IL',
  604 => 'IM',
  605 => 'IMAMAT',
  606 => 'IMDB',
  607 => 'IMMO',
  608 => 'IMMOBILIEN',
  609 => 'IN',
  610 => 'INC',
  611 => 'INDUSTRIES',
  612 => 'INFINITI',
  613 => 'INFO',
  614 => 'ING',
  615 => 'INK',
  616 => 'INSTITUTE',
  617 => 'INSURANCE',
  618 => 'INSURE',
  619 => 'INT',
  620 => 'INTEL',
  621 => 'INTERNATIONAL',
  622 => 'INTUIT',
  623 => 'INVESTMENTS',
  624 => 'IO',
  625 => 'IPIRANGA',
  626 => 'IQ',
  627 => 'IR',
  628 => 'IRISH',
  629 => 'IS',
  630 => 'ISELECT',
  631 => 'ISMAILI',
  632 => 'IST',
  633 => 'ISTANBUL',
  634 => 'IT',
  635 => 'ITAU',
  636 => 'ITV',
  637 => 'IVECO',
  638 => 'JAGUAR',
  639 => 'JAVA',
  640 => 'JCB',
  641 => 'JCP',
  642 => 'JE',
  643 => 'JEEP',
  644 => 'JETZT',
  645 => 'JEWELRY',
  646 => 'JIO',
  647 => 'JLL',
  648 => 'JM',
  649 => 'JMP',
  650 => 'JNJ',
  651 => 'JO',
  652 => 'JOBS',
  653 => 'JOBURG',
  654 => 'JOT',
  655 => 'JOY',
  656 => 'JP',
  657 => 'JPMORGAN',
  658 => 'JPRS',
  659 => 'JUEGOS',
  660 => 'JUNIPER',
  661 => 'KAUFEN',
  662 => 'KDDI',
  663 => 'KE',
  664 => 'KERRYHOTELS',
  665 => 'KERRYLOGISTICS',
  666 => 'KERRYPROPERTIES',
  667 => 'KFH',
  668 => 'KG',
  669 => 'KH',
  670 => 'KI',
  671 => 'KIA',
  672 => 'KIM',
  673 => 'KINDER',
  674 => 'KINDLE',
  675 => 'KITCHEN',
  676 => 'KIWI',
  677 => 'KM',
  678 => 'KN',
  679 => 'KOELN',
  680 => 'KOMATSU',
  681 => 'KOSHER',
  682 => 'KP',
  683 => 'KPMG',
  684 => 'KPN',
  685 => 'KR',
  686 => 'KRD',
  687 => 'KRED',
  688 => 'KUOKGROUP',
  689 => 'KW',
  690 => 'KY',
  691 => 'KYOTO',
  692 => 'KZ',
  693 => 'LA',
  694 => 'LACAIXA',
  695 => 'LADBROKES',
  696 => 'LAMBORGHINI',
  697 => 'LAMER',
  698 => 'LANCASTER',
  699 => 'LANCIA',
  700 => 'LANCOME',
  701 => 'LAND',
  702 => 'LANDROVER',
  703 => 'LANXESS',
  704 => 'LASALLE',
  705 => 'LAT',
  706 => 'LATINO',
  707 => 'LATROBE',
  708 => 'LAW',
  709 => 'LAWYER',
  710 => 'LB',
  711 => 'LC',
  712 => 'LDS',
  713 => 'LEASE',
  714 => 'LECLERC',
  715 => 'LEFRAK',
  716 => 'LEGAL',
  717 => 'LEGO',
  718 => 'LEXUS',
  719 => 'LGBT',
  720 => 'LI',
  721 => 'LIAISON',
  722 => 'LIDL',
  723 => 'LIFE',
  724 => 'LIFEINSURANCE',
  725 => 'LIFESTYLE',
  726 => 'LIGHTING',
  727 => 'LIKE',
  728 => 'LILLY',
  729 => 'LIMITED',
  730 => 'LIMO',
  731 => 'LINCOLN',
  732 => 'LINDE',
  733 => 'LINK',
  734 => 'LIPSY',
  735 => 'LIVE',
  736 => 'LIVING',
  737 => 'LIXIL',
  738 => 'LK',
  739 => 'LLC',
  740 => 'LOAN',
  741 => 'LOANS',
  742 => 'LOCKER',
  743 => 'LOCUS',
  744 => 'LOFT',
  745 => 'LOL',
  746 => 'LONDON',
  747 => 'LOTTE',
  748 => 'LOTTO',
  749 => 'LOVE',
  750 => 'LPL',
  751 => 'LPLFINANCIAL',
  752 => 'LR',
  753 => 'LS',
  754 => 'LT',
  755 => 'LTD',
  756 => 'LTDA',
  757 => 'LU',
  758 => 'LUNDBECK',
  759 => 'LUPIN',
  760 => 'LUXE',
  761 => 'LUXURY',
  762 => 'LV',
  763 => 'LY',
  764 => 'MA',
  765 => 'MACYS',
  766 => 'MADRID',
  767 => 'MAIF',
  768 => 'MAISON',
  769 => 'MAKEUP',
  770 => 'MAN',
  771 => 'MANAGEMENT',
  772 => 'MANGO',
  773 => 'MAP',
  774 => 'MARKET',
  775 => 'MARKETING',
  776 => 'MARKETS',
  777 => 'MARRIOTT',
  778 => 'MARSHALLS',
  779 => 'MASERATI',
  780 => 'MATTEL',
  781 => 'MBA',
  782 => 'MC',
  783 => 'MCKINSEY',
  784 => 'MD',
  785 => 'ME',
  786 => 'MED',
  787 => 'MEDIA',
  788 => 'MEET',
  789 => 'MELBOURNE',
  790 => 'MEME',
  791 => 'MEMORIAL',
  792 => 'MEN',
  793 => 'MENU',
  794 => 'MERCKMSD',
  795 => 'METLIFE',
  796 => 'MG',
  797 => 'MH',
  798 => 'MIAMI',
  799 => 'MICROSOFT',
  800 => 'MIL',
  801 => 'MINI',
  802 => 'MINT',
  803 => 'MIT',
  804 => 'MITSUBISHI',
  805 => 'MK',
  806 => 'ML',
  807 => 'MLB',
  808 => 'MLS',
  809 => 'MM',
  810 => 'MMA',
  811 => 'MN',
  812 => 'MO',
  813 => 'MOBI',
  814 => 'MOBILE',
  815 => 'MOBILY',
  816 => 'MODA',
  817 => 'MOE',
  818 => 'MOI',
  819 => 'MOM',
  820 => 'MONASH',
  821 => 'MONEY',
  822 => 'MONSTER',
  823 => 'MOPAR',
  824 => 'MORMON',
  825 => 'MORTGAGE',
  826 => 'MOSCOW',
  827 => 'MOTO',
  828 => 'MOTORCYCLES',
  829 => 'MOV',
  830 => 'MOVIE',
  831 => 'MOVISTAR',
  832 => 'MP',
  833 => 'MQ',
  834 => 'MR',
  835 => 'MS',
  836 => 'MSD',
  837 => 'MT',
  838 => 'MTN',
  839 => 'MTR',
  840 => 'MU',
  841 => 'MUSEUM',
  842 => 'MUTUAL',
  843 => 'MV',
  844 => 'MW',
  845 => 'MX',
  846 => 'MY',
  847 => 'MZ',
  848 => 'NA',
  849 => 'NAB',
  850 => 'NADEX',
  851 => 'NAGOYA',
  852 => 'NAME',
  853 => 'NATIONWIDE',
  854 => 'NATURA',
  855 => 'NAVY',
  856 => 'NBA',
  857 => 'NC',
  858 => 'NE',
  859 => 'NEC',
  860 => 'NET',
  861 => 'NETBANK',
  862 => 'NETFLIX',
  863 => 'NETWORK',
  864 => 'NEUSTAR',
  865 => 'NEW',
  866 => 'NEWHOLLAND',
  867 => 'NEWS',
  868 => 'NEXT',
  869 => 'NEXTDIRECT',
  870 => 'NEXUS',
  871 => 'NF',
  872 => 'NFL',
  873 => 'NG',
  874 => 'NGO',
  875 => 'NHK',
  876 => 'NI',
  877 => 'NICO',
  878 => 'NIKE',
  879 => 'NIKON',
  880 => 'NINJA',
  881 => 'NISSAN',
  882 => 'NISSAY',
  883 => 'NL',
  884 => 'NO',
  885 => 'NOKIA',
  886 => 'NORTHWESTERNMUTUAL',
  887 => 'NORTON',
  888 => 'NOW',
  889 => 'NOWRUZ',
  890 => 'NOWTV',
  891 => 'NP',
  892 => 'NR',
  893 => 'NRA',
  894 => 'NRW',
  895 => 'NTT',
  896 => 'NU',
  897 => 'NYC',
  898 => 'NZ',
  899 => 'OBI',
  900 => 'OBSERVER',
  901 => 'OFF',
  902 => 'OFFICE',
  903 => 'OKINAWA',
  904 => 'OLAYAN',
  905 => 'OLAYANGROUP',
  906 => 'OLDNAVY',
  907 => 'OLLO',
  908 => 'OM',
  909 => 'OMEGA',
  910 => 'ONE',
  911 => 'ONG',
  912 => 'ONL',
  913 => 'ONLINE',
  914 => 'ONYOURSIDE',
  915 => 'OOO',
  916 => 'OPEN',
  917 => 'ORACLE',
  918 => 'ORANGE',
  919 => 'ORG',
  920 => 'ORGANIC',
  921 => 'ORIGINS',
  922 => 'OSAKA',
  923 => 'OTSUKA',
  924 => 'OTT',
  925 => 'OVH',
  926 => 'PA',
  927 => 'PAGE',
  928 => 'PANASONIC',
  929 => 'PARIS',
  930 => 'PARS',
  931 => 'PARTNERS',
  932 => 'PARTS',
  933 => 'PARTY',
  934 => 'PASSAGENS',
  935 => 'PAY',
  936 => 'PCCW',
  937 => 'PE',
  938 => 'PET',
  939 => 'PF',
  940 => 'PFIZER',
  941 => 'PG',
  942 => 'PH',
  943 => 'PHARMACY',
  944 => 'PHD',
  945 => 'PHILIPS',
  946 => 'PHONE',
  947 => 'PHOTO',
  948 => 'PHOTOGRAPHY',
  949 => 'PHOTOS',
  950 => 'PHYSIO',
  951 => 'PIAGET',
  952 => 'PICS',
  953 => 'PICTET',
  954 => 'PICTURES',
  955 => 'PID',
  956 => 'PIN',
  957 => 'PING',
  958 => 'PINK',
  959 => 'PIONEER',
  960 => 'PIZZA',
  961 => 'PK',
  962 => 'PL',
  963 => 'PLACE',
  964 => 'PLAY',
  965 => 'PLAYSTATION',
  966 => 'PLUMBING',
  967 => 'PLUS',
  968 => 'PM',
  969 => 'PN',
  970 => 'PNC',
  971 => 'POHL',
  972 => 'POKER',
  973 => 'POLITIE',
  974 => 'PORN',
  975 => 'POST',
  976 => 'PR',
  977 => 'PRAMERICA',
  978 => 'PRAXI',
  979 => 'PRESS',
  980 => 'PRIME',
  981 => 'PRO',
  982 => 'PROD',
  983 => 'PRODUCTIONS',
  984 => 'PROF',
  985 => 'PROGRESSIVE',
  986 => 'PROMO',
  987 => 'PROPERTIES',
  988 => 'PROPERTY',
  989 => 'PROTECTION',
  990 => 'PRU',
  991 => 'PRUDENTIAL',
  992 => 'PS',
  993 => 'PT',
  994 => 'PUB',
  995 => 'PW',
  996 => 'PWC',
  997 => 'PY',
  998 => 'QA',
  999 => 'QPON',
  1000 => 'QUEBEC',
  1001 => 'QUEST',
  1002 => 'QVC',
  1003 => 'RACING',
  1004 => 'RADIO',
  1005 => 'RAID',
  1006 => 'RE',
  1007 => 'READ',
  1008 => 'REALESTATE',
  1009 => 'REALTOR',
  1010 => 'REALTY',
  1011 => 'RECIPES',
  1012 => 'RED',
  1013 => 'REDSTONE',
  1014 => 'REDUMBRELLA',
  1015 => 'REHAB',
  1016 => 'REISE',
  1017 => 'REISEN',
  1018 => 'REIT',
  1019 => 'RELIANCE',
  1020 => 'REN',
  1021 => 'RENT',
  1022 => 'RENTALS',
  1023 => 'REPAIR',
  1024 => 'REPORT',
  1025 => 'REPUBLICAN',
  1026 => 'REST',
  1027 => 'RESTAURANT',
  1028 => 'REVIEW',
  1029 => 'REVIEWS',
  1030 => 'REXROTH',
  1031 => 'RICH',
  1032 => 'RICHARDLI',
  1033 => 'RICOH',
  1034 => 'RIGHTATHOME',
  1035 => 'RIL',
  1036 => 'RIO',
  1037 => 'RIP',
  1038 => 'RMIT',
  1039 => 'RO',
  1040 => 'ROCHER',
  1041 => 'ROCKS',
  1042 => 'RODEO',
  1043 => 'ROGERS',
  1044 => 'ROOM',
  1045 => 'RS',
  1046 => 'RSVP',
  1047 => 'RU',
  1048 => 'RUGBY',
  1049 => 'RUHR',
  1050 => 'RUN',
  1051 => 'RW',
  1052 => 'RWE',
  1053 => 'RYUKYU',
  1054 => 'SA',
  1055 => 'SAARLAND',
  1056 => 'SAFE',
  1057 => 'SAFETY',
  1058 => 'SAKURA',
  1059 => 'SALE',
  1060 => 'SALON',
  1061 => 'SAMSCLUB',
  1062 => 'SAMSUNG',
  1063 => 'SANDVIK',
  1064 => 'SANDVIKCOROMANT',
  1065 => 'SANOFI',
  1066 => 'SAP',
  1067 => 'SARL',
  1068 => 'SAS',
  1069 => 'SAVE',
  1070 => 'SAXO',
  1071 => 'SB',
  1072 => 'SBI',
  1073 => 'SBS',
  1074 => 'SC',
  1075 => 'SCA',
  1076 => 'SCB',
  1077 => 'SCHAEFFLER',
  1078 => 'SCHMIDT',
  1079 => 'SCHOLARSHIPS',
  1080 => 'SCHOOL',
  1081 => 'SCHULE',
  1082 => 'SCHWARZ',
  1083 => 'SCIENCE',
  1084 => 'SCJOHNSON',
  1085 => 'SCOR',
  1086 => 'SCOT',
  1087 => 'SD',
  1088 => 'SE',
  1089 => 'SEARCH',
  1090 => 'SEAT',
  1091 => 'SECURE',
  1092 => 'SECURITY',
  1093 => 'SEEK',
  1094 => 'SELECT',
  1095 => 'SENER',
  1096 => 'SERVICES',
  1097 => 'SES',
  1098 => 'SEVEN',
  1099 => 'SEW',
  1100 => 'SEX',
  1101 => 'SEXY',
  1102 => 'SFR',
  1103 => 'SG',
  1104 => 'SH',
  1105 => 'SHANGRILA',
  1106 => 'SHARP',
  1107 => 'SHAW',
  1108 => 'SHELL',
  1109 => 'SHIA',
  1110 => 'SHIKSHA',
  1111 => 'SHOES',
  1112 => 'SHOP',
  1113 => 'SHOPPING',
  1114 => 'SHOUJI',
  1115 => 'SHOW',
  1116 => 'SHOWTIME',
  1117 => 'SHRIRAM',
  1118 => 'SI',
  1119 => 'SILK',
  1120 => 'SINA',
  1121 => 'SINGLES',
  1122 => 'SITE',
  1123 => 'SJ',
  1124 => 'SK',
  1125 => 'SKI',
  1126 => 'SKIN',
  1127 => 'SKY',
  1128 => 'SKYPE',
  1129 => 'SL',
  1130 => 'SLING',
  1131 => 'SM',
  1132 => 'SMART',
  1133 => 'SMILE',
  1134 => 'SN',
  1135 => 'SNCF',
  1136 => 'SO',
  1137 => 'SOCCER',
  1138 => 'SOCIAL',
  1139 => 'SOFTBANK',
  1140 => 'SOFTWARE',
  1141 => 'SOHU',
  1142 => 'SOLAR',
  1143 => 'SOLUTIONS',
  1144 => 'SONG',
  1145 => 'SONY',
  1146 => 'SOY',
  1147 => 'SPACE',
  1148 => 'SPORT',
  1149 => 'SPOT',
  1150 => 'SPREADBETTING',
  1151 => 'SR',
  1152 => 'SRL',
  1153 => 'SRT',
  1154 => 'SS',
  1155 => 'ST',
  1156 => 'STADA',
  1157 => 'STAPLES',
  1158 => 'STAR',
  1159 => 'STARHUB',
  1160 => 'STATEBANK',
  1161 => 'STATEFARM',
  1162 => 'STC',
  1163 => 'STCGROUP',
  1164 => 'STOCKHOLM',
  1165 => 'STORAGE',
  1166 => 'STORE',
  1167 => 'STREAM',
  1168 => 'STUDIO',
  1169 => 'STUDY',
  1170 => 'STYLE',
  1171 => 'SU',
  1172 => 'SUCKS',
  1173 => 'SUPPLIES',
  1174 => 'SUPPLY',
  1175 => 'SUPPORT',
  1176 => 'SURF',
  1177 => 'SURGERY',
  1178 => 'SUZUKI',
  1179 => 'SV',
  1180 => 'SWATCH',
  1181 => 'SWIFTCOVER',
  1182 => 'SWISS',
  1183 => 'SX',
  1184 => 'SY',
  1185 => 'SYDNEY',
  1186 => 'SYMANTEC',
  1187 => 'SYSTEMS',
  1188 => 'SZ',
  1189 => 'TAB',
  1190 => 'TAIPEI',
  1191 => 'TALK',
  1192 => 'TAOBAO',
  1193 => 'TARGET',
  1194 => 'TATAMOTORS',
  1195 => 'TATAR',
  1196 => 'TATTOO',
  1197 => 'TAX',
  1198 => 'TAXI',
  1199 => 'TC',
  1200 => 'TCI',
  1201 => 'TD',
  1202 => 'TDK',
  1203 => 'TEAM',
  1204 => 'TECH',
  1205 => 'TECHNOLOGY',
  1206 => 'TEL',
  1207 => 'TELEFONICA',
  1208 => 'TEMASEK',
  1209 => 'TENNIS',
  1210 => 'TEVA',
  1211 => 'TF',
  1212 => 'TG',
  1213 => 'TH',
  1214 => 'THD',
  1215 => 'THEATER',
  1216 => 'THEATRE',
  1217 => 'TIAA',
  1218 => 'TICKETS',
  1219 => 'TIENDA',
  1220 => 'TIFFANY',
  1221 => 'TIPS',
  1222 => 'TIRES',
  1223 => 'TIROL',
  1224 => 'TJ',
  1225 => 'TJMAXX',
  1226 => 'TJX',
  1227 => 'TK',
  1228 => 'TKMAXX',
  1229 => 'TL',
  1230 => 'TM',
  1231 => 'TMALL',
  1232 => 'TN',
  1233 => 'TO',
  1234 => 'TODAY',
  1235 => 'TOKYO',
  1236 => 'TOOLS',
  1237 => 'TOP',
  1238 => 'TORAY',
  1239 => 'TOSHIBA',
  1240 => 'TOTAL',
  1241 => 'TOURS',
  1242 => 'TOWN',
  1243 => 'TOYOTA',
  1244 => 'TOYS',
  1245 => 'TR',
  1246 => 'TRADE',
  1247 => 'TRADING',
  1248 => 'TRAINING',
  1249 => 'TRAVEL',
  1250 => 'TRAVELCHANNEL',
  1251 => 'TRAVELERS',
  1252 => 'TRAVELERSINSURANCE',
  1253 => 'TRUST',
  1254 => 'TRV',
  1255 => 'TT',
  1256 => 'TUBE',
  1257 => 'TUI',
  1258 => 'TUNES',
  1259 => 'TUSHU',
  1260 => 'TV',
  1261 => 'TVS',
  1262 => 'TW',
  1263 => 'TZ',
  1264 => 'UA',
  1265 => 'UBANK',
  1266 => 'UBS',
  1267 => 'UCONNECT',
  1268 => 'UG',
  1269 => 'UK',
  1270 => 'UNICOM',
  1271 => 'UNIVERSITY',
  1272 => 'UNO',
  1273 => 'UOL',
  1274 => 'UPS',
  1275 => 'US',
  1276 => 'UY',
  1277 => 'UZ',
  1278 => 'VA',
  1279 => 'VACATIONS',
  1280 => 'VANA',
  1281 => 'VANGUARD',
  1282 => 'VC',
  1283 => 'VE',
  1284 => 'VEGAS',
  1285 => 'VENTURES',
  1286 => 'VERISIGN',
  1287 => 'VERSICHERUNG',
  1288 => 'VET',
  1289 => 'VG',
  1290 => 'VI',
  1291 => 'VIAJES',
  1292 => 'VIDEO',
  1293 => 'VIG',
  1294 => 'VIKING',
  1295 => 'VILLAS',
  1296 => 'VIN',
  1297 => 'VIP',
  1298 => 'VIRGIN',
  1299 => 'VISA',
  1300 => 'VISION',
  1301 => 'VISTAPRINT',
  1302 => 'VIVA',
  1303 => 'VIVO',
  1304 => 'VLAANDEREN',
  1305 => 'VN',
  1306 => 'VODKA',
  1307 => 'VOLKSWAGEN',
  1308 => 'VOLVO',
  1309 => 'VOTE',
  1310 => 'VOTING',
  1311 => 'VOTO',
  1312 => 'VOYAGE',
  1313 => 'VU',
  1314 => 'VUELOS',
  1315 => 'WALES',
  1316 => 'WALMART',
  1317 => 'WALTER',
  1318 => 'WANG',
  1319 => 'WANGGOU',
  1320 => 'WARMAN',
  1321 => 'WATCH',
  1322 => 'WATCHES',
  1323 => 'WEATHER',
  1324 => 'WEATHERCHANNEL',
  1325 => 'WEBCAM',
  1326 => 'WEBER',
  1327 => 'WEBSITE',
  1328 => 'WED',
  1329 => 'WEDDING',
  1330 => 'WEIBO',
  1331 => 'WEIR',
  1332 => 'WF',
  1333 => 'WHOSWHO',
  1334 => 'WIEN',
  1335 => 'WIKI',
  1336 => 'WILLIAMHILL',
  1337 => 'WIN',
  1338 => 'WINDOWS',
  1339 => 'WINE',
  1340 => 'WINNERS',
  1341 => 'WME',
  1342 => 'WOLTERSKLUWER',
  1343 => 'WOODSIDE',
  1344 => 'WORK',
  1345 => 'WORKS',
  1346 => 'WORLD',
  1347 => 'WOW',
  1348 => 'WS',
  1349 => 'WTC',
  1350 => 'WTF',
  1351 => 'XBOX',
  1352 => 'XEROX',
  1353 => 'XFINITY',
  1354 => 'XIHUAN',
  1355 => 'XIN',
  1356 => 'XN--11B4C3D',
  1357 => 'XN--1CK2E1B',
  1358 => 'XN--1QQW23A',
  1359 => 'XN--2SCRJ9C',
  1360 => 'XN--30RR7Y',
  1361 => 'XN--3BST00M',
  1362 => 'XN--3DS443G',
  1363 => 'XN--3E0B707E',
  1364 => 'XN--3HCRJ9C',
  1365 => 'XN--3OQ18VL8PN36A',
  1366 => 'XN--3PXU8K',
  1367 => 'XN--42C2D9A',
  1368 => 'XN--45BR5CYL',
  1369 => 'XN--45BRJ9C',
  1370 => 'XN--45Q11C',
  1371 => 'XN--4GBRIM',
  1372 => 'XN--54B7FTA0CC',
  1373 => 'XN--55QW42G',
  1374 => 'XN--55QX5D',
  1375 => 'XN--5SU34J936BGSG',
  1376 => 'XN--5TZM5G',
  1377 => 'XN--6FRZ82G',
  1378 => 'XN--6QQ986B3XL',
  1379 => 'XN--80ADXHKS',
  1380 => 'XN--80AO21A',
  1381 => 'XN--80AQECDR1A',
  1382 => 'XN--80ASEHDB',
  1383 => 'XN--80ASWG',
  1384 => 'XN--8Y0A063A',
  1385 => 'XN--90A3AC',
  1386 => 'XN--90AE',
  1387 => 'XN--90AIS',
  1388 => 'XN--9DBQ2A',
  1389 => 'XN--9ET52U',
  1390 => 'XN--9KRT00A',
  1391 => 'XN--B4W605FERD',
  1392 => 'XN--BCK1B9A5DRE4C',
  1393 => 'XN--C1AVG',
  1394 => 'XN--C2BR7G',
  1395 => 'XN--CCK2B3B',
  1396 => 'XN--CG4BKI',
  1397 => 'XN--CLCHC0EA0B2G2A9GCD',
  1398 => 'XN--CZR694B',
  1399 => 'XN--CZRS0T',
  1400 => 'XN--CZRU2D',
  1401 => 'XN--D1ACJ3B',
  1402 => 'XN--D1ALF',
  1403 => 'XN--E1A4C',
  1404 => 'XN--ECKVDTC9D',
  1405 => 'XN--EFVY88H',
  1406 => 'XN--ESTV75G',
  1407 => 'XN--FCT429K',
  1408 => 'XN--FHBEI',
  1409 => 'XN--FIQ228C5HS',
  1410 => 'XN--FIQ64B',
  1411 => 'XN--FIQS8S',
  1412 => 'XN--FIQZ9S',
  1413 => 'XN--FJQ720A',
  1414 => 'XN--FLW351E',
  1415 => 'XN--FPCRJ9C3D',
  1416 => 'XN--FZC2C9E2C',
  1417 => 'XN--FZYS8D69UVGM',
  1418 => 'XN--G2XX48C',
  1419 => 'XN--GCKR3F0F',
  1420 => 'XN--GECRJ9C',
  1421 => 'XN--GK3AT1E',
  1422 => 'XN--H2BREG3EVE',
  1423 => 'XN--H2BRJ9C',
  1424 => 'XN--H2BRJ9C8C',
  1425 => 'XN--HXT814E',
  1426 => 'XN--I1B6B1A6A2E',
  1427 => 'XN--IMR513N',
  1428 => 'XN--IO0A7I',
  1429 => 'XN--J1AEF',
  1430 => 'XN--J1AMH',
  1431 => 'XN--J6W193G',
  1432 => 'XN--JLQ61U9W7B',
  1433 => 'XN--JVR189M',
  1434 => 'XN--KCRX77D1X4A',
  1435 => 'XN--KPRW13D',
  1436 => 'XN--KPRY57D',
  1437 => 'XN--KPU716F',
  1438 => 'XN--KPUT3I',
  1439 => 'XN--L1ACC',
  1440 => 'XN--LGBBAT1AD8J',
  1441 => 'XN--MGB9AWBF',
  1442 => 'XN--MGBA3A3EJT',
  1443 => 'XN--MGBA3A4F16A',
  1444 => 'XN--MGBA7C0BBN0A',
  1445 => 'XN--MGBAAKC7DVF',
  1446 => 'XN--MGBAAM7A8H',
  1447 => 'XN--MGBAB2BD',
  1448 => 'XN--MGBAH1A3HJKRD',
  1449 => 'XN--MGBAI9AZGQP6J',
  1450 => 'XN--MGBAYH7GPA',
  1451 => 'XN--MGBB9FBPOB',
  1452 => 'XN--MGBBH1A',
  1453 => 'XN--MGBBH1A71E',
  1454 => 'XN--MGBC0A9AZCG',
  1455 => 'XN--MGBCA7DZDO',
  1456 => 'XN--MGBERP4A5D4AR',
  1457 => 'XN--MGBGU82A',
  1458 => 'XN--MGBI4ECEXP',
  1459 => 'XN--MGBPL2FH',
  1460 => 'XN--MGBT3DHD',
  1461 => 'XN--MGBTX2B',
  1462 => 'XN--MGBX4CD0AB',
  1463 => 'XN--MIX891F',
  1464 => 'XN--MK1BU44C',
  1465 => 'XN--MXTQ1M',
  1466 => 'XN--NGBC5AZD',
  1467 => 'XN--NGBE9E0A',
  1468 => 'XN--NGBRX',
  1469 => 'XN--NODE',
  1470 => 'XN--NQV7F',
  1471 => 'XN--NQV7FS00EMA',
  1472 => 'XN--NYQY26A',
  1473 => 'XN--O3CW4H',
  1474 => 'XN--OGBPF8FL',
  1475 => 'XN--OTU796D',
  1476 => 'XN--P1ACF',
  1477 => 'XN--P1AI',
  1478 => 'XN--PBT977C',
  1479 => 'XN--PGBS0DH',
  1480 => 'XN--PSSY2U',
  1481 => 'XN--Q9JYB4C',
  1482 => 'XN--QCKA1PMC',
  1483 => 'XN--QXAM',
  1484 => 'XN--RHQV96G',
  1485 => 'XN--ROVU88B',
  1486 => 'XN--RVC1E0AM3E',
  1487 => 'XN--S9BRJ9C',
  1488 => 'XN--SES554G',
  1489 => 'XN--T60B56A',
  1490 => 'XN--TCKWE',
  1491 => 'XN--TIQ49XQYJ',
  1492 => 'XN--UNUP4Y',
  1493 => 'XN--VERMGENSBERATER-CTB',
  1494 => 'XN--VERMGENSBERATUNG-PWB',
  1495 => 'XN--VHQUV',
  1496 => 'XN--VUQ861B',
  1497 => 'XN--W4R85EL8FHU5DNRA',
  1498 => 'XN--W4RS40L',
  1499 => 'XN--WGBH1C',
  1500 => 'XN--WGBL6A',
  1501 => 'XN--XHQ521B',
  1502 => 'XN--XKC2AL3HYE2A',
  1503 => 'XN--XKC2DL3A5EE0H',
  1504 => 'XN--Y9A3AQ',
  1505 => 'XN--YFRO4I67O',
  1506 => 'XN--YGBI2AMMX',
  1507 => 'XN--ZFR164B',
  1508 => 'XXX',
  1509 => 'XYZ',
  1510 => 'YACHTS',
  1511 => 'YAHOO',
  1512 => 'YAMAXUN',
  1513 => 'YANDEX',
  1514 => 'YE',
  1515 => 'YODOBASHI',
  1516 => 'YOGA',
  1517 => 'YOKOHAMA',
  1518 => 'YOU',
  1519 => 'YOUTUBE',
  1520 => 'YT',
  1521 => 'YUN',
  1522 => 'ZA',
  1523 => 'ZAPPOS',
  1524 => 'ZARA',
  1525 => 'ZERO',
  1526 => 'ZIP',
  1527 => 'ZM',
  1528 => 'ZONE',
  1529 => 'ZUERICH',
  1530 => 'ZW',
];
}

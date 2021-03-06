<?php
/**
 * This file is part of the Yasumi package.
 *
 * Copyright (c) 2015 - 2017 AzuyaLabs
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Sacha Telgenhof <stelgenhof@gmail.com>
 */

namespace Yasumi\tests\Spain\CastillaLaMancha;

use Yasumi\Holiday;

/**
 * Class for testing holidays in Castilla-La Mancha (Spain).
 */
class CastillaLaManchaTest extends CastillaLaManchaBaseTestCase
{
    /**
     * @var int year random year number used for all tests in this Test Case
     */
    protected $year;

    /**
     * Tests if all national holidays in Castilla-La Mancha are defined by the provider class
     */
    public function testNationalHolidays()
    {
        $this->assertDefinedHolidays([
            'newYearsDay',
            'epiphany',
            'valentinesDay',
            'stJosephsDay',
            'maundyThursday',
            'goodFriday',
            'easter',
            'internationalWorkersDay',
            'castillaLaManchaDay',
            'assumptionOfMary',
            'nationalDay',
            'allSaintsDay',
            'constitutionDay',
            'immaculateConception',
            'christmasDay'
        ], self::REGION, $this->year, Holiday::TYPE_NATIONAL);
    }

    /**
     * Tests if all observed holidays in Castilla-La Mancha are defined by the provider class
     */
    public function testObservedHolidays()
    {
        $this->assertDefinedHolidays([], self::REGION, $this->year, Holiday::TYPE_OBSERVANCE);
    }

    /**
     * Tests if all seasonal holidays in Castilla-La Mancha are defined by the provider class
     */
    public function testSeasonalHolidays()
    {
        $this->assertDefinedHolidays([], self::REGION, $this->year, Holiday::TYPE_SEASON);
    }

    /**
     * Tests if all bank holidays in Castilla-La Mancha are defined by the provider class
     */
    public function testBankHolidays()
    {
        $this->assertDefinedHolidays([], self::REGION, $this->year, Holiday::TYPE_BANK);
    }

    /**
     * Tests if all other holidays in Castilla-La Mancha are defined by the provider class
     */
    public function testOtherHolidays()
    {
        $this->assertDefinedHolidays([], self::REGION, $this->year, Holiday::TYPE_OTHER);
    }

    /**
     * Initial setup of this Test Case
     */
    protected function setUp()
    {
        $this->year = $this->generateRandomYear(1984);
    }
}

<?php

/**
 * This file contains the DatabaseAccessObjectBaseTest class.
 *
 * SPDX-FileCopyrightText: Copyright 2012 M2mobi B.V., Amsterdam, The Netherlands
 * SPDX-FileCopyrightText: Copyright 2022 Move Agency Group B.V., Zwolle, The Netherlands
 * SPDX-License-Identifier: MIT
 */

namespace Lunr\Gravity\Tests;

use Lunr\Gravity\DatabaseAccessObject;
use Lunr\Gravity\DatabaseConnection;
use Lunr\Halo\PropertyTraits\PsrLoggerTestTrait;

/**
 * This class contains the tests for the DatabaseAccessObject class.
 *
 * Base tests for the case where there is no DatabaseConnectionPool.
 *
 * @covers Lunr\Gravity\DatabaseAccessObject
 */
class DatabaseAccessObjectBaseTest extends DatabaseAccessObjectTest
{

    use PsrLoggerTestTrait;

    /**
     * Test that DatabaseConnection class is passed.
     */
    public function testDatabaseConnectionIsPassed(): void
    {
        $this->assertPropertySame('db', $this->db);
    }

    /**
     * Test that swap_generic_connection() swaps database connections.
     *
     * @covers Lunr\Gravity\DatabaseAccessObject::swap_generic_connection
     */
    public function testSwapConnectionSwapsConnection(): void
    {
        $db = $this->getMockBuilder(DatabaseConnection::class)
                   ->disableOriginalConstructor()
                   ->getMock();

        $property = $this->get_accessible_reflection_property('db');

        $this->assertNotSame($db, $property->getValue($this->class));

        $method = $this->get_accessible_reflection_method('swap_generic_connection');

        $method->invokeArgs($this->class, [ $db ]);

        $this->assertSame($db, $property->getValue($this->class));
    }

}

?>

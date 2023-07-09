<?php

/**
 * This file contains the TransactionalMySQLAccessObjectTest class.
 *
 * SPDX-FileCopyrightText: Copyright 2023 Move Agency Group B.V., Zwolle, The Netherlands
 * SPDX-License-Identifier: MIT
 */

namespace Lunr\Gravity\MySQL\Tests;

use Lunr\Gravity\MySQL\TransactionalMySQLAccessObject;
use Lunr\Gravity\MySQL\MySQLConnection;
use Lunr\Gravity\MySQL\MySQLQueryEscaper;
use Lunr\Halo\LunrBaseTest;
use Psr\Log\LoggerInterface;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\MockObject\MockedType;
use ReflectionClass;

/**
 * This class contains the tests for the TransactionalMySQLAccessObject class.
 *
 * @covers Lunr\Gravity\MySQL\TransactionalMySQLAccessObject
 */
abstract class TransactionalMySQLAccessObjectTest extends LunrBaseTest
{

    /**
     * Mock instance of a MySQLConnection
     * @var MySQLConnection&MockObject&MockedType
     */
    protected MySQLConnection $db;

    /**
     * Mock instance of the Logger class.
     * @var LoggerInterface&MockObject&MockedType
     */
    protected LoggerInterface $logger;

    /**
     * Testcase Constructor.
     *
     * @return void
     */
    public function setUp(): void
    {
        $this->logger = $this->getMockBuilder(LoggerInterface::class)->getMock();

        $this->db = $this->getMockBuilder(MySQLConnection::class)
                         ->disableOriginalConstructor()
                         ->getMock();

        $escaper = $this->getMockBuilder(MySQLQueryEscaper::class)
                        ->disableOriginalConstructor()
                        ->getMock();

        $this->db->expects($this->once())
                 ->method('get_query_escaper_object')
                 ->willReturn($escaper);

        $this->class = $this->getMockBuilder(TransactionalMySQLAccessObject::class)
                            ->setConstructorArgs([ $this->db, $this->logger ])
                            ->getMockForAbstractClass();

        $this->reflection = new ReflectionClass(TransactionalMySQLAccessObject::class);
    }

    /**
     * Testcase Destructor.
     */
    public function tearDown(): void
    {
        unset($this->db);
        unset($this->logger);

        parent::tearDown();
    }

}

?>

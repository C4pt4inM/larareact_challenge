<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

use App\HumanResources\Attendance\Application\GroupByOwnersService;

class GroupByOwnerServiceTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    // public function test_example(): void {
    //     $this->assertTrue(true);
    // }

    public function testGroupByOwners()
    {
        $target = ["insurance.txt" => "Company A", "letter.docx" => "Company A", "Contract.docx" => "Company B"];

        $expectedResult = ["Company A" => ["insurance.txt", "letter.docx"], "Company B" => ["Contract.docx"]];

        $groupByOwnersService = new GroupByOwnersService();
        $result = $groupByOwnersService->groupByOwners($target);

        $this->assertEquals($expectedResult, $result);
    }
}

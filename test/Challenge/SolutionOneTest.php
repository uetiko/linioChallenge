<?php

declare(strict_types=1);

namespace Uetiko\Linio\Test\Challenge;

use PHPUnit\Framework\TestCase;
use Uetiko\Linio\Challenge\ProblemSolved;
use Uetiko\Linio\Challenge\SolutionOne;

class SolutionOneTest extends TestCase
{
    public function instanceOneProvider(): array
    {
        return [
            [new SolutionOne(0, 100)]
        ];
    }
    /**
     * @test
     * @dataProvider instanceOneProvider
     * @param ProblemSolved $resolveProblem
     */
    public function execute(ProblemSolved $resolveProblem): void
    {
        $resolveProblem->execute(fn ($string) => var_dump($string));
        $resolveProblem->execute(fn ($string) => print_r($string));
    }
}

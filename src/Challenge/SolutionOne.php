<?php

declare(strict_types=1);

namespace Uetiko\Linio\Challenge;

class SolutionOne extends AbstractChallege implements ProblemSolved
{
    protected function evaluate(int $number): string
    {
        $string = '';
        switch (true) {
            case ((0 === ($number % 3)) && (0 === ($number % 5))):
                $string = 'Linianos';
                break;
            case (0 === ($number % 3)):
                $string = 'Linio';
                break;
            case (0 === ($number % 5)):
                $string = 'IT';
                break;
        }
        
        return $string;
    }
}
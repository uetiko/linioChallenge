<?php

declare(strict_types=1);

namespace Uetiko\Linio\Challenge;

class SolutionTwo extends AbstractChallege implements ProblemSolved
{
    protected function evaluate(int $number): string
    {
        $string = '';
        foreach ($this->arrayFunctions() as $function) {
            list($boolean, $name) = $this->{$function}($number);
            if ($boolean) {
                $string = $name;
                break;
            }
        }
        
        return $string;
    }
    
    private function linio(int $number): array
    {
        $boolean = (0 === ($number % 3));
        $string = 'Linio';
        return [
            $boolean,
            $string
        ];
    }
    private function it(int $number): array
    {
        $boolean = (0 === ($number % 5));
        $string = 'IT';
        return [
            $boolean,
            $string
        ];
    }
    
    private function linianos(int $number): array
    {
        $boolean = ((0 === ($number % 3)) && (0 === ($number % 5)));
        $string = 'Linianos';
        return [
            $boolean,
            $string
        ];
    }
    
    private function arrayFunctions(): array
    {
        return [
            'linianos',
            'linio',
            'it',
        ];
    }
}
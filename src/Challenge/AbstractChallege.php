<?php

declare(strict_types=1);

namespace Uetiko\Linio\Challenge;

use Closure;

abstract class AbstractChallege
{
    protected int $init;
    protected int $end;
    
    public function __construct(int $init, int $end){
        $this->init = $init;
        $this->end = $end;
    }
    
    /**
     * In the closure the result of the evaluation of the problem is
     * inserted as string, so it should contain the favorite method
     * for printing.
     *
     * ->execute(fn(string $string) => print_r($string));
     *
     * @param Closure $closure
     */
    public function execute(Closure $closure): void
    {
        foreach (range($this->init, $this->end) as $number) {
            $closure($this->evaluate($number));
        }
    }
    
    /**
     * Write a program that prints all the numbers from 1 to 100. However, for
     * multiples of 3, instead of the number, print "Linio". For multiples
     * of 5 print "IT". For numbers which are multiples of both 3 and 5,
     * print "Linianos".
     *
     * But here's the catch: you can use only one `if`. No multiple branches,
     * ternary operators or `else`.
     *
     * # Requirements
     * 1 if
     * You can't use `else`, `else if` or ternary
     *
     * @param int $number
     * @return string
     */
    abstract protected function evaluate(int $number): string;
}
<?php

namespace Uetiko\Linio\Challenge;

use Closure;

interface ProblemSolved
{
    public function execute(Closure $closure): void;
}
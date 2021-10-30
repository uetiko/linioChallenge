# linio Challenge
the classic recruitment challenge

## Challenge - Backend Developer

Write a program that prints all the numbers from 1 to 100. However, for
multiples of 3, instead of the number, print "Linio". For multiples of 5 print
"IT". For numbers which are multiples of both 3 and 5, print "Linianos".

But here's the catch: you can use only one `if`. No multiple branches, ternary
operators or `else`.

## Requirements
* 1 if
* You can't use `else`, `else if` or ternary
* Unit tests
* Feel free to apply your SOLID knowledge
* You can write the challenge in any language you want. Here at Linio we are big fans of PHP, Kotlin and TypeScript

## Disclaimer
This repository tries to solve this challenge in two ways, and thus be able to apply solid principles such as Liskov,
interface segregation and the open / closed principle.

to be able to run this code, you must have php 8 installed (It is specified in the composer file), and run the next 
commands:

```shell
composer install
vendor/bin/phpunit
```
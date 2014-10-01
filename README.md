Info about the task:
===========================
There are two “Reference Number” validation standards: “Reference Number”-10 and “Reference Number”-13. Here are some valid examples of each:

“Reference Number”-10:
`
0471958697
067443000X
0 471 60695 2
0-470-84525-2
0-321-14653-0
`

“Reference Number”-13:
`
9780470059029
978 0 471 48648 0
978-0596809485
978-0-13-149505-0
978-0-262-13472-9
`

“Reference Number”-10 is made up of 9 digits plus a check digit (which may be 'X') and “Reference Number”-13 is made up of 12 digits plus a check digit. Spaces and hyphens may be included in a code, but are not significant. This means that `9780471486480` is equivalent to `978-0-471-48648-0` and `978 0 471 48648 0`.

The check digit for “Reference Number”-10 is calculated by multiplying each digit by its position (i.e., 1 x 1st digit, 2 x 2nd digit, etc.), summing these products together and taking modulo 11 of the result (with 'X' being used if the result is 10).

The check digit for “Reference Number”-13 is calculated by multiplying each digit alternately by 1 or 3 (i.e., 1 x 1st digit, 3 x 2nd digit, 1 x 3rd digit, 3 x 4th digit, etc.), summing these products together, taking modulo 10 of the result and subtracting this value from 10, and then taking the modulo 10 of the result again to produce a single digit.

Task:
===========================
Create code that is able to validate both number types. The code should be created in a modular fashion so it can be used e.g. as a validation in an application and easily extended.

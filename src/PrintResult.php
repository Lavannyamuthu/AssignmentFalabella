<?php

/**
 * PrintResult class
 */

namespace phpclass\AssignmentFalabella\src;

class PrintResult
{
    function printAnswer($resultSet)
    {
        switch ($resultSet) {
            case ($resultSet->moduloResult35 == 0):
                print('Linianos');
                print('<br/>');
                break;
            case ($resultSet->moduloResult5 == 0):
                print('IT');
                print('<br/>');
                break;
            case ($resultSet->moduloResult3 == 0):
                print('linio');
                print('<br/>');
                break;
            default:
                print($resultSet->number);
                print('<br/>');
        }
    }
}

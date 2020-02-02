<?php

/**
 * PrintNumber class
 */

namespace phpclass\AssignmentFalabella\src;


class Main
{

    public function printNumberExecute()
    {

        for ($i = 1; $i <= 100; $i++) {
            $numberCalc = new NumberCalculation();
            $resultSet = new ResultSet();
            $resultSet->number = $i;
            $resultSet->moduloResult3 = $numberCalc->remainderCalculation($i, 3);
            $resultSet->moduloResult5 = $numberCalc->remainderCalculation($i, 5);
            $resultSet->moduloResult35 = $numberCalc->addRemainder($resultSet->moduloResult3, $resultSet->moduloResult5);
            $printResult = new PrintResult();
            $printResult->printAnswer($resultSet);
        }
    }
}

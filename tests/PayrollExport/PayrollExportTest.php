<?php

namespace Convenia\DependentPayrollExport\Tests;

use Convenia\DependentPayrollExport\PayrollExport;

/**
 * Class PayrollExportTest.
 */
class PayrollExportTest extends BaseTest
{
    public function test_generate_file_to_import_dependent_events()
    {
        $payrollExport = new PayrollExport();

        $fileContents = $payrollExport
            ->dependentEvents([
                [
                    'companyCode' => 1111111,
                    'employeeCode' => 2222222,
                    'dependentCode' => 3333333,
                    'dependentName' => 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA',
                    'birthdayDate' => '15/03/2018',
                    'birthplace' => 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA',
                    'registry' => 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA',
                    'registryNumber' => 4444444444,
                    'son' => 1,
                    'validUntilSon' => 5555555,
                    'dependent' => 1,
                    'validUntilDepend' => 6666666,
                    'degreeKinship' => 7777777,
                    'NumberBook' => 88888888,
                    'numberSheet' => 99999999,
                    'deliveryDate' => '15/03/2018',
                    'freqAttestationExpiration' => '15/03/2018',
                    'vaccinePortfolioDate' => '15/03/2018',
                    'recordSource' => 111,
                    'notUsedPlanOpting' => 1,
                    'notUsedPlanBegin' => '15/03/2018',
                    'notUsedPlanEnd' => '15/03/2018',
                    'notUsedHaveDateEnd' => 1,
                    'endDateSalaryDepend' => '15/03/2018',
                    'haveEndDateSalaryFam' => 1,
                    'endDateDependIR' => '15/03/2018',
                    'haveEndDateDependIR' => 1,
                    'numberDeclaBirth' => 22222222222,
                    'numberRegCert' => 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA',
                    'cpf' => 36292756251,
                    'receiveAlimony' => 4444444,
                    'determineEndReceive' => 5555555,
                    'endDateReceive' => '15/03/2018',
                    'compensationPER' => 6666666,
                    'beginCompensation' => '15/03/2018',
                    'determineEndCompen' => 7777777,
                    'endCompensation' => '15/03/2018',
                ],
            ])
            ->generate();
        $this->assertEquals(
            '111111122222223333333AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA15/03/2018AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA444444444415555555166666667777777888888889999999915/03/201815/03/201815/03/2018111115/03/201815/03/2018115/03/2018115/03/2018122222222222AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA362927562514444444555555515/03/2018666666615/03/2018777777715/03/2018',
            $fileContents
        );
    }
}

<?php

namespace Convenia\DependentPayrollExport\Registries;

use Convenia\PayrollFileReader\Fields\Formats\FieldC;
use Convenia\PayrollFileReader\Fields\Formats\FieldD;
use Convenia\PayrollFileReader\Patterns\PatternBase;

/**
 * Class DependentRegistry.
 */
class DependentRegistry extends PatternBase
{
    protected $length = 411;

    /**
     * @var array
     */
    protected $defaultFields = [
        'companyCode' => [
            'format'       => FieldC::class,
            'position'     => 1,
            'length'       => 7,
        ],
        'employeeCode' => [
            'format'       => FieldC::class,
            'position'     => 8,
            'length'       => 7,
        ],
        'dependentCode' => [
            'format'       => FieldC::class,
            'position'     => 15,
            'length'       => 7,
        ],
         'dependentName' => [
            'format'       => FieldC::class,
            'position'     => 22,
            'length'       => 60,
        ],
        'birthdayDate' => [
            'format'       => FieldD::class,
            'position'     => 82,
            'length'       => 10,
        ],
        'birthplace' => [
            'format'       => FieldC::class,
            'position'     => 92,
            'length'       => 40,
        ],
        'registry' => [
            'format'       => FieldC::class,
            'position'     => 132,
            'length'       => 40,
        ],
        'registryNumber' => [
            'format'       => FieldC::class,
            'position'     => 172,
            'length'       => 10,
        ],
        'son' => [
            'format'       => FieldC::class,
            'position'     => 182,
            'length'       => 1,
        ],
        'validUntilSon' => [
            'format'       => FieldC::class,
            'position'     => 183,
            'length'       => 7,
        ],
        'dependent' => [
            'format'       => FieldC::class,
            'position'     => 190,
            'length'       => 1,
        ],
        'validUntilDepend' => [
            'format'       => FieldC::class,
            'position'     => 191,
            'length'       => 7,
        ],
        'degreeKinship' => [
            'format'       => FieldC::class,
            'position'     => 198,
            'length'       => 7,
        ],
        'NumberBook' => [
            'format'       => FieldC::class,
            'position'     => 205,
            'length'       => 8,
        ],
        'numberSheet' => [
            'format'       => FieldC::class,
            'position'     => 213,
            'length'       => 8,
        ],
        'deliveryDate' => [
            'format'       => FieldD::class,
            'position'     => 221,
            'length'       => 10,
        ],
        'freqAttestationExpiration' => [
            'format'       => FieldD::class,
            'position'     => 231,
            'length'       => 10,
        ],
        'vaccinePortfolioDate' => [
            'format'       => FieldD::class,
            'position'     => 241,
            'length'       => 10,
        ],
        'recordSource' => [
            'format'       => FieldC::class,
            'position'     => 251,
            'length'       => 3,
        ],
        'notUsedPlanOpting' => [
            'format'       => FieldC::class,
            'position'     => 254,
            'length'       => 1,
        ],
        'notUsedPlanBegin' => [
            'format'       => FieldD::class,
            'position'     => 255,
            'length'       => 10,
        ],
        'notUsedPlanEnd' => [
            'format'       => FieldD::class,
            'position'     => 265,
            'length'       => 10,
        ],
        'notUsedHaveDateEnd' => [
            'format'       => FieldC::class,
            'position'     => 275,
            'length'       => 1,
        ],
        'endDateSalaryDepend' => [
            'format'       => FieldD::class,
            'position'     => 276,
            'length'       => 10,
        ],
        'haveEndDateSalaryFam' => [
            'format'       => FieldC::class,
            'position'     => 286,
            'length'       => 1,
        ],
        'endDateDependIR' => [
            'format'       => FieldD::class,
            'position'     => 287,
            'length'       => 10,
        ],
        'haveEndDateDependIR' => [
            'format'       => FieldC::class,
            'position'     => 297,
            'length'       => 1,
        ],
        'numberDeclaBirth' => [
            'format'       => FieldC::class,
            'position'     => 298,
            'length'       => 11,
        ],
        'numberRegCert' => [
            'format'       => FieldC::class,
            'position'     => 309,
            'length'       => 34,
        ],
        'cpf' => [
            'format'       => FieldC::class,
            'position'     => 343,
            'length'       => 11,
        ],
        'receiveAlimony' => [
            'format'       => FieldC::class,
            'position'     => 354,
            'length'       => 7,
        ],
        'determineEndReceive' => [
            'format'       => FieldC::class,
            'position'     => 361,
            'length'       => 7,
        ],
        'endDateReceive' => [
            'format'       => FieldD::class,
            'position'     => 368,
            'length'       => 10,
        ],
        'compensationPER' => [
            'format'       => FieldC::class,
            'position'     => 378,
            'length'       => 7,
        ],
        'beginCompensation' => [
            'format'       => FieldD::class,
            'position'     => 385,
            'length'       => 10,
        ],
        'determineEndCompen' => [
            'format'       => FieldC::class,
            'position'     => 395,
            'length'       => 7,
        ],
        'endCompensation' => [
            'format'       => FieldD::class,
            'position'     => 402,
            'length'       => 10,
        ],
    ];
}

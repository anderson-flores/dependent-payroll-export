Classe para exportar dependentes de folha de sua empresa para o padrão aceito no software de folha [Domínio](http://www.dominiosistemas.com.br/)

[![Latest Stable Version](https://poser.pugx.org/convenia/dependent-payroll-export/v/stable)](https://packagist.org/packages/convenia/dependent-payroll-export)
[![Build Status](https://travis-ci.org/convenia/dependent-payroll-export.svg?branch=master)](https://travis-ci.org/convenia/dependent-payroll-export)
[![Codacy Badge](https://api.codacy.com/project/badge/Grade/c7d43bcb24294fb29151142651eaf1ee)](https://www.codacy.com/app/Convenia/dependent-payroll-export?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=convenia/dominio-payroll-export&amp;utm_campaign=Badge_Grade)

## Requisitos

* PHP >= 7.1

### Instale usando o composer [Composer](http://getcomposer.org/)

```bash
composer require convenia/dependent-payroll-export
```

## Exemplos de Uso

```php
use Convenia\DependentPayrollExport\PayrollExport;

$dependent = new PayrollExport;

// Array com os dados do evento
$payroll = [
    [
        'companyCode' => 1111111,
        'employeeCode' => 2222222,
        'dependentCode' => 3333333,
        'birthdayDate' => '01/06/2018',
    ]
];

// Chamada para o evento
$payrollExport->dependentEvents($payroll)
        ->generate();
```

## Informações adicionais
Para saber mais sobre os modelos e formatos que os modelos aceitam acesse: https://trello-attachments.s3.amazonaws.com/5a314d872eaae5d835af3fc8/5a9d7ca361f4755e8fa4a9a9/2cb54652406903b809f79cf11d75ec2a/Empregados_-_Cadastro_Dependentes.pdf

// Para visualizar todos os eventos disponíveis acesse: https://github.com/convenia/dependent-payroll-export/blob/master/src/PayrollExport.php

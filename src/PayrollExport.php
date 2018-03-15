<?php

namespace Convenia\Dominio\PayrollExport;

use Convenia\DependentPayrollExport\Registries\DependentRegistry;

/**
 * Class PayrollExport.
 */
class PayrollExport
{
    /**
     * @var array
     */
    protected $events = [];

    /**
     * @param array $eventsData
     *
     * @return $this
     */
    public function dependentEvents(array $eventsData)
    {
        $this->addEvents($eventsData, DependentRegistry::class);
        return $this;
    }

    private function addEvents($eventsData, $class)
    {
        foreach ($eventsData as $event) {
            $this->events[] = new $class($event);
        }
    }

    /**
     * @return string
     */
    public function generate()
    {
        $returnString = '';

        foreach ($this->events as $event) {
            $returnString .= $event.PHP_EOL;
        }

        return trim($returnString);
    }
}

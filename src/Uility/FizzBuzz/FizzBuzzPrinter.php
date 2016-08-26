<?php

namespace Utility\FizzBuzz;

/**
 * Class FizzBuzzPrinter
 */
class FizzBuzzPrinter
{
    private $elementsContainer;

    /**
     * FizzBuzzPrinter constructor.
     *
     * @param ElementsContainer $elCont
     */
    public function __construct(ElementsContainer $elCont)
    {
        $this->elementsContainer = $elCont;
    }

    public function printFizzBuzz()
    {
        $list = $this->elementsContainer->getList();
        $response = "";

        foreach ($list as $element) {
            $response .= $element->printValue() . " ";
        }

        return $response;
    }
}
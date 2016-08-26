<?php

namespace Utility\FizzBuzz;


class ElementsContainer
{
    private $start;
    private $end;
    private $multiplierValidator;

    /**
     * @var FizzBuzzElementInterface[]
     */
    private $elementsList;

    public function __construct($start, $end, MultiplierValidator $mV)
    {
        $this->start = $start;
        $this->end = $end;
        $this->multiplierValidator = $mV;
        $this->elementsList = [];
        $this->fillList();
    }

    public function getList()
    {
        return $this->elementsList;
    }

    private function fillList()
    {
        for ($i = $this->start; $i <= $this->end; $i++) {
            $value = $this->multiplierValidator->validateNumberModMultiplier($i);

            if ($value !== false) {
                $this->addElement(new Text($value));
            } else {
                $this->addElement(new Number($i));
            }
        }
    }

    private function addElement(FizzBuzzElementInterface $el)
    {
        $this->elementsList[] = $el;
    }
}

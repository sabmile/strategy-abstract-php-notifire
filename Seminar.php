<?php

require_once 'Lesson.php';

class Seminar extends Lesson
{
    public function __construct(int $duration, CostStrategy $strategy)
    {
        parent::__construct($duration, $strategy);
        $this->name = self::SEMINAR;
//        $this->name = self::setName(self::SEMINAR);
//        $this->name = $this->setName(self::SEMINAR);
    }
}
<?php

class Lesson
{
    protected const SEMINAR = 'Seminar';
    protected const LECTURE = 'Lecture';
    protected string $name;
    private int $duration;
    private CostStrategy $strategy;
    public function __construct(int $duration, CostStrategy $strategy)
    {
        $this->duration = $duration;
        $this->strategy = $strategy;
    }

    public function cost(): int
    {
        return $this->strategy->cost($this);
    }

    public function chargeType(): string
    {
        return $this->strategy->chargeType();
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function getName(): string
    {
        return $this->name;
    }

    protected function setName(string $name): void
    {
        $this->name = $name;
    }
}
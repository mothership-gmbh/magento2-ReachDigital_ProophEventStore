<?php


namespace ReachDigital\ProophEventStore\Test\Integration\Fixtures\Model\Event;


use Prooph\EventSourcing\AggregateChanged;

class EmailChanged extends AggregateChanged
{
    public function email(): string
    {
        return $this->payload['email'];
    }
}
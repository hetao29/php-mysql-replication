<?php

namespace MySQLReplication\Event\DTO;

use MySQLReplication\Event\EventInfo;

/**
 * Class EventDTO
 * @package MySQLReplication\DTO
 */
abstract class EventDTO implements \JsonSerializable
{
    /**
     * @var EventInfo
     */
    protected $eventInfo;

    /**
     * EventDTO constructor.
     * @param EventInfo $eventInfo
     */
    public function __construct(
        EventInfo $eventInfo
    ) {
        $this->eventInfo = $eventInfo;
    }

    /**
     * @return EventInfo
     */
    public function getEventInfo()
    {
        return $this->eventInfo;
    }

    /**
     * @return string
     */
    abstract public function getType();

    /**
     * @return string
     */
    abstract public function __toString();
    /**
     * Specify data which should be serialized to JSON
     * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    abstract public function jsonSerialize();
}
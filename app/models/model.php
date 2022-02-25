<?php

abstract class Model implements JsonSerializable{

    public function jsonSerialize():mixed
    {
        return get_object_vars($this);
    } 
}
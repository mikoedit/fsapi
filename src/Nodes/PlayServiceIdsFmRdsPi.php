<?php

namespace FSAPI\Nodes;

/**
* PlayServiceIdsFmRdsPi is a class type Node
*
* https://github.com/flammy/fsapi/blob/master/FSAPI.md#netremoteplayserviceidsfmrdspi
*
* see class Node for details
*
*/
class PlayServiceIdsFmRdsPi extends Node implements Nodes
{
    public function __construct()
    {
        $this->path = 'netRemote.play.serviceIds.fmRdsPi';
        $this->validation_method = false;
        $this->validation_rules = false;
        $this->call_methods = array('GET');    
        $this->notification = true;
        $this->api_level = 1;
    }
}
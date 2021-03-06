<?php

namespace FSAPI\Nodes;

/**
* MultiroomClientStatus1 is a class type Node
*
* https://github.com/flammy/fsapi/blob/master/FSAPI.md#netremotemultiroomclientstatusx
*
* see class Node for details
*
*/
class MultiroomClientStatus1 extends Node implements Nodes
{
    public function __construct()
    {
        $this->path = 'netRemote.multiroom.client.status1';
        $this->validation_method = false;
        $this->validation_rules = false;
        $this->call_methods = array('GET');    
        $this->notification = true;
    }
}
<?php
/**
 * Copyright (C) Alibaba Cloud Computing
 * All rights reserved
 */

require_once realpath(dirname(__FILE__) . '/Request.php');

/**
 * The request used to create logstore from log service.
 *
 * @author log service dev
 */
class Aliyun_Log_Models_UpdateIndexRequest extends Aliyun_Log_Models_Request{

    private  $logstore_name;
    private  $keys;
    private  $line;
    /**
     * Aliyun_Log_Models_CreateLogstoreRequest constructor
     * 
     * @param string $project project name
     */
    public function __construct($project=null,$logstore_name = null,$keys = [],$line = []) {
        parent::__construct($project);
        $this -> logstore_name = $logstore_name;
        $this -> keys = $keys;
        $this -> line = $line;
    }
    public function getLogstoreName()
    {
        return $this -> logstore_name;
    }
    public function getkeys()
    {
        return $this -> keys;
    }
    public function getLine()
    {
        return $this -> line;
    }
}

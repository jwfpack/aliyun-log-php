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
class Aliyun_Log_Models_CreateProjectRequest extends Aliyun_Log_Models_Request{

    private  $projectName;
    private  $description;

    /**
     * Aliyun_Log_Models_CreateLogstoreRequest constructor
     * 
     * @param string $project project name
     */
    public function __construct($projectName=null,$description = null) {
        parent::__construct(null);
        $this -> projectName = $projectName;
        $this -> description = $description;
    }
    public function getProjectName()
    {
        return $this -> projectName;
    }
    public function getDescription()
    {
        return $this -> description;
    }
}

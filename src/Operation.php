<?php

namespace OZiTAG\Tager\Backend\Core;

use Illuminate\Foundation\Bus\DispatchesJobs;
use OZiTAG\Tager\Backend\Core\Traits\JobDispatcherTrait;
use OZiTAG\Tager\Backend\Core\Traits\MarshalTrait;

abstract class Operation
{
    use MarshalTrait;
    use DispatchesJobs;
    use JobDispatcherTrait;
}

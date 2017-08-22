<?php

namespace App\Models\Preferfirst;

use Moloquent\Eloquent\Model as Eloquent;
class Advertisement extends Eloquent
{
      protected $connection = 'mongodb';
      protected $collection = 'advertisements';
}
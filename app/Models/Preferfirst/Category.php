<?php

namespace App\Models\Preferfirst;

use Moloquent\Eloquent\Model as Eloquent;
class Category extends Eloquent
{
      protected $connection = 'mongodb';
      protected $collection = 'category';
}
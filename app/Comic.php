<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
  /**
 * The attributes that are mass assignable.
 *
 * @var array
 */
protected $fillable =
 [
  'title',
  'description',
  'thumb',
  'price',
  'series',
  'type',
  'sale_date'
];
}

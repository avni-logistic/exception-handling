<?php
namespace Logistic\Exceptionhandling\Models;
use Illuminate\Database\Eloquent\Model;
class ExceptionLog extends Model
{
    protected $guarded = [];
    protected $table = 'exception_logs';
}

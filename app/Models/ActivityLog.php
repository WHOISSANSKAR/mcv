<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActivityLog extends Model
{
    public $timestamps = false; // because table doesn't have created_at/updated_at
    protected $table = 'activity_log';
    protected $fillable = [
        'acty_department',
        'acty_email',
        'acty_date',
        'acty_time',
        'acty_action'
    ];
}

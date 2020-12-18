<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    public $timestamps = false;

    public function messages(){
        return $this->hasMany(Message::class)->orderBy('message_date_time');
    }

    public function yearMessages(){
        return $this->hasMany(Message::class)->where('message_date_time', '>=', Carbon::createFromDate(2020, 1,1))->orderBy('message_date_time');
    }
}

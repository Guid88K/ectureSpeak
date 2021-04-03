<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Mail;

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
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public static function send_password($user_name,$user_email,$user_password){
            $to_name = $user_name;
            $to_email = $user_email;
            $data = array('name' => $to_name, "body" => "Ваш пароль:",'password' => $user_password);
            Mail::send('emails', $data, function ($message) use ($to_name, $to_email) {
                $message->to($to_email, $to_name)->subject('Пароль');
                $message->from('sainttnias17@gmail.com', 'LectureSpeak');
            });
    }
}

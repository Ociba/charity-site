<?php

namespace App;

use App\Message;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function getLoggedInChurchLogo(){
        $church_logo = churchdatabase::where('id',Auth::user()->church_id)->value('attached_logo');
        if(empty($church_logo)){
            $church_logo = 'bible.jpg';
        }
        return $church_logo;
    }
    public function displayUnreadMessageCount(){
        $showing_unread = Message::where('status', 'not read')->count();
        return $showing_unread;
    }
    public function displayAllMessageCount(){
        $showing_all_messages = Message::count();
        return $showing_all_messages;
    }
    public function displayReadMessageCount(){
        $showing_read_messages = Message::where('status','read')->count();
        return $showing_read_messages;
    }
    public function displayusersCount(){
        $showing_users = User::count();
        return $showing_users;
    }
}

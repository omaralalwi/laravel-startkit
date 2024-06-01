<?php

namespace App\Models;

use App\Models\Presenters\UserPresenter;
use App\Models\Traits\HasHashedMediaTrait;
use App\Notifications\ResetPasswordNotification;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Notifications\Notification;
use Spatie\MediaLibrary\HasMedia;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements HasMedia, MustVerifyEmail
{
    use HasFactory;
    use HasHashedMediaTrait;
    use HasRoles;
    use Notifiable;
    use SoftDeletes;
    use UserPresenter;

    protected $guarded = [
        'id',
        'updated_at',
        '_token',
        '_method',
        'password_confirmation',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'date_of_birth' => 'datetime',
            'email_verified_at' => 'datetime',
        ];
    }

    public function providers(): HasMany
    {
        return $this->hasMany('App\Models\UserProvider');
    }

    public function profile(): HasOne
    {
        return $this->hasOne('App\Models\Userprofile');
    }

    public function userprofile(): HasOne
    {
        return $this->hasOne('App\Models\Userprofile');
    }

    // /**
    //  * Send the password reset notification.
    //  *
    //  * @param string $token
    //  *
    //  * @return void
    //  */
    // public function sendPasswordResetNotification($token)
    // {
    //     $this->notify(new ResetPasswordNotification($token));
    // }

    /**
     * Get the list of users related to the current User.
     *
     * @return [array] roels
     */
    public function getRolesListAttribute()
    {
        return array_map('intval', $this->roles->pluck('id')->toArray());
    }

    /**
     * Route notifications for the Slack channel.
     */
    public function routeNotificationForSlack(Notification $notification): string
    {
        return env('SLACK_NOTIFICATION_WEBHOOK');
    }
}

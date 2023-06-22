<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'tel',
        'email',
        'address',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    // Add belongsToMany relationship to Role model
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_user', 'user_id', 'role_id');
    }

    // Get user with first name and last name
    public function getFullNameAttribute()
    {
        return "{$this->firt_name} {$this->last_name}";
    }

    // Check if the user has permission through role
    public function hasPermissionThroughRole($permission)
    {
        foreach ($permission->roles as $role) {
            if ($this->roles->contains($role)) {
                return true;
            }
        }
        return false;
    }

    // Check if a user has permission
    public function hasPermissionTo($permission)
    {
        $permission = Permission::with('roles')->whereName($permission)->get();

        foreach ($permission as $perm_name) {
            return $this->hasPermissionThroughRole($perm_name);
        }
    }

    // Check if the user has any permission
    public function hasAnyPermission(array $permissions): bool
    {
        $permissions = collect($permissions)->flatten();

        foreach ($permissions as $permission) {

            if ($this->hasPermissionTo($permission)) {
                return true;
            }
        }

        return false;
    }

}

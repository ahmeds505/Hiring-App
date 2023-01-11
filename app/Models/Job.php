<?php

namespace App\Models;

use App\Models\User;
use App\Models\Application;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'location', 'type', 'working_hours', 'salary', 'description', 'opened'];

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function applications()
    {
        return $this->hasMany(Application::class);
    }

    public function getUsersName()
    {
        return User::find($this->user_id)->name;
    }
}

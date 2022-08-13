<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Owner
 *
 * @property int $id
 * @property string $title
 * @property string|null $note
 * @property int|null $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $device
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Owner newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Owner newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Owner query()
 * @method static \Illuminate\Database\Eloquent\Builder|Owner whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Owner whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Owner whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Owner whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Owner whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Owner whereUserId($value)
 * @mixin \Eloquent
 */
class Owner extends Model
{
    use HasFactory;

    protected $fillable = [
        "title", "note", "user_id"
    ];

    protected $casts = [
        "user_id" => "integer"
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function device()
    {
        return $this->belongsTo(User::class);
    }
}

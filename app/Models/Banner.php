<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

/**
 * App\Models\Banner
 *
 * @property int $id
 * @property int $store_id
 * @property string $image_path
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Store $store
 * @method static \Illuminate\Database\Eloquent\Builder|Banner newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Banner newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Banner query()
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereImagePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereStoreId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Banner extends Model
{
    use HasFactory;

    protected $fillable = [
        'store_id',
        'image_path'
    ];

    public function store()
    {
        return $this->belongsTo(Store::class);
    }

    public function bannerLogo()
    {
        return $this->image_path
            ? Storage::disk('bannerImages')->url($this->image_path)
            : 'https://www.hyperui.dev/code/photos/team-2.jpeg';
    }
}

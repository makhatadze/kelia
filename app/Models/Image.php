<?php
/**
 *  app/Models/Image.php
 *
 * Date-Time: 23.01.22
 * Time: 14:39
 * @author Vito Makhatadze <vitomakhatadze@gmail.com>
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Modules\Base\Models\Image
 *
 * @property int $id
 * @property string|null $src
 * @property string|null $type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property int|null $imaginable_id
 * @property string|null $imaginable_type
 * @property-read string $full_src
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereImageableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereImageableType($value)
 */
class Image extends Model
{
    use SoftDeletes;

    /** @var string */
    protected $table = 'images';

    /** @var string[] */
    protected $fillable = [
        'type',
        'src',
        'title',
        'description',
        'alt',
        'imageable_id',
        'imageable_type'
    ];

    /** @var array */
    protected $dates = [
        'deleted_at'
    ];

    /** @var string[] */
    protected $appends = [
        'full_src'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function imageable(): \Illuminate\Database\Eloquent\Relations\MorphTo
    {
        return $this->morphTo();
    }



    /**
     * @return string
     */
    public function getFullSrcAttribute()
    {
        return asset('storage/' . $this->src);
    }

}

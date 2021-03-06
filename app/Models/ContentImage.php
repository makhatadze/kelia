<?php
/**
 *  app/Models/ContentImage.php
 *
 * Date-Time: 22.01.22
 * Time: 22:52
 * @author Vito Makhatadze <vitomakhatadze@gmail.com>
 */
namespace App\Models;

use App\Traits\ImageAble;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

/**
 * @property integer id
 * @property integer tag
 * @property integer section
 * @property integer order
 * @method static ContentImage findOrFail(int $service)
 * @method static paginate(int $int)
 * @method static where(string $string, mixed $data)
 */
class ContentImage extends Model
{
    use HasFactory, ImageAble;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'tag',
        'section',
    ];

    protected $appends = array('image_src','image_id');

}

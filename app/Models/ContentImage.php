<?php
/**
 *  app/Models/ContentImage.php
 *
 * Date-Time: 22.01.22
 * Time: 22:52
 * @author Vito Makhatadze <vitomakhatadze@gmail.com>
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer id
 * @property integer tag
 * @property integer section
 * @property integer order
 * @property string img_path
 * @method static ContentImage findOrFail(int $service)
 * @method static paginate(int $int)
 * @method static where(string $string, mixed $data)
 */
class ContentImage extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'img_path',
        'tag',
        'section',
    ];

    protected $appends = array('image');

    /**
     * Get the image path.
     *
     * @return string
     */
    public function getImageAttribute()
    {
        $baseUrl = config('filesystems.disks.public.url');
        return "{$baseUrl}/{$this->img_path}";
    }
}

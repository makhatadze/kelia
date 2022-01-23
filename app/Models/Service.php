<?php
/**
 *  app/Models/Service.php
 *
 * Date-Time: 23.01.22
 * Time: 19:41
 * @author Vito Makhatadze <vitomakhatadze@gmail.com>
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string title
 * @method static Service findOrFail(int $id)
 * @method static paginate(int $int)
 */
class Service extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'title',
    ];

    protected $appends = array('serviceItemList');

    /**
     * Get the image path.
     *
     * @return string
     */
    public function getServiceItemListAttribute(): string
    {
        return route('service-item.index',$this->id);
    }
}

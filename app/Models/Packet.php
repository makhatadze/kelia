<?php
/**
 *  app/Models/Packet.php
 *
 * Date-Time: 24.01.22
 * Time: 18:13
 * @author Vito Makhatadze <vitomakhatadze@gmail.com>
 */
namespace App\Models;

use App\Traits\ImageAble;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property integer id
 * @property string name
 * @property string sub_text
 * @property string mini_sub_text
 * @method static \App\Models\Packet findOrFail(int $id)
 * @method static paginate(int $int)
 */
class Packet extends Model
{
    use HasFactory, ImageAble;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'sub_text',
        'mini_sub_text',
    ];

    protected $appends = array('image_src','image_id');


    protected static function booted() {
        static::deleting( function ($model) {
            $model->items->each(function($item){ //edit after comment
                $item->delete();
            });
        });
    }


    public function items(): HasMany
    {
        return $this->hasMany(PacketItem::class, 'packet_id');
    }
}

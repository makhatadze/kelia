<?php
/**
 *  app/Models/PacketItem.php
 *
 * Date-Time: 24.01.22
 * Time: 18:32
 * @author Vito Makhatadze <vitomakhatadze@gmail.com>
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer id
 * @property string text
 * @property string packet_id
 */
class PacketItem extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'text',
        'packet_id',
    ];
}

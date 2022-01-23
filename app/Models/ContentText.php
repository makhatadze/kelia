<?php
/**
 *  app/Models/ContentText.php
 *
 * Date-Time: 23.01.22
 * Time: 19:01
 * @author Vito Makhatadze <vitomakhatadze@gmail.com>
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer id
 * @property string title
 * @property integer tag
 * @property integer section
 * @property integer text_type
 * @method static ContentText findOrFail(int $service)
 * @method static paginate(int $int)
 */
class ContentText extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'title',
        'tag',
        'section',
        'text_type'
    ];
}

<?php
/**
 *  app/Models/ServiceItem.php
 *
 * Date-Time: 23.01.22
 * Time: 20:03
 * @author Vito Makhatadze <vitomakhatadze@gmail.com>
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer id
 * @property string title
 * @property string head_title
 * @property string sub_text
 * @property string body_text_head
 * @property string body_text_bottom
 * @property integer service_id
 *
 * @method static ServiceItem findOrFail(int $id)
 * @method static paginate(int $int)
 */
class ServiceItem extends Model
{
    use HasFactory;
}

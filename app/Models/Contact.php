<?php
/**
 *  app/Models/Contact.php
 *
 * Date-Time: 24.01.22
 * Time: 09:34
 * @author Vito Makhatadze <vitomakhatadze@gmail.com>
 */


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string name
 * @property string email
 * @property string date
 * @property string time
 * @property string mobile
 * @property string message
 *
 * @method static paginate(int $int)
 */
class Contact extends Model
{
    use HasFactory;
}

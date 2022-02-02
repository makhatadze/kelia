<?php
/**
 *  app/Models/Answer.php
 *
 * Date-Time: 24.01.22
 * Time: 22:34
 * @author Vito Makhatadze <vitomakhatadze@gmail.com>
 */
namespace App\Models;

use App\Traits\ImageAble;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property integer id
 * @property string body
 * @property float|null price
 * @property integer|null question_id
 * @property integer|null next_question_id
 */
class Answer extends Model
{
    use HasFactory, ImageAble;

    protected $appends = array('image_src','image_id');


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function question(): BelongsTo
    {
        return $this->belongsTo(Question::class);
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function nextQuestion(): BelongsTo
    {
        return $this->belongsTo(Question::class,'next_question_id','id');
    }
}

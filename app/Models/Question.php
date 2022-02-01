<?php

namespace App\Models;

use App\Traits\ImageAble;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Collection;

/**
 * @property integer id
 * @property string body
 * @property integer order
 * @property integer section_id
 * @property Collection|null answers
 * @property string description
 * @property string image_path
 * @property integer type
 * @method static paginate(int $int)
 * @method static Question findOrFail(int $id)
 */
class Question extends Model
{
    use HasFactory, ImageAble;

    public static int $QUESTION_NONE = 0;
    public static int $QUESTION_METER = 1;
    public static int $QUESTION_SQUARE_METRE = 2;
    public static int $QUESTION_SQUARE_METRE_DETAIL = 3;
    public static int $QUESTION_CUBIC_METRE = 4;
    public static int $QUESTION_CUBIC_METRE_DETAIL = 5;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'body',
        'section_id',
        'description',
        'type',
    ];

    protected $appends = array('image_src','image_id','previous_answers_ids','answers_ids');



    public function answers(): HasMany {
        return $this->hasMany(Answer::class, 'question_id');
    }

    public function previousAnswers(): HasMany {
        return $this->hasMany(Answer::class, 'next_question_id','id');
    }

    /**
     * Get the image path.
     *
     * @return string
     */
    public function getPreviousAnswersIdsAttribute(): array
    {
        $data = [];
        $previousAnswers = $this->previousAnswers()->get();
        if (count($previousAnswers)) {
            foreach ($previousAnswers as $answer) {
                $data[] = $answer->id;
            }
        }
        return $data;
    }

    /**
     * Get the image path.
     *
     * @return string
     */
    public function getAnswersIdsAttribute(): array
    {
        $data = [];
        $answers = $this->answers()->get();
        if (count($answers)) {
            foreach ($answers as $answer) {
                $data[] = $answer->id;
            }
        }
        return $data;
    }
}

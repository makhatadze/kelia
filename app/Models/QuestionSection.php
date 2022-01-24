<?php
/**
 *  app/Models/QuestionSection.php
 *
 * Date-Time: 23.01.22
 * Time: 20:52
 * @author Vito Makhatadze <vitomakhatadze@gmail.com>
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property integer id
 * @property string body
 * @property integer|null section_id
 * @method static paginate(int $int)
 * @method static QuestionSection findOrFail(int $id)
 */
class QuestionSection extends Model
{
    use HasFactory;

    protected static function booted() {
        static::deleting( function ($questionSection) {
            $questionSection->childrenRecursive->each(function($questionSection){ //edit after comment
                $questionSection->delete();
            });
        });
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function childrenRecursive(): HasMany
    {
        return $this->hasMany(QuestionSection::class, 'section_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function children(): HasMany
    {
        return $this->childrenRecursive()->with('children');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parent(): BelongsTo
    {
        return $this->belongsTo(QuestionSection::class, 'section_id');
    }
}

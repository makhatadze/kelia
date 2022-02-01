<?php
/**
 *  app/Models/File.php
 *
 * Date-Time: 01.02.22
 * Time: 13:03
 * @author Vito Makhatadze <vitomakhatadze@gmail.com>
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class File extends Model
{
    use SoftDeletes;

    const ORIGINAL_FILE_FOLDER_NAME = 'original';

    /**
     * @var string
     */
    protected $table = 'files';

    /**
     * @var array
     */
    protected $fillable = [
        'src',
        'type',
        'file_type',
        'imageable_id',
        'imageable_type'
    ];

    /**
     * @var array
     */
    protected $dates = [
        'deleted_at'
    ];

    protected $appends = [
        'fullUrl'
    ];

    /**
     * Get the owning fileable model.
     */
    public function fileable()
    {
        return $this->morphTo();
    }

    /**
     * @return string
     */
    public function getFullUrlAttribute(): string
    {
        return asset('storage/' . $this->src);
    }}

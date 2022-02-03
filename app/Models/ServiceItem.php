<?php
/**
 *  app/Models/ServiceItem.php
 *
 * Date-Time: 23.01.22
 * Time: 20:03
 * @author Vito Makhatadze <vitomakhatadze@gmail.com>
 */

namespace App\Models;

use App\Traits\ImageAble;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

/**
 * @property integer id
 * @property string title
 * @property string head_title
 * @property string sub_text
 * @property string body_text_head
 * @property string body_text_bottom
 * @property string body_text_head_delta
 * @property string body_text_bottom_delta
 * @property integer service_id
 *
 * @method static ServiceItem findOrFail(int $id)
 * @method static paginate(int $int)
 */
class ServiceItem extends Model
{
    use HasFactory, ImageAble;

    protected $appends = array(
        'image_bg_src',
        'image_bg_id',
        'image_first_src',
        'image_first_id',
        'image_second_src',
        'image_second_id');


    /**
     * Get the image path.
     *
     * @return string
     */
    public function getImageBgSrcAttribute(): string
    {
        if ($this->imageBg) {
            return $this->imageBg->full_src;
        }
        return '';
    }

    /**
     * @return string|null
     */
    public function getImageBgIdAttribute(): ?string
    {
        if ($this->imageBg) {
            return $this->imageBg->id;
        }
        return null;
    }


    /**
     * Get the image path.
     *
     * @return string
     */
    public function getImageFirstSrcAttribute(): string
    {
        if ($this->imageFirst) {
            return $this->imageFirst->full_src;
        }
        return '';
    }

    /**
     * @return string|null
     */
    public function getImageFirstIdAttribute(): ?string
    {
        if ($this->imageFirst) {
            return $this->imageFirst->id;
        }
        return null;
    }

    /**
     * Get the image path.
     *
     * @return string
     */
    public function getImageSecondSrcAttribute(): string
    {
        if ($this->imageSecond) {
            return $this->imageSecond->full_src;
        }
        return '';
    }

    /**
     * @return string|null
     */
    public function getImageSecondIdAttribute(): ?string
    {
        if ($this->imageSecond) {
            return $this->imageSecond->id;
        }
        return null;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function imageBg(): MorphOne
    {
        return $this->morphOne(Image::class, 'imageable')->where('type', '=','service-item-bg');
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function imageFirst(): MorphOne
    {
        return $this->morphOne(Image::class, 'imageable')->where('type', 'service-item-first');
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function imageSecond(): MorphOne
    {
        return $this->morphOne(Image::class, 'imageable')->where('type', 'service-item-second');
    }
}

<?php
/**
 *  app/Traits/ImageAble.php
 *
 * Date-Time: 23.01.22
 * Time: 14:52
 * @author Vito Makhatadze <vitomakhatadze@gmail.com>
 */

namespace App\Traits;


use App\Models\Image;
use Illuminate\Database\Eloquent\Relations\MorphOne;

trait ImageAble
{

    /**
     * @param string $key
     *
     * @return string
     */
    public function getImageByKey(string $key = ''): string
    {
        $image = $this->images->where('type', $key)->first();
        return $image ? $image->full_src : '';
    }


    /**
     * Get the image path.
     *
     * @return string
     */
    public function getImageSrcAttribute(): string
    {
        if ($this->image) {
            return $this->image->full_src;
        }
        return '';
    }

    /**
     * @return string|null
     */
    public function getImageIdAttribute(): ?string
    {
        if ($this->image) {
            return $this->image->id;
        }
        return null;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function image(): MorphOne
    {
        return $this->morphOne(Image::class, 'imageable');
    }

}

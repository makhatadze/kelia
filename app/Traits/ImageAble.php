<?php
/**
 *  app/Traits/ImageAble.php
 *
 * Date-Time: 23.01.22
 * Time: 14:52
 * @author Vito Makhatadze <vitomakhatadze@gmail.com>
 */

namespace App\Traits;


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

}

<?php
/**
 *  app/Repositories/Eloquent/Base/EloquentRepositoryInterface.php
 *
 * Date-Time: 01.02.22
 * Time: 12:49
 * @author Vito Makhatadze <vitomakhatadze@gmail.com>
 */
namespace App\Repositories\Eloquent\Base;

interface EloquentRepositoryInterface
{
    /**
     * @return mixed
     */
    public function getModel();

    /**
     * @param $model
     * @return mixed
     */
    public function setModel($model);
}
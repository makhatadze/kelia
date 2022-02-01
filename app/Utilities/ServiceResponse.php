<?php
/**
 *  app/Utilities/ServiceResponse.php
 *
 * Date-Time: 01.02.22
 * Time: 12:43
 * @author Vito Makhatadze <vitomakhatadze@gmail.com>
 */

namespace App\Utilities;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;

/**
 * Class ServiceResponse
 * @package App\Utilities
 */
class ServiceResponse
{

    /**
     * @param $message
     * @param string $type
     *
     * @return array
     */
    public static function notification($message, string $type = 'success'): array
    {
        return [
            [
                'type'    => $type,
                'message' => $message
            ]
        ];
    }

    /**
     * @param $message
     * @param array $data
     *
     * @return array
     */
    public static function error($message, array $data = []): array
    {
        $data = [
            'message'   => $message,
            'status'    => false,
            'type'      => 'danger',
            'data'      => $data
        ];

        Session::flash('notifications', [$data]);

        return $data;
    }

    /**
     * @param string $message
     * @param null $data
     *
     * @return array
     */
    public static function success($data = null, string $message = ''): array
    {
        return [
            'message'   => $message,
            'status'    => true,
            'data'      => $data
        ];
    }

    /**
     * @param $message
     * @param int $code
     * @param array $data
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public static function jsonNotification($message, int $code = 200, array $data = []): \Illuminate\Http\JsonResponse
    {
        return response()->json(
            [
                'message'   => $message,
                'code'      => $code,
                'data'      => $data,
                'status'    => $code
            ]
        )->setStatusCode($code && is_numeric($code) ? (int)$code : Response::HTTP_INTERNAL_SERVER_ERROR);
    }

}

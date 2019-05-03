<?php


namespace App\API;


class ApiError
{
    public static function errorMessage($message)
    {
        return [
            'data' => [
                'msg' => $message

                ]
        ];
    }
}
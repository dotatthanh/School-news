<?php

if (! function_exists('formatDate')) {
    function formatDate($date, $format = 'Y-m-d H:i:s')
    {
        try {
            if (! $date) {
                return $date;
            }

            return \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format($format);
        } catch (\Exception $e) {
            $date = date($format, strtotime($date));
        }

        return $date;
    }
}

if (! function_exists('getConst')) {
    function getConst($key = '', $defaultValue = '')
    {
        return config('const.'.$key, $defaultValue);
    }
}

if (! function_exists('getStatusBookingRoom')) {
    function getStatusBookingRoom($status)
    {
        switch ($status) {
            case getConst('booking-room.status.pending'):
                return '<span class="text-warning">Đang chờ duyệt</span>';
                break;
            case getConst('booking-room.status.approve'):
                return '<span class="text-success">Đã duyệt</span>';
                break;
            case getConst('booking-room.status.expire'):
                return '<span class="text-warning">Đã được sử dụng</span>';
                break;
            case getConst('booking-room.status.reject'):
                return '<span class="text-danger">Hủy</span>';
                break;
        }

        return false;
    }
}

if (! function_exists('getNameStatusBookingRoom')) {
    function getNameStatusBookingRoom($status)
    {
        switch ($status) {
            case getConst('booking-room.status.pending'):
                return 'Đang chờ duyệt';
                break;
            case getConst('booking-room.status.approve'):
                return 'Đã duyệt';
                break;
            case getConst('booking-room.status.expire'):
                return 'Đã được sử dụng';
                break;
            case getConst('booking-room.status.reject'):
                return 'Hủy';
                break;
        }

        return false;
    }
}

// if (!function_exists('LogError')) {
//     function LogError($exception = '')
//     {
//         Illuminate\Support\Facades\Log::error($exception);
//     }
// }

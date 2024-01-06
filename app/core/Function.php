<?php
// Hàm format tiền Việt Nam
// function currency_format($number, $suffix = 'đ')
// {
//     if (!empty($number)) {
//         return number_format($number, 0, ',', '.') . "{$suffix}";
//     }
// }

// function checkLogin()
// {
//     if (!isset($_SESSION['authentication']) || $_SESSION['authentication'] != "yes") {
//         // Nếu người dùng chưa đăng nhập, chuyển hướng họ đến trang đăng nhập
//         header('Location: /login');
//     }
// }

// function createSlug($string)
// {
//     $search = array(
//         '#(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)#',
//         '#(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)#',
//         '#(ì|í|ị|ỉ|ĩ)#',
//         '#(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)#',
//         '#(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)#',
//         '#(ỳ|ý|ỵ|ỷ|ỹ)#',
//         '#(đ)#',
//         '#(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)#',
//         '#(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)#',
//         '#(Ì|Í|Ị|Ỉ|Ĩ)#',
//         '#(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)#',
//         '#(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)#',
//         '#(Ỳ|Ý|Ỵ|Ỷ|Ỹ)#',
//         '#(Đ)#',
//         "/[^a-zA-Z0-9\-\_]/",
//     );
//     $replace = array(
//         'a',
//         'e',
//         'i',
//         'o',
//         'u',
//         'y',
//         'd',
//         'A',
//         'E',
//         'I',
//         'O',
//         'U',
//         'Y',
//         'D',
//         '-',
//     );
//     $string = preg_replace($search, $replace, $string);
//     $string = preg_replace('/(-)+/', '-', $string);
//     $string = strtolower($string);
//     return $string;
// }

// function calculateTimeDifference($timestamp)
// {
//     $currentTimestamp = time();
//     $difference = $currentTimestamp - $timestamp;

//     $seconds = $difference;
//     $minutes = round($difference / 60);
//     $hours = round($difference / 3600);
//     $days = round($difference / 86400);

//     if ($seconds < 60) {
//         return $seconds . " seconds ago";
//     } elseif ($minutes < 60) {
//         return $minutes . " minute ago";
//     } elseif ($hours < 24) {
//         return $hours . " hours ago";
//     } elseif ($days < 30) {
//         return $days . " days ago";
//     } else {
//         $months = round($days / 30);
//         $years = round($days / 365);
//         if ($months < 12) {
//             return $months . " last month";
//         } else {
//             return $years . " last year";
//         }
//     }
// }
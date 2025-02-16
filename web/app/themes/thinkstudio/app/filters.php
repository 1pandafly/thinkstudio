<?php

/**
 * Theme filters.
 */

namespace App;

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
    return sprintf(' &hellip; <a href="%s">%s</a>', get_permalink(), __('Continued', 'sage'));
});

add_filter('upload_mimes', function ($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    $mimes['webp'] = 'image/webp';
    $mimes['jpg'] = 'image/jpg';
    $mimes['png'] = 'image/png';
    $mimes['mp4'] = 'video/mp4';
    $mimes['pdf'] = 'application/pdf';
    $mimes['zip'] = 'application/zip';
    return $mimes;
});

add_filter('wp_check_filetype_and_ext', function ($data, $file, $filename, $mimes) {
    $ext = explode('.', $filename);
    $ext = strtolower(end($ext));
    if ($ext === 'svg') {
        $data['type'] = 'image/svg+xml';
        $data['ext'] = 'svg';
        $data['proper_filename'] = $filename;
    }
    return $data;
}, 10, 4);

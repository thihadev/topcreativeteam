<?php

use App\Encryption\Encrypter;

if (! function_exists('security_decrypt')) {
	
	function security_decrypt($token)
	{
		return (new Encrypter)->decrypt($token);
	}
}

if (! function_exists('security_encrypt')) {
	
	function security_encrypt($token)
	{
		return (new Encrypter)->encrypt($token);
	}
}

if (! function_exists('image_path')) {

	function image_path($value) 
	{
		if (is_object($value)) {
			return is_null($value) ? "/img/no-image.png" : $value->path;
		}

		return is_null($value) ? "/img/no-image.png": $value;
	}
	
}

if (! function_exists('image_thumb_path')) {

	function image_thumb_path($value) 
	{
		if (is_object($value)) {
			return is_null($value) ? "/img/no-image.png" : $value->thumb_path;
		}

		return is_null($value) ? "/img/no-image.png" : $value;
	}
	
}

if (! function_exists('avatar_path')) {

	function avatar_path($object) 
	{
		return is_null($object) ? "/img/no-user.png" : $object->path;
	}
	
}

if (! function_exists('active_segment')) {

	function active_segment($index, $path) 
	{
		return request()->segment($index) == $path ? 'active' : '';
	}
	
}

if (! function_exists('active_path')) {

	function active_path($path) 
	{
		//return $path;
		return request()->is($path) ? 'active' : '';
	}
	
}

if (! function_exists('location_prefix')) {

	function location_prefix($path) 
	{
		switch ($path) {
			case 'admin/cities':
				return 'cities';
			break;
			case 'admin/townships':
				return 'townships';
			break;
			case 'admin/destinations':
				return 'destinations';
			break;
			case 'admin/areas':
				return 'areas';
			break;
			case 'admin/rooms/services':
				return 'services';
			break;
			default:
				return 'admin';
		}
	}
	
}

if (! function_exists('str_filter')) {
	
	function str_filter($string)
	{
		return filter_var($string, FILTER_SANITIZE_STRING);
	}
}

if (! function_exists('str_card')) {
	
	function str_card($value)
	{
		return implode('-', str_split($value, 4));
	}
}

if (! function_exists('split_daterange')) {

	function split_daterange($date)
	{
		if (! $date) return null;

		$date = explode(' - ', $date);
		$from = $date[0];
		$to = $date[1];
		$from = str_replace('/', '-', $from);
		$to = str_replace('/', '-', $to);

		return ['from' => $from, 'to' => $to];
	}
}

/**
 * Character and number customer random string.
 */
if (! function_exists('chrn_random')) {
	
	function chrn_random()
	{
		return rand(65, 90) . chr(rand(65, 90)) . rand(65, 90) . chr(rand(65, 90)) . rand(65, 90) . chr(rand(65, 90));
	}
}

/**
 * Character 3 Number 6 random string
 */
if (! function_exists('chr3n6_random')) {
	
	function chr3n6_random()
	{
		return chr(rand(65, 90)) . chr(rand(65, 90)) . chr(rand(65, 90)) . rand(100000, 999999);
	}
}

/**
 * Get MB from given bytes.
 */
if (! function_exists('format_bytes')) {

	// function format_bytes($size, $precision = 2)
	// {
	//     $base = log($size, 1024);
	//     $suffixes = ['', 'KB', 'MB', 'GB', 'TB'];

	//     return round($size / 1000000, 1) . 'MB';

	//     // return round(pow(1024, $base - floor($base)), $precision) .' '. $suffixes[floor($base)];
	// }

	function format_bytes($bytes)
    {
        if ($bytes >= 1073741824) 
        {
			$bytes = round($bytes / 1000000000, 1) . 'GB';
        }
        elseif ($bytes >= 1048576)
        {
            $bytes = round($bytes / 1000000, 1) . ' MB';
        }
        elseif ($bytes >= 1024)
        {
            $bytes = round($bytes / 1000, 1) . ' KB';
        }
        elseif ($bytes > 1)
        {
            $bytes = $bytes . ' bytes';
        }
        elseif ($bytes == 1)
        {
            $bytes = $bytes . ' byte';
        }
        else
        {
            $bytes = '0 bytes';
        }

        return $bytes;
	}

}
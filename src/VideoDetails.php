<?php

namespace Fixik\VideoDetails;

class VideoDetails
{
    /**
     * Get YouTube video details by video URL.
     *
     * @param $video_url
     *
     * @return mixed
     */
    public static function getVideoDetailsByURL($video_url)
    {
        $get_video_details_link = "http://www.youtube.com/oembed?url={$video_url}&format=json";

        $curl = curl_init($get_video_details_link);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $return = curl_exec($curl);
        curl_close($curl);

        return json_decode($return, true);
    }
}
<?php

namespace App\Services;

use App\Models\Video;

class VideoRepository
{
    public const COUNT_VIDEO_PAGE = 6;

    public function getAllVideos()
    {
        return Video::published()->with('translations')->lang()
            ->orderBy('created_at', 'desc')->paginate(self::COUNT_VIDEO_PAGE);
    }
}

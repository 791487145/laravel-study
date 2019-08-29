<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use FFMpeg;

class IndexController extends Controller
{
    public function ffemp()
    {
        $ffmpeg = FFMpeg\FFMpeg::create(array(
            'ffmpeg.binaries'  => '/usr/bin/ffmpeg',//ffmpeg地址
            'ffprobe.binaries' => '/usr/bin/ffprobe',//ffprobe地址
            'timeout'          => 3600, // The timeout for the underlying process
            'ffmpeg.threads'   => 12,   // The number of threads that FFMpeg should use
        ));

        $video = $ffmpeg->open('1.mp4');
        $frame = $video->frame(FFMpeg\Coordinate\TimeCode::fromSeconds(1));//第一秒
        $res = $frame->save('ffmpeg.jpg');
        dd($res);
    }
}

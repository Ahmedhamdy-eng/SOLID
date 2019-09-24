<?php


namespace SOLID\ISP;


class Bus implements Vehicle,Entertainment
{
    public function musicPlay()
    {
        echo "musicPLay";
    }
    public function pause()
    {
        echo "pause";
    }
    public function rewind()
    {
        echo "rewind";
    }
    public function move()
    {
        echo "move";
    }
    public function stop()
    {
        echo "stop";
    }
}
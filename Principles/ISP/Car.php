<?php


namespace SOLID\ISP;


class Car implements Vehicle,Entertainment,Speedable
{
    public function accelerate()
    {
        echo "accelerate";
    }
    public function move()
    {
        echo "move";
    }
    public function stop()
    {
        echo "stop";
    }
    public function musicPlay()
    {
        echo "musicPlay";
    }
    public function pause()
    {
        echo "pause";
    }
    public function rewind()
    {
        echo "rewind";
    }


}
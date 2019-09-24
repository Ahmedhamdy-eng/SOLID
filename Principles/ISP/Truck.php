<?php


namespace SOLID\ISP;


class Truck implements Vehicle,Heavy
{
    public function move()
    {
        echo "move";
    }
    public function stop()
    {
        echo "stop";
    }
    public function CaryHeavyCargo()
    {
        echo "caryHeavyCargo";
    }

}
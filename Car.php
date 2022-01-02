<?php

class Car
{
    private bool $hasParkBrake = False;

    public function setParkBrake()
    {
        if($this->hasParkBrake == True) {
            $this->hasParkBrake = False;
        } else {
            $this->hasParkBrake = True;
        }
    }

    public function start()
    {
        if ($this->hasParkBrake) {
           throw new Exception("Parking brake is active");
        }

    }
}
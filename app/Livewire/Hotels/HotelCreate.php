<?php

namespace App\Livewire\Hotels;

use App\Models\Hotel;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

class HotelCreate extends Component
{
    #[Title("Hotel Create")]

    #[Validate("required|min:3")]
    public $name='';

    #[Validate("required|max:255")]
    public $address;

    #[Validate("required|numeric")]
    public $stars;

    #[Validate("required|numeric")]
    public $phone;

    #[Validate("required|email")]
    public $email;

    #[Validate("required|datetime")]
    public $check_in_time;

    #[Validate("required|datetime")]
    public $check_out_time;

    public function render()
    {
        return view('livewire.hotels.hotel-create');
    }

    public function create(){
        $this->validate();
        Hotel::create($this->all());
        return $this->redirect('/hotel', navigate:true);
    }
}
<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;
use App\Models\School;
use Livewire\Attributes\Locked;
use Illuminate\Validation\Rule;
use Exception;


class EscolaForm extends Form
{
    #[Locked] 
    public $schoolId = '';
    #[Validate('required|string')]
    public string $name = '';

    #[Validate('required|email|string|unique:schools')]
    public string $email = '';

    #[Validate('required|string')]
    public string $address = '';

    #[Validate('required|string')]
    public string $telephone = '';

    public array $schoolDelete = [];

    public ?School $school;

  public function destroy()
  {
    try {

      foreach($this->schoolDelete as $key => $school){
          School::where('id', $key)->delete();
      }

      return true;

    } catch (Exception $e) {
        return false;
    }
  }

  public function setSchool(School $school)
  {
      $this->school = $school;
      $this->schoolId = $school->id;
      $this->name = $school->name;
      $this->email = $school->email;
      $this->address = $school->address;
      $this->telephone = $school->telephone;
  }

  public function updateForm()
  {
    $this->validate([
      'email' => ['required', Rule::unique('schools')->ignore($this->school)]
    ]);

    $this->school->update([
      'name' => $this->name,
      'email' => $this->email,
      'address' => $this->address,
      'telephone' => $this->telephone
    ]);
  }


  public function store()
  {
    School::create($this->validate());
    $this->reset();
  }

}

<?php

namespace App\Http\Livewire;

use App\Models\Place;
use Livewire\Component;

class AutoComplete extends Component
{
    public $query= '';
    public array $places = [];
    public int $selectedPlace = 0;
    public int $highlightIndex = 0;
    public bool $showDropdown;

    public function mount()
    {
        $this->reset();
    }

    public function reset(...$properties)
    {
        $this->places = [];
        $this->highlightIndex = 0;
        $this->query = '';
        $this->selectedPlace = 0;
        $this->showDropdown = true;
    }

    public function hideDropdown()
    {
        $this->showDropdown = false;
    }

    public function incrementHighlight()
    {
        if ($this->highlightIndex === count($this->places) - 1) {
            $this->highlightIndex = 0;
            return;
        }

        $this->highlightIndex++;
    }

    public function decrementHighlight()
    {
        if ($this->highlightIndex === 0) {
            $this->highlightIndex = count($this->places) - 1;
            return;
        }

        $this->highlightIndex--;
    }

    public function selectPlace($id = null)
    {
        $id = $id ?: $this->highlightIndex;

        $place = $this->places[$id] ?? null;

        if ($place) {
            $this->showDropdown = true;
            $this->query = $place['name'];
            $this->selectedPlace = $place['id'];
        }
    }

    public function updatedQuery()
    {
        $this->places = Place::where('name', 'like', '%' . $this->query. '%')
            ->take(5)
            ->get()
            ->toArray();
    }

    public function render()
    {
        return view('livewire.auto-complete');
    }
}

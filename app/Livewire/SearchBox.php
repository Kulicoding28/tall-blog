<?php

namespace App\Livewire;

use Livewire\Component;

use function Laravel\Prompts\search;

class SearchBox extends Component
{
    public $search = '';

    public $isSearchable = true;


    public function updateSearch()
    {

        $this->dispatch('search', search: $this->search);

        if ($this->isSearchable) {
            $this->isSearchable = false;
            sleep(2);
            $this->isSearchable = true;
        }
    }
    /**
     * Renders the search box component.
     *
     * @return \Illuminate\View\View
     */
    /******  41cc7a2e-8d3f-41f2-82bb-53c5b344656d  *******/
    public function render()
    {
        return view('livewire.search-box');
    }
}

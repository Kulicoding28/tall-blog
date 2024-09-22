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
            // Simulasi pencarian
            $this->isSearchable = false; // Disable tombol selama pencarian

            // Simulasi delay untuk pencarian (contoh)
            sleep(2);

            // Setelah pencarian selesai
            $this->isSearchable = true; // Aktifkan kembali tombol
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

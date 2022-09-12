<?php

namespace App\Http\Livewire\Admins\Countries;

use App\Models\Country;
use Livewire\Component;
use Livewire\WithPagination;

class Countries extends Component
{

    use WithPagination;

    public $name_ar, $name_en, $code, $phone_length, $Id,  $showEditModal = false;
    public $showDeleteModal = false,  $search,  $sortField, $sortAsc = true, $lang = 'en';

    protected $queryString = ['search', 'sortField', 'sortAsc'];
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['closemodel' => 'closemodal'];

    protected $rules = [
        'name_ar' => 'required|regex:/(^([.-9ء0-ي\s]+)(\d+)?$)/u',
        'name_en' => 'required|regex:/(^([a0-zA9-Z-.\s]+)(\d+)?$)/u',
        'code' => 'required|min:3',
        'phone_length' => 'required',
    ];

    private function resetForm()
    {
        $this->resetValidation();
        $this->name_ar = "";
        $this->name_en = "";
        $this->code = "";
        $this->phone_length = "";
    }

    public function create()
    {
        $data = $this->validate();
        Country::create([
            'ar' => [
                'name' => $data['name_ar'],
            ],
            'en' => [
                'name' => $data['name_en'],
            ],
            'code' => $data['code'],
            'phone_length' => $data['phone_length'],
        ]);
        $this->resetForm();
        $this->render();
    }

    public function edit($id)
    {
        $this->resetValidation();
        $this->showEditModal = true;
        $this->Id = $id;
        $item = Country::findOrFail($this->Id);
        $this->name_ar = $item->{'name:ar'};
        $this->name_en = $item->{'name:en'};
        $this->code = $item->{'code'};
        $this->phone_length = $item->{'phone_length'};
    }


    public function update()
    {
        $data = $this->validate();
        $item = Country::find($this->Id);
        $item->update([
            'ar' => [
                'name' => $data['name_ar'],
            ],
            'en' => [
                'name' => $data['name_en'],
            ],
            'code' => $data['code'],
            'phone_length' => $data['phone_length'],
        ]);
        $this->resetForm();
        $this->emit('updatesurvise');
        $this->Id;
        $this->showEditModal = false;
        $this->render();
    }

    public function delete($id)
    {
        $this->Id = $id;
        $this->showDeleteModal = true;
        $this->render();
    }

    public function destroy()
    {
        Country::destroy($this->Id);
        $this->Id;
        $this->showDeleteModal = false;
        $this->render();
    }

    public function closemodal()
    {
        $this->resetValidation();
        $this->Id;
        $this->showEditModal = false;
        $this->showDeleteModal = false;
        $this->resetForm();
        $this->render();
    }

    public function sortBy($field, $lang)
    {
        $this->lang = $lang;
        if ($this->sortField == $field) {
            $this->sortAsc = !$this->sortAsc;
        } else {
            $this->sortAsc = true;
        }
        $this->sortField = $field;
    }
    public function render()
    {
        $items = Country::whereTranslationLike('name', '%' . $this->search . '%')
            ->when($this->sortField, function ($query) {
                $query->translatedIn($this->lang)->orderByTranslation($this->sortField, $this->sortAsc ? 'asc' : 'desc');
            })
            ->paginate(10);

        return view('livewire.admins.countries.countries', [
            'items' => $items,
        ])
            ->extends('admins.layout.index')
            ->section('content');
    }
}

<?php

namespace App\Http\Traits\Admins;

use App\Models\Country;
use Illuminate\Database\Eloquent\Collection;

trait CountryTrait
{

    public function index()
    {
        return Country::whereTranslationLike('name', '%' . $this->search . '%')
            ->when($this->sortField, function ($query) {
                $query->translatedIn($this->lang)->orderByTranslation($this->sortField, $this->sortAsc ? 'asc' : 'desc');
            })
            ->paginate(10);
    }

    /**
     * @param $data
     * @return mixed
     */
    public function countryCreate($data): mixed
    {
        $data = [
            'ar' => [
                'name' => $data['name_ar'],
            ],
            'en' => [
                'name' => $data['name_en'],
            ],
            'code' => $data['code'],
            'phone_length' => $data['phone_length'],
        ];

        return Country::create($data);
    }


    /**
     * @param $data
     * @param $id
     * @return mixed
     */
    public function countryUpdate($data, $id): mixed
    {
        $item = Country::find($id);
        $data = [
            'ar' => [
                'name' => $data['name_ar'],
            ],
            'en' => [
                'name' => $data['name_en'],
            ],
            'code' => $data['code'],
            'phone_length' => $data['phone_length'],
        ];
        return $item->update($data);
    }


}

<?php

namespace App\Http\Livewire;

use App\Models\Company;
use App\Models\Vacancy;
use Livewire\Component;

class CompanyLive extends Component
{
    public $name_company, $responsible, $isVacancy, $addCompany, $isActive, $phone, $email, $site, $count_teams, $address, $coordinate;
    public $count_company_percent = 0 ;
    public $term;
    public $isEdit = false;
    public $addCompanyCard = false;
    public $ListCompanyCard = true;


    public function resetInput()
    {
        $this->name_company = null;
        $this->responsible = null;
        $this->phone = null;
        $this->email = null;
        $this->address = null;
        $this->coordinate = null;

    }

    public function store()
    {
        $data = $this->validate([
            "name_company" => "required",
            "responsible" => "required",
            "phone" => "required",
            "email" => "required",
            "address" => "required",
            "coordinate" => "required",
        ]);


        Company::create($data);

        $this->resetInput();

    }


    public function render()
    {
        $term = '%'.$this->term.'%';

        $company = Company::where('name_company', 'LIKE', $term)->latest()->paginate(15);
        $company_count = Company::all()->count();

        $vacancy_count = Vacancy::all()->count();

        $prcie   = 1000;
        $percent = $company_count;
        $percent_enter = $prcie * ($percent / 100);


        $this->count_company_percent = $percent_enter;


        return view('livewire.company-live', compact('company', 'company_count',
        'vacancy_count'));
    }
}

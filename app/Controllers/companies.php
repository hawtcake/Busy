<?php

class companies extends Controller {
    public $param = [];

    public function index($company = null) {
        $model = $this->model('company');
      if(!$company) {
        $companies = $model->getCompanies();
        $first = $companies[0];
        header("Location: /companies/" . $first->name);
      } else {
        $companies = $model->getCompanies();
        $company = $model->getCompany($company);
        $this->view('companies/index', [
                    'title' => 'BusyApp :: Companies',
                    'companies' => $companies,
                    'first' => $company[0]]);
      }
    }

    public function people($company) {
        $this->view('companies/people', ['title' => 'BusyApp :: Companies']);
    }
}

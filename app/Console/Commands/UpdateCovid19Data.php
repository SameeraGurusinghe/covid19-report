<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

class UpdateCovidData extends Command
{
    protected $signature = 'update:covid19_data';
    protected $description = 'Fetches and updates the COVID-19 data from the API';

    public function handle()
    {
        $response = Http::get('https://hpb.health.gov.lk/api/get-current-statistical');

        if ($response->successful()) {
            $data = $response->json();
            $covidData = [
                'date' => $data['data']['update_date_time'],
                'new_cases' => $data['data']['local_new_cases'],
                'active_cases' => $data['data']['local_active_cases'],
                'total_cases' => $data['data']['local_total_cases'],
                'deaths' => $data['data']['local_deaths'],
                'recovered' => $data['data']['local_recovered'],
                'patient_in_hospitals' => $data['data']['local_total_number_of_individuals_in_hospitals']

            ];
            DB::table('covid19_data')->updateOrInsert(['id' => 1], $covidData);
            $this->info('COVID-19 data updated successfully!');
        } else {
            $this->error('Failed to fetch COVID-19 data from API!');
        }
    }
}
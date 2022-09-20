<?php

use App\Train;
use Illuminate\Database\Seeder;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = 
        [
            [
                'company' => 'Frecciarossa',
                'departure_station' => 'Milano',
                'arrivals_station' => 'Torino',
                'departure_time' => '8:00',
                'arrival_time' => '12:00',
                'train_code' => '12345',
                'number_carriages' => 5,
                'in_time' => true,
                'is_deleted' => false,
            ],
            [
                'company' => 'Trenitalia',
                'departure_station' => 'Rome',
                'arrivals_station' => 'Firenze',
                'departure_time' => '8:00',
                'arrival_time' => '17:00',
                'train_code' => '55625',
                'number_carriages' => 2,
                'in_time' => false,
                'is_deleted' => false,

            ],
            [
                'company' => 'Frecciarossa',
                'departure_station' => 'Milano',
                'arrivals_station' => 'Roma',
                'departure_time' => '10:00',
                'arrival_time' => '15:00',
                'train_code' => '34124',
                'number_carriages' => 8,
                'in_time' => false,
                'is_deleted' => true,

            ],
            [
                'company' => 'Trenitalia',
                'departure_station' => 'Venezia',
                'arrivals_station' => 'Roma',
                'departure_time' => '5:00',
                'arrival_time' => '13:00',
                'train_code' => '88984',
                'number_carriages' => 6,
                'in_time' => true,
                'is_deleted' => false,

            ],
            [
                'company' => 'Trenitalia',
                'departure_station' => 'Napoli',
                'arrivals_station' => 'Roma',
                'departure_time' => '7:00',
                'arrival_time' => '16:30',
                'train_code' => '22506',
                'number_carriages' => 8,
                'in_time' => false,
                'is_deleted' => false,

            ],
            [
                'company' => 'Frecciarossa',
                'departure_station' => 'Rome',
                'arrivals_station' => 'Milano',
                'departure_time' => '9:30',
                'arrival_time' => '13:20',
                'train_code' => '65575',
                'number_carriages' => 10,
                'in_time' => true,
                'is_deleted' => false,

            ],
        ];

        foreach ($trains as $train) {
            $newTrain = new Train();
            $newTrain->company = $train['company'];
            $newTrain->departure_station = $train['departure_station'];
            $newTrain->arrivals_station = $train['arrivals_station'];
            $newTrain->departure_time = $train['departure_time'];
            $newTrain->arrival_time = $train['arrival_time'];
            $newTrain->train_code = $train['train_code'];
            $newTrain->number_carriages = $train['number_carriages'];
            $newTrain->in_time = $train['in_time'];
            $newTrain->is_deleted = $train['is_deleted'];
            $newTrain->save();
        };
    }
}
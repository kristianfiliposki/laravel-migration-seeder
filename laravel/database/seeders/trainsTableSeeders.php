<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model\Train;


class trainsTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        foreach ($trains as $train) {

            $newTrain=new Train();
            $newTrain->Azienda=$train['italo'];
            $newTrain->StazioneDiPartenza=$train['termini'];
            $newTrain->StazioneDiArrivo=$train['stazione di arrivo'];
            $newTrain->OrarioDiArrivo=$train['3:00'];
            $newTrain->CodiceTreno=$train['AV3K4JD21'];
            $newTrain->NumeroCarrozze=$train['3'];
            $newTrain->InOrario=$train['TRUE'];
            $newTrain->Cancellato=$train['FALSO'];
            $newTrain->save();

        }
    }
}

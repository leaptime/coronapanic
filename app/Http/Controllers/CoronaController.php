<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class CoronaController extends Controller
{
    public function threat(Request $request)
    {
        $threats = array(
            'Cardiovascular diseases' =>  '177900000-17.79 million-Snakes',
            'Snakes' =>  '50000-50,000-Cancers',
            'Cancers' =>  '9560000- 9.56 million - Respiratory diseases',
            'Respiratory diseases' =>  '3910000- 3.91 million -Lower respiratory infections',
            'Lower respiratory infections' =>  '2560000- 2.56 million -Dementia',
            'Dementia' =>  '2510000- 2.51 million -Dogs',
            'Dogs' =>  '25000- 25000 -Digestive diseases',
            'Digestive diseases' =>  '2380000- 2.38 million -Neonatal disorders',
            'Neonatal disorders' =>  '1780000- 1.78 million -Diarrheal diseases',
            'Diarrheal diseases' =>  '1570000- 1.57 million -Diabetes',
            'Diabetes' =>  '1370000- 1.37 million -Liver diseases',
            'Liver diseases' =>  '1320000- 1.32 million -Road injuries',
            'Road injuries' =>  '1240000- 1.24  million -Kidney disease',
            'Kidney disease' =>  '1230000- 1.23  million -Tuberculosis',
            'Tuberculosis' =>  '1180000- 1.18 million -HIV/AIDS',
            'HIV/AIDS' =>  '954492-  954,492 -Suicide',
            'Suicide' =>  '793823- 793,823 -Homicide',
            'Homicide' =>  '405346- 405,346 -Malaria',
            'Malaria' =>  '405346- 405,346 -Parkinson disease',
            'Parkinson disease' =>  '340639- 340,639 -Drowning',
            'Drowning' =>  '295210- 295,210 -Meningitis',
            'Meningitis' =>  '288021- 288,021  -Nutritional deficiencies',
            'Nutritional deficiencies' =>  '269997- 269,997 -Proteinenergy malnutrition',
            'Proteinenergy malnutrition' =>  '231771- 231,771 -Maternal disorders',
            'Maternal disorders' =>  '193639- 193,639 -Alcohol use',
            'Alcohol use' =>  '184934- 184,934 -Drug use',
            'Drug use' =>  '166613- 166,613 -Conflict',
            'Conflict' =>  '129720- 129,720 - Hepatitis',
            'Hepatitis' =>  '126391- 126,391 -Fire',
            'Fire' =>  '120632- 120,632 -Hippos',
            'Hippos' =>  '500- 500 -Poisonings',
            'Poisonings' =>  '72371- 126,391 -Heat',
            'Heat' =>  '53350- 53,350 -Terrorism',
            'Terrorism' =>  '26445- 26,445 -Natural disasters',
            'Natural disasters' =>  '26445- 26,445 -Cardiovascular diseases',
        );
 

        $size = count($threats);


        $threat = 'Cardiovascular diseases';

        if ($request->has('threat'))
        {
             $threat = $request->input('threat');
        }

        $dump = $threats[$threat];

        list($fatalities,$number,$next) = explode('-',$dump);

        $ratio = round($fatalities / 10000, 2);

        return view('threat')
            ->with('threat' ,$threat)
            ->with('number' , $number)
            ->with('next' , $next)
            ->with('ratio' ,$ratio);
    }
}
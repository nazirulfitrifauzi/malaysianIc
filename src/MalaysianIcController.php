<?php

namespace Nazfitri\MalaysianIc;

use App\Http\Controllers\Controller;

class MalaysianIcController extends Controller
{
    public function get_dob($ic)
    {
        $code = substr($ic, 0, 6);
        $d = substr($code, 4, 2);
        $m = substr($code, 2, 2);
        $y = substr($code, 0, 2);

        if ($y >= 50) {
            $y += 1900;
        }

        return $d . '-' . $m . '-' . $y;
    }

    public function get_birthplace($ic)
    {
        $code = substr($ic, 6, 2);

        switch ($code) {
            case '01':
            case '21':
            case '22':
            case '23':
            case '24':
                $state = 'Johor';
                break;

            case '02':
            case '25':
            case '26':
            case '27':
                $state = 'Kedah';
                break;

            case '03':
            case '28':
            case '29':
                $state = 'Kelantan';
                break;

            case '04':
            case '30':
                $state = 'Melaka';
                break;

            case '05':
            case '31':
            case '59':
                $state = 'Negeri Sembilan';
                break;

            case '06':
            case '32':
            case '33':
                $state = 'Pahang';
                break;

            case '07':
            case '34':
            case '35':
                $state = 'Penang';
                break;

            case '08':
            case '36':
            case '37':
            case '38':
            case '39':
                $state = 'Perak';
                break;

            case '09':
            case '40':
                $state = 'Perlis';
                break;

            case '10':
            case '41':
            case '42':
            case '43':
            case '44':
                $state = 'Selangor';
                break;

            case '11':
            case '45':
            case '46':
                $state = 'Terengganu';
                break;

            case '12':
            case '47':
            case '48':
            case '49':
                $state = 'Sabah';
                break;

            case '13':
            case '50':
            case '51':
            case '52':
            case '53':
                $state = 'Sarawak';
                break;

            case '14':
            case '54':
            case '55':
            case '56':
            case '57':
                $state = 'Wilayah Persekutuan Kuala Lumpur';
                break;

            case '15':
            case '58':
                $state = 'Wilayah Persekutuan Labuan';
                break;

            case '16':
                $state = 'Wilayah Persekutuan Putrajaya';
                break;

            case '82':
            default:
                $state = 'Others';
                break;
        }

        return $state;
    }

    public function get_gender($ic)
    {
        $code = substr($ic, -2);
        $code = intval($code);

        if ($code % 2 === 0) {
            $gender    = 'Female';
        } else {
            $gender    = 'Male';
        }

        return $gender;
    }
}

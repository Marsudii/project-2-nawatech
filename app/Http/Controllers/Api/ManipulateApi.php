<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Queue\Events\Looping;
use Illuminate\Routing\Controller as BaseController;

class ManipulateApi extends BaseController
{
    public function dataManipulate()
    {
        //Get Data JSON From Public File
        $dataJsonOne = json_decode(file_get_contents(public_path('1_JSON.json')), true);
        $dataJsonTwo = json_decode(file_get_contents(public_path('2_JSON.json')), true);
        //looping data 1_JSON.json with foreach
        foreach ($dataJsonOne['data'] as $entry) {
            $ahassCode = $entry['booking']['workshop']['code'];
            // Find workshop information based on AHASS code
            $workshopInfo = $this->findWorkshopInfo($dataJsonTwo['data'], $ahassCode);
            if ($workshopInfo) {
                $mergedEntry = [
                    "name" => $entry["name"],
                    "email" => $entry["email"],
                    "booking_number" => $entry["booking"]["booking_number"],
                    "book_date" => $entry["booking"]["book_date"],
                    "ahass_code" => $workshopInfo["code"],
                    "ahass_name" => $workshopInfo["name"],
                    "ahass_address" => $workshopInfo["address"],
                    "ahass_contact" => $workshopInfo["phone_number"],
                    "ahass_distance" => $workshopInfo["distance"],
                    "motorcycle_ut_code" => $entry["booking"]["motorcycle"]["ut_code"],
                    "motorcycle" => $entry["booking"]["motorcycle"]["name"],
                ];
                $mergedData[] = $mergedEntry;
            }
        }
        //call fungsi sorting data
        $sortedData = $this->sortingData($mergedData);

        //create response template
        $outputDataResult = [
            "status" => 1,
            "message" => "OK",
            "data" => $sortedData,
        ];

        return response()->json($outputDataResult);
    }

    //Create Function Data Sorting small to large
    private function sortingData($paramData)
    {
        usort($paramData, function ($a, $b) {
            return $a['ahass_distance'] - $b['ahass_distance'];
        });
        return $paramData; // Return the sorted array
    }

    // Create Function to find workshop information by AHASS code
    private function findWorkshopInfo($dataJsonTwo, $ahassCode)
    {
        //Looping data workshop to get merged data
        foreach ($dataJsonTwo as $workshop) {
            if ($workshop['code'] === $ahassCode) {
                //if result same display workshop
                return $workshop;
            }
        }
        return null; // if Return null no workshop info
    }
}

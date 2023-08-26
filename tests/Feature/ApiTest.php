<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ApiTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_sortData(): void
    {
        $response = $this->get('/api/manipulate/data');
        $response->assertStatus(200);
        $response->assertJson([
            'status' => 1,
            'message' => "Data Successfully Retrieved.",
            'data' => [
                [
                    "name" =>  "ilyas",
                    "email" =>  "ilyas@gmail.com",
                    "booking_number" =>  "117236109426",
                    "book_date" =>  "2022-06-08",
                    "ahass_code" =>  "00190",
                    "ahass_name" =>  "Dunia Motor Kebayoran Lama",
                    "ahass_address" =>  "Kebayoran Lama, Jakarta Selatan",
                    "ahass_contact" =>  "085600000000",
                    "ahass_distance" =>  2.5,
                    "motorcycle_ut_code" =>  "NC11B3C2A/T",
                    "motorcycle" => "NEW BEAT CAST WHEEL"
                ],
                [
                    "name" => "ilyas",
                    "email" => "ilyas@gmail.com",
                    "booking_number" => "117550109404",
                    "book_date" => "2022-06-08",
                    "ahass_code" => "00190",
                    "ahass_name" => "Dunia Motor Kebayoran Lama",
                    "ahass_address" => "Kebayoran Lama, Jakarta Selatan",
                    "ahass_contact" => "085600000000",
                    "ahass_distance" => 2.5,
                    "motorcycle_ut_code" => "R2B02K01S1K M/T",
                    "motorcycle" => "REVO FIT JKT"
                ],
                [
                    "name" => "anwar",
                    "email" => "anwar@mail.com",
                    "booking_number" => "101000103066",
                    "book_date" => "2022-03-12",
                    "ahass_code" => "01000",
                    "ahass_name" => "Wahana Honda Gunung Sahari",
                    "ahass_address" => "Jalan Gunung Sahari",
                    "ahass_contact" => "085800000000",
                    "ahass_distance" => 5.2,
                    "motorcycle_ut_code" => "H5C02R20S1 M/T",
                    "motorcycle" => "NEW CB150R STREETFIRE"
                ],
                [
                    "name" => "heru",
                    "email" => "heru@gmail.com",
                    "booking_number" => "10100062661",
                    "book_date" => "2022-06-09",
                    "ahass_code" => "11497",
                    "ahass_name" => "AHASS KAWI Indah Jaya Motor 3",
                    "ahass_address" => "Jakarta Pusat",
                    "ahass_contact" => "085300000000",
                    "ahass_distance" => 10.3,
                    "motorcycle_ut_code" => "HH1B02N41S1 A/T",
                    "motorcycle" => "BEAT SPORTY CBS MMC"
                ],
                [
                    "name" => "kibo",
                    "email" => "kibo@gmail.com",
                    "booking_number" => "117550109401",
                    "book_date" => "2022-05-10",
                    "ahass_code" => "11497",
                    "ahass_name" => "AHASS KAWI Indah Jaya Motor 3",
                    "ahass_address" => "Jakarta Pusat",
                    "ahass_contact" => "085300000000",
                    "ahass_distance" => 10.3,
                    "motorcycle_ut_code" => "D1I02N27M1 A/T",
                    "motorcycle" => "BEAT STREET"
                ],
                [
                    "name" => "santoso",
                    "email" => "santoso@microsoft.com",
                    "booking_number" => "101000109430",
                    "book_date" => "2022-03-12",
                    "ahass_code" => "07577",
                    "ahass_name" => "AHASS TUNGGAL JAYA",
                    "ahass_address" => "Jakarta Timur",
                    "ahass_contact" => "085200000000",
                    "ahass_distance" => 11.5,
                    "motorcycle_ut_code" => "NF11C1CD M/T",
                    "motorcycle" => "BLADE S"
                ]
            ]
        ]);
    }
}

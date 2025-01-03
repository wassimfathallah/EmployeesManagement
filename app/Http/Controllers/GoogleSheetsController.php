<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Google\Client;
use Google\Service\Sheets;

class GoogleSheetsController extends Controller
{

public function readSheet()
{
    $client = new Client();
    $client->setApplicationName('Google Sheets API Laravel');
    $client->setScopes([Sheets::SPREADSHEETS_READONLY]);
    $client->setAuthConfig(config('services.google_sheets.credentials'));
    $client->setAccessType('offline');

    $service = new Sheets($client);

    $spreadsheetId = '1QpOlz-pD21RtoXZS_t471lJ3MJMRlcH_cOCLRAhrEHg';
    $ranges = ['Aya!A:E', 'Maryem!A:E', 'Israa!A:E'];
    
    $response = $service->spreadsheets_values->batchGet($spreadsheetId, ['ranges' => $ranges]);
    $valueRanges = $response->getValueRanges();

    $allFilteredValues = [];
    $allSums = [];
    $currentDate = Carbon::now();
    $today = $currentDate->format('d.m.Y');

    foreach ($valueRanges as $index => $valueRange) {
        $values = $valueRange->getValues();
        $filteredValues = [];
        $sum = 0;
 
        if (!empty($values)) {
            foreach ($values as $row) {
                if (isset($row[0]) && $row[0] == $today) {
                   
                    $filteredValues[] = $row;
                    $columnCValue = isset($row[4]) ? $row[4] : 0;

                    if (is_numeric($columnCValue)) {
                        $sum += $columnCValue;
                    }

                }
            }
        }

        $allFilteredValues[$ranges[$index]] = $filteredValues;
         $allSums[$ranges[$index]] = $sum;
    }
    return view('employees.sheet_employee', ['allFilteredValues' => $allFilteredValues, 'allSums' => $allSums]);
    
}





}
<?php

namespace App\Services;

use Google\Client;
use Google\Service\Sheets;

class GoogleSheetsService
{
    protected $client;
    protected $service;

    public function __construct()
    {
        $this->client = new Client();
        $this->client->setApplicationName('Google Sheets API Laravel');
        $this->client->setScopes([Sheets::SPREADSHEETS_READONLY]);
        $this->client->setAuthConfig(config('services.google_sheets.credentials'));
        $this->client->setAccessType('offline');

        $this->service = new Sheets($this->client);
    }

    public function readSheet($spreadsheetId, $range)
    {
        $response = $this->service->spreadsheets_values->get($spreadsheetId, $range);
        return $response->getValues();
    }
}
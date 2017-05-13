<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublikasiController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function daftar()
    {
        try {
            $response = $this->client->request('GET', 'publication');
            $result = $response->getBody();
            $data = json_decode($result, true);
            if($data['success']){
                $data = $data['data'];

                return view('content.publikasi', compact('data'));
            }
            else{
                return $data['message'];
            }
        } catch (BadResponseException $e) {
            return $e->getCode() . ', ' . $e->getMessage();
        }
    }

    public function detail($id)
    {
        try {
            $response = $this->client->request('GET', 'publication/'.$id);
            $result = $response->getBody();
            $data = json_decode($result, true);
            if($data['success']){
                $data = $data['data'];

                return view('content.detailpublikasidua', compact('data'));
            }
            else{
                return $data['message'];
            }
        } catch (BadResponseException $e) {
            return $e->getCode() . ', ' . $e->getMessage();
        }
    }

    public function download($filename)
    {
        try {
            $request = file_get_contents(env('API_URL').'publication/download/'.$filename);
            return redirect($request);
        }
        catch (\GuzzleHttp\Exception\ClientException $e) {
          $response = $e->getResponse();
          $result = json_decode($response->getBody(), true);
          $message = $result['message'];
          return $result;
        }
    }
}

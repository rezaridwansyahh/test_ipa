<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\BadResponseException;
use GuzzleHttp\Exception\RequestException;

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
                session([
                    'prev' => $data['prev_page_url'],
                    'next' => $data['next_page_url'],
                    'page' => env('API_URL').'publication?page='
                ]);

                return view('content.publikasi', compact('data'));
            }
            else{
                return $data['message'];
            }
        } catch (BadResponseException $e) {
            return $e->getCode() . ', ' . $e->getMessage();
        }
    }

    public function next()
    {
        try {
            $link = session()->get('next');
            $response = $this->client1->request('GET', $link);
            $result = $response->getBody();
            $data = json_decode($result, true);

            if($data['success']){
                $data = $data['data'];
                session([
                    'prev' => $data['prev_page_url'],
                    'next' => $data['next_page_url'],
                    'page' => env('API_URL').'publication?page='
                ]);

                return view('ajax.publikasi', compact('data'));
            }
            else{
                return $data['message'];
            }
        } catch (BadResponseException $e) {
            return $e->getCode() . ', ' . $e->getMessage();
        }
    }

    public function prev()
    {
        try {
            $link = session()->get('prev');
            $response = $this->client1->request('GET', $link);
            $result = $response->getBody();
            $data = json_decode($result, true);

            if($data['success']){
                $data = $data['data'];
                session([
                    'prev' => $data['prev_page_url'],
                    'next' => $data['next_page_url'],
                    'page' => env('API_URL').'publication?page='
                ]);

                return view('ajax.publikasi', compact('data'));
            }
            else{
                return $data['message'];
            }
        } catch (BadResponseException $e) {
            return $e->getCode() . ', ' . $e->getMessage();
        }
    }

    public function hal(Request $request)
    {
        try {
            $id = $request->id;
            $link = session()->get('page').$id;
            $response = $this->client1->request('GET', $link);
            $result = $response->getBody();
            $data = json_decode($result, true);

            if($data['success']){
                $data = $data['data'];
                session([
                    'prev' => $data['prev_page_url'],
                    'next' => $data['next_page_url'],
                    'page' => env('API_URL').'publication?page='
                ]);

                return view('ajax.publikasi', compact('data'));
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

    public function download($id)
    {
        if(!session()->has('access_token')){
            return redirect('http://publication.ipa.or.id');
        }
        try{
            $filename = "Jurnal IPA-".$id.".pdf";
            $tempImage = tempnam(sys_get_temp_dir(), $filename);
            $resource = fopen($tempImage, 'w');
            $stream = \GuzzleHttp\Psr7\stream_for($resource);
            $result = $this->client->post('publication/download',[
                'headers' => [
                    'Authorization' => 'Bearer ' . session()->get('access_token')
                ],
                'form_params' =>[
                    'id'=> $id
                ],
                'save_to' => $stream
            ]);
            return response()->download($tempImage,$filename);
        } catch (BadResponseException $e) {
            return $e->getCode() . ', ' . $e->getMessage();
        }
    }

    public function downloadevent(Request $request)
    {
        try{
            $id = $request->id;
            $filename = "Jurnal IPA-".$id.".pdf";
            $tempImage = tempnam(sys_get_temp_dir(), $filename);
            $resource = fopen($tempImage, 'w');
            $result = $this->client->post('download/event',[
                'form_params' =>[
                    'id'=> $request->id,
                    'email'=> $request->email,
                    'code'=> $request->code
                ]
            ]);
            if($result->getStatusCode()==200);{
                $result = $this->client->post('download/event',[
                    'form_params' =>[
                        'id'=> $request->id,
                        'email'=> $request->email,
                        'code'=> $request->code
                    ],
                    'sink' => $resource
                ]);
                return response()->download($tempImage,$filename);
            }
        }catch (BadResponseException $e) {
            // return $e->getCode() . ', ' . $e->getMessage();
            return $e->getCode();
        }
    }
}

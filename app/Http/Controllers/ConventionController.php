<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\BadResponseException;
use GuzzleHttp\Exception\RequestException;
use App\Http\Controllers\StandardPageController;

class ConventionController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function cari()
    {
        return view('convention.cari');
    }
    
    public function daftar(Request $request)
    {
        $filter = $request->except("_token");
        $search = "";
        $field = "";
        foreach($filter as $key => $val){
            if(!empty($val)){
                if(empty($search)){
                    $search.= $key.":".$val;
                    $field.= $key.":like";
                }
                else{
                    $search.= ";".$key.":".$val;
                    $field.= ";".$key.":like";
                }
            }
        }
        $query = array(
            'search' => $search,
            'searchFields' => $field
        );
        try {
            $response = $this->client->get('event',[
                'headers' => [
                    'kunci-event' => session()->get('event_token')
                ],
                'query' => $query
            ]);
            $result = $response->getBody();
            // return $result;
            $data = json_decode($result, true);

            if($data['success']){
                $data = $data['data'];
                session([
                    'prev' => $data['prev_page_url'],
                    'next' => $data['next_page_url'],
                    'query' => $query,
                    'page' => env('API_URL').'event'
                ]);
                $data['title'] = "List of Convention Publication".date("Y");

                return view('convention.list', compact('data'));
            }
            else{
                return $data['message'];
            }
        } catch (BadResponseException $e) {
            return app('App\Http\Controllers\StandardPageController')->logoutEvent($request);
            // return redirect("/convention")->with("pesan",$e->getMessage());
        }
    }

    public function next()
    {
        try {
            $link = session()->get('next');
            $response = $this->client->get($link,[
                'headers' => [
                    'kunci-event' => session()->get('event_token')
                ]
            ]);
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
            return "Maaf, Ada Kesalahan Silahkan Hubungi Administrator Website IPA";
        }
    }

    public function prev()
    {
        try {
            $link = session()->get('prev');
            $response = $this->client->get($link,[
                'headers' => [
                    'kunci-event' => session()->get('event_token')
                ]
            ]);
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
            return "Maaf, Ada Kesalahan Silahkan Hubungi Administrator Website IPA";
        }
    }

    public function hal(Request $request)
    {
        try {
            $id = $request->id;
            $link = session()->get('page');
            $query = session()->get('query');
            $query['page'] = $id;
            $response = $this->client1->get($link,[
                'headers' => [
                    'kunci-event' => session()->get('event_token')
                ],
                'query' => $query
            ]);
            $result = $response->getBody();
            $data = json_decode($result, true);

            if($data['success']){
                $data = $data['data'];
                session([
                    'prev' => $data['prev_page_url'],
                    'next' => $data['next_page_url'],
                    'page' => env('API_URL').'event'
                ]);

                return view('ajax.publikasi', compact('data'));
            }
            else{
                return $data['message'];
            }
        } catch (BadResponseException $e) {
            return "Maaf, Ada Kesalahan Silahkan Hubungi Administrator Website IPA";
        }
    }

    public function detail($id)
    {
        try {
            $result = $this->client->get('event/detail/'.$id,[
                'headers' => [
                    'kunci-event' => session()->get('event_token')
                ]
            ]);
            $result = $result->getBody();
            $data = json_decode($result, true);
            if($data['success']){
                $data = $data['data'];
                $title = "List of Convention Publication ".date("Y");
                return view('convention.detail', compact('data','title'));
            }
            else{
                return redirect("/convention")->with("pesan",$data['message']);
            }
        } catch (BadResponseException $e) {
            return redirect("/convention")->with("pesan",$e->getMessage());
        }
    }

    public function download($id)
    {
        if(!session()->has('event_token')){
            return redirect('/event/login');
        }
        try{
            $result = $this->client->get('event/detail/'.$id,[
                'headers' => [
                    'kunci-event' => session()->get('event_token')
                ]
            ]);
            if($result->getStatusCode()==200){
                $filename = "Jurnal IPA-".$id.".pdf";
                $tempImage = tempnam(sys_get_temp_dir(), $filename);
                $resource = fopen($tempImage, 'w');
                $stream = \GuzzleHttp\Psr7\stream_for($resource);
                $result = $this->client->post('event/download',[
                    'headers' => [
                        'kunci-event' => session()->get('event_token')
                    ],
                    'form_params' =>[
                        'id'=> $id
                    ],
                    'save_to' => $stream
                ]);
                return response()->download($tempImage,$filename);
            }
        } catch (BadResponseException $e) {
            return redirect("/convention")->with("pesan",$e->getMessage());
            // return $e->getCode() . ', ' . $e->getMessage();
        }
    }
}

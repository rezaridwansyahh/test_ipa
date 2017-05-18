<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use Validator;

class StandardPageController extends Controller
{
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    return view('content.home');
  }

  public function construction()
  {
    return view('content.construction');
  }

  public function login(Request $request)
  {
    try {
      $validator = Validator::make($request->all(), [
        'email' => 'required|email|max:150',
        'password' => 'required|min:3',
      ]);

      if ($validator->fails()) {
        return redirect('/')->withErrors($validator);
      }

      $body = [
        'email' => $request['email'],
        'password' => $request['password'],
      ];

      $request = $this->client->request('POST', env('API_URL').'auth/login', ['json' => $body]);
      $response = json_decode($request->getBody(), true);

      session([
        'access_token' => $response['data']['access_token'],
        'refresh_token' => $response['data']['refresh_token'],
        'id' => $response['data']['profile']['id'],
        'group_type' => $response['data']['profile']['group_type'],
        'email' => $response['data']['profile']['email'],
        'nama' => $response['data']['profile']['name'].' '.$response['data']['profile']['last_name']
      ]);
      if($response['data']['profile']['group_type']==3){
        return redirect('/publikasi');
      }
      else{
        return redirect('/event');
      }
    }
    catch (\GuzzleHttp\Exception\ClientException $e) {
      $response = $e->getResponse();
      $result = json_decode($response->getBody(), true);
      $message = $result['message'];

      return redirect('/')->with('flash_notification', ['message' => $message])->withInput();
    }
  }

  public function publikasi()
  {
    return view('content.publikasi');
  }

  public function detailpublikasi()
  {
    return view('content.detailpublikasi');
  }

  public function detailpublikasidua()
  {
    return view('content.detailpublikasidua');
  }

  public function detailpublikasitiga()
  {
    return view('content.detailpublikasitiga');
  }

  public function profil()
  {
    if (session()->has('access_token')) {
      $request = $this->client->request('GET', env('API_URL').'auth/me', [
        'headers' => [
          'Authorization' => 'Bearer '.session()->get('access_token'),
          'Accept'     => 'application/json'
        ]
      ]);
      $response = json_decode($request->getBody(), true);

      return view('content.profil')->with('data', $response);
    }
    else {
      return redirect('/');
    }
  }

  public function loginEvent(Request $request)
  {
    try {
      $validator = Validator::make($request->all(), [
        'email' => 'required|email|max:150',
        'codenumber' => 'required|min:3',
      ]);

      if ($validator->fails()) {
        return redirect('/')->withErrors($validator);
      }

      $body = [
        'email' => $request['email'],
        'password' => $request['codenumber'],
      ];
      $email = explode("@",$request['email']);

      $request = $this->client->request('POST', env('API_URL').'auth/event', ['json' => $body]);
      $response = json_decode($request->getBody(), true);
      session([
        'event_token' => $response['kunci-convex'],
        'event_email' => $response['data']['firstname'].' '.$response['data']['lastname']
      ]);
      return redirect('/convention');
    }
    catch (\GuzzleHttp\Exception\ClientException $e) {
      $response = $e->getResponse();
      $result = json_decode($response->getBody(), true);
      $message = $result['message'];
      return redirect('/')->with('flash_notification', ['message' => $message])->withInput();
    }
  }

  public function logout(Request $request)
  {
    $evt_token = session()->get('event_token');
    $evt_email = session()->get('event_email');
    $request->session()->flush();
    $request->session()->regenerate();
    session([
      'event_token' => $evt_token,
      'event_email' => $evt_email
    ]);
    return redirect('/');
  }

  public function logoutEvent(Request $request)
  {
    $info = array(
        'access_token' => session()->get('access_token'),
        'refresh_token' => session()->get('refresh_token'),
        'id' => session()->get('id'),
        'group_type' => session()->get('group_type'),
        'email' => session()->get('email'),
        'nama' => session()->get('nama')
    );
    $request->session()->flush();
    $request->session()->regenerate();
    session($info);
    return redirect('/');
  }

  public function searchUser(Request $request)
  {
        try {
            $result = $this->client->post('user/event',[
                'headers' => [
                    'Authorization' => 'Bearer ' . session()->get('access_token')
                ],
                'form_params' =>[
                    'code'=> $request['code']
                ]
            ]);
            $result = $result->getBody();
            $data = json_decode($result, true);
            if($data['success']){
                $data = $data['user'];
                return view('event.detail', compact('data'));
            }
            else{
                return redirect("/event")->with("pesan",$data['message']);
            }
        } catch (BadResponseException $e) {
            return redirect("/event")->with("pesan",$e->getMessage());
        }
  }

  public function formCariUser(){
    return view('event.cari');
  }

  public function addEmail(Request $request)
  {
        try {
            $result = $this->client->post('user/update',[
                'headers' => [
                    'Authorization' => 'Bearer ' . session()->get('access_token')
                ],
                'form_params' =>[
                    'code'=> $request['code'],
                    'email'=> $request['email']
                ]
            ]);
            $result = $result->getBody();
            $data = json_decode($result, true);
            return redirect("/event")->with("pesan",$data['message']);
        } catch (BadResponseException $e) {
            return redirect("/event")->with("pesan",$e->getMessage());
        }
  }
}

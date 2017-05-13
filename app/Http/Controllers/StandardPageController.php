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

      return redirect(url()->previous());
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
      try {
        $request = $this->client->request('GET', env('API_URL').'auth/me', [
          'headers' => [
            'Authorization' => 'Bearer '.session()->get('access_token'),
            'Accept'     => 'application/json'
          ]
        ]);
        $response = json_decode($request->getBody(), true);

        return view('content.profil')->with('data', $response['data']);
      }
      catch (\GuzzleHttp\Exception\ClientException $e) {
        $response = $e->getResponse();
        $result = json_decode($response->getBody(), true);
        $message = $result['message'];

        return $message;
      }
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
        'event_email' => $email[0]
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
    $this->client->request('POST', env('API_URL').'auth/logout', [
      'headers' => [
        'Authorization' => 'Bearer '.session()->get('access_token')
      ]
    ]);

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
}

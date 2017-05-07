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
        'email' => $response['data']['profile']['email']
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

  public function logout(Request $request)
  {
    $request->session()->flush();
    $request->session()->regenerate();
    return redirect('/');
  }
}

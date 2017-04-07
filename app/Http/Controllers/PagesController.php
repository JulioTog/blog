<?php
namespace App\Http\Controllers;

class PagesController extends Controller {

  public function getIndex() {
    return view('Pages.welcome');
  }

  public function getAbout() {
    $first = 'Julio';
    $last = 'Tognetti';
    $fullname = $first." ".$last;
    $email = 'julio.tognetti@gmail.com';
    $data['email']= $email;
    $data['fullname'] = $fullname;
    #solo las variables pasadas explisitamente son vistas por view
    return view('Pages.about')->withData($data);
  }

  public function getContact() {
    return view('Pages.contact');
  }

  public function postContact () {

  }
}
?>

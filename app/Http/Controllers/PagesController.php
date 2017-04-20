<?php
namespace App\Http\Controllers;
use App\Post;
class PagesController extends Controller {

  public function getIndex() {
    $posts = Post::orderBy('created_at','desc' )->limit(4)->get();
    return view('Pages.welcome')->withPosts($posts);
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

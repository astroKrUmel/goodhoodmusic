<?php
/**
 * Created by PhpStorm.
 * User: Kevin
 * Date: 18.11.2016
 * Time: 00:07
 */

namespace App\Http\Controllers;

use App\Artist;
use App\Event;
use Carbon\Carbon;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Response;

class ArtistController extends Controller
{

    public function getArtist($name) {
        // get artist
        $artist = Artist
            ::where('urlName', '=', strtolower($name))
            ->where('enabled', '!=', false)
            ->first();

        if ($artist === null) {
            return redirect()->action('HomeController@index');
        }

        // get links and mixes iframes form config
        $links = config('links')[strtolower($name)];

        // count images
        $artist->galleryImages = glob('images/artists/' . $artist->urlName . '/others/*.jpg');

        return View('artists.artist', compact('artist', 'links'));
    }

    public function getDownload($name) {
        $downloadPath = storage_path() . '/' . $name .'.rar';

        $download = [
            'name' => $name,
        ];

        // ka, ob das so stimmt
        $header = [
            'application/x-rar-compressed'
        ];


//        return View('artists.download', compact('download'));
        return response()->download(storage_path('phax.rar'), 'phax.rar');
//        return response()->download('app/storage/phax.rar', 'phax.rar');
    }
}
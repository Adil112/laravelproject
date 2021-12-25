<?php
namespace App\Service;
use App\Models\Authors;
use App\Models\Books;
use App\Models\Genres;
use App\Models\Publishers;

include_once 'C:\xampp2\htdocs\laravelproject\vendor\simple_html_dom.php';
class ParserService{
    public function parser()
    {
         $page = $this->curlGetPage('https://www.flip.kz/catalog?prod=389876');
         $html = str_get_html($page);
         $name = $html->find('[itemprop=name]', 0)->plaintext;
         $description = $html->find('[itemprop=description]', 0)->plaintext;
         $mark = $html->find('[itemprop=ratingValue]', 0)->plaintext;
         $price = $html->find('[itemprop=price]', 0)->getAttribute('content');
         $quantity = rand(15, 50);
         $image = $html->find('[itemprop=image]', 0)->getAttribute('src');
         $publisherStr = $html->find('[class=description-table]', 0)->children(0)->children(1)->plaintext;
         $publisherStr1 = explode(',', $publisherStr);
         $publisher = $publisherStr1[0];
         $publisher = preg_replace ('/\s+/', '', $publisher);
         $idPublisher = Publishers::where('Name', 'LIKE', "%".$publisher."%")->firstOrFail()->IdPublisher;

        $yearStr = $publisherStr1[1];
        $yearStr = preg_replace ('/\s+/', '', $yearStr);
        $year = substr($yearStr, 0, 4);

         $krohi = $html->find('[class=krohi]',0)->children(3)->plaintext;
         $krohi = $publisherStr1 = explode(',', $krohi);
         $genre = $krohi[0];
         $genreq = preg_replace ('/\s+/', '', $genre);
         $idGenre = Genres::where('Name', 'LIKE', "%".$genreq."%")->firstOrFail()->IdGenre;

         $fio = $html->find('table[id=prod]', 0)->children(0)->children(1)->children(1)->plaintext;
         $fio = explode(' ', $fio);
         $num = count($fio);
         $surname = $fio[$num-1];
         $idAuthor = Authors::where('Surname', 'LIKE', "%".$surname."%")->firstOrFail()->IdAuthor;


        $book = Books::create(
             [
                 'Name' => $name,
                 'Description' => $description,
                 'Mark' => $mark,
                 'Price' => $price,
                 'Quantity' => $quantity,
                 'Image' => $image,
                 'Year' => $year,
                 'IdPublisher' => $idPublisher,
                 'IdGenre' => $idGenre,
                 'IdAuthor' => $idAuthor
             ]
         );

        $book->save();
        echo "success";
    }
    function curlGetPage($url, $referer = 'https://google.com/')
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36');
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        //curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 1);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_REFERER, $referer);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($ch);
        curl_close($ch);
        return $response;
    }



}

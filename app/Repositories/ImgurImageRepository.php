<?php
declare(strict_types=1);

namespace App\Repositories;


use App\Contracts\ImageRepositoryInterface;
use App\Models\Image;
use App\Models\ImageSearch;
use GuzzleHttp\Client;
use App\Support\Collection;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class ImgurImageRepository implements ImageRepositoryInterface
{
    private string $id;
    public Client $client;

    public function __construct()
    {
        $this->client = new Client();
        $this->id = env('IMGUR_CLIENT_ID') ?? '';
    }

    public function search(ImageSearch $imageSearch): LengthAwarePaginator
    {
        try {
            $request = $this->client->request('GET', $this->buildUrl($imageSearch->getSearchTerm()), [
                'headers' => ['Authorization' => 'Client-ID ' . $this->id]
            ]);
        } catch (\Exception $exception) {
            return (new Collection())->paginate($imageSearch->getDisplay());
        }

        $content = json_decode(
            $request->getBody()->getContents(),
            true,
            512,
            JSON_THROW_ON_ERROR
        );

        $imageResults  = array_slice($content['data'], 0, $imageSearch->getTotal());

        return (new Collection())->merge(
            array_map(array($this, 'generateImage'), $imageResults)
        )->paginate($imageSearch->getDisplay());
    }

    private function generateImage($image): Image
    {
        return (array_key_exists('images', $image))
            ? Image::create($image['title'], $image['images'][0]['link'], $image['link'], (string) $image['datetime'], $image['images'][0]['type'])
            : Image::create($image['title'], $image['link'], $image['link'], (string) $image['datetime'], $image['type']);
    }


    private function buildUrl(string $searchTerm): string
    {
        return "https://api.imgur.com/3/gallery/search/time/all/1?q=" . $searchTerm ;
    }

}

<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Contracts\ImageRepositoryInterface;
use App\Http\Requests\SearchRequest;
use App\Models\ImageSearch;
use Illuminate\View\View;

class SearchController extends Controller
{
    public ImageRepositoryInterface $imageRepository;

    public function __construct(ImageRepositoryInterface $imageRepository)
    {
        $this->imageRepository = $imageRepository;
    }

    public function index(): View
    {
        return view('index');
    }

    public function search(SearchRequest $searchRequest)
    {
        $imageSearch = ImageSearch::create($searchRequest->all());
        $images = $this->imageRepository->search($imageSearch);

        return ($images->total())
        ? view('search', ['images' => $images->appends(request()->input())])
        : redirect(route('index'))->with(['error' => 'Currently unable to display images']);
    }
}

<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\SearchRequest;
use Illuminate\View\View;

class SearchController extends Controller
{
    public function __construct()
    {

    }

    public function index(): View
    {
        return view('index');
    }

    public function search(SearchRequest $searchRequest): View
    {
        dd($searchRequest);
    }
}

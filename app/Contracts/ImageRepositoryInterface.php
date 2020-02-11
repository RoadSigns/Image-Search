<?php
declare(strict_types=1);

namespace App\Contracts;


use App\Models\ImageSearch;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface ImageRepositoryInterface
{
    public function search(ImageSearch $imageSearch): LengthAwarePaginator;
}

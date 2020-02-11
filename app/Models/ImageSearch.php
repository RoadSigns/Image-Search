<?php
declare(strict_types=1);

namespace App\Models;


class ImageSearch
{
    private string $searchTerm;
    private int $display;
    private int $total;

    private function __construct(string $searchTerm, int $display, int $total)
    {
        $this->searchTerm = $searchTerm;
        $this->display = $display;
        $this->total = $total;
    }

    public static function create(array $request): ImageSearch
    {
        return new ImageSearch(
            $request['search'],
            (int) $request['display'],
            (int) $request['total']
        );
    }

    public function getSearchTerm(): string
    {
        return $this->searchTerm;
    }

    public function getDisplay(): int
    {
        return $this->display;
    }

    public function getTotal(): int
    {
        return $this->total;
    }
}

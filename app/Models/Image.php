<?php
declare(strict_types=1);

namespace App\Models;


class Image
{
    private string $title;
    private string $src;
    private string $link;
    private string $date;
    private string $type;

    private function __construct(string $title, string $src, string $link, string $date, string $type)
    {
        $this->title = $title;
        $this->src   = $src;
        $this->link  = $link;
        $this->date  = $date;
        $this->type  = $type;
    }

    public static function create(string $title, string $src, string $link, string $date, string $type): Image
    {
        return new Image($title, $src, $link, $date, $type);
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getSrc(): string
    {
        return $this->src;
    }

    public function getLink(): string
    {
        return $this->link;
    }

    public function getDate(): string
    {
        return $this->date;
    }

    public function getType(): string
    {
        return $this->type;
    }

}

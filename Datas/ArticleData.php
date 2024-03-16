<?php

declare(strict_types=1);

namespace Modules\Blog\Datas;

use Illuminate\Support\Collection;
use Modules\Blog\Actions\Category\GetBloodline;
use Modules\Blog\Models\Article;
use Modules\Blog\Models\Category;
use Spatie\LaravelData\Data;
use Webmozart\Assert\Assert;

class ArticleData extends Data
{
    public string $title = '';

    public function __construct(
        public string $uuid,
        array|string $title,
        public string $slug,
        public ?int $category_id,
        public ?string $status,
        public bool $show_on_homepage,
        public string $published_at,
        public ?array $content_blocks,
        public ?array $sidebar_blocks,
        public ?array $footer_blocks,
        public ?Collection $categories,
        public ?string $url,
        public ?array $ratings,
        // public string $class,
        // public string $articleId;
        // public string $ratingId;
        // public int $credit;
    ) {
        if (is_array($title)) {
            $lang = app()->getLocale();
            $title = $title[$lang] ?? last($title);
        }
        if (is_string($title)) {
            $this->title = $title;
        }
        // $this->url = $this->getUrl();
        $this->categories = $this->getCategories();
        $this->ratings = $this->getRatings();
    }

    public function getCategories(): Collection
    {
        return app(GetBloodline::class)->execute($this->category_id);

        // Assert::notNull($category = Category::find($this->category_id));

        // return $category->bloodline()->get()->reverse();
    }

    public function getRatings(): array
    {
        Assert::notNull($article = Article::where('uuid', $this->uuid)->first());
        return $article->getArrayRatingsWithImage();
    }

    public function url(string $type): string
    {
        $lang = app()->getLocale();
        if ('show' == $type) {
            return '/'.$lang.'/article/'.$this->slug;
        }

        // if ('edit' == $type) { // NON ESISTE EDIT NEL FRONTEND !!!
        //    return '/'.$lang.'/article/'.$this->slug.'/edit';
        // }

        return '#';
    }
}

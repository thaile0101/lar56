<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Feed\Feedable;
use Spatie\Feed\FeedItem;

class News extends Model implements Feedable
{
    protected $fillable = [
        'title', 'description', 'author'
    ];

    /**
     * @return array|FeedItem
     */
    public function toFeedItem()
    {
        return FeedItem::create()
            ->id($this->id)
            ->title($this->title)
            ->summary($this->description)
            ->updated($this->updated_at)
            ->link($this->link)
            ->author($this->author);
    }

    /**
     * @return News[]|\Illuminate\Database\Eloquent\Collection
     */
    public static function getFeedItems()
    {
        return static::all();
    }

    /**
     * @return string
     */
    public function getLinkAttribute()
    {
        return route('news.show', $this);
    }
}

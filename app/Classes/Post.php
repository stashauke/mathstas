<?php

namespace App\Classes;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use \Illuminate\Support\Collection;

class Post
{
    public Collection $filenames;

    public function __construct()
    {
        $this->filenames = collect(Storage::disk('content')->allFiles())
            ->sortByDesc(function ($file) {
                return $file;
            });
    }

    public function getLatest($limit): Collection
    {
        $posts = [];

        foreach ($this->filenames->take($limit) as $filename) {
            $posts[] = $this->getPostData($filename);
        }

        return collect($posts);
    }

    public function getPostData($filename): array
    {
        $post = [];
        $post['slug'] = str_replace('.md', '', $filename);
        if(!strpos(Storage::disk('content')->get($filename), "\n---\n")) {
            $post['body'] = Str::of(Storage::disk('content')->get($filename))->markdown();
        } else {
            $post['body'] = Str::of(Str::after(Storage::disk('content')->get($filename), "\n---\n"))->markdown();
            $fields = Str::of(Str::after(Str::before(Storage::disk('content')->get($filename), "\n---\n"), "---\n"))->explode("\n");
            $attributes = [];

            foreach ($fields as $field) {
                if (!strpos($field, ':')) continue;
                [$key, $value] = explode(':', $field);
                $attributes[trim($key)] = trim($value);
            }
            $post['fields'] = $attributes;
        }

        return $post;
    }
}

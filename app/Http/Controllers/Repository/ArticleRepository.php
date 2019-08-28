<?php

namespace Prebaby\Http\Controllers\Repository;

use Prebaby\Article;

class ArticleRepository
{
    protected $article;
    public function __construct()
    {
        $this->article = new Article();
    }

    function findAll()
    {
        //
    }

    function find($id)
    {
        //
    }

    /**
     * Save new created article.
     *
     * @param $data
     * @return bool
     */
    function save($data)
    {
        $this->article->body = $data['body']; # Get the body from the form and save it.
        $this->article->title = $data['title'];
        $this->article->trimester = $data['trimester'];

        return $this->article->save();
    }

    function update($id, $data)
    {
        //
    }

    function destroy()
    {
        //
    }
}
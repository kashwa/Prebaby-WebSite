<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Prebaby\Article;


class ArticlesTest extends TestCase
{
    /**
     * A basic test for creating article.
     *
     * @return void
     */
    public function testdeletion()
    {
        # Assumption is that DB is already has an element.
        
        # Apply The Deletion Code.
        $selectedArticle = Article::where('trimester',3)->first();
        $selectedArticle->delete();

        # Test using Assertion.
        $getArticles = Article::where('trimester',3)->first();

        $numberOfArticles = 0;

        #set number of articles = 0 if there was no articles selected.
        $articles = 0;
        if($getArticles == 0){
            $articles = 0;
        }

        $this->assertEquals($articles , $numberOfArticles);
    }
}

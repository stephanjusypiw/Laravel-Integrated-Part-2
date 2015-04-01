<?php

use Laracasts\TestDummy\Factory as TestDummy;

class ExampleTest extends TestCase {

	/** @test */
	public function it_displays_all_posts()
	{
        TestDummy::create('App\Post', ['title' => 'Some Post']);
		$this->visit('posts')->see('Some Post');
	}

    /** @test */
    public function it_published_a_post()
    {
        $post = TestDummy::attributesFor('App\Post');
       // dd($post);

        $post = ['title' => 'Some Title', 'body' => 'Some body'];
        
//        $this->visit('posts/create')
//             ->type($post['title'], 'title')
//             ->type($post['body'] , 'body')
//             ->press('Publish Post')
//             ->verifyInDatabase('posts', $post);


        $this->visit('posts/create')
             ->submitForm('Publish Post', $post)
             ->verifyInDatabase('posts', $post);
    }
}

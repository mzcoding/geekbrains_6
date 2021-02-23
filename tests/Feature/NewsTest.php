<?php

namespace Tests\Feature;

use App\Models\News;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NewsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_news_form_show()
    {
        $response = $this->get('/admin/news/create');

        $response->assertStatus(200);
    }
    public function test_news_created()
	{
		//Arrange
      //   $news = News::factory()->create();

         //Act
	//	$response = $this->post('/admin/news/create', $news);

		//Assert
	//	$response->assertStatus(302);

	}
}

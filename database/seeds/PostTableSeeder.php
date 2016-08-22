<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$posts = [
			['title' => 'Post Grape-Nuts', 'url' => 'http://www.postfoods.com', 'content' => 'Grape-Nuts are neither a grape nor a nut.'],
			['title' => 'Post Shredded Wheat', 'url' => 'http://www.shreddedwheat.com', 'content' => 'Post makes a shredded wheat, but I usually buy the HEB brand.'],
			['title' => 'Post Raisin Bran', 'url' => 'http://www.raisinbran.com', 'content' => 'Post makes raisin bran, but I prefer Kellog\'s Raisin Bran. Why? Because that is what my mom bought.'],
			['title' => 'Tim Duncan in the post.', 'url' => 'http://www.timduncaninthepost.com', 'content' => 'Tim Duncan is the greatest.'],
			['title' => 'Post hole diggers', 'url' => 'http://www.homedepot.com/b/Outdoors-Garden-Center-Garden-Tools-Digging-Tools-Post-Hole-Digger/N-5yc1vZc5ra', 'content' => 'I buy all my post hole digging tools from Home Depot.'],
			['title' => 'HTTP Post Method', 'url' => 'https://developer.mozilla.org/en-US/docs/Web/Guide/HTML/Forms/Sending_and_retrieving_form_data', 'content' => 'The POST method is a little different. It\'s the method the browser sends the server to ask for a response that takes into account the data provided in the body of the HTTP request: "Hey server, take a look at this data and send me back an appropriate result." If a form is sent using this method, the data is appended to the body of the HTTP request.'],
		];

		foreach ($posts as $seedPost) {
			$post = new App\Post();
			$post->title = $seedPost['title'];
			$post->url = $seedPost['url'];
			$post->content = $seedPost['content'];
			$post->created_by = App\User::all()->random()->id;
			$post->save();
		}
	}
}

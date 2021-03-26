<?php

namespace Acadea\Draftable\Tests;

use Acadea\Draftable\Tests\Models\Post;

class DraftableTest extends TestCase
{

    public function test_can_draft_a_model()
    {
        $post = Post::factory()->make();

        $postDraft = Post::createDraft($post->toArray());
    }

    public function test_model_can_be_created_from_draft()
    {
        
    }

    public function test_draft_can_be_retrieved()
    {
        
    }

    public function test_can_retrieve_model_attributes_on_draft()
    {
        
    }

//    public function test_draft_can_be_published()
//    {
//        
//    }
//
//    public function test_draft_can_be_scheduled()
//    {
//        
//    }
//
//    public function test_can_draft_one_to_many()
//    {
//        
//    }
//
//    public function test_can_draft_many_to_many()
//    {
//        
//    }
//
//    public function test_can_get_latest_draft()
//    {
//        
//    }
}

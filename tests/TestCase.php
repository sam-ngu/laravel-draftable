<?php

namespace Acadea\Draftable\Tests;

use Acadea\Draftable\DraftableServiceProvider;
use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Acadea\\Draftable\\Tests\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            DraftableServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        $app['config']->set('database.default', 'sqlite');
        $app['config']->set('database.connections.sqlite', [
            'driver' => 'sqlite',
            'database' => ':memory:',
            'prefix' => '',
        ]);

        include_once __DIR__.'/../database/migrations/0000_00_00_000000_create_drafts_table.stub';
        include_once __DIR__.'/database/migrations/0000_00_00_000000_create_posts_test_table.php.stub';
        include_once __DIR__.'/database/migrations/0000_00_00_000001_create_comments_test_table.php.stub';
        include_once __DIR__.'/database/migrations/0000_00_00_000002_create_tags_test_table.php.stub';
        include_once __DIR__.'/database/migrations/0000_00_00_000003_create_comment_tag_pivot_table.php.stub';
        (new \CreateDraftsTable())->up();
        (new \CreatePostsTestTable())->up();
        (new \CreateCommentsTestTable())->up();
        (new \CreateTagsTestTable())->up();
        (new \CreateCommentTagPivotTestTable())->up();
    }
}

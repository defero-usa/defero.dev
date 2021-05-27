<?php

namespace App\Console\Commands\Github;

use App\Models\Repository;
use GrahamCampbell\GitHub\Facades\GitHub;
use Illuminate\Console\Command;

class PullRepos extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'github:pull-repos';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Pull down repo information from Github.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $repos = GitHub::user()->repositories('defero-usa');
        foreach($repos AS $repo) {
            $r = Repository::firstOrNew([
                'github_id' => $repo['id']
            ]);
            $r->name = $repo['name'];
            $r->full_name = $repo['full_name'];
            $r->url = $repo['html_url'];
            $r->description = $repo['description'];
            $r->stargazers = $repo['stargazers_count'];
            $r->watchers = $repo['watchers_count'];
            $r->forks = $repo['forks_count'];
            $r->open_issues = $repo['open_issues_count'];
            $r->info = $repo;
            $r->save();
        }
    }
}

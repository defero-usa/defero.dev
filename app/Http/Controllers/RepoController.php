<?php

namespace App\Http\Controllers;

use App\Models\Repository;
use Illuminate\Http\Request;
use Inertia\Inertia;

class RepoController extends Controller
{
    public function index() {
        return Inertia::render('Repository/Index', [
            'repos' => Repository::public()->get(),
        ]);
    }

    /**
     * @param Repository $repository
     * @param string $docs
     *
     * @return \Inertia\Response
     */
    public function view(Repository $repository, $docs = 'README.md'): \Inertia\Response
    {
        return Inertia::render('Repository/Show', [
            'docs' => $repository->getDocList(),
            'readme' => $repository->parseReadme($docs),
            'repo' => $repository,
        ]);
    }
}

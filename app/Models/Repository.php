<?php

namespace App\Models;

use Github\Exception\RuntimeException;
use GrahamCampbell\GitHub\Facades\GitHub;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Parsedown;

class Repository extends Model
{
    use HasFactory;

    protected $casts = [
        'info' => 'array'
    ];

    protected $guarded = [
        'id'
    ];

    /**
     * @return string
     */
    public function getRouteKeyName(): string
    {
        return 'name';
    }

    public function getDocList() {
        try {
            $docs = GitHub::repo()->contents()->show('defero-usa', $this->name, 'docs', 'master');
        } catch(RuntimeException $exception) {
            return null;
        }
        return $docs;
    }

    /**
     * @param $docs
     *
     * @return string
     */
    public function parseReadme($docs): string
    {
        $doc = GitHub::repo()->contents()->show('defero-usa', $this->name, $docs, 'master');
        $parsedown = new Parsedown();
        return $parsedown->text(file_get_contents($doc['download_url']));
    }
}

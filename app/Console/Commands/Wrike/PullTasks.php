<?php

namespace App\Console\Commands\Wrike;

use App\Helpers\Wrike;
use App\Models\Task;
use Carbon\Carbon;
use Illuminate\Console\Command;

class PullTasks extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'wrike:pull-tasks';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $wrike = new Wrike();
        $tasks = $wrike->tasks();

        foreach($tasks['data'] AS $task) {
            $t = Task::firstOrNew([
                'task_id' => $task['id']
            ]);
            $t->account_id = $task['accountId'];
            $t->title = $task['title'];
            $t->description = $task['description'];
            $t->brief_description = $task['briefDescription'];
            $t->responsible_ids = $task['responsibleIds'];
            $t->status = $task['status'];
            $t->importance = $task['importance'];
            $t->dates = $task['dates'];
            $t->scope = $task['scope'];
            $t->custom_status_id = $task['customStatusId'];
            $t->has_attachments = $task['hasAttachments'];
            $t->permalink = $task['permalink'];
            $t->priority = $task['priority'];
            $t->created_at = Carbon::parse($task['createdDate']);
            $t->updated_at = Carbon::parse($task['updatedDate']);
            $t->completed_at = (isset($task['completedDate'])?Carbon::parse($task['completedDate']):null);
            $t->save();
        }
    }
}

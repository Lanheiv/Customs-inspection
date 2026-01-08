<?php // https://www.itsolutionstuff.com/post/custom-user-log-activity-in-laravel-5-app-exampleexample.html

namespace App\Helpers;

use Request;
use App\Models\WebsiterLog;

class LogActivity
{
    public static function addToLog($description, $tableName, $tableId)
    {
        $log = [];
        $log['description'] = $description;
        $log['table_name'] = $tableName;
        $log['tabel_id'] = $tableId;
        $log['user_id'] = auth()->user()->foreignId;
        $log['IPaddres'] = Request::ip();
        $log['created_ts'] = now();

        WebsiterLog::create($log);
    }

    public static function logActivityLists()
    {
        return WebsiterLog::latest()->get();
    }
}

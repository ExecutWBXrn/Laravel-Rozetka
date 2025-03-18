<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job
{
    public static function all(): array{
        return [
            [
                'id' => 1,
                'title' => 'Programmer',
                'description' => 'write apps',
            ], [
                'id' => 2,
                'title' => 'Cooker',
                'description' => 'cook food',
            ], [
                'id' => 3,
                'title' => 'Builder',
                'description' => 'create houses',
            ],
        ];
    }

    public static function find($id): array{
        $job = Arr::first(Job::all(), fn ($data) => $data['id'] == $id);
        if(!$job){
            abort(404);
        }
        return $job;
    }
}

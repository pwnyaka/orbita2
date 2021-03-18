<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;


class Task extends Model
{
    protected $fillable = ['title', 'description', 'status'];

    public static function rules(Task $task)
    {
        return [
            'title' => [
                'required',
                Rule::unique('task')->ignore($task->id),
            ],
            'description' => [
                'required',
            ],
            'status' => [
                'required',
            ]
        ];
    }
}

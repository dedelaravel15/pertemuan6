<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Queue;
use PHPUnit\Framework\SelfDescribing;

class Task extends Model
{
    use HasFactory;

    private static $task = [
        [
            'id' => 1,
            'name' => 'tugas 3 statistik',
            'description' => 'menghitung probilitas pada data yang di harapkan',
            'deadline' => '10-01-23',
            'status' => 'selesai'
        ],
        [
            'id' => 2,
            'name' => 'tugas 3 statistik',
            'description' => 'ipsum',
            'deadline' => '12-01-23',
            'status' => 'selesai'
        ],
        [
            'id' => 3,
            'name' => 'tugas 3 statistik',
            'description' => 'lorem',
            'deadline' => '12-12-11',
            'status' => 'selesai'
        ],

    ];

    public static function getAll()
    {
        return self::$task;
    }
   public static function getById()
   {
        return self::$task[1];
   }


}

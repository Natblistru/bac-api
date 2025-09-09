<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TopicVideoBreakpoint>
 */
class TopicVideoBreakpointFactory extends Factory
{
    protected static int $i = 0;
 
    public function definition(): array
    {
        $breakpoints = [
            ["time" => "0:06:00", "seconds" => "360", "name" => "Monosemie", "topic_video_id" => 1],
            ["time" => "0:06:48", "seconds" => "408", "name" => "Polisemie", "topic_video_id" => 1],
            ["time" => "0:07:42", "seconds" => "462", "name" => "Context", "topic_video_id" => 1],
            ["time" => "0:08:17", "seconds" => "497", "name" => "Sinonime contextuale (a trece)", "topic_video_id" => 1],
            ["time" => "0:08:54", "seconds" => "534", "name" => "Sens propriu", "topic_video_id" => 1],
            ["time" => "0:09:48", "seconds" => "588", "name" => "Sens figurat", "topic_video_id" => 1],                        
            ["time" => "0:11:23", "seconds" => "683", "name" => "Exemplu de analiza a poeziei", "topic_video_id" => 1],            
        ];

        $a = $breakpoints[ static::$i % count($breakpoints) ];
        static::$i++;

        return [
            'name' => $a['name'],
            'time' => $a['time'],
            'seconds' => $a['seconds'],
            'topic_video_id' => $a['topic_video_id'],
        ];
    }
}

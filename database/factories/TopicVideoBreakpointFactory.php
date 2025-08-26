<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TopicVideoBreakpoint>
 */
class TopicVideoBreakpointFactory extends Factory
{
    private $index = 0;
 
    public function definition(): array
    {
        $breakpoints = [
            ["time" => "0:17:40", "seconds" => "1060", "name" => "Repere"],
            ["time" => "0:17:54", "seconds" => "1074", "name" => "Keywords"],
        ];

        $breakpoint = $breakpoints[$this->index];

        $this->index++;
        return [
            'name' => $breakpoint['name'],
            'time' => $breakpoint['time'],
            'seconds' => $breakpoint['seconds'],
            'topic_video_id' => 1,
        ];
    }
}

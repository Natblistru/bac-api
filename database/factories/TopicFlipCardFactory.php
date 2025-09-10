<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TopicFlipCard>
 */
class TopicFlipCardFactory extends Factory
{
    protected static int $i = 0;

    public function definition(): array  {

        $task1 = <<<'HTML'
        <p>Scrie propoziții care arată sensuri diferite pentru cuvântul <b>dor</b></p>
        HTML;

        $answer1 = <<<'HTML'
        <p>Îmi e <b>dor</b> de bunici. (nostalgie)</p>
        <p>Mă <b>dor</b> genunchii după alergare. (a durea)</p>
        HTML;

        $task2 = <<<'HTML'
        <p>Scrie propoziții care arată sensuri diferite pentru cuvântul <b>mine</b></p>
        HTML;

        $answer2 = <<<'HTML'
        <p>Cadoul e pentru <b>mine</b>, nu pentru tine. (pronume)</p>
        <p>În zonă s-au închis multe <b>mine</b> de cărbune. (exploatări miniere)</p>
        <p>Pixul are două <b>mine</b> de rezervă. (rezerve/“refill”-uri)</p>
        HTML;

        $task3 = <<<'HTML'
        <p>Scrie propoziții care arată sensuri diferite pentru cuvântul <b>port</b></p>
        HTML;

        $answer3 = <<<'HTML'
        <p>Vasul a ancorat în <b>port</b> la Constanța. (loc - port maritim)</p>
        <p>Eu <b>port</b> o geacă groasă iarna. (verb „a purta”)</p>
        <p>La festival am îmbrăcat <b>portul</b> popular. (costum/tradiție)</p>
        <p>Conectează cablul la <b>portul</b> USB. (conector)</p>
        HTML;

        $task4 = <<<'HTML'
        <p>Scrie propoziții care arată sensuri diferite pentru cuvântul <b>mai</b></p>
        HTML;

        $answer4 = <<<'HTML'
        <p>Ne vedem în <b>Mai</b>, după Paști. (luna Mai)</p>
        <p>El aleargă <b>mai</b> repede decât mine. (comparativ)</p>
        <p><b>Mai</b> stai puțin, te rog. (încă)</p>
        HTML;


        $cards = [
            ["order_number" => 1,  "topic_id" => 87,  "task" => $task1, "answer" => $answer1],
            ["order_number" => 2,  "topic_id" => 87,  "task" => $task2, "answer" => $answer2],    
            ["order_number" => 3,  "topic_id" => 87,  "task" => $task3, "answer" => $answer3],
            ["order_number" => 4,  "topic_id" => 87,  "task" => $task4, "answer" => $answer4],                    
        ];        


        $a = $cards[ static::$i % count($cards) ];
        static::$i++;

        return [
            'order_number'  => $a['order_number'],
            'topic_id' => $a['topic_id'],
            'task' => $a['task'] === null ? null : ['html' => $a['task']],
            'answer' => $a['answer'] === null ? null : ['html' => $a['answer']],
        ];
    }
}

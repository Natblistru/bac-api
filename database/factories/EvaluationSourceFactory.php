<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EvaluationSource>
 */
class EvaluationSourceFactory extends Factory
{
    public function definition(): array
    {
        $html = <<<'HTML'
        <div class="reading">
        <h3 class="center">PROFIL REAL – 100 de puncte</h3>
        <p><strong>Citește textul propus și realizează itemii:</strong></p>

        <p><u>Primii ani de după război au fost grei... Îmi petreceam timpul
        liber <b>citind</b>, iar interesul pentru astronomie, fizică și
        matematică deviase într-o obsesie cronică, așa încât pot zice că
        mi-am trăit adolescența într-o lume de cifre, legi și formule. Am
        continuat să învăț la un liceu german, chiar dacă însușisem româna
        într-atât de temeinic, încât doar cei cu urechea prea fină își dădeau
        seama că nu sunt român. Eram de departe cel mai bun elev din clasă la
        toate limbile, însă patima mea erau științele reale.</u></p>
        <p>… (restul paragrafelor) …</p>

        <p>… <b>inima</b> mi se zbătea ca peștele în năvod. …</p>

        <p class="source">(Oleg Serebrian. <em>Pe contrasens</em>)</p>
        </div>
        HTML;

        return [
            'order_number'  => 1,
            'evaluation_id' => 1,
            'content'       => [
                'html'   => $html, 
            ],
        ];
    }
}

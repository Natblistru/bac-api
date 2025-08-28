<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EvaluationOption>
 */
class EvaluationOptionFactory extends Factory
{
    private $index = 0;
    public function definition(): array  {
        $labels = ['0 p. - răspuns greșit/ lipsă',
/*2*/            '1 p. - alegerea unui sinonim adecvat',  //1
/*3*/            '1 p. - enunţul nu este argumentativ',
/*4*/            '2 p. - enunţul argumentativ construit corect', //2
/*5*/            '0 p. - argumentare parțială, fără referință la text',
/*6*/            '1 p. - argumentare cu referinţa la text',      //3
/*7*/            '1 p. - enunț corect construit, dar fără ilustrarea sensului figurat al lexemului',
/*8*/            '2 p. - enunț logic, coerent, care ilustrează sensul figurat al cuvântului',     //4 + 5 + 6
/*9*/           '1 p. - identificarea tipului uman',            //7
/*10*/           '1 p. - citat corect dar fără comentarea acestuia în sprijinul afirmaţiei iniţiale',     
/*11*/           '2 p. - citat corect cu comentarea acestuia în sprijinul afirmaţiei iniţiale',   // 8 + 9
/*12*/           '1 p. - rescrierea completă a figurii de stil dar fără nominalizarea corectă a figurii de stil',
/*13*/           '2 p. - rescrierea completă și nominalizarea corectă a figurii de stil',      // 10
/*14*/           '1 p. - examinarea modului de constituire a figurii de stil, fără a evidenția semnificația contextuală a ei', 
/*15*/           '2 p. - examinarea modului de constituire a figurii de stil, semnificației ei contextuale, dar fără referire la text', 
/*16*/           '3 p. - examinarea modului de constituire a figurii de stil, semnificației ei contextuale cu referire la text', // 11
/*17*/           '1 p. - identificarea trasaturii morale, dar fără exemple din text', 
/*18*/           '2 p. - identificarea trasaturii morale cu exemple din text',    // 12 + 13
/*19*/           '0 p. - text necoerent', 
/*20*/           '1 p. - text coerent', // 14 + 22
/*21*/           '1 p. - explicarea sensului motivului pasiunii pentru cunoaștere fără referire la text', 
/*22*/           '2 p. - explicarea sensului motivului pasiunii pentru cunoaștere cu referire la text', // 15
/*23*/           '0 p. - referință incorectă / lipsa referinței la alt text ales pentru comparație',
/*24*/           '1 p. - referință exactă (titlul, numele autorului) la alt text ales pentru comparație', // 16
/*25*/           '1 p. - explicarea parțială a sensului motivului în alt text ales pentru comparație', 
/*26*/           '2 p. - explicarea sensului motivului în alt text ales pentru comparație', // 17
/*27*/           '0 p. - prezentare incorectă / lipsa prezentării situației din alt text', 
/*28*/           '1 p. - citarea/prezentarea unei situații din textul ales pentru comparație', // 18
/*29*/           '0 p. - identificarea incorectă / lipsa identificării atitudinii personajului', 
/*30*/           '1 p. - identificarea corectă a atitudinii', // 19
/*31*/           '0 p. - prezentare incorectă / lipsa citatului din text', 
/*32*/           '1 p. - citat corect dar fără comentarea acestuia în sprijinul afirmaţiei iniţiale', 
/*33*/           '2 p. - citat corect cu comentarea acestuia în sprijinul afirmaţiei iniţiale', // 20 + 21
/*34*/           '1 p. - motivarea utilizării gramaticale a punctelor de suspensie', // 23
/*35*/           '1 p. - explicarea valenței stilistice a punctelor de suspensie fără referire la text', 
/*36*/           '2 p. - explicarea valenței stilistice a punctelor de suspensie cu referire la text', // 24    
/*37*/           '0 p. - formularea incorectă / lipsa argumentelor',
/*38*/           '0 p. - prezentarea exemplelor fără raționament (argument)',
/*39*/           '1 p. - argumentare fără referință la text',
/*40*/           '2 p. - argumentare cu referinţa la text', // 25 + 26      

        ];
        $points = [
        0,1,1,2,0,1,1,2,
        1,1,2,1,2,1,2,3,
        1,2,0,1,1,2,0,1,
        1,2,0,1,0,1,0,1,
        2,1,1,2,0,0,1,2
        ];
        $label = $labels[$this->index];
        $point = $points[$this->index];

        $this->index++;
        return [
            'label' => $label,
            'points' => $point,
        ];
    }
}


<?php
#Challenge - Backend Developer
#classe para verificar se os numeros são multiplos por 5, 3, ou 5 & 4 e printar na tela o resultado referente aos mesmos.
class multipe
{
    public function mult()
    {
        for ($i = 1; $i <= 100; $i++) {
            switch ($i) {
                case (($i % 3) == 0):
                    echo "BHUT<br>";
                case (($i % 5) == 0):
                    echo 'IT<br>';
                case (($i % 3) == 0):
                    if (($i % 5) == 0) {
                        echo 'BHUT TI<br>';
                    }
            }
        }
    }
}


$result = new multipe();
echo $result->mult();

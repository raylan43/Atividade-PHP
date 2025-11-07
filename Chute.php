<?php
    $chute = 0;
    $sorteado = rand (1,25);
    print("Chute minha idade! entre 0 a 25 !" . "\n");
    for ($i=0;$i<10;$i++){
        $chute = readline('Fale o seu ' . $i+1 . '° chute = ');
        if($chute == $sorteado){
            print(' Você acertou !' . "Realmente minha idade era $sorteado \n");
            break;
        }
        elseif($i==9){
            print ("Você errou, a minha idade era $sorteado !\n");
        }
    }

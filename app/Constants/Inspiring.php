<?php

namespace App\Constants;

use Illuminate\Support\Collection;
use Illuminate\Support\Stringable;

class Inspiring
{

    public static function quote(): string
    {
        return static::formatForConsole(static::quotes()->random());
    }

    public static function quotes(): Collection
    {
        return new Collection([
            'Uma biblioteca não é um luxo, mas uma das necessidades da vida. - Henry Ward Beecher',
            'Onde quer que se queimem livros, acaba-se por queimar pessoas. - Heinrich Heine',
            'A biblioteca é o espelho da humanidade. - Umberto Eco',
            'Arquivar é dar vida ao passado para que ele não morra no presente. - Autor Desconhecido',
            'As bibliotecas são as minas de ouro de quem não tem dinheiro. - Bernard Cornwell',
            'A única coisa que você absolutamente tem de saber é a localização da biblioteca. - Albert Einstein',
            'Um arquivo é um lugar onde a história se torna palpável. - Verne Harris',
            'Ler é viajar sem sair do lugar; a biblioteca é o passaporte. - Lope de Vega',
            'Uma biblioteca é um hospital para a mente. - Provérbio Egípcio',
            'O bibliotecário é o mestre das chaves para o reino do saber. - Autor Desconhecido',
            'Os arquivos não são apenas depósitos de papel; são os alicerces da nossa democracia. - Desmond Tutu',
            'Uma biblioteca cheia de livros é a melhor das companhias. - Olavo Bilac',
            'Quem tem uma biblioteca e um jardim, tem tudo o que precisa. - Cícero',
            'O arquivo é o guardião da verdade e o sentinela da memória. - Charles Samaran',
            'As bibliotecas guardam a energia que alimenta a imaginação. - Sidney Sheldon',
            'Organizar um arquivo é colocar o caos em ordem para que o futuro nos compreenda. - Autor Desconhecido',
            'Sem bibliotecas, o que temos? Nem passado nem futuro. - Ray Bradbury',
            'O conhecimento é livre na biblioteca, basta saber procurar. - Autor Desconhecido',
            'A biblioteca é o lugar onde o tempo se encontra com a eternidade. - Marguerite Yourcenar',
            'Um arquivo bem gerido é a prova da transparência de qualquer instituição. - Autor Desconhecido',
            'O livro é um mestre que ensina sem cansaço e sem cobrar. - Elizabeth Barrett Browning',
            'Nas estantes de uma biblioteca, o mundo inteiro cabe num só lugar. - Autor Desconhecido',
            'O arquivo é a memória coletiva de um povo, preservada para a posteridade. - Autor Desconhecido',
            'A liberdade encontra-se entre as páginas de um livro numa biblioteca pública. - Autor Desconhecido',
            'Guardar um documento é salvar um pedaço do tempo. - Autor Desconhecido',
        ]);
    }

    protected static function formatForConsole($quote): string
    {
        [$text, $author] = (new Stringable($quote))->explode('-');

        return sprintf(
            "\n  <options=bold>“ %s ”</>\n  <fg=gray>— %s</>\n",
            trim($text),
            trim($author),
        );
    }
}

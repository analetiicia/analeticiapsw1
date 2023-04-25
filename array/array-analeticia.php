

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-array.css">
    <title>Arrays</title>
</head>
<body>
    <h1>Arrays Revisão</h1>
    <h2>arrays como lista ordanada (explicita)</h2>

    <?php
    echo '<pre>'; //serve para imprimir de maneira configurada, é uma div
    $listaorndenada = array ('carro', 'bike', 'moto'); // carro - posição 0, bike - posição 1, moto - posição 2
    print_r($listaorndenada); //print_r mostra toda a estrutura da variável
    echo '</pre>';

    echo '<h2> adicionar itens ao array </h2>';
    $listaorndenada[] = 'avião'; //na poisição vazia do array, adicionar "avião"
    $listaorndenada[] = 'metrô';
    echo '<pre>';
    print_r($listaorndenada);
    echo '</pre>';

    echo '<h2> adicionar itens ao array </h2>';
    $listaorndenada[1] = 'caminhão';
    echo '<pre>';
    print_r($listaorndenada);
    echo '</pre>';

    echo '<h2>arrays como lista ordanada (implicita)</h2>';
    $listaorndenada = [
        'carro',
        'moto',
        'bike'
    ]; //na descrição, não é necessário declarar a array, apenas usá-la
    echo '<pre>';
    print_r($listaorndenada);
    echo '</pre>';

    echo '<h2>array associativo = chave => valor</h2>';
    $array = [
        0=> 'moletom',
        1=> 'calça',
        2=> 'sapato',
        3=> 'blusa',
        4=> 'shorts',
        5=> 'sandálias'
    ];
    echo '<pre>';
    print_r($array);
    echo '</pre>';
   
    echo '<h2>arrays - impressão de um item</h2>';
    echo '<pre>';
    echo $array[2];
    echo '</pre>';

    echo '<h2>arrays - alteração de um item</h2>';
    $array[2] = 'sapato grande';
    echo '<pre>';
    print_r($array);
    echo '</pre>';

    echo '<h2>arrays com vários tipos</h2>';
    $multitipo = [
        1 => 'livro',
        'dois' => 'capitulo',
        3 => 'páginas',
        'isbn' => '4356',
        'autor' => 'Fábio'
    ];
    echo '<pre>';
    print_r($multitipo);
    echo '</pre>';

    echo '<h2>array multidimensional</h2>';
    $multidimensional = [
        'alunos' => [
            [
            'id' => 1,
            'nome' => 'zeca',
            'endereco' => 'rua x'
            ],
            [
            'id' => 2,
            'nome' => 'maria',
            'endereco' => 'rua y'
            ]
          
        ],

        'professores' => [
            'materia' => 'PSW',
            'nome' => 'Fábio',
            'idade' => 38
        ]
    ];
    echo '<pre>';
    print_r($multidimensional);
    echo '</pre>';

    echo '<h2>array multidimensional - impressão de um item</h2>';
    echo '<pre>';
    print_r($multidimensional ['alunos'] [1] ['nome']);
    echo '</pre>';

    ?>

</body>
</html>
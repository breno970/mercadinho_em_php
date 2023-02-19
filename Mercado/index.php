<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title></title>
        </head>
            <body>
                <pre>
                    <?php
                        require_once 'DVD.php';
                        require_once 'Leite.php';

                            $estoque[0] = new DVD("A nova onda do imperador", null, "1", 18);
                            $estoque[1] = new DVD("Resident Evil", "2003", "2", 12);
                            $estoque[2] = new DVD(null, "Os sem floresta", "3", 22);
                            $estoque[3] = new DVD("Anaconda", "2009", "4", 35);

                            $estoque[4] = new Leite("Leite Ninho", "1L", "2006/08/04", "5", 3.40);
                            $estoque[5] = new Leite("Leite Piracamjuba", "1L", "2025/05/06", "6", 3.10);
                            $estoque[6] = new Leite("Leite Gloria", "1L", "2022/11/03", "7", 3.50);
                            $estoque[7] = new Leite("Leite Nestle", "1L", "2008/12/02", "8", 2.90);
                            $estoque[8] = new Leite("Leite Mococa", "1L", "2021/06/11", "9", 3.75);
                            $estoque[9] = new Leite("Leite itambé", "1L", "2018/05/12", "10", 2.40);
                            
                            $estoque[0] ->detalhes();
                            $estoque[1] ->detalhes();
                            $estoque[2] ->detalhes();
                            $estoque[3] ->detalhes();

                            $estoque[4]->detalhes();
                            $estoque[5]->detalhes();
                            $estoque[6]->detalhes();
                            $estoque[7]->detalhes();
                            $estoque[8]->detalhes();
                            $estoque[9]->detalhes();

                            $cont = 0;
                            for($c=4;$c<10;$c++){
                                $cont+=$estoque[$c]->contador;
                            }echo "<HR>Vencidos: ". $cont;

                            $cont = 0;
                            for($c=0;$c<10;$c++){
                                $cont+=$estoque[$c]->count;
                            }echo "<HR>Valor Total: ". $cont;

                            $cont = 0;
                            for($c=0; $c<4; $c++){
                                $cont += $estoque[$c]->contano;   
                            }echo "<HR>Total Ano: ".$cont;

                    ?>
                </pre>
            </body>
    </html>
 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Marmitas Dona Rita</title>

    <style type="text/css">
        *{
            padding: 0px;
            margin: 0px;
        }
        img{
            width: 150px;
            height: 150px;
            
        }
        #container{
            width: 100%;
        }
        header{
            background-color:#FFBF00 ;
        }
        #conteudo{
            display: flex;
            background-color: white;            
            justify-content: space-around;
        }
        .item{
            height: 450px;
            width: 450px;
            border: 3px solid red;
        }
        nav a{
            margin: 30px;
            text-decoration: none;
            float: right;   
            color: red;     
        }
        
        }
        .item1{
            height: 300px;
            width: 300px;
            border: 2px solid black;
        }
        footer{
            background-color: orange;
            height: 230px;  
            padding: 30px;      
        }
        footer a{
            text-decoration: none;
            color: #FF0000;
        }
        .centralizar{
            text-align: center;
            background-color: #DF7401;
            padding: 20px;
        }
        h1{
            text-align: center;
        }
        a:hover{
            color: white;
            text-decoration: underline overline;
            background: red;
            font-size: 110%;
        }
        h1{
            float:left;
            padding: 30px;
            font-size: 60px;
            color: #8A0808;
        }
        .item img{
            width: 450px;
            height: 300px;
        }
        
        }
        #c{
            text-align: center;
        }
        button{
            padding: 8px;
        }

        <?php
        include("dados.php");
        ?>

        
    
    </style>
</head>
    
        <body>
            <h1>MARMITAS DA DONA RITA </h1>
            <div id="container">
                <header>
                    <nav class="imagem"> 
                        <img src="marmitadarita.png">
                        <a href="">CONTATO </a>
                        <a href="">ONDE NOS ENCONTRAR  </a>
                        <a href="">QUEM SOMOS  </a>
                        <a href="">HOME</a>
                        
                        <div>

                        </div>
                        
                    </nav>
                </header>
                <section id="conteudo">
                    <article class="item">
                                <img src="marmita8.jfif">
                            <div id="c">
                                <p> Marmita Especial com Batata Frita:
                                <br><br>
                                <?php

        foreach ($marmitaoito as $key => $value){
             echo $value['sabor'];

            }
            echo '<br><br>';
             foreach ($marmitaoito as $key => $value){
             echo $value['preco'];           
        }
            echo '<br><br>';
             foreach ($marmitaoito as $key => $value){
             echo $value['ingredientes'];           
        }
        ?>
                                    
                            </div>
                    </article >
                  

                                        
                </section>

                <footer>
                        <h2>Quer saber mais?</h2><br>

                    <p><a href="">Quem somos</a>
                    <p><a href="">Blog</a>
                    <p><a href="">Contato</a>
                    <p><a href="">Conheça Dona Rita</a>
                        
                        <br><br><br>

                    <p class="centralizar">Todos direitos reservados a Vanderlei Chepanski RA:21131539-5



                    
                </footer>

             </div>
        </body>
    
</html>
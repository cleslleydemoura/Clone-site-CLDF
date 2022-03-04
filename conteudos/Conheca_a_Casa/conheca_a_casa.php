<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style type="text/css">
            div#Menu_Vertical{
                width: 232px;
                height: 600px;
                float: left;
            }
            div#Paginas_Menu{
                height: 750px;
                width: 685px;
                margin-left: 238px;
            }
            div#Menu_Vertical ul{
                list-style: none;
                margin:10px;
                padding:0px 0px 0px 20px;
            }
            div#Menu_Vertical ul li{
                
            }
            div#Menu_Vertical ul li a{
                text-decoration: none;
                background-color: #a5441b;
                display: block;
                border: 1px solid white;
                padding: 5px 10px;
                color: white;
                font-size: 9pt;
                font-family: Arial;
                font-weight: bold;
            }
            div#Menu_Vertical ul li a:hover{
                background-color: #6b2e14;
            }
            div#Paginas_Menu iframe{
                width: 100%;
                height: 100%;
                border: none;
            }
        </style>
    </head>
    <body style="overflow: hidden;">
        <div id="Menu_Vertical">
            <ul>
                <li><a href="sobre.php" target="paginas_menu">Sobre a Câmara Legislativa</a></li>
                <li><a href="visite.php" target="paginas_menu">Visite a Câmara</a></li>
                <li><a href="mesa.php" target="paginas_menu">Mesa Diretora</a></li>
                <li><a href="#">Deputados 2019-2022</a></li>
                <li><a href="#">Legislaturas anteriores</a></li>
                <li><a href="#">Comissões</a></li>
                <li><a href="#">Corregedoria</a></li>
                <li><a href="#">Ouvidoria</a></li>
                <li><a href="#">Assessoria Legislativa</a></li>
                <li><a href="#">Biblioteca Paulo Bertran</a></li>
                <li><a href="#">Arquivo</a></li>
                <li><a href="#">Escola do Legislativo</a></li>
                <li><a href="#">Atividades Culturais</a></li>
                <li><a href="#">Fascal</a></li>
                <li><a href="#">Gestão ambiental da CLDF</a></li>
                <li><a href="#">Sobre a Câmara Legislativa</a></li>
            </ul>
        </div>
        <div id="Paginas_Menu">
            <iframe src="sobre.php" name="paginas_menu"></iframe>
        </div>
    </body>
</html>

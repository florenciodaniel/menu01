<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>MENU 01</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="css/estilo.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <header id="header-topo">
            <nav class="nav-topo">
                <ul class="ul-logo">
<!--                    <a href="#banner" onclick="clicare()"><li><p>Esta <span>LOJA</span></p></li></a>-->
                    <a href="#banner" onclick="clicare()"><li><img src="img/logo/logobelle.png" alt=""/></li></a>

                </ul>

                <div id="menu_img">

                    <img id="img1" onclick="mostrar1()" alt="hindu" src="img/menu/menu_fechado.png">
                    <img id="img2" onclick="mostrar2()" alt="hindu" src="img/menu/menu_aberto.png" class="naoMostrar">
                </div>
                <ul id="ul-link" class="ul-link inativo">
                    <a href="#banner" onclick="clicare()"> <li>Home</li></a>
                    <a href="#servicos" onclick="clicare()"><li>Serviços</li></a>
                    <a href="#equipe" onclick="clicare()"><li>Equipe</li></a>
                    <a href="#galeria" onclick="clicare()"><li>Galeria</li></a>
                    <a href="#contato" onclick="clicare()"><li>Contato</li></a>
                </ul>
            </nav>
        </header>
        <div class="banner" id="banner">
            
        </div>
        <div class="servicos" id="servicos">

        </div>
        <div class="equipe" id="equipe">

        </div>
        <div class="galeria" id="galeria">

        </div>
        <div class="contato" id="contato">

        </div>

        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script type="text/javascript">

                        //codigo que faz sumir o menu em telas pequenas ao clicar em um link e tambem troca o backgroud do menu fechado aberto

                        function clicare() {
                            document.getElementById('ul-link').classList.remove('ativo');
                            document.getElementById('ul-link').classList.add('inativo');
                            document.getElementById('img2').classList.add('naoMostrar');
                            document.getElementById('img1').classList.remove('naoMostrar');
                        }

                        //trocar a imagem do menu
                        function mostrar1() {
                            document.getElementById('img1').classList.add('naoMostrar');
                            document.getElementById('img2').classList.remove('naoMostrar');
                            document.getElementById('ul-link').classList.remove('inativo');
                            document.getElementById('ul-link').classList.add('ativo');
                        }
                        function mostrar2() {
                            document.getElementById('img2').classList.add('naoMostrar');
                            document.getElementById('img1').classList.remove('naoMostrar');
                            document.getElementById('ul-link').classList.remove('ativo');
                            document.getElementById('ul-link').classList.add('inativo');
                        }

                        //codigo que descobre qual a classe que existe no elemnto e faz a troca desta classe quando clicado
                        function menu() {
                            var classes = document.getElementById('menu_img').className;
                            if (classes == 'menu-fechado') {
                                document.getElementById('menu_img').classList.remove('menu-fechado');
                                document.getElementById('menu_img').classList.add('menu-aberto');
                            } else {
                                document.getElementById('menu_img').classList.add('menu-fechado');
                                document.getElementById('menu_img').classList.remove('menu-aberto');
                            }
                        }

                        //codigo que some e aparece o menu ao fazer scrooll no mouse 
                        var prevScrollpos = window.pageYOffset;
                        window.onscroll = function () {

                            var currentScrollpos = window.pageYOffset;
                            if (prevScrollpos > currentScrollpos) {
                                document.getElementById("header-topo").style.top = "0";
                            } else {
                                document.getElementById("header-topo").style.top = "-100px";
                            }
                            prevScrollpos = currentScrollpos;
                        }

                        //codigo que faz smooth suave ao clicar no link ancora ate a section escolhida
                        $('#ul-link a').on('click', function (e) {
                            if (this.hash !== '') {
                                e.preventDefault();
                                const hash = this.hash;
                                $('html, body')
                                        .animate({
                                            scrollTop: $(hash).offset().top
                                        }, 800);
                            }
                        });
        </script>
    </body>
</html>

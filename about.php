<?php

// Configurações globais
require_once ('_config.php');


/***** Configurações da página *****/

// Título da página
$T['pageTitle'] = 'Sobre';

// CSS da página
$T['pageCSS'] = '/css/about.css';

// JavaScript da página
$T['pageJS'] = '';

// Cabeçalho da página
require_once('_header.php');

?>

            <!-- Conteúdo principal -->
            <article>

                <h2>Tello - Telemensagens </h2>
                <p>Site feito para os funcionários da empresa Tello se comunicar entre si.
                </p>
                
                <p>Aqui você deixa suas dúvidas, reclamações, mensagens de suporte entre outras coisas.</p>

            </article>

            <!-- Barra lateral -->
            <aside>
                <h3>Barra lateral</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <ul>
                    <li><a href="/">Link 1</a></li>
                    <li><a href="/">Link 2</a></li>
                    <li><a href="/">Link 3</a></li>
                    <li><a href="/">Link 4</a></li>
                </ul>
            </aside>

<?php

// Rodapé da página
require_once ('_footer.php');

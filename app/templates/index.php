<?php

function get_title($filename) {
    //$oldPattern = '/<title>(.+)<\/title>/';
    $pattern = '@\$title\s*=\s\'(.*)\'@ui';
    if (preg_match($pattern, file_get_contents($filename), $matches) && isset($matches[1])) {
        $title = explode(" &mdash; ", $matches[1]);
        $title = $title[0];
    } else {
        $title = $filename;
    }

    return $title;
}
?><!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <title>Сибирикс: верстка</title>
        <link href='http://fonts.googleapis.com/css?family=Lobster&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
        <style>
            html, body, .main{
                width: 100%;
                height: 100%;
                padding: 0;
                margin: 0;
            }

            html{
                background: url(data:image/png;base64,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)
                    center center repeat;
                overflow:hidden;
            }

            body{
                background: -moz-radial-gradient(center, ellipse cover, rgba(0,0,0,0) 0%, rgba(0,0,0,0.5) 100%);
                background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.5)));
                background: -webkit-radial-gradient(center, ellipse cover, rgba(0,0,0,0) 0%,rgba(0,0,0,0.5) 100%);
                background: -o-radial-gradient(center, ellipse cover, rgba(0,0,0,0) 0%,rgba(0,0,0,0.5) 100%);
                background: -ms-radial-gradient(center, ellipse cover, rgba(0,0,0,0) 0%,rgba(0,0,0,0.5) 100%);
                background: radial-gradient(ellipse at center, rgba(0,0,0,0) 0%,rgba(0,0,0,0.5) 100%);
            }

            .main{
                background: hsla(204, 100%, 50%, 0.1);
            }

            h1 {
                font: 400 40px/30px 'Lobster', cursive;
                padding: 0;
                margin: 0 0 20px;
                text-align: center;
                color: transparent;
                color: rgba(0,0,0, 0.1);
                text-shadow: 0 1px 1px rgba(246,246,246,1), 0 0 0 rgba(0,0,0,0.4), 0 1px 1px rgba(246,246,246,1);
            }

            div {
                position: absolute;
                top: 50%;
                left: 50%;
                margin: -324px 0 0 -250px;
                width: 480px;
                height: 545px;
                padding: 50px 10px;
                border-radius: 15px;
                border-bottom: 3px solid rgba(150, 150, 150, 1);
                background: rgba(246,246,246,1);
                background: -moz-linear-gradient(top, rgba(255,255,255,1) 0%, rgba(246,246,246,1) 47%, rgba(237,237,237,1) 100%);
                background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(255,255,255,1)), color-stop(47%,rgba(246,246,246,1)), color-stop(100%,rgba(237,237,237,1)));
                background: -webkit-linear-gradient(top, rgba(255,255,255,1) 0%,rgba(246,246,246,1) 47%,rgba(237,237,237,1) 100%);
                background: -o-linear-gradient(top, rgba(255,255,255,1) 0%,rgba(246,246,246,1) 47%,rgba(237,237,237,1) 100%);
                background: -ms-linear-gradient(top, rgba(255,255,255,1) 0%,rgba(246,246,246,1) 47%,rgba(237,237,237,1) 100%);
                background: linear-gradient(to bottom, rgba(255,255,255,1) 0%,rgba(246,246,246,1) 47%,rgba(237,237,237,1) 100%);
                -webkit-box-shadow: 0px 10px 30px rgba(50, 50, 50, 0.75), inset 0px -1px 1px rgba(0, 0, 0, 0.5);
                -moz-box-shadow:    0px 10px 30px rgba(50, 50, 50, 0.75), inset 0px -1px 1px rgba(0, 0, 0, 0.5);
                box-shadow:         0px 10px 30px rgba(50, 50, 50, 0.75), inset 0px -1px 1px rgba(0, 0, 0, 0.5);
            }
            ul{
                margin: 0;
                padding: 0;
                height: 470px;
                overflow: auto;
            }
            ul li {
                list-style-type: none;
                margin: 10px 40px;
                display: block;
                overflow: visible;
            }
            ul li a{
                display: block;
                padding: 6px 8px;
                border-radius: 3px;
                font-size: 18px;
                line-height: 24px;
                font-family: georgia;
                font-style: italic;
                text-decoration: none;
                color: #000;
                opacity: 0.5;
                text-shadow: 0 2px 1px rgba(255,255,255,0.9),
                    0 -2px 1px rgba(0,0,0,0.1);
                text-align: center;
                -webkit-transition: all 0.5s ease;
                -moz-transition: all 0.5s ease;
                transition: all 0.5s ease;
            }
            ul li a span{
                border-bottom: 1px dashed #aaa;
            }
            ul li a:hover{
                color: #555;
                opacity: 1;
                background: rgba(0,0,0,0.01);
                -webkit-box-shadow: inset 0px 1px 3px rgba(0, 0, 0, 0.2);
                -moz-box-shadow:    inset 0px 1px 3px rgba(0, 0, 0, 0.2);
                box-shadow:         inset 0px 1px 3px rgba(0, 0, 0, 0.2);
                -webkit-transition: none;
                -moz-transition: none;
                transition: none;
            }
            ul li a:hover span{
                border-bottom: 1px dashed #555;
            }
            .sibirix{
                display: block;
                width: 40px;
                height: 40px;
                position: absolute;
                left: 50%;
                bottom: 20px;
                margin-left: -20px;
                border-radius: 21px;
                padding: 1px;
                box-shadow: inset 0px 1px 1px 0px rgba(0, 0, 0, 0.5),
                    inset 0px 1px 1px 1px rgba(255, 255, 255, 1),
                    inset 0px 1px 1px 0px rgba(0, 0, 0, 0.5),
                    inset 0px -1px 1px 0px rgba(0, 0, 0, 0.5),
                    0px -1px 1px 0px rgba(0, 0, 0, 1),
                    0px 1px 1px 0px rgba(255, 255, 255, 1);
            }
            .sibirix a{
                display: block;
                width: 40px;
                height: 40px;
                border-radius: 20px;
                background: url(data:image/png;base64,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)
                    center center no-repeat;
                -webkit-transition: all 0.3s ease;
                -moz-transition: all 0.3s ease;
                transition: all 0.3s ease;
            }
            .sibirix a:hover{
                -webkit-transform: rotate(10deg) ;
                -moz-transform: rotate(10deg) ;
                -ms-transform: rotate(10deg) ;
                -o-transform: rotate(10deg) ;
                transform: rotate(10deg) ;
            }
            .sibirix a:after,
            .sibirix a:before{
                content: "";
                display: block;
                width: 40px;
                height: 40px;
                position: absolute;
                z-index: 1;
                opacity: 0.65;
                -webkit-transition: all 0.3s ease, opacity 0.5s ease 0.1s;
                -moz-transition: all 0.3s ease, opacity 0.5s ease 0.1s;
                transition: all 0.3s ease, opacity 0.5s ease 0.1s;
            }
            .sibirix a:after{
                opacity:0;
                z-index: 2;
                background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAAH7+Yj7AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAABYxJREFUeNpi/P//PwM6YGLAAuCCSrGMyo2PfP6jCAY1W9wBAjCbEZuZAAHESLpFrpOk/8cf0EZY1Pc5/D8D96/rl89ew20mQABhFcRrDyHAgsxxnyn939nXhkFIRIhh7949/148evV6f/pHCbAkyGoY1qlhmKiayZAGEtdrYLiHLE+0GwECiPqeoYNC5SRGvYKz9v9rHrr91y5lQXgA5n3lJIbppRdc/k/6EPd/wpfI/+Li4gzeOwT+w+ThJur4S2UoakkzLOheY/j0w32G79+/M9zd8WE5honaFQzntcoYCkFiGiUMC9HlqR+OAAFEtIlUD+8BM5CFYJgwMoJpxTiGKl4hrlZRBX6Gv3/+MTy7+Zbh1uw/GEGGMwyVExgX8QhwxYopCDFIKYgyqGgrMAhI8TC8/fyS4cjKSzUaHuIt9648YdgW/IaRoIEWHTz/7f0t/isrKDF+//eV4dvvzwysLKwMv//8Zji1+zLD9tjnjNp1/15yKv0WOxLxn7CBnjt5/+ubaTL8/vuH4cqJGwy7fL+DNQWfFvrP9I+F4da+V1+/3GWwujuH4RLRXh6+yQYgAHvl7pJQAIXxz+e9mRjlg7LEi96QBKmGCiooaAyanaP+gIyG1qAaWtttKZoagiCIGhqMwlyMLM1LmpZ2852v6+N2G4tApyByPIfDxzmcj9/3D09uCf4ibYS44brNXTKFikQ6nkMimg0yTtDfbddQUMDWqFJLng5O0TJqwACxHMi9Z3BzGTCLwG4JIytNGbt/XlwV0CXRGdQwWvSgLH2oSUt4YJh6PJgKd1BSyn0YgHftK21+3NDmIPhJ+xBMtBFKVTvaFCSkcgmYSBSuPd9Icl/tGdst8ISmiafQiyKnbYaCbdgKba8anLiAJBdHrpJCsVASsrK+wLIsEq9CHYOvoSCpg73HrIGyk0SmzMJ9dV0+mk2Kgk9+8LIqlDpijnZwj9kIh9tNWBt+WUKglpXGECoC0ecIvMfh5XtXGPy5pGQa15GEkdPXXvgDzxKopmyTj2D1YoeZAM/cVfNgK2mcfPbfPLX1XOhlmkvjzL+NjRa+/pDghwDtl81rE0EYxp+Z3exmu02ySRPbpF9p6IeKKAi9FRRRb57Ei9QqFP8D6UXQu9704EUolZ6KHryIgj15s0ixKFqQNlZrskmbprvZTbLZ3XGaU8GjK4hmYGAYZobfzPPMO+8ELspfv+MOYAfwXwMUfzsMEPJLX/YqpmgI93wXk/CoeDCGP2uMyqzMg8bC5hPMHf4e/tEwcxgwN4PrsirOJwZjJDWkQUtGoKgyCCVwWg7MqoXdQhX6xh7sPWejtY/xr0vMCxwwd41kuTkWOdtJQRTksCoRRZPRO5AI9fIfV7IvjiiHkxQRrtdCizXRbDXgui6smo3yjwq218vQP5s76w9YKjCJR2fJG0kJTQ2dSqEnoyEaj0Dt7kJXl8JPSmm3D6oYFtDyG9gzdlAslfBxOf8Uz09csc+sXh45G1+SopTGczIs20oG4sHcDJmQ4lgbmTwiDR/NoC+dhqZpCCvygQZcQtZeiXIpBa64T1w07Tqq+wa2P5W9nbxxe3NlBfQdfUYipe3kcXnQ8Rw+1/cDAeRwL4dPp6SRiUGWy2VJIpYE5SQ2z3jMehWGVUX+fVE3io23x84NXOqOqJybwOf2khVJCGvSC26H0fS0dd4DSVdKXG4TzPyCG4EAyilk1H4KNcOPKOrADlXQ4J7aNcoofueZ5qvi69U77gXP87B1qzA9drFnIZXVqBASIfcyRAZC/WNzZoGJrM+pMbe2hcfrD3GzvfijAAD5bcuXyvq4oxgo1PJcSgF1q45K0URtw2fVLSxz/7fLh/vuopjQ53drOpViBF6ToaLj29pdjHeymQ5gB/B/BPwJhZtx5vw71JkAAAAASUVORK5CYII=)
                    center center no-repeat;
            }

            .sibirix a:before{
                z-index: 1;
                background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAAH7+Yj7AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAABU5JREFUeNpi/P//PwM6YGLAAuCC8qGMyr4BPmBtLDBBqScWd26/vwNmM2IzEyCAGEm3SFpa+r+2tjZEG0h7WFjYf61AkWsQ7n/sFgEEEFZBvPYQAizIHJCjbGxsGISEhBgOndnz7yvXq9cPDn6UgDsShuXCGCbKhTKkgcSFzRjuIcsT7UaAAKK+Z6ivkAVdQCmGUU/umd1FNhZ2hn379zH8+f2HEcUzkm6M03X+u2RISUkx/P79m2Hfvn2MP3/+/P/+/XtGFKuZr0tlAAOc4YLQGsP79+8zfP/+nYHL8sNyuFWwABW1YTivEM1QCI4hH4aF6PLUD0eAACLaRKqH9+A1kJGREYylfRiruLm5/wPj97+EhMR/NnbW/yBxosNQwplx0ecTXLGgTCYqKsqgoKjAwMPNw/Dy5UuGjzqXan7sFW958uQJw5s3bxgJGsjDw/Pf2s7iv4KcEuPXb18ZPn34zMDKygpOeVduXGZ49ug5I6/Wv5dvzv8WA+pnxJu2Yd58/+YT4+sXZxhu3r3B8O3Td7AmoGv/s7CwMLBK/fzCq8dg9eY8w6XRZMMAEIC9sudJGIrC8FvKx034SKBggrYpCgOi8SuBQRY3/SH+A+PgD9DFH+HoxuJodHTTEB2QNHZAKoYaPqzUSymtLaMMNG4mnO3enPPenNz3PGc+KXPBP4TfC23cICnGCFuJACEEmqbBJ36+9J6Q+227mYLOti59PZKbpVAuIAiC8wLQ6/QhSVI2faCeOynHnoxN4j4zwiZYjuPg7jie50GHFM2ObJmpbqN/78/ITQmm7oE2IRKy1wpbEEURDlThtsmyLBRFgZavFftX3MNopNvWyMOnpPeZi5VsBusbBSSTHKipT6DqbF5QSqG3rUNVVSdnrojazFkOC8z3trhL8vlVuIX1j+qQA08Gg4EdDAbRJnVF0zWzW7VFezxdP9UyE8C41XqHm+cinik3ju4uG4gtszRMF4g2NBajJbviiGU82SaxgxPDkMtvUfmZyUCFjWv3PrY5PjX11l48gtvXCs7m+PpHgj8CtGMtrU1EUfi787pmkjGTTKadmEezKImIZCdo6dLHSpCWggvBbvwP/gb/hBZdFZe+FoKUggvBLsQH7UKqUZPYJE3TyXQmmYdzBwIV3NgEQciBAzPM4Z6Pe87c7zt34kWZApwCnAL813Z8Xj6J/8kKy1gM5+3XkoahIHGBQPmAP0V8pYymcRX3/ib/2Dt4fOrJ38Dt1ivhflxIElVVoSgKKKVRzGAwQEiZ6Ha7EffKZwefT1dQ/rIe8tykSzy3Qkr9Gh7ZdVSJy1OBlwiVKeLDtKhl0kjrKSRkBQInYBjKCtty4ITiYDh0YVkWOp1OxPUkd9g6+BToEwOoL5DN3ltxMZlUMdohWZYRi8UiZ8/MmfxheqrdbmGv/RNOZfdxavf8Sre6tWxupNa9HseZpon9Xgeu45GxAc7dJJW9DbxT/Bkplz+DbC4bAaQiDcktgO+Ha0SFIhE4tiaTovV6HU2z5vEX6+dqD8UdjuNC3eF+7b+nBVZylx75g/2AH0sHMzO38SLh6VKpXAiK2RLRtEzUV6OeYu5kG00ubb/hPuSvyzQeffe8EHVf4q2P0rPwdX5mqX/5x3OStQ9sCAkEuWtYncgxEzOIk8SsVCwWYRhGpGKZ4GR91Gg2gGrj5ben7hUGaH6Vv2VtamsJXuXYPM3ijuS27YiH3faWZ1ANbuYSHnx/gjujv3jsYyZ9AdssNOyzQNf16N5CTSUDMRYeIQr8whLu/qbxZ8EEN7vXYNkDfQE7J80/ZZIpwCnA/x3gL2Qg9fw5MK+CAAAAAElFTkSuQmCC)
                    center center no-repeat;
            }
            .sibirix:hover a:after,
            .sibirix:hover a:before{
                opacity: 1;
                -webkit-transform: rotate(-10deg) ;
                -moz-transform: rotate(-10deg) ;
                -ms-transform: rotate(-10deg) ;
                -o-transform: rotate(-10deg) ;
                transform: rotate(-10deg) ;
            }
            
            .display {
                position: absolute;
                z-index: 100;
                top: 20px;
                left: -380px;
                width: 400px;
                height: 200px;
                background: #ccc;
                
                padding: 10px;
                border-radius: 15px;
                
                -webkit-transition: all 0.3s ease;
                -moz-transition: all 0.3s ease;
                transition: all 0.3s ease;
                
                border-bottom: 3px solid rgba(150, 150, 150, 1);
                background: rgba(246,246,246,1);
                background: -moz-linear-gradient(top, rgba(255,255,255,1) 0%, rgba(246,246,246,1) 47%, rgba(237,237,237,1) 100%);
                background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(255,255,255,1)), color-stop(47%,rgba(246,246,246,1)), color-stop(100%,rgba(237,237,237,1)));
                background: -webkit-linear-gradient(top, rgba(255,255,255,1) 0%,rgba(246,246,246,1) 47%,rgba(237,237,237,1) 100%);
                background: -o-linear-gradient(top, rgba(255,255,255,1) 0%,rgba(246,246,246,1) 47%,rgba(237,237,237,1) 100%);
                background: -ms-linear-gradient(top, rgba(255,255,255,1) 0%,rgba(246,246,246,1) 47%,rgba(237,237,237,1) 100%);
                background: linear-gradient(to bottom, rgba(255,255,255,1) 0%,rgba(246,246,246,1) 47%,rgba(237,237,237,1) 100%);
                -webkit-box-shadow: 0px 10px 30px rgba(50, 50, 50, 0.75), inset 0px -1px 1px rgba(0, 0, 0, 0.5);
                -moz-box-shadow:    0px 10px 30px rgba(50, 50, 50, 0.75), inset 0px -1px 1px rgba(0, 0, 0, 0.5);
                box-shadow:         0px 10px 30px rgba(50, 50, 50, 0.75), inset 0px -1px 1px rgba(0, 0, 0, 0.5);
            }
            .display:hover {
                left: 0;
            }
        </style>
    </head>
    <body>
        <aside class="display"></aside>    
    
        <section class="main">
            <div>
                <h1>Список страниц</h1>
                <ul>
                    <? foreach (glob("*.php") as $filename): ?>
                    <? if ($filename === 'index.php') continue; ?>
                    <li><a href="./<?= $filename ?>" target="_blank"><span><?= get_title($filename); ?></span></a></li>
                    <? endforeach; ?>
                </ul>
                <span class="sibirix"><a href="http://www.sibirix.ru" target="_blank"></a></span>
            </div>
        </section>
        <script>
            function setSizeResults() {
                var cont = document.querySelector('.display');
                cont.innerHTML = '<h1>Размеры:</h1><br>' +
                    '<pre>' +
                    'Screen: screen height - ' + ('   ' + window.screen.height).substr(-5) + ', screen width - ' + ('   ' + window.screen.width).substr(-5) + '\n' +
                    'Window: outerHeight   - ' + ('   ' + window.outerHeight).substr(-5)   + ', outerWidth   - ' + ('   ' + window.outerWidth).substr(-5) + '\n' +
                    '        innerHeight   - ' + ('   ' + window.innerHeight).substr(-5)   + ', innerWidth   - ' + ('   ' + window.innerWidth).substr(-5) + '\n' +
                    'Предполагаемый масштаб: ' + (Math.round(window.outerWidth / window.innerWidth * 100)) + '%, ' + (Math.round(window.screen.width / window.outerWidth * 100)) + '%\n' +
                    'Device pixel ratio: ' + window.devicePixelRatio +
                    '</pre>';
            }
            window.addEventListener('load', setSizeResults);
            window.addEventListener('resize', setSizeResults);
            window.addEventListener('touchmove', setSizeResults);
        </script>
    </body>
</html>
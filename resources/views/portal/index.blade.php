<!DOCTYPE html>
<html class="loading" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Mauricio Coelho">
        <meta name="author" content="Mauricio Coelho">
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets-admin/assets/images/favicon_io/apple-touch-icon.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets-admin/assets/images/favicon_io/favicon-32x32.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets-admin/assets/images/favicon_io/favicon-16x16.png')}}">
        <title>31° Congresso CIBE - TOCANTINS Região Centro-Oeste</title>

        <style>
            body {
                background-image: linear-gradient(180deg, rgba(249,243,244,255) 0%, rgba(233,212,218,1) 100%);
                background-size: 100% 200%; /* 50% do tamanho da altura do elemento */
                background-repeat: no-repeat; /* para não repetir o gradiente */
            }

            button {
                background-color: #ff69b4;
                color: white;
                font-size: 24px;
                padding: 10px 20px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                transition: background-color 0.3s ease;
                margin-bottom: 40px;
            }

            h2 {
                font-family: 'Corporative Slab Bold', sans-serif;
                color: #996633;
                margin-top: -25px;
            }

            button:hover {
                background-color: #ff0080;
            }

            /* Responsividade para dispositivos com largura de até 767px */
            @media only screen and (max-width: 767px) {
                img.brand-background {
                    width: 80%;
                    height: auto;
                    object-fit: cover;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }

                button {
                    font-size: 18px;
                    padding: 8px 16px;
                }
            }

            /* Responsividade para dispositivos com largura de até 991px */
            @media only screen and (max-width: 991px) {
                img.brand-background {
                    width: 60%;
                    height: auto;
                    object-fit: cover;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }

                button {
                    font-size: 20px;
                    padding: 10px 18px;
                }
            }

            /* Responsividade para dispositivos com largura maior que 991px */
            @media only screen and (min-width: 992px) {
                img.brand-background {
                    width: 467px;
                    height: 467px;
                    object-fit: cover;
                    display: flex;
                    justify-content: center;
                    align-items: flex-start;
                }

                button {
                    font-size: 24px;
                    padding: 12px 20px;
                }
            }

            /* Responsividade para tablets em modo paisagem */
            @media only screen and (min-width: 768px) and (max-width: 991px) {
                img.brand-background {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    width: 100%;
                    height: auto;
                    object-fit: cover;
                    margin-top: 30%;
                }

                button {
                    font-size: 35px;
                    padding: 16px 24px;
                    border-width: 3px;
                    width: 500px;
                    height: 110px;
                    border-radius: 20px;
                }
            }

            /* Responsividade para smartphones em modo paisagem e retrato */
            @media only screen and (max-width: 767px) {
                img.brand-background {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    width: 100%;
                    height: auto;
                    object-fit: cover;
                    margin-top: 30%;
                }
            }
        </style>

    </head>
    <body>
    <main role="main" class="main-content">
        <center>            
            <br>
            <img class="brand-background" src="{{asset('assets-admin/assets/images/31_CIBE-TO_2023_page-0001.png')}}" oncontextmenu="return false;">
            <h2>REGIÃO CENTRO-OESTE</h2>
            <a href="{{route('inscricao')}}">
                <button>FAÇA SUA INSCRIÇÃO</button>
            </a>
        </center>
    </main> 

    </body>    
</html>
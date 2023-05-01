<!DOCTYPE html>
<html class="loading" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Mauricio Coelho">
        <meta name="author" content="Mauricio Coelho">
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets-admin/assets/images/favicon//apple-touch-icon.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets-admin/assets/images/favicon//favicon-32x32.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets-admin/assets/images/favicon//favicon-16x16.png')}}">
        <title>31 Congresso CIBE - TOCANTINS Região Centro-Oeste</title>

        <style>
            body {
                background-color: #e9d4da;
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
                <a href="{{route('inscricao')}}">
                    <br>
                    <img class="brand-background" src="{{asset('assets-admin/assets/images/cartaz.png')}}">
                    <br>
                    <button>FAÇA SUA INSCRIÇÃO</button>
                </a>
            </center>
        </main>
    </body>    
</html>
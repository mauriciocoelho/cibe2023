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
    
    /* Responsividade para dispositivos com largura de até 375px */
    @media only screen and (max-width: 375px) {
        img.brand-logo {
            width: 80%;
            height: auto;
        }
        
        button {
            font-size: 18px;
            padding: 8px 16px;
        }
    }
</style>

<main role="main" class="main-content">
    <center>
        <a href="{{route('inscricao')}}">
            <img class="brand-logo" src="{{asset('assets-admin/assets/images/cartaz.png')}}" width="40%" height="85%" style="display: block;">
            <br>
            <button>FAÇA SUA INSCRIÇÃO</button>
        </a>
    </center>
</main>

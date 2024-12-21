<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix Pay</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        #netflixlogoapp{
            width: 100px;
            margin: 10px;
        }
        *{
            margin: 0px;
            font-family: "Poppins", sans-serif;
            padding: 0px;
        }
        body{
            background-color: black;
        }
        #barranetflix{
            background: linear-gradient( black, rgba(255, 0, 0, 0));
            display: flex;
            justify-content: space-between;
            margin: 10px;
        }
        #bannerprincipal{
            background-image: url('../images/banner.png') ;
            background-position: center; /* Center the image */
            background-repeat: no-repeat; /* Do not repeat the image */
            background-size: cover;
        }
        #textoprincipal{
            color: white;
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            font-size: 27px;
        }
        #ganheassistindocaixa{
            padding: 5px;
            text-align: center;
            font-size: 23px;
            margin-bottom: 10px;
            font-weight: 700;
            margin-top: 10px;
            background-color: rgb(211, 15, 15);
            width: 60%;
        }
        #textodetalhelogin{
            font-size: 15px;
            margin-top: 20px;
            font-weight: 500;
        }
        #inputtypetext{
            border: 1px solid rgba(255, 255, 255, 0.411);
            background-color: rgba(0, 0, 0, 0.63);
            color: white;
            width: 100%;
            border-radius: 5px;
            margin-top: 20px;
            padding: 13px 35px;
            font-weight: 700;
        }
        #inputtypetextx{
            border: 1px solid rgb(190, 16, 16);
            background-color: rgba(56, 56, 56, 0.452);
            color: white;
            width: 24%;
            height: 90px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            border-radius: 5px;
            margin-top: 20px;
            padding: 13px 30px;
            font-weight: 700;
        }
        #inputtypetextx:hover{
            border: 1px solid rgb(190, 16, 16);
            background-color: rgb(190, 16, 16);
            color: white;
            width: 24%;
            border-radius: 5px;
            margin-top: 20px;
            padding: 13px 30px;
            font-weight: 700;
        }
        a{
            text-decoration: none;
        }
        #botaoproximaetapa{
            padding: 10px;
            font-weight: 700;
            width: 85%;
            margin-top: 20px;
            text-align: center;
            color: white;
            border-radius: 5px;
            font-size: 18px;
            background-color: rgb(211, 15, 15);
        }
        #botaoproximaetapaa{
            padding: 10px;
            font-weight: 700;
            width: 70%;
            margin-top: 10px;
            color: rgb(211, 15, 15);
            border-radius: 5px;
            font-size: 18px;
            background-color: rgb(41, 3, 3);
            border: 1px solid rgb(211, 15, 15);
        }
        #botaolucraretapa{
            background: linear-gradient(rgba(0, 0, 0, 0), rgb(0, 0, 0));
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0px 0px 20px 0px;
            text-align: center;
        }
        #botaolucraretapaa{
            display: flex;
            justify-content: center;
            margin-top: -90px;
            align-items: center;
            padding: 0px 0px 20px 0px;
            text-align: center;
        }
        #informativo{
            padding: 10px;
            margin: 10px;
            margin-top: 5px;
            display: flex;
            margin-left:  -150px;
            justify-content: center;
            align-items: center;
            border-radius: 5px;
            height: 200px;
        }
        #pipocanetflix{
            width: 30px;
        }
        #dinheirologo{
            width: 60px;
        }
        .tvnetflix{
            width: 90%;
        }
        #tvnetflixaax{
            width: 250px;
        }
        #tvnetflixapp{
            width: 150px;
            height: 150px;
            position: relative;
        }
        #videomp4net{
            width: 200px;
            margin-left: 50px;
            margin-top: 30px;
        }
        #informativo div:first-child {
            width: 150px;
            height: 150px;
            position: relative;
        }
        #informativo div:last-child {
            width: 150px;
            height: 150px;
            position: relative;
            margin-top: -150px;
            margin-left: 20px;
        }
        #textodetalhelogindd{
            color: white;
            padding: 30px;
            font-size: 19px;
            font-weight: 600;
            margin-top: -35px;
            text-align: center;
        }
        footer{
            color: white;
            background-color: rgb(19, 19, 19);
            height: 120px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        #saldolead{
            padding: 10px 15px;
            background-color: rgba(255, 0, 0, 0.562);
            border: 1px solid red;
            height: 15px;
            border-radius: 5px;
            display: flex;
            margin-top: 10px;
            justify-content: center;
            align-items: center;
            color: white;
        }
        .rating{
        transform: translate(-50%,-50%) rotateY(180deg);
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 30px;
        margin-left: 60%;
        }

        .rating input{
        display: none;
        }

        .rating label{
            display: block;
            cursor: pointer;
            width: 50px;
        }

        .rating label:before{
        content: '\f005';
        font-family: fontAwesome;
        position: relative;
        display: block;
        font-size: 50px;
        color: #555555;
        }

        .rating label:after{
        content: '\f005';
        font-family: fontAwesome;
        position: absolute;
        display: block;
        font-size: 50px;
        color: #db0303;
        top: 0;
        opacity: 0;
        transition: .5;
        text-shadow: 0 4px 5px rgba(138, 10, 10, 0.658);
        }
        .rating label:hover:after,
        .rating label:hover ~ label:after,
        .rating input:checked ~ label:after{
        opacity: 1;
        }
        #avaliacaotexto{
            color: white;
            font-size: 17px;
            font-weight: 600;
        }
        #avaloacaoserie{
            margin-top: 10px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        #youtubevideo{
            margin: 10px;
            width: 100%;
            border-radius: 10px;
            display: flex;
            justify-content: center;
            margin-left: 7%;
            align-items: center;
        }
        #simounaonet{
            display: flex;
            width: 90%;
            justify-content: space-between;
            align-items: center;
        }
        #sadoatyiualnet{
            text-align: center;
            padding: 10px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin: 10px;
            font-weight: 700;
            background-color: #db030349;
            border: 1px solid #db0303;
            border-radius: 10px;
            font-size: 30px;
            color: white;
        }
    </style>
</head>
<body>
    <div id="bannerprincipal">
        <div id="barranetflix">
            <img src="../images/netflix.png" id="netflixlogoapp">
            <div id="saldolead">Saldo: R$ <b>701,74</b></div>
        </div> 

        <div id="textoprincipal" class="concluidos">
            <div id="ganheassistindocaixa">Saque solicitado!</div>
        </div>
        <p id="sadoatyiualnet">
            <img src="https://geradornv.com.br/wp-content/themes/v1.34.2/assets/images/logos/pix/logo-pix-520x520.png" style="width: 80px;" alt="">PIX ENV.: R$ 701,74 <b style="font-size: 15px; margin-top: 10px; font-weight: 500;">
                <b>Saque solicitado com sucesso!</b> Seu saque enviado em <u>30 dias</u> para a chave pix cadastrada <br>
<br>
                    Caso deseje antecipar seu saque e receber imediatamente seu dinheiro pague a taxa de antecipação no valor de <b>R$39,22</b></p>
    
    
        
    
    
    

    <div class="center" style="display: flex; justify-content: center; background: linear-gradient(#cccccc00, black)">
        <a href="https://pay.risepay.com.br/Pay/c0ac59d73ee94cad8f72236fa23275a4" type="submit" id="botaoproximaetapa" value="RECEBER AGORA MESMO" class="button" disabled="">RECEBER AGORA MESMO</a> <!-- Botão inicialmente desativado -->
    </div>
    </div>
    <script>
        class YouTubeVideo extends HTMLElement {
            constructor() {
                super();
                this.attachShadow({ mode: 'open' });
                this.shadowRoot.appendChild(this.getStyle());
                this.addEventListener('click', () => {
                    this.classList.add('clicked');
                    this.shadowRoot.appendChild(this.getIframe());
                });
            }
        
            getStyle() {
                const style = document.createElement('style');
                style.textContent = `
                    :host {
                        position: relative;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        width: 100%;
                        max-width: 100%;
                        aspect-ratio: 16/9;
                        cursor: pointer;
                        background: silver url('https://img.youtube.com/vi/${this.getAttribute('video-id')}/0.jpg') no-repeat center / cover;
                    }
                    :host:before {
                        content: '';
                        width: 15%;
                        aspect-ratio: 1;
                        border-radius: 50%;
                        background: white url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 140 122.88"><polygon points="140,60.97 32,122.88 32,0 140,60.97" fill="black" /></svg>') no-repeat center / 50% 50%;
                        filter: drop-shadow(0px 0px 16px rgba(0,0,0,0.3));
                        transition: all 0.3s ease;
                    }
                    :host(.clicked):before {
                        opacity: 0;
                    }`;
                return style;
            }
        
            getIframe() {
                const iframe = document.createElement('iframe');
                iframe.setAttribute('frameborder', '0');
                iframe.setAttribute('allow', 'autoplay');
                iframe.setAttribute('allowfullscreen', '');
                iframe.style.cssText = `position: absolute; top: 0; left: 0; width: 100%; height: 100%;`;
                const params = new URLSearchParams({ autoplay: 1, modestbranding: 1, rel: 0, iv_load_policy: 3, showinfo: 0 });
                ['controls', 'start', 'end', 'loop', 'playlist'].forEach(
                    attr => { if (this.hasAttribute(attr)) params.set(attr, this.getAttribute(attr)); }
                );
                iframe.src = `https://www.youtube-nocookie.com/embed/${this.getAttribute('video-id')}?${params}`;
                iframe.onload = () => this.style.background = 'transparent';
                return iframe;
            }
        }
        customElements.define('youtube-video', YouTubeVideo);
        </script>
</body>
</html>
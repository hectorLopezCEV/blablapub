<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>BlablaPub</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}"/>
</head>
<body>

<!-- Header -->
<header id="header">
    <div class="logo"><a href="#">BlaBlaPub<span> y no te cortes!!</span></a></div>
</header>

<!-- Main -->
<section id="main">
    <div class="inner">

        <!-- One -->
        <section id="one" class="wrapper style1">

            <div class="image fit flush">
                <img src="{{ asset('images/landing/pic02.jpg') }}" alt=""/>
            </div>
            <header class="special">
                <h2>Conoce gente en cualquier lugar</h2>
                <p>Ahora ya no tienes excusa</p>
            </header>
            <div class="content">
                <p>Te presentamos la nueva APP para establecer relaciones en eventos. BlaBlaPub no es la clásica
                    aplicación donde pierdes tu tiempo intentando encontrar a personas que tenga los mismos gustos
                    que tu, aqui ya sabes que gustos tienen esas personas porque BlaBlaPub solo funciona con eventos
                    seleccionados desde nuestra APP.
                </p>
                <p>
                    Has entrado alguna vez en una discoteca y has dejado escapar a la chica o chico que te gusto por
                    no saber como empezar la conversación?.<br>

                    Has ido con una amiga o amigo a una discoteca y os habéis pasado la noche entera hablando entre
                    vosotros, sin conocer a nadie en toda la noche?.<br>

                    Has estado con un grupo de amigos en un evento al lado de gente que te hubiera gustado conocer y
                    esto nunca sucedio?.<br>
                    Con BlaBlaPub te ayudamos a romper el hielo, BlaBlaPub tiene un chat privado y exclusivo del
                    establecimiento en el que te encuentras, podreis hablar con cualquier persona que esté en el
                    establecimiento y romper el hielo, lo que venga después es todo una aventura.<br>


                </p>
            </div>
        </section>

        <!-- Two -->
        <section id="two" class="wrapper style2">
            <header>
                <h2>En todo tipo de ambiente</h2>
                <p>solo tienes que preguntar en tu lugar favorito</p>

            </header>
            <div class="content">
                <div class="gallery">
                    <div>
                        <div class="image fit flush">
                            <a href="#"><img src="{{asset('images/landing/pic03.jpg') }}" alt=""/></a>
                        </div>
                    </div>
                    <div>
                        <div class="image fit flush">
                            <a href="#"><img src="{{asset('images/landing/pic01.jpg') }}" alt=""/></a>
                        </div>
                    </div>
                    <div>
                        <div class="image fit flush">
                            <a href="#"><img src="{{asset('images/landing/pic04.jpg') }}" alt=""/></a>
                        </div>
                    </div>
                    <div>
                        <div class="image fit flush">
                            <a href="#"><img src="{{asset('images/landing/pic05.jpg') }}" alt=""/></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Three -->
        <section id="three" class="wrapper">
            <div class="spotlight">
                <div class="image flush"><img src="{{asset('images/landing/pic06.jpg') }}" alt=""/></div>
                <div class="inner">
                    <h3>En terrazas</h3>
                    <p>Puede que simplemente te guste una conversación de verano, disfrutando de conocer a alguien
                        que parece interesante, pero.. cómo es ese momento en el que rompes el hielo?, tienes
                        inseguridades de quedar mal en algo, eres tímido?.
                        Ayúdate con nuestra APP, mandale un mensaje y preguntale, si ves que no es lo que la otra
                        persona busca en ese momento, estupendo, te ahorraste ese momento. Pero si los dos estáis en
                        la misma sintonía.., adelante solo tienes que decirle quien eres y que empiece la aventura!!
                    </p>
                </div>
            </div>
            <div class="spotlight alt">
                <div class="image flush"><img src="{{asset('images/landing/pic07.jpg') }}" alt=""/></div>
                <div class="inner">
                    <h3>En la discoteca</h3>
                    <p>Sabes lo que quieres y lo que buscas, no pierdas tu tiempo. Mandale un mensaje a esa persona
                        que está en la discoteca y dile que quieres conocerla, puedes describirla quién eres, si no
                        le apetece, te ahorrastes ese momento, ella se lo pierde. Mantén el misterio y no le digas
                        quien eres, si merece tu tiempo, es hora de descubrir quién eres. Que empiece la aventura!!
                    </p>
                </div>
            </div>
            <div class="spotlight">
                <div class="image flush"><img src="{{asset('images/landing/pic08.jpg') }}" alt=""/></div>
                <div class="inner">
                    <h3>En tu pub favorito</h3>
                    <p>Estas con tus amigos y a alguien del grupo le gusto una persona de otro grupo?.
                        Genial va a ser super divertido, podéis mandar mensajes a el otro grupo y comunicarles que
                        alguien de tu grupo quiere conocer a uno de su grupo, juntaros los dos grupos y que empiece
                        la aventura!!
                        .</p>
                </div>
            </div>
        </section>

    </div>
</section>

<!-- Footer -->
<footer id="footer">
    <div class="container">
        <ul class="icons">
            <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
            <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
            <li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
        </ul>
    </div>
    <div class="copyright">
        BlaBlaPub {{date('Y')}}&copy;
        <br/>
        All rights reserved.
    </div>
</footer>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>

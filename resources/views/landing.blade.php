<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Digi7al</title>
    <meta name="description" content="Site Digi7al">
    <link rel="icon" href="{{asset('favicon.ico')}}" sizes="32x32" type="image/png">
    <meta name="_token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('site/css/custom.css')}}">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel='preload' type='text/css' as='style' href='https://use.fontawesome.com/releases/v5.15.1/css/all.css' crossorigin='anonymous'/><link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.15.1/css/all.css' crossorigin='anonymous'>

    <link rel="stylesheet" href="{{asset('site/css/aos.css')}}">
</head>

<body>

    <div class="jumbotron jumbotron-fluid" id="banner" style="background-image: url({{asset('site/img/banner2.png')}});">
        <div class="container text-center text-md-left">
            <header>
                <div class="row justify-content-between">
                    <div class="col-2">
                        <img src="{{asset('site/img/logo.png')}}" alt="logo">
                    </div>
                    {{--  <div class="col-6 align-self-center text-right">
                        <a href="#" class="text-white lead">Get Early Access</a>
                    </div>  --}}
                </div>
            </header>
            <h1 data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true"
                class="display-3 text-white font-weight-bold my-5">
                Transformando negócios<br>físicos em digitais!
            </h1>
            <p data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true"
                class="lead text-white my-4">
                Somos uma agência especializada em serviços digitais. Com um time que une<br> <b>criatividade, inovação e dinamismo</b>, buscamos incessantemente novas ideias e tecnologias<br>para garantir os melhores resultados para o seu negócio.
            </p>
            <a href="https://api.whatsapp.com/send?phone=5535991815307" target="_blank" data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true"
                class="btn my-4 font-weight-bold atlas-cta ctn-branco">Saiba mais</a>
        </div>
    </div>

    <div class="container my-5 py-2">
        <h2 class="text-center font-weight-bold my-5">Turbine suas redes sociais</h2>
        <div class="row">
            <div data-aos="fade-up" data-aos-delay="0" data-aos-duration="1000" data-aos-once="true"
                class="col-md-4 text-center">
                <img src="{{asset('site/img/icone2.png')}}" alt="Anti-spam" class="mx-auto">
                <h4>Qualidade</h4>
                {{--  <p>Lorem ipsum dolor sit amet porro his no his deleniti</p>  --}}
            </div>
            <div data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-once="true"
                class="col-md-4 text-center">
                <img src="{{asset('site/img/icone3.png')}}" alt="Phishing Detect" class="mx-auto">
                <h4>Conceito</h4>
                {{--  <p>Ne error antiopam usu. Sed vocen concludaturque ea</p>  --}}
            </div>
            <div data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000" data-aos-once="true"
                class="col-md-4 text-center">
                <img src="{{asset('site/img/icone4.png')}}" alt="Smart Scan" class="mx-auto">
                <h4>Inovação</h4>
                {{--  <p>Et usu ocurreret elaboraret doctus prodesse assueverit.</p>  --}}
            </div>
        </div>
    </div>

    <div class="jumbotron jumbotron-fluid feature" id="feature-first">
        <div class="container my-5">
            <div class="row justify-content-between text-center text-md-left">
                <div data-aos="fade-right" data-aos-duration="1000" data-aos-once="true" class="col-md-6">
                    {{--  <h2 class="font-weight-bold">Take a look inside</h2>
                    <p class="my-4">Te iisque labitur eos, nec sale argumentum scribentur no,
                        <br> augue disputando in vim. Erat fugit sit at, ius lorem deserunt deterruisset no.
                    </p>
                    <a href="#" class="btn my-4 font-weight-bold atlas-cta cta-blue">Learn More</a>  --}}
                </div>
                <div data-aos="fade-left" data-aos-duration="1000" data-aos-once="true"
                    class="col-md-6 align-self-center">
                    <img src="{{asset('site/img/feature-1.png')}}" alt="Take a look inside" class="mx-auto d-block">
                </div>
            </div>
        </div>
    </div>

    <div class="jumbotron jumbotron-fluid feature" id="feature-last">
        <div class="container">
            <div class="row justify-content-between text-center text-md-left">
                <div data-aos="fade-left" data-aos-duration="1000" data-aos-once="true" class="col-md-6 flex-md-last">
                    <h2 class="font-weight-bold text-white">O que faremos por você?</h2>
                    <p class="my-4 text-white">
                        Oferecemos soluções digitais com o objetivo de aumentar a <b>produtividade</b> e o <b>desempenho</b> do seu negócio, levando novas tendências para a comunicação da sua marca. Elaboramos todo o planejamento e gestão das suas principais mídias sociais para que você fortaleça sua presença digital 
                    </p>
                    <a href="#" class="btn my-4 font-weight-bold atlas-cta ctn-branco">Saiba mais</a>
                </div>
                <div data-aos="fade-right" data-aos-duration="1000" data-aos-once="true"
                    class="col-md-6 align-self-center flex-md-first">
                    <img src="{{asset('site/img/feature-2.png')}}" alt="Safe and reliable" class="mx-auto d-block">
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5 py-2" id="price-table">
        <h2 class="text-center font-weight-bold d-block mb-3">Vamos transformar!</h2>
        <div class="row">
            <div data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000" data-aos-once="true"
                class="col-md-4 text-center py-4 mt-5">
                <h4 class="my-4">START</h4>
                <p class="font-weight-bold">R$ <span class="display-2 font-weight-bold">169</span> / MÊS.</p>
                <ul class="list-unstyled">
                    <li class="mt-3">Site Institucional*</li>
                    <li class="mt-3">Gestão de Facebook e Instagram, com geração de conteúdo e desing</li>
                    <li class="mt-3">15 publicações / mês</li>
                    <li class="mt-3">Cartão Digital Interativo</li>
                    <li class="mt-3">1 E-mail personalizado</li>
                    <li class="mt-3">Plataforma digi7al.app para compartilhar múltiplos links</li>
                </ul>
                <a href="https://api.whatsapp.com/send?phone=5535991815307" target="_blank" class="btn my-4 font-weight-bold atlas-cta btn-success">Quero Contratar</a>
                <ul class="list-unstyled">
                    <li class="mt-3" style="font-size: 0.8rem;">* Não incluso domínio</li>
                </ul>
            </div>
            <div data-aos="fade-up" data-aos-duration="1000" data-aos-once="true"
                class="col-md-4 text-center py-4 mt-5 rounded" id="price-table__premium">
                <h4 class="my-4">PLUS</h4>
                <p class="font-weight-bold">R$ <span class="display-2 font-weight-bold">349</span> / MÊS.</p>
                <ul class="list-unstyled">
                    <li class="mt-3">Site Institucional*</li>
                    <li class="mt-3">Gestão de Facebook, Instagram, Whatsapp, Tiktok, Youtube, Twitter, Pinterest, Linkedin com geração de conteúdo e desing</li>
                    <li class="mt-3">30 publicações / mês</li>
                    <li class="mt-3">Agendamento de publicações e monitoramento</li>
                    <li class="mt-3">Cartão Digital Interativo</li>
                    <li class="mt-3">5 E-mail personalizado</li>
                    <li class="mt-3">Plataforma digi7al.app para compartilhar múltiplos links</li>
                    <li class="mt-3">ID Digital / Fidelidade anual</li>
                    <li class="mt-3">Criação de campanha offline / trimestre</li>
                    <li class="mt-3">Mentoria de marketing e novos negócios</li>
                </ul>
                <a href="https://api.whatsapp.com/send?phone=5535991815307" target="_blank" class="btn my-4 font-weight-bold atlas-cta btn-success">Quero Contratar</a>
                <ul class="list-unstyled">
                    <li class="mt-3" style="font-size: 0.8rem;">* Não incluso domínio</li>
                </ul>
            </div>
            <div data-aos="fade-left" data-aos-delay="200" data-aos-duration="1000" data-aos-once="true"
                class="col-md-4 text-center py-4 mt-5">
                <h4 class="my-4">BASIC</h4>
                <p class="font-weight-bold">R$ <span class="display-2 font-weight-bold">229</span> / MÊS.</p>
                <ul class="list-unstyled">
                    <li class="mt-3">Site Institucional*</li>
                    <li class="mt-3">Gestão de Facebook e Instagram, com geração de conteúdo e desing</li>
                    <li class="mt-3">15 publicações / mês</li>
                    <li class="mt-3" style="color: red;">Agendamento de publicações e monitoramento</li>
                    <li class="mt-3">Cartão Digital Interativo</li>
                    <li class="mt-3">3 E-mail personalizado</li>
                    <li class="mt-3">Plataforma digi7al.app para compartilhar múltiplos links</li>
                </ul>
                <a href="https://api.whatsapp.com/send?phone=5535991815307" target="_blank" class="btn my-4 font-weight-bold atlas-cta btn-success">Quero Contratar</a>
                <ul class="list-unstyled">
                    <li class="mt-3" style="font-size: 0.8rem;">* Não incluso domínio</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-md-2 py-2 align-self-center">
                    <img src="{{asset('site/img/parceiro1.png')}}" class="mx-auto d-block">
                </div>
                <div class="col-sm-4 col-md-2 py-2 align-self-center">
                    <img src="{{asset('site/img/parceiro2.png')}}" class="mx-auto d-block">
                </div>
                <div class="col-sm-4 col-md-2 py-2 align-self-center">
                    <img src="{{asset('site/img/parceiro3.png')}}" class="mx-auto d-block">
                </div>
                <div class="col-sm-4 col-md-2 py-2 align-self-center">
                    <img src="{{asset('site/img/parceiro4.png')}}" class="mx-auto d-block">
                </div>
                <div class="col-sm-4 col-md-2 py-2 align-self-center">
                    <img src="{{asset('site/img/parceiro5.png')}}" class="mx-auto d-block">
                </div>
                <div class="col-sm-4 col-md-2 py-2 align-self-center">
                    <img src="{{asset('site/img/parceiro6.png')}}" class="mx-auto d-block">
                </div>
            </div>
        </div>
    </div>

    <div class="jumbotron jumbotron-fluid" id="contact" style="background-image: url({{asset('site/img/7digitalbanner1.png')}});">
        <div class="container my-5">
            <div class="row justify-content-between">
                <div class="col-md-6 text-white">
                    <h2 class="font-weight-bold">Contato</h2>
                    <p class="my-4">
                        Para saber mais sobre os nossos planos e serviços especiais<br>entre em contato pelo formulário ao lado.
                    </p>
                    <ul class="list-unstyled">
                        <li>Email : <a href="mailto:7seventrends.7digital@gmail.com" class="text-white">7seventrends.7digital@gmail.com</a>
                        <li>Telefone : (35) 9 9181-5307</li>
                        <li>Endereço : Av. Raja Gabáglia, 2000
                            PVMT 8, Bloco 1, Sala 801F - Alpes
                            Belo Horizonte - MG / 30494-170</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <form id="form-contato" action="{{route('site.contato.enviar')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Nome</label>
                                <input type="name" class="form-control" name="nome" id="name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Email">Email</label>
                                <input type="email" class="form-control" name="email" id="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="message">Mensagem</label>
                            <textarea class="form-control" id="message" name="mensagem" rows="3"></textarea>
                        </div>
                        <div class="row mt-3" id="contato-botao-enviar">
                            <div class="col-12">
                                <button type="submit"
                                class="btn font-weight-bold atlas-cta atlas-cta-wide cta-branco my-3">Enviar</button>
                            </div>
                        </div>
                        <div class="row d-none" id="contato-ajax-loading">
                            <div class="col-12 text-center">
                                <img style="margin-left: auto; margin-right: auto;" src="{{asset('site/img/ajax-loading.gif')}}" width="60" alt="">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="jumbotron jumbotron-fluid" id="copyright">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-6 text-white align-self-center text-center text-md-left my-2">
                    ®2021 Digi7al - Todos os direitos reservados
                </div>
                <div class="col-md-6 align-self-center text-center text-md-right my-2" id="social-media">
                    <a href="{{ URL::asset('transformacao.pdf') }} " class="d-inline-block text-center ml-2">
                        <i class="fa fa-folder" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="d-inline-block text-center ml-2">
                        <i class="fab fa-facebook" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="d-inline-block text-center ml-2">
                        <i class="fab fa-instagram" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="d-inline-block text-center ml-2">
                        <i class="fab fa-whatsapp" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="d-inline-block text-center ml-2">
                        <i class="fab fa-tiktok" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="d-inline-block text-center ml-2">
                        <i class="fab fa-youtube" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="d-inline-block text-center ml-2">
                        <i class="fab fa-twitter" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="d-inline-block text-center ml-2">
                        <i class="fab fa-pinterest" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="d-inline-block text-center ml-2">
                        <i class="fab fa-linkedin" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalContatoSucesso" tabindex="-1" role="dialog" aria-labelledby="modalContatoSucessoLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h5>Obrigado! Recebemos sua mensagem e entraremos em contato assim que possível.</h5>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12 text-center">
                            <button type="button" class="btn btn-success" data-dismiss="modal" aria-label="Close">
                                Certo!
                            </button>                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalContatoErro" tabindex="-1" role="dialog" aria-labelledby="modalContatoErroLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h5>Erro ao enviar a mensagem. Tente novamente mais tarde.</h5>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12 text-center">
                            <button type="button" class="btn btn-success" data-dismiss="modal" aria-label="Close">
                                Certo!
                            </button>                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--  <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>  --}}
    <script src="{{asset('site/js/aos.js')}}" type="fac2c9a5d0f474f0bbe8c1dd-text/javascript"></script>
    <script type="fac2c9a5d0f474f0bbe8c1dd-text/javascript">
        AOS.init({});

    </script>
    <script src="{{asset('site/js/rocket-loader.min.js')}}"
        data-cf-settings="fac2c9a5d0f474f0bbe8c1dd-|49" defer=""></script>
    <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            $("#form-contato").submit(function(e){
                e.preventDefault();
                var nome = $("input[name='nome']").val();
                var email = $("input[name='email']").val();
                var mensagem = $("textarea[name='mensagem']").val();
                var _token = $('meta[name="_token"]').attr('content');

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': _token
                    }
                });  

                $.ajax({
                    url: '/contato/enviar',
                    type: 'POST',
                    data: {
                        nome: nome,
                        email: email,
                        mensagem: mensagem
                    },
                    dataType: 'JSON',
                    beforeSend: function(){
                        $("#contato-botao-enviar").addClass("d-none");
                        $("#contato-ajax-loading").removeClass("d-none");
                    },
                    success: function(data) {
                        console.log(data);
                        if(data = "sucesso"){
                            $("#modalContatoSucesso").modal();
                        }else{
                            $("#modalContatoErro").modal();
                        }
                        $("#contato-botao-enviar").removeClass("d-none");
                        $("#contato-ajax-loading").addClass("d-none");
                    },
                    error: function(err){
                        console.log(err);
                        $("#modalContatoErro").modal();
                        $("#contato-botao-enviar").removeClass("d-none");
                        $("#contato-ajax-loading").addClass("d-none");
                    }
                });
            });
        });
    </script>
</body>

</html>

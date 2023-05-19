@php $paginaNome = 'Política de Cookies'; @endphp
@include('site.components.header')
<main id="erro-404">
    <section id="sorry">
        <div class="container pt-5">
            <div class="row py-5">
                <div class="col-12 text-center py-5">
                    <h1 class="f-40 text-center f-400 py-5">POLÍTICA DE COOKIES</h1>
                    <p class="f-20" style="text-align: left">
                        Utilizamos cookies para melhorar o desempenho e a sua experiência como usuário no nosso site.
                    </p>
                    <h2 class="f-22 f-400 py-3" style="text-align: left">O que são cookies?</h2>
                    <p class="f-20" style="text-align: left">
                        Os cookies são pequenos arquivos de texto que um site, quando visitado, coloca no computador do
                        usuário ou no seu dispositivo móvel, através do navegador de internet (browser). A colocação de
                        cookies ajudará o site a reconhecer o seu dispositivo em uma próxima visita. Usamos o termo
                        “cookies” nesta política para fazer referência a todos os arquivos que recolhem informações
                        dessa forma. <br> <br>

                        Os cookies utilizados não recolhem informação que identifica o usuário. No entanto, se você já
                        for nosso cliente, poderemos monitorar suas visitas ao site desde que, pelo menos, por uma vez,
                        tenha iniciado a sua navegação a partir de alguma comunicação enviada por nós, por exemplo, SMS
                        e e-mail.<br> <br>

                        Os cookies recolhem também informações genéricas, designadamente a forma como os usuários chegam
                        e utilizam os sites ou a zona do país/países através do qual acedem ao site, etc.<br> <br>

                        Os cookies retêm apenas informação relacionada com as suas preferências.<br> <br>

                        A qualquer momento o usuário pode, através do seu navegador de internet (browser), decidir ser
                        notificado sobre a recepção de cookies, bem como bloquear a respectiva entrada no seu
                        sistema.<br> <br>

                        A recusa de uso de cookies no site pode resultar na impossibilidade de ter acesso a algumas das
                        suas áreas ou de receber informação personalizada.

                    </p>
                    <h2 class="f-22 f-400 py-3" style="text-align: left">Para que servem os cookies?</h2>
                    <p class="f-20" style="text-align: left">
                        Os cookies são usados para ajudar a determinar a utilidade, interesse e o número de utilizações
                        dos sites, permitindo uma navegação mais rápida, eficiente e eliminando a necessidade de
                        introduzir repetidamente as mesmas informações.
                    </p>
                    <h2 class="f-22 f-400 py-3" style="text-align: left">QUAIS TIPOS DE COOKIES COLETAMOS E PARA QUE SÃO
                        USADOS?</h2>
                    <p class="f-20" style="text-align: left">
                        <strong>Cookies estritamente necessários – ID C001</strong> <br>
                        Esses cookies são necessários para que o site funcione e não podem ser desligados nos nossos
                        sistemas. Normalmente, eles só são configurados em resposta a ações levadas a cabo por si e que
                        correspondem a uma solicitação de serviços, tais como definir as suas preferências de
                        privacidade, iniciar sessão ou preencher formulários. Você pode configurar o seu navegador para
                        bloquear ou alertá-lo sobre esses cookies, mas algumas partes do site não funcionarão. Estes
                        cookies não armazenam qualquer informação pessoal identificável. <br> <br>

                        <strong>Cookies de desempenho – ID C002</strong> <br>
                        Esses cookies nos permitem contar visitas e fontes de tráfego para que possamos medir e melhorar
                        o desempenho do nosso site. Eles nos ajudam a saber quais são as páginas mais e menos populares
                        e a ver como os visitantes se movimentam pelo site. Todas as informações recolhidas por esses
                        cookies são agregadas e, por conseguinte, anônimas. Se você não permitir esses cookies, não
                        saberemos quando visitou o nosso site. <br> <br>

                        <strong>Cookies de publicidade – ID C004</strong> <br>
                        Esses cookies podem ser estabelecidos através do nosso site pelos nossos parceiros de
                        publicidade. Podem ser usados por essas empresas para construir um perfil sobre os seus
                        interesses e mostrar-lhe anúncios relevantes em outros sites. Eles não armazenam diretamente
                        informações pessoais, mas são baseados na identificação exclusiva do seu navegador e dispositivo
                        de internet. Se você não permitir esses cookies, terá menos publicidade direcionada. <br> <br>
                    </p>
                    <a href="{{route('politica.privacidade')}}">
                        <button class="btn border-2 rounded-3 border-verde bg-verde px-5 input-42 d-flex align-items-center color-ciano f-16 hover-ciano">
                            POLÍTICA DE PRIVACIDADE
                        </button>
                    </a>

                    <a class="btn border-2 border  px-4 input-42 bg-branco color-preto rounded-3 f-16 hover-verde"
                       href="/" role="button">Voltar para home</a>
                </div>
            </div>
        </div>
    </section>
@include('site.components.footer')

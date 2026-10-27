
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Death Funerária</title>

    <link rel="stylesheet" href="style.css">

    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>

    <header>
        <div class="logo">DEATH FUNERÁRIA.</div>

        <nav>
            <a href="#inicio">Início</a>
            <a href="#sobre">Sobre</a>
            <a href="#servicos">Serviços</a>
            <a href="#contato">Contato</a>
        </nav>
    </header>

    <main>
        <section class="hero" id="inicio">
            <div class="hero-content">
                <p class="tag">AGÊNCIA FÚNEBRE • 24 HORAS</p>

                <h1>DEATH <span>FUNERÁRIA.</span></h1>

                <p class="descricao">
                    “Toda história tem um último capítulo.”
                </p>

                <a href="#servicos" class="botao">
                    CONHEÇA NOSSOS SERVIÇOS
                </a>
            </div>
        </section>

        <section class="sobre" id="sobre">
            <h2>ALÉM DO <span>ÚLTIMO CAPÍTULO</span></h2>

            <p>
                A Death Funerária é uma agência fúnebre
                fictícia criada para oferecer cuidado,
                acolhimento e respeito às famílias.
                Cada pessoa merece ser lembrada com carinho
                e dignidade.
            </p>
        </section>

        <section class="servicos" id="servicos">
            <h2>NOSSOS <span>SERVIÇOS</span></h2>

            <div class="cards">
                <article class="card">
                    <h3>Cerimônias</h3>
                    <p>
                        Organização de cerimônias
                        personalizadas para cada família.
                    </p>
                </article>

                <article class="card">
                    <h3>Homenagens</h3>
                    <p>
                        Tributos especiais para preservar
                        memórias e histórias.
                    </p>
                </article>

                <article class="card">            
                    <h3>Planos funerários</h3>
                    <p>
                        Informações sobre planejamento
                        funerário e suas opções.
                    </p>
                </article>
            </div>
        </section>

        <section class="frase">
            <p>
                Mesmo quando uma história chega ao fim,
                <span>suas memórias permanecem.</span>
            </p>
        </section>

        <section class="contato" id="contato">
            <h2>ENTRE EM <span>CONTATO</span></h2>

            <form id="formulario">
                <input type="text" id="nome"
                    placeholder="Seu nome" required>

                <input type="email" id="email"
                    placeholder="Seu e-mail" required>

                <select id="assunto" required>
                    <option value="">Selecione um assunto</option>
                    <option>Cerimônias</option>
                    <option>Planos funerários</option>
                    <option>Homenagens</option>
                    <option>Outras dúvidas</option>
                </select>

                <textarea id="detalhes"
                    placeholder="Sua mensagem"
                    required></textarea>

                <button type="submit" class="botao">
                    ENVIAR MENSAGEM
                </button> 

                <p id="mensagem"></p>
            </form>
        </section>
    </main>

    <footer>
        <p>DEATH FUNERÁRIA</p>
        <p>Projeto fictício inspirado na estética de Death Note.</p>
    </footer>

    <script src="script.js"></script>

</body>
</html>

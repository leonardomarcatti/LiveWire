<></>
<h1>🚀 Laravel LiveWire</h1>
<p>Projeto simples desenvolvido com <a href='https://laravel.com/' target='_blank'>Laravel 12</a> e  <a href='https://livewire.laravel.com/'  target='_blank'>Livewire</a>, executando em ambiente <a href='https://www.docker.com/'  target='_blank'></a>Docker, com foco em demonstrar reatividade no frontend sem necessidade de JavaScript manual.</p>

<h2>📌 Sobre o Projeto</h2>
<p>O projeto possui duas funcionalidades principais:</p>

<h3>🔢 1. Contador Interativo</h3>
<p>Um contador com três botões:</p>
<ul>
    <li>➕ **Incrementar** → Aumenta o contador em +1</li>
    <li>➖ **Decrementar** → Diminui o contador em -1</li>
    <li>🔄 **Resetar** → Define o contador como 0</li>
</ul>
 
<p>Toda a atualização acontece de forma reativa utilizando Livewire, sem recarregar a página.</p>

<h3>✏️ 2. Alteração de Nome Dinâmica</h3>
<ul>
    <li>Um campo de texto vazio</li>
    <li>O usuário pode digitar qualquer valor</li>
    <li>Ao clicar no botão **"Alterar Nome"**, o texto é atualizado dinamicamente na tela</li>
    <li>O usuário pode também selecionar nomes previamente escolhidos</li>
</ul>

<p>Tudo ocorre sem reload, utilizando `wire:model` e `wire:click`.</p>

<h2>Demonstração</h2>
<img src='https://github.com/user-attachments/assets/31e45497-4e96-4c39-a0c2-21e0f6d865fb'/>

<h2>🛠️ Tecnologias Utilizadas</h2>
<ul>
    <li>PHP 8+</li>
    <li>Laravel 12</li>
    <li>Livewire</li>
    <li>Blade</li>
    <li>Docker</li>
    <li>Docker Compose</li>
    <li>Bootstrap (opcional)</li>
</ul>

<h2>🐳 Executando o Projeto com Docker</h2>
<p>Clone o repositório => git clone https://github.com/leonardomarcatti/LiveWire.git</p>
<p>Entre na pasta da aplicação</p>
<p>Execute o comando: docker compose up -d --build</p>
<p>http://ip:3000</p>

<h2>🧠 Conceitos Demonstrados</h2>
<ul>
    <li>Componentes Livewire</li>
    <li>Propriedades públicas reativas</li>
    <li>Two-way data binding (wire:model)</li>
    <li>Eventos (wire:click)</li>
    <li>Atualização dinâmica sem JavaScript customizado</li>
    <li>Ambiente containerizado com Docker</li>
</ul>

<h2>🎯 Objetivo</h2>
<p>Este projeto tem fins educacionais para demonstrar:</p>
<p>Uso do Livewire no Laravel 12</p>
<p>Manipulação de estado no backend refletindo no frontend</p>
<p>Execução de aplicação Laravel dentro de container Docker</p>

<h2>📄 Licença</h2>
<p>Projeto desenvolvido para fins educacionais.</p>

<h2>👨‍💻 Autor</h2>
<p>Desenvolvido com Laravel 12 + Livewire + Docker.</p>

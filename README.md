# Sass

![https://rstudio.github.io/sass/reference/figures/logo.svg](SASS)
TESTANDO
Este repositório serve de exemplo de sass

1. O que é Sass

Sass (Syntactically Awesome Style Sheets) é um pré-processador CSS. Ele adiciona recursos avançados que não existem no CSS puro, permitindo escrever estilos de forma mais organizada, reutilizável e produtiva.
Depois de escrever em Sass/SCSS, o código é compilado para CSS tradicional, que então é interpretado normalmente pelos navegadores.

2. Sintaxes disponíveis

Sass possui duas sintaxes:

SCSS (a mais usada)

Parecida com CSS, aceita chaves e ponto e vírgula.

Permite você copiar códigos CSS existentes sem ajustes.

Exemplo:

$cor-primaria: #3498db;

.botao {
  background: $cor-primaria;
  padding: 10px;
  &:hover {
    background: darken($cor-primaria, 10%);
  }
}

Sass (indentada)

Sem chaves e sem pontos e vírgula.

Mais enxuta, porém menos comum atualmente.

Exemplo:

$cor-primaria: #3498db

.botao
  background: $cor-primaria
  padding: 10px
  &:hover
    background: darken($cor-primaria, 10%)

3. Principais recursos do Sass
Variáveis

Permitem armazenar valores reutilizáveis (cores, fontes, espaçamentos).

$padding-padrao: 16px;

Aninhamento (Nesting)

Evita repetição de seletores.

.menu {
  ul {
    list-style: none;
  }
}

Mixins

Blocos de código reutilizáveis, com ou sem parâmetros.

@mixin centralizar {
  display: flex;
  justify-content: center;
  align-items: center;
}

Funções

Retornam valores processados.

@function px-para-rem($px) {
  @return $px / 16 * 1rem;
}

Extends

Permitem compartilhar regras entre seletores.

.msg {
  padding: 10px;
}
.alerta {
  @extend .msg;
  background: red;
}

Partials e Imports

Dividem o código Sass em vários arquivos modulares.

4. Benefícios do Sass

Organização superior do código.

Menos repetição (DRY: Don’t Repeat Yourself).

Manutenção mais fácil em projetos grandes.

Produtividade elevada para equipes de front-end.

Compatível com qualquer CSS existente.

5. Como usar (compilação)

O Sass pode ser compilado de várias formas:

Linha de comando:
sass estilos.scss estilos.css

Ferramentas do ecossistema:

Node.js + Sass (dart-sass)

Webpack

Gulp

Vite

Parcel

6. Quando usar Sass

Em projetos médios ou grandes, onde organização do CSS importa.

Quando a equipe trabalha com componentes reutilizáveis.

Quando se deseja manter um sistema de design com variáveis, mixins e funções.

Frameworks antigos como Bootstrap 3/4 usavam Sass extensivamente. Atualmente frameworks modernos muitas vezes usam CSS-in-JS, mas o Sass continua muito presente em projetos estruturados.
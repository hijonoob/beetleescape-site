Beetle Escape
=================

Introdução
-----------------

Beetle Escape é um Infinite Runner desenvolvido como projeto do curso de Tecnologia em Jogos Digitais da FATEC São Caetano do Sul.

Esse é o projeto de desenvolvimento do site de divulgação do jogo


Ferramentas
-----------------

O site foi desenvolvido em PHP, MySQL e Bootstrap.


Contribuidores
-----------------

O site do Bettle Escape atualmente conta como seu Development Team:

- Danilo Sartorelli Barbato
- Lucas Vinicius Brandt Ferres
- Maurício Cardozo de Macedo
- Murilo Brandão Beraldo (artes já existentes do jogo)

Funcionalidades
-----------------

- Template baseado em Bootstrap
- Login e logout baseado em sessões
- Criptografia da senha
- CRUD básico de usuários
	- Criação de usuário
	- Listagem de usuários
	- Edição de usuários
	- Remoção de usuários
- CRUD básico de notícias
	- Criação de notícia
	- Listagem de notícias
	- Edição de notícias
	- Remoção de notícias
	- Página de visualização de notícia por Id
- Sistema de permissões diferentes para cada usuário:
	- visualizador (apenas loga);
	- jogador (acesso a conteúdo exclusivo);
	- gestor (jogador + gestão de notícias);
	- administrador (gestor + gestão de usuários);
- Exibição das últimas 5 notícias no rodapé
- Gerador de xml em formato RSS com as últimas 5 notícias para feed
- TinyMCE como editor de texto das notícias
- Autofocus no primeiro campo de cada formulário via HTML5
- Criação de notícia preenche a data do dia automaticamente
- Links com tecla de atalho para menu, conteúdo e rodapé
- Regra de alto contraste - funcionalidade, cookie e CSS
- Aplicação de tipos de alerta de acordo com ação (alert-success, alert-info, alert-warning e alert-danger)


Issues
-----------------

- [conteúdo] Popular com conteúdo
- [front] Máscara e validação dos campos de cada formulário
- [front] Confirmação ao deletar usuário e notícias
- [db] Transformar usuário em índice e único
- [db] Verificar se usuário já existe ao incluir
- [db] Transformar ID em índice, único e autoincremental
- [back] Envio de e-mail de contato (criar formulário)
- [back] Envio de e-mail para recuperação de senha (criar formulário e sistema de gerar nova senha)
- [back] Tratamento de mais erros no conexão com o banco
- [back] Tratamento de mais erros nas queries
- [back] Criar classes para pesquisas e atualização do MySQL para reaproveitar o código

Versão
-------------------

O site está em versão inicial de desenvolvimento, ainda sem release candidate.
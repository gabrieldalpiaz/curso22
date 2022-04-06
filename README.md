# curso22

- 1 Abrir vs code e emparelhar com o ubuntu no canto esquerdo inferior da tela.
- 2 Novo terminal e meter sudo service apache2 start
- 3 Open folder /var/www/html
- 4 Novo terminal sudo chmod 777 -R .
- 5 git clone link do arquivo.
-------------------------------------------------------------------
dar permissão para pastas no linux
comando: sudo chmod 777 -R .
sudo equivale a: executar como administrador
chmod equivale ao ato de permitir
777 equivale a permissão de acesso a tudo(cada 7 se refere a uma camada, da mais basica até a mais avançada)
-R se refere a TUDO que está dentro da pasta
Se refere ao diretorio atual que eu estou.
--------------------------------------------------------------------
AULA 2
Se tiver no terminal ~/ significa que estou no usuario, não no HTML.
Branch's:
- Master = formado por x arquivos
- Dev = cópia do master com a mesma quantidade x de arquivos
- Gabriel = cópia do dev com a mesma quantidade x de arquivos + a quantidade de arquivos nova que vai ser aderido.
Todo esse passo a passo recebe o nome de git flow.

CI, CD
Servem para deixar tudo funcionando, pegam o código fonte e criam uma build(versão final de produção e depois disso fazer o deploy onde estiver hospedado)
Integridade e desenvolvimente
Full stack = faz tanto back quanto end
front = cuida da beleza e funcionamento da página 
back = cuida de toda lógica
atualização do branch - checkout - PULL -checkout - MERGE - checkout - MERGE
sempre essa ordem acima
ESTOU NO DEV
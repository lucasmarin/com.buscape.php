# Importando esta biblioteca para o Symfony2

Insira as linhas abaixo dentro no final do seu arquivo deps, na raiz do Symfony2.

    [buscapeapi]
      git=http://github.com/lucasmarin/com.buscape.php.git
      version=1.0

Após termino da importação do projeto pra sua pasta vendors, insira no seu arquivo app/autoload.php o seguinte:

    $loader->registerNamespaces(array(
       ...
       'Buscape'          => __DIR__.'/../vendor/buscapeapi/src',
    ));

Rode

    php app/console cache:clear 

DONE!, a API do Buscapé já está disponível para ser acessada no seu projeto.


# MyPlog

Meu "BLOG" pessoal, uso para estudos

## Padrões de Codificação Adotados

Este projeto segue as seguintes PHP Standards Recommendations (PSRs) para garantir um código limpo, consistente e de fácil manutenção:

- **PSR-1: Padrão Básico de Codificação**
  Estabelece diretrizes fundamentais para o código PHP, visando melhorar a legibilidade e a interoperabilidade entre projetos. Inclui regras sobre o uso de tags PHP (`<?php` e `<?=`), codificação de arquivos (UTF-8 sem BOM) e convenções de nomenclatura para classes, métodos e constantes.

- **PSR-4: Padrão de Autoloading**
  Define um padrão para o carregamento automático de classes baseado em namespaces. Isso permite que as classes sejam organizadas em uma estrutura de diretórios que corresponde aos seus namespaces, facilitando a localização e inclusão automática dos arquivos de classes durante a execução do código.

- **PSR-12: Guia Estendido de Estilo de Codificação**
  Amplia as diretrizes da PSR-1, fornecendo um guia detalhado para a formatação e estilo de código PHP. Inclui regras sobre indentação (uso de 4 espaços por nível), uso consistente de chaves em estruturas de controle, espaçamento, quebras de linha e comentários, visando melhorar a legibilidade e consistência do código.

- **PSR-7: HTTP Message Interface**
  Define interfaces para mensagens HTTP, incluindo requisições e respostas, facilitando a interoperabilidade entre diferentes componentes que lidam com HTTP.

## Ferramentas de Verificação

Para garantir a conformidade com esses padrões, utilizamos as seguintes ferramentas:

- **PHP_CodeSniffer**: Verifica se o código está em conformidade com os padrões de codificação especificados, como a PSR-12.
- **Lint:check**: Para analisar o padrão da PSR-12
- **Lint:fix**: Para corrijir o padrão da PSR-12


## Contribuição

Contribuições são bem-vindas! Por favor, certifique-se de que seu código esteja em conformidade com as PSRs mencionadas acima antes de enviar um pull request.

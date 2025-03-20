# plogMy

Meu "BLOG" pessoal desenvolvido para estudos e experimentação de tecnologias, frameworks e boas práticas no desenvolvimento web.

## Índice

- [Descrição](#descrição)
- [Status do Projeto](#status-do-projeto)
- [Funcionalidades](#funcionalidades)
- [Tecnologias Utilizadas](#tecnologias-utilizadas)
- [Padrões de Codificação Adotados](#padrões-de-codificação-adotados)
- [Instalação e Execução](#instalação-e-execução)
- [Licença](#licença)

## Descrição

O **plogMy** é um projeto pessoal que serve como um ambiente para testar e aprimorar habilidades em diversas tecnologias e frameworks. Atualmente, o projeto está em desenvolvimento contínuo, com o objetivo de incorporar novas funcionalidades e melhorias técnicas ao longo do tempo.

## Status do Projeto

🚧 Projeto em Desenvolvimento 🚧

> Este projeto está em constante evolução, servindo como um laboratório para experimentação e aprendizado de novas tecnologias e práticas de desenvolvimento.

## Funcionalidades

- Publicação de artigos e posts pessoais.
- Sistema de autenticação de usuários.
- Integração com banco de dados MySQL para armazenamento de conteúdo.
- Implementação de padrões de codificação PSR-1 e PSR-4.

## Tecnologias Utilizadas

- **Linguagem:** PHP
- **Banco de Dados:** MySQL
- **Containerização:** Docker
- **Plataforma de Deploy:** Vercel
- **Outras Tecnologias:** [Liste aqui outras tecnologias ou ferramentas utilizadas, como frameworks PHP, bibliotecas JavaScript, etc.]

## Padrões de Codificação Adotados

Este projeto segue as seguintes PHP Standards Recommendations (PSRs):

- **PSR-1:** Padrão Básico de Codificação
  - Uso de tags PHP (`<?php` e `<?=`).
  - Codificação de arquivos em UTF-8 sem BOM.
  - Convenções de nomenclatura para classes, métodos e constantes.

- **PSR-4:** Padrão de Autoloading
  - Carregamento automático de classes baseado em namespaces, permitindo uma estrutura de diretórios que corresponde aos namespaces definidos.

## Instalação e Execução

Para executar este projeto localmente, siga os passos abaixo:

1. **Clone o repositório:**

   ```bash
   git clone https://github.com/RonaldEduardo/plogMy.git
   ```

2. **Navegue até o diretório do projeto:**

   ```bash
   cd plogMy
   ```

3. **Configure o ambiente utilizando Docker:**

   - Certifique-se de que o Docker esteja instalado e em execução.
   - Utilize o arquivo `docker-compose.yml` para configurar os serviços necessários.

     ```bash
     docker-compose up -d
     ```

4. **Instale as dependências do PHP:**

   - Utilize o Composer para instalar as dependências listadas no `composer.json`.

     ```bash
     composer install
     ```

5. **Configure as variáveis de ambiente:**

   - Renomeie o arquivo `.env.example` para `.env` e ajuste as variáveis conforme necessário.

6. **Execute as migrações do banco de dados:**

   - Utilize as ferramentas ou scripts disponíveis para criar as tabelas necessárias no banco de dados.

7. **Acesse o projeto:**

   - O projeto estará disponível no endereço configurado, por exemplo, `http://localhost:8000`.

## Licença

Este projeto está licenciado sob a licença MIT. Veja o arquivo [LICENSE](LICENSE) para mais detalhes.
```

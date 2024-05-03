# Comércio eletrônico
## Como executar o projeto de comércio eletrônico
1. Baixe o arquivo zip
2. Extraia o arquivo e copie a pasta E-commerce
3. Cole dentro do diretório raiz (para xampp xampp/htdocs, para wamp wamp/www, para lamp var/www/HTML)
4. Abra o PHPMyAdmin (http://localhost/phpmyadmin)
5. Crie um banco de dados com o nome cse411project
6. Importe o arquivo cse411project.sql (fornecido dentro do pacote zip na pasta de arquivos SQL)
7. Execute o script http://localhost/E-Commerce (frontend)
8. Para painel de administração http://localhost/E-Commerce/admin (painel de administração)

<br>
<a href="https://www.buymeacoffee.com/ashiquranik"><img src="https://img.buymeacoffee.com/button-api/?text=Buy me a coffee&emoji=&slug=ashiquranik&button_colour=5F7FFF&font_colour=ffffff&font_family=Cookie&outline_colour=000000&coffee_colour=FFDD00" /></a>
<br>

## Credencial para painel de administração:
- nome de usuário: admin
- Senha: admin
## Requisitos do usuário:
### Administrador
1. O administrador pode fazer login
2. O administrador pode gerenciar produtos
    - Adicionar produto
    - Remover Produto
    - Atualizar produto
3. O administrador pode visualizar a lista de produtos
4. O administrador pode visualizar a lista de pedidos
5. O administrador pode gerenciar o pedido
    - Confirmar pedido
    - Cancelar pedido
    - Entregar pedido
    - Remover pedido
6. O administrador pode visualizar a lista de usuários
7. O administrador pode gerar relatório de vendas

### Cliente
1. O cliente pode fazer login
2. O cliente pode visualizar os produtos
3. O cliente pode pesquisar produtos
4. O cliente pode adicionar produtos ao carrinho
5. O cliente pode fazer o pedido
6. O cliente pode fazer pagamentos
7. O cliente pode visualizar os detalhes do pedido

 
## Requisitos funcionais:
### Administrador
1. Faça login
2. Pesquise qualquer informação do produto e sua descrição
3. Veja todas as informações do produto
4. Veja todos os pedidos
5. Adicione, exclua e modifique informações do produto
6. Após cada adição, edição e exclusão bem-sucedida, uma mensagem de confirmação será mostrada no canto do
a página.
7. Sair
 
### Cliente
1. Faça login
2. Pesquise qualquer informação sobre o produto e sua prescrição
3. Veja todas as informações do produto
4. Sair
## Use Case Diagram
![use case](https://user-images.githubusercontent.com/38730778/212703312-55414fe9-00ba-4bed-9e07-d563418e7870.png)
*Use Case Diagram*
<br>

## Screen Shots
### Customer
![log](https://user-images.githubusercontent.com/38730778/212703316-c140da99-981e-427b-9477-fe4f061bf084.png)
*Login For Customer*
<br>
![Signup](https://user-images.githubusercontent.com/38730778/212703317-38974276-8918-4746-89b0-f6188fe255ed.png)
*Sign Up For Customer*
<br>

![h1](https://user-images.githubusercontent.com/38730778/212703310-c01ac1f3-498f-42dd-964f-d2f628d8d7e9.png)
![h2](https://user-images.githubusercontent.com/38730778/212703303-5a4974a6-fa4a-4815-a5dd-42ec8e63ab58.png)
*Home Page For Customer*
<br>


![search](https://user-images.githubusercontent.com/38730778/212703321-557a1a1a-13c4-4e3f-ac7a-42a37aafdfe4.png)
*Customer For Customer*
<br>


![cart](https://user-images.githubusercontent.com/38730778/212703324-16f46ab5-0460-4994-bb73-2c88071235c3.png)
*Cart For Customer*
<br>
![all order](https://user-images.githubusercontent.com/38730778/212703327-e8beb5a3-d7f2-4ed9-b2da-a629814c8669.png)
*Customer Profile*

### Admin

![login admin](https://user-images.githubusercontent.com/38730778/212703330-5de29026-2d09-4eb4-8e74-9d69d4952c3f.png)
*Login For Admin*
<br>
![admin home](https://user-images.githubusercontent.com/38730778/212703331-21dda697-2c3a-42d2-b1e3-68eeab121f3d.png)
*Admin Home*
<br>
![admin home 2](https://user-images.githubusercontent.com/38730778/212703336-15ff5b20-dea0-4bbb-84f3-3de019e0df7e.png)
*Admin Home*
<br>
![add product](https://user-images.githubusercontent.com/38730778/212703342-ca77ae89-8d16-4cf2-afcc-61bdcc0afc42.png)
*Add Product For Admin*
<br>
![manage product](https://user-images.githubusercontent.com/38730778/212703345-d45d7391-dad2-42e1-be0f-c08eec429198.png)
*Manage Product For Admin*
<br>
![order status](https://user-images.githubusercontent.com/38730778/212703340-c458de31-59fe-4864-a4a7-b96f26926758.png)
*Order Status For Admin*
<br>
![delivered product](https://user-images.githubusercontent.com/38730778/212703287-2f5290bf-6ae5-4da2-8c9f-31b54168d833.png)
*All Delivered Product*
<br>
![all user](https://user-images.githubusercontent.com/38730778/212703295-9e49def9-6eb5-4c14-b935-2e26e8de457e.png)
*All User List*
<br>
![sales report](https://user-images.githubusercontent.com/38730778/212703299-6dd270c1-7afc-4915-8cbf-df9bdc47d3b0.png)
*Sales Report*








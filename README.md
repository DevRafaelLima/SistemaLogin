Sistema de login criado usando o paradigma de programação POO (Programação Orientado a Objeto). O sistema é dividido nas seguinte classes: Conexao, Usuario e Login. 

O objeto da classe Conexao é responsável em realizar a conexao com o banco de dados, esse banco que é composto de apenas uma tabela (tb_usuarios) e contém as colunas e-mail e senha, sendo que o e-mail é chave primária.  

Já o objeto da classe Usuario é composto de seus atributos(email e senha) e seus métodos assessores  (get) e modificadores (set), nos métodos modificadores, precisamente no método setEmail fiz um tratamento de dados mais refinado, usando a função strtolower() para transformar o atributo enviado  pelo usuário em minusculo e a função trim() para que por venturar o usuário coloque espaços desnecessários,  eles sejam removidos. Já no método setSenha(), apenas criptografei o atributo enviado em MD5.

Pro fim, na classe Login, concentrou-se as regras de negócio relacionado ao login. Seus atributos são: conexao e user, sendo que esses atributos são setados no construtor, com conexao sendo um Objeto da classe Conexao e user sendo um objeto da classe Usuario. Seus métodos são: validaEmail, validadaSenha e login. Os métodos validaEmail e validaSenha verifica se estão cadastrado na base de dados o e-mail e a senha respectivamente, já o método login realiza as regras de negócio para realizar o login. Em todos os métodos há o cuidado em evitar SQLInejcson. 

Na página index.php há um formulário com inputs para o e-mail e para senha, os dados são enviado utilizando o método POST e enviando ao arquivo validaLogin.php. Nesse arquivo é tratado os dados enviados e estanciado os objetos das classes mencionadas acima. 

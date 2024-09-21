Para criar uma segunda aula básica de PHP, podemos focar em tópicos importantes como manipulação de dados de formulário, controle de fluxo (condicionais e laços), e introdução ao uso de funções. Aqui está um esboço completo da aula, que pode ser adaptado conforme a necessidade:

### Aula 2 - Manipulação de Formulários, Condicionais e Funções

#### **Objetivo da Aula:**
- Aprender como capturar e manipular dados de formulários HTML usando PHP.
- Compreender e aplicar estruturas de controle de fluxo, como `if`, `else`, `switch`, e laços de repetição (`for`, `while`).
- Introduzir o conceito de funções em PHP.

---

### **1. Manipulando Formulários em PHP**
#### **Exemplo de Formulário Simples**
Primeiro, vamos criar um formulário HTML para capturar informações do usuário:

```html
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário de Cadastro</title>
</head>
<body>
    <form method="POST" action="processa_form.php">
        Nome: <input type="text" name="nome"><br><br>
        E-mail: <input type="email" name="email"><br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
```

#### **Processando os Dados no PHP**
Agora, crie o arquivo `processa_form.php` para receber e exibir os dados enviados:

```php
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    if (!empty($nome) && !empty($email)) {
        echo "Nome: " . htmlspecialchars($nome) . "<br>";
        echo "E-mail: " . htmlspecialchars($email) . "<br>";
    } else {
        echo "Por favor, preencha todos os campos!";
    }
}
?>
```

#### **Explicação:**
- `$_POST[]`: É a variável superglobal usada para acessar os dados enviados via o método `POST`.
- `htmlspecialchars()`: Função usada para evitar ataques de XSS (Cross-Site Scripting) ao transformar caracteres especiais em HTML válido.
- `if ($_SERVER["REQUEST_METHOD"] == "POST")`: Verifica se o formulário foi enviado.

---

### **2. Controle de Fluxo: Condicionais**
#### **Uso do `if`, `else` e `else if`**

Vamos trabalhar com algumas condicionais para mostrar o uso básico dessas estruturas:

```php
<?php
$idade = 20;

if ($idade < 18) {
    echo "Menor de idade";
} elseif ($idade >= 18 && $idade < 60) {
    echo "Adulto";
} else {
    echo "Idoso";
}
?>
```

#### **Uso do `switch`**
O `switch` é uma alternativa para o `if-else` quando se lida com múltiplos casos:

```php
<?php
$cor = "azul";

switch ($cor) {
    case "vermelho":
        echo "Sua cor favorita é vermelho";
        break;
    case "azul":
        echo "Sua cor favorita é azul";
        break;
    default:
        echo "Sua cor favorita não está na lista";
        break;
}
?>
```

---

### **3. Laços de Repetição**
#### **Laço `for`**
O laço `for` é ótimo para repetições com contagem definida:

```php
<?php
for ($i = 1; $i <= 5; $i++) {
    echo "Número: $i <br>";
}
?>
```

#### **Laço `while`**
O `while` repete enquanto a condição for verdadeira:

```php
<?php
$contador = 0;

while ($contador < 5) {
    echo "Contador: $contador <br>";
    $contador++;
}
?>
```

---

### **4. Funções em PHP**
Funções ajudam a organizar e reutilizar o código.

#### **Exemplo de Função Simples**

```php
<?php
function saudacao($nome) {
    return "Olá, " . $nome . "!";
}

echo saudacao("Maria");
?>
```

#### **Funções com Parâmetros e Retorno**
As funções podem aceitar parâmetros e retornar valores:

```php
<?php
function soma($a, $b) {
    return $a + $b;
}

echo soma(5, 10); // Exibe 15
?>
```

---

### **5. Atividade Prática**
Peça aos alunos para criarem um formulário que calcule a soma de dois números fornecidos pelo usuário. O formulário deve processar os dados e exibir o resultado na mesma página ou em outra página PHP.

---

### **Resumo da Aula:**
- Manipulação de formulários com PHP.
- Estruturas de controle de fluxo: `if`, `else`, `switch`.
- Laços de repetição: `for`, `while`.
- Criação e uso de funções.

Essa estrutura cobre boa parte do básico de PHP e pode ser adaptada ou expandida conforme o progresso dos alunos.

Caso queira adicionar mais tópicos ou atividades específicas, só me avisar!# Esutdo-PHP

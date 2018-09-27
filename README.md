# Project Title

API para converter a placa com o formato mercosul para o formato normal de placa.

## Tabela de conversão

0 = A
1 = B
2 = C
3 = D
4 = E
5 = F
6 = G 
7 = H
8 = I
9 = J

### Exemplo de conversão

```
ACI6J67 >>> ACI6967
```

### Como usar

Inclua a class conversao.php no seu projeto e instancie a classe ConvercaoPlaca, em seguidade use o método converterPlaca passando a placa com formato mercosul. O retorno vai ser a placa convertida

```
include_once("conversao.php");
$obj = new ConvercaoPlaca();
$placaConvertida = $obj->converterPlaca("ACI6J67");
echo $placaConvertida;

// ACI6967
```

## Authors

* **Higor Roberto** - *Initial work* - [HigorSapo](https://github.com/HigorSapo)
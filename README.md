# Arquivo-CSV Aula 07
- Arquvios CSV - comma-separate (Valores separados por vírgula)
    - Criar
    - Ler

## Criar CSV

- fputcsv(arquivo, dados, separador) : dados devem ser um array. Exemplo: 
```php
foreach($pessoas as $uma_pessoa){
    fputcsv($arquivo,$uma_pessoa,";");    
}
```
## Ler CSV
 

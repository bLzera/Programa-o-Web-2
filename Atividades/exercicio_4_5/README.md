# how to build

para buildar o projeto, basta acessar a pasta ./exercicios/ e buildar a imagem do Dockerfile.

também é possível copiar o script abaixo para buildar e iniciar o container rapidamente na porta 8000.

```bash
cd exercicios/
docker build -t exercicio .
docker run -p 8000:8000 exercicio
```

após isso, acesse localhost:8000.
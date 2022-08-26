# GIL Authenticator
Software para geração de senhas randomicas para o sistema GIL
 ## Endpoint responsável por pegar as informações de login dos usuários.
 Endpoint:{base_url}/api/login </br>
 Tipo de Requisição: POST
 Parâmetro|Obrigatório|Escopo|Observação|
 ----|-----|----|------|
 Email|SIM|Serão autorizados emails com dominio em @ubersistemas e @upgestao <br/>
 Senha|SIM|Senha criada pelo usuário para entrar no sistema

 >Retorno

 Codigo|Resposta|
 ----|----|
200| 
	"access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvYXBpXC9sb2dpbiIsImlhdCI6MTY2MTM2MTYwNywiZXhwIjoxNjYxMzY1MjA3LCJuYmYiOjE2NjEzNjE2MDcsImp0aSI6InI2ekRSdUJ5b1Uxdzc3anQiLCJzdWIiOjEsInBydiI6Ijg3ZTBhZjFlZjlmZDE1ODEyZmRlYzk3MTUzYTE0ZTBiMDQ3NTQ2YWEifQ.MVhs3rp083HSvxPtRbLjyf_IhcX4nx14PzwB-275kjY",
	"token_type": "bearer",
	"expires_in": 3600

401
	
    "error": "Unauthorized"


  ## Endpoint responsável por deslogar o usuario do sistema.
 Endpoint:{base_url}/api/logout </br>
 Tipo de Requisição: POST
  >Retorno

 Codigo|Resposta|
 ----|----|
200| 
	"message": "Successfully logged out"

401
	
    "error": "Unauthorized"


 

  ## Endpoint responsável por gerar uma senha aleatória a cada dia é mostrar para o usuário.
 Endpoint:{base_url}/api/get-pass </br>
 Tipo de Requisição: GET
  >Retorno

 Codigo|Resposta|
 ----|----|
200| 
	"password": ""
    "error": true




 
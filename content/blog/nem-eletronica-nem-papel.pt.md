---
title: "Nem Eletrônica, Nem Papel"
date: 2022-07-21T16:09:42-03:00
author: [""]
draft: false
cover: "vote-661888_1280"
cover-from-title: "Pixabay"
cover-from-site: "https://pixabay.com/photos/vote-sign-voting-choice-election-661888/"
slug: ""
description: "Por que o sistema eleitoral não deve ser confiado"
tags: [política, software]
images: [""]
keywords: [""]
---

Um debate que está surgindo nos últimos dias é sobre a urna eletrônica.
Uns acham que o debate veio para "deslegitimar" os resultados da eleição.
Outros que é só uma forma de "atacar as instituições democráticas".
E outros ainda ficam atacando uns aos outros por causa de pontos colocados em seus argumentos com xingamentos gratuitos.

Afinal, qual é a grande questão do voto ser eletrônico?

## Digitalização da informação
É fato: hoje é quase impossível encontrar um lugar que não tenha algum tipo de registro eletrônico no Brasil.
Seu CPF está registrado num banco de dados guardado pelo Governo Federal.
Sua carteira de identidade pode ser vista na intranet por boa parte dos funcionários públicos da nação.
E sim, a digitalização da informação não a torna inutilizável ou simplesmente inexistente.
Aliás, os meios digitais às vezes são um meio mais seguro de se guardar informações por causa de sua composição ser mais rígida que um papel.

Além disso, a digitalização também acelera o processo de registro.
Antes, para ter uma planilha, eu teria que ter o papel, a caneta, criar a tabela manualmente e colocar os dados no papel, fazendo os cálculos na mão ou numa calculadora.
Hoje dá pra fazer num programa de computador e clicar em "Salvar" que a planilha está praticamente pronta.
Ou o livro, que antes deveria ser escrito à mão ou -- caso você tivesse mais condições -- numa máquina de escrever e hoje é possível escrever um livro inteiro no seu celular.
A máquina foi criada justamente pra acelerar o processo dos registros.

Sem contar na biblioteca gigantesca que é possível encontrar hoje por meios digitais como o [archive.org](https://archive.org), com mais de 35 milhões de textos disponíveis para download ou empréstimo dos assuntos mais diversos.
Os registros fotográficos também estão nesse bolo, já que hoje é muito mais fácil registrar os momentos com uma câmera que já vem acoplada ao celular.
Ora, este mesmo site onde está este blog está gravado de forma digital em locais eletrônicos (computador pessoal, nuvem e servidor web).

Sim, a digitalização e os processos eletrônicos facilitam muitos procedimentos que antes seriam realizados por pessoas com mais tempo (e dinheiro) livre do que outras.
Porém existe um pequeno caviar.

## Informação VS Conteúdo
Ok, você pode achar que conteúdo e informação são a mesma coisa.
E eu irei dizer para você que não só não são a mesma coisa, como conteúdos diferentes podem gerar a mesma informação e informações diferentes podem gerar o mesmo conteúdo.
Eu posso usar este site como exemplo.

Eu escrevo o *conteúdo* deste site usando um formato chamado **Markdown**.
Este conteúdo é processado por um programa (no caso deste site, Hugo) que gera a página que você está vendo diante dos seus olhos.
A página está no formato HTML e o seu navegador processa este conteúdo e te apresenta utilizando folhas de estilo em cascata (**C**ascading **S**tyle **S**heets) para dar um estilo visual próprio para a página.
E, caso você tenha clicado no botão do pincel ali embaixo, um código JavaScript foi interpretado por seu browser para mudar o tema deste site e salvá-lo na sua máquina para que toda vez que você entrar em uma página não precise clicar novamente para ficar com o tema de sua escolha.

Basicamente, o conteúdo é um texto formatado em um estilo que é processado por um programa para ser criado um arquivo que é por sua vez renderizado por um outro programa para que você possa ver essas informações.
E no final tudo isto em essência não passam de 0s e 1s sendo processados por um sistema operacional e etc (não vou ficar explicando o funcionamento de computadores modernos de silício porque é um tema muito longo).

A informação que você recebe é um texto que transmite uma ideia, uma definição, um ensaio.
O conteúdo original é um arquivo de texto.
O conteúdo mais original ainda é um conjunto de 0s e 1s bem ordenados.
Estes 0s e 1s ordenados geram o texto e o programa que interpreta o texto.
Enfim, tudo isso pra dizer que *a informação é o conteúdo processado*.
E é exatamente nesse processamento da informação que deveria morar a discussão.

## O processamento
Se você clicar duas vezes em um arquivo no formato .jpg no seu computador o sistema operacional entende que você quer abrir uma imagem e, portanto, usará um programa próprio para interpretar essa imagem.
Se você utilizar uma ferramenta de processamento de texto para ver a imagem, verá algo bem diferente do que no processador de imagem.
E se abrir num visualizador hexadecimal terá ainda um resultado diferente.

O conteúdo é o mesmo.
A apresentação dele não é.
Cada programa interpreta de uma forma e "imprime" pra você do jeito que interpretou.

Agora digamos que no programa para ver a imagem há uma instrução para que toda vez que você abra uma imagem ele lê a imagem e envia para um banco de dados em um servidor desconhecido.
E então você abre uma imagem do seu cartão de crédito.
Logo, a imagem do seu cartão de crédito será enviada para esse servidor, e você não faz a menor ideia de como essa imagem será usada e por quem ela será usada.

Ainda um outro caso: o programa que você usa interpreta o verde como vermelho, o vermelho como azul e o azul como verde.
Se for uma foto de alguém que você conhece você logo vai perceber que há algo errado -- afinal, pessoas geralmente não são azuis.
Porém se for uma imagem de algo que você não tem conhecimento -- como uma criatura estranha das profundezas do oceano -- você nem vai perceber a diferença.

Veja que em todos estes casos o conteúdo a ser processado é o mesmo, mas o processamento muda a forma como ele é apresentado -- e até mesmo o comportamento da máquina na qual está sendo processado.
E é aí mesmo que mora o problema.

## O problema do *input* gerando um *output* diferente

Uma coisa é fato: as urnas eletrônicas são uma incógnita.
Somente pessoas selecionadas pelo Tribunal Superior Eleitoral têm acesso ao código-fonte (provavelmente as que escrevem o código), e outras poucas selecionadas podem auditar a fraudabilidade do processo.
E nós não sabemos até onde o processo pode ser auditável, pois nisso também o TSE exige confidencialidade.
A única informação que recebemos é "as urnas são seguras", sem ao menos dizer como o voto é processado nela.
Fora que não sabemos nem em que nível a auditoria é processada: se é a nível de processamento do código ou apenas a nível de invasão ao sistema ou à máquina.

Agora eu vou mostrar três possíveis processos rodando e usando os mesmos *inputs* de usuário (`1`, `2`, `3`) e os candidatos (`A`, `B`, `C`) para calcular quantos votos cada candidato teve.

<div class="code">
## Programa 1

- Se o input for igual a 1, adiciona 1 ao valor de A.  

- Se o input for igual a 2, adiciona 1 ao valor de B.  

- Se o input for igual a 3, adiciona 1 ao valor de C.  

- Em outros casos de input, adiciona 1 ao valor de votos inválidos.
</div>

<div class="code">
## Programa 2

- Se o input for igual a 1, adiciona 1 ao valor de A.   

- Se o input for igual a 2, adiciona 1 ao valor de B.  

- Se o input for igual a 3, adiciona 1 ao valor de C.  

- Em outros casos de input, escolhe aleatoriamente entre adicionar 1 ao valor de votos inválidos e adicionar 1 ao valor de C com 73% de chance de enviar para a variável C.

</div>

<div class="code">
## Programa 3

- Se o input for igual a 1, tem 95% de chance de adicionar 1 ao valor de A e 5% de chance de adicionar 1 ao valor de C.

- Se o input for igual a 2, tem 83% de chance de adicionar 1 ao valor de B, 2% de chance de adicionar 1 ao valor de A e 15% de chance de adicionar 1 ao valor de C.

- Se o input for igual a 3, adiciona 1 ao valor de C.

- Em outros casos de input, tem 3% de chance de adicionar 1 ao valor de A, 3% de chance de adicionar ao valor de B, 4% de chance de adicionar 1 ao valor de C e 90% de chance de adicionar 1 ao valor de votos inválidos.

</div>

O primeiro programa está correto nos cálculos.
Os dois últimos programas dão uma leve vantagem para o candidato C.
Pense que qualquer um dos programas pode estar rodando na máquina, e nós não sabemos qual deles é.
Agora pense: qual seria a melhor alternativa para constatar que a máquina está correta?
Tendo uma prova externa do registro do *input*.
Ou o famoso "*input* impresso", que nada mais é do que um comprovante para o usuário de que *aquele foi o input dele na máquina*.
E mesmo que eu tente sabotar a máquina fazendo com que imprima o *input* correto e conte o errado, com o comprovante é possível que haja a recontagem, a auditoria ou até mesmo a comprovação de que a máquina não está fazendo a contagem de forma indevida.

Vale lembrar: eu ainda não estou falando de *segurança* da máquina.
Ninguém a invadiu.
Apenas pode ter sido programada para registrar os *inputs* de maneira injusta.

"Mas Mateus, eles não fariam algo do tipo".
E como você sabe?
Você chegou a ver o código-fonte?
Compartilharam com você como o código funciona?
E se compartilharam, como *eu* posso ter certeza?
Terei que confiar na sua palavra?
Por que eu deveria confiar em você?
Você confiaria 106% em mim?
Mesmo se eu demonstrasse afinidade por um candidato?

Creio que esse primeiro problema é óbvio: é a trapaça na fase da preparação.
O programa já está adulterado, e a única forma de termos uma contraprova é termos um registro *fora* da máquina que dê a informação sobre o *input* na máquina.
Ou, em termos mais fáceis de entender, o comprovante impresso.

E o comprovante impresso não é algo de outro mundo.
Se um sistema de pagamentos tiver uma falha no processamento de uma venda, o comprovante impresso é a forma que o status da venda será contestado.
E vejam: se o sistema que foi criado para não falhar pode falhar, quanto mais pode um sistema que tem a possibilidade de ter sido criado para falhar.

## O problema da "inviolabilidade"

Nada é inviolável.
Como cristão, aliás, creio que a única coisa inviolável é a palavra divina.
De resto, absolutamente tudo é violável.
Eu posso ser atingido por um raio.
Você pode ser assaltado.
Um amigo pode ser atropelado.
Um parente pode sofrer um acidente de trabalho.

Nada nem ninguém está isento de sofrer uma violação.
E isto não deveria ser segredo para ninguém, e nem mesmo se tornar objeto de discussão.
Até mesmo o local mais seguro do mundo pode ser violado.
Não estou dizendo que será, apenas que há a possibilidade de ocorrer o evento.

Qualquer pessoa que diga que um sistema é inviolável está, no mínimo, mentindo.
No máximo está agindo de má fé, e má fé no Brasil é um ato fraudulento.
"Mas Mateus, se o sistema não foi invadido até agora ele é seguro!".
Sua casa pode ser segura, mas você mesmo assim a tranca, correto?
E outra: o que torna uma casa mais segura que a outra?
Já soube de um caso de uma casa de um homem bem abastado, com câmeras de segurança, alarme e um muro forte, que foi invadida por bandidos.
Ora, se a casa é segura, como invadiram?

A segurança não está na inviolabilidade, mas na ação caso haja a tentativa de violação.
Câmeras de segurança não evitam completamente o invasor, mas permitem que, ao verificar *quem* invadiu, o encontrem em punam de acordo com a legislação vigente.
O alarme não torna o local livre de qualquer tipo de invasão, mas notifica a quem está próximo e à empresa de segurança que houve uma invasão.
É a mesma história do colete à prova de balas: mesmo usando, alguém ainda pode atirar em você.

E é exatamente por isso que medidas de segurança são tomadas: para que, na tentativa de violar a segurança, algo seja feito a respeito sem que haja prejuízo para a parte violada.

Agora se você acha que um local está perfeitamente seguro, nada fará para protegê-lo.
É o grande problema do argumento "as urnas eletrônicas são seguras e invioláveis": se é assim, nada será feito para protegê-las de ataques.
E, como vimos, tudo é violável, e medidas de segurança são tomadas não para que a tentativa não exista, mas para que ao existir possa ser feito algo a respeito.

"Mas e os votos de papel, não eram violáveis?"
Sim.
É por isso que a questão não é o *tipo do voto* - eletrônico, em papel, desenhado, feito num formulário etc. -, mas sim a contraprova.
Independentemente da forma como o voto for registrado, a contraprova é a única forma de garantir que há uma alternativa caso todas as medidas de segurança adotadas no processo falhem em protegê-lo de uma violação.

"Mas a Abin e outras instituições de inteligência dizem que é seguro".
E é aí, amigo, que vamos para o próximo tópico.

## O problema da confiança nas instituições públicas

Quem teria mais condições de mentir sobre um processo, um dado ou uma ação realizada?
Quem tem poder legal de confirmar a veracidade e de tornar criminoso todo aquele que contrariar sua afirmação.

Governos no mundo inteiro mentem.
Quanto a isso, não é novidade para ninguém.
Porém alguns mentem mais do que outros.
E geralmente os que mais mentem são aqueles que *exigem* que você acredite neles.
Afinal, por que eu devo exigir que você confie em mim se eu estou dizendo a verdade?
Quem perde caso não confie é você, e não eu.

E às vezes as autoridades não "mentem" de maneira voluntária, mas porque também foram enganadas.
Lembro da vez em que fui abordado por uma pessoa de alta posição onde eu estava me dizendo que era coisa da minha cabeça que uma determinada pessoa A falava mal de mim para outras pessoas.
Eu achei estranho, pois várias pessoas me informaram que ela falou mal de mim *na frente delas*, e eu teria que desconfiar de todas essas pessoas para acreditar na palavra da pessoa de autoridade.
Sem intenção de repassar uma mentira, essa autoridade acabou repassando.

E as nossas autoridades estão *exigindo* que confiemos nelas.
Não estão nos dando provas, não estão apresentando relatórios, apenas dizendo "acredite no que dizemos ou diremos que você quer cometer crimes e deve ser perseguido".
Não confiar nas urnas é "atacar a democracia".
Tudo isso só porque o Bolsonaro disse que as urnas não são seguras (Paula Schmitt fala desse fenômeno muito bem [neste artigo](https://www.poder360.com.br/opiniao/o-toxoplasma-gondii-o-controle-das-massas-e-o-suicidio-coletivo-escreve-paula-schmitt/)).

Não, eu não estou defendendo Bolsonaro.
Na realidade, estou falando para *desconfiarmos* dele assim como devemos desconfiar de *toda instituição pública*.
Confiar 100% em um órgão público é uma de duas opções: burrice ou propina.
*Burrice* porque é impossível que não se desconfie de quem pode mentir e sair ileso por isso.
*Propina* porque, logicamente, sabe-se que a corrupção não é algo muito distante dos órgãos públicos brasileiros.

E outra: a quem interessa o cidadão não ter a prova para que, caso desconfie do processo eleitoral, possa exigir recontagem e saber que seu direito de escolha foi respeitado?
A quem quer respeitar a escolha do cidadão brasileiro que não é.

Também não estou falando que não é possível *apoiar* uma ou outra posição.
Como eu falei, a questão não é a urna ser inviolável, eletrônica, de papel etc. mas o receio eterno de que haja uma contraprova de que o sistema funciona da maneira como deveria funcionar.
Teve gente que até disse que o pedido pelo comprovante de papel pós-votação era o pedido pela volta do voto em papel.
Há quem queira o voto em papel novamente? Sim.
Há quem queira manter o voto eletrônico? Também.
A questão não é o *meio* pelo qual se vota, mas a *transparência* no processo.

Aliás, aqui vai mais um questionamento: por que no Brasil o voto é obrigatório?
Quer dizer, é para ser um "direito", mas você paga multa caso não vá votar.
Vote em branco ou nulo, mas **vote**.
Quer dizer, nem em branco nem nulo, que agora você se abster de fazer um pacto com políticos é fazer um pacto com o próprio demônio na cabeça de muita gente.
E uma empresa que faz hambúrguer ainda tem a audácia de "conscientizar" a população dizendo que "se você não votou, não pode reclamar do que recebe".
Ora, se eu confio que a hamburgueria vai me dar algo bom e ela me dá um hambúrguer com fezes, barata e pedaços de unha no meio, *eu vou reclamar* pois eu paguei pelo hambúrguer *e* confiei na hamburgueria.
Assim é com os órgãos públicos: se quem está ali é ruim, eu tenho o direito de reclamar para que ajustem pois *é um direito meu ter um serviço adequado pois eu pago impostos*.

## Conclusão?

Fique claro que eu *não estou dizendo que não existe um nível de segurança no sistema eleitoral brasileiro*.
Também não estou afirmando que a fraude é pensada ou que acontece toda vez que há eleições.
Estou apenas colocando na mesa alguns fatos que não podem ser colocados de lado na discussão.
Além de que, se o órgão responsável pelas eleições já demonstrou interesse por um lado e desprezo pelo outro, como você vai confiar que eles serão justos?
É como confiar que o gestor não teve preferência para promover a gostosa que transou com ele do que a mulher recatada que demonstra ter capacidade para lidar com as responsabilidades do cargo só porque ele disse, sem apresentar como foi realizado o processo seletivo.

Questionar quem exige confiança sem provar que é confiável é o mínimo que deveríamos fazer.
Colocar contra a parede, deixar que responda com transparência como ocorre o processo.
Só assim podemos, de fato, dizer que as instituições públicas estão funcionando perfeitamente.

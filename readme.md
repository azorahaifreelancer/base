# Nuno Santos - Live work Every Day!!

![Ego](./screenshot.jpg)

## Templates

| THEME  | LINK § URL |
| ------ | ---------- |
| 001    | [http://8848-001-preview.wp.dev.egorealestate.com][style.less] |
| 002    | [http://8848-002-preview.wp.dev.egorealestate.com][style.less] |
| 003    | [http://8848-003-preview.wp.dev.egorealestate.com][style.less] |
| 004    | [http://8848-004-preview.wp.dev.egorealestate.com][style.less] |
| 005    | [http://8848-005-preview.wp.dev.egorealestate.com][style.less] |
| 006    | [http://8848-006-preview.wp.dev.egorealestate.com][style.less] |
| 007    | [http://8848-007-preview.wp.dev.egorealestate.com][style.less] |
| 008    | [http://8848-008-preview.wp.dev.egorealestate.com][style.less] |
| 009    | [http://8848-009-preview.wp.dev.egorealestate.com][style.less] |
| 010    | [http://8848-010-preview.wp.dev.egorealestate.com][style.less] |
| 011    | [http://8848-011-preview.wp.dev.egorealestate.com][style.less] |
| 012    | [http://8848-012-preview.wp.dev.egorealestate.com][style.less] |
| 013    | [http://8848-013-preview.wp.dev.egorealestate.com][style.less] |
| 014    | [http://8848-014-preview.wp.dev.egorealestate.com][style.less] |
| 015    | [http://8848-015-preview.wp.dev.egorealestate.com][style.less] |
| 016    | [http://8848-016-preview.wp.dev.egorealestate.com][style.less] |
| 017    | [http://8848-017-preview.wp.dev.egorealestate.com][style.less] |
| 018    | [http://8848-018-preview.wp.dev.egorealestate.com][style.less + imovel.detalhe.php] |
| 019    | [http://8848-019-preview.wp.dev.egorealestate.com][style.less] |
-		-		-		--		-		-		--		-		-		--		-		-		--		-		-		--		-
| 020    | [http://8848-020-preview.wp.dev.egorealestate.com][style.less] |



## FeatureNewDataProtection

1.  Proteção de Dados [](https:///))
2.  Termos e condições.
3.  Politica de Privacidade


##CSS
```sh
.boxChecks {
	//background: #000 !important;
	text-align: left !important;
	a{
		&:hover {
			color: @cor-principal !important;
		}
	}
}

.dataprotection {
  width: 100% !important;
	a{
		&:hover {
			color: @cor-principal !important;
		}
	}
}
```
##efects
```sh

.transition {
    -webkit-transition: color .75s ease 0s;
    -moz-transition: color .75s ease 0s;
    -ms-transition: color .75s ease 0s;
    -o-transition: color .75s ease 0s;
    transition: color .75s ease 0s;
}
```

/* protecao de dados */
.dataprotection,
.FeatureNewDataProtection {
	a{
		position: relative;
		z-index: 9;
		&:hover {
			color: @cor-principal !important;
			transition: color .75s ease 0s !important;
		}
	}
}
.boxChecks {
  z-index: 999 !important;
  a:hover {
    color: @cor-principal !important;
    transition: color .75s ease 0s !important;
  }
}


##PHP + JS
-imóvel detalhe / empreendimento detalhe.
-função para validar se têm a Feature para estilizar poutros elementos fora da FeatureNewDataProtection.

```sh
<? if(empty(Plugin::GetId("FeatureNewDataProtection")) === false ){ ?>  
<script>
$(document).ready( function() {    
 /* trocar os elementos sitio */
    $(".pluginListItem[class*='ContactForm']").addClass("Protdados");
});
</script>
<? }?>
```


# Pesquisar

[![mysql_real_escape_string ](https://)


Política de Privacidade
Hotel Group
A. PARTE GERAL
1.1. RECOLHA E TRATAMENTO DE DADOS DO UTILIZADOR

No âmbito da disponibilização do website alojado em www.pestana.com (“Site”), da celebração de quaisquer contratos (designadamente serviços hoteleiros, vouchers, tratamentos e produtos Spa), do fornecimento de informações, conteúdos, incluindo newsletter, áreas de login, click2call ou quaisquer contactos telefónicos cartões de cliente e de fidelização bem como membership (em conjunto, os “Serviços”) aos seus utilizadores (“Utilizador”) e a outras entidades que com ele se relacionem, as entidade integrantes do Grupo Pestana aqui representadas pela Pestana Management - Serviços de Gestão S.A., sociedade anónima com sede na Rua Jau, n.º 54, 1300 - 314 Lisboa, registada na Conservatória do Registo Comercial de Lisboa sob o número único de matrícula e de pessoa coletiva 511230397 (doravante “Pestana”) pode requisitar ao Utilizador que disponibilize dados pessoais, isto é, informações fornecidas pelo Utilizador que permitam ao Pestana identificá-lo e/ou contatá-lo (“Dados Pessoais”).

Por regra, os Dados Pessoais são requisitados quando o Utilizador se regista no Site, solicita um contacto e/ou envio de newsletters, subscreve um determinado serviço, presta ou solicita uma informação, adquire um produto ou estabelece uma relação contratual com o Pestana.

Os Dados Pessoais recolhidos e tratados consistem essencialmente em informação relativa ao nome, género, data de nascimento, telefone, telemóvel, email, morada, número de identificação fiscal, dados do cartão de crédito (recolhidos apenas para efeitos de faturação), embora possam vir a ser recolhidos outros Dados Pessoais que possam ser necessários ou convenientes para a prestação ou cobrança de Serviços por parte do Pestana.

Depois da recolha dos Dados Pessoais, o Pestana presta ao Utilizador informações detalhadas acerca da natureza dos dados recolhidos e acerca da finalidade e do tratamento que será realizado relativamente aos Dados Pessoais, e, bem assim, as informações mencionadas na cláusula 8.

O Pestana também recolhe e trata informação sobre as características do dispositivo do seu hardware e as características de browser/software assim como informação sobre as páginas visitadas pelo Utilizador dentro do Site. Esta informação pode incluir o seu tipo de browser, o nome de domínio, os tempos de acesso e as hiperligações através das quais o Utilizador acedeu ao Site (“Informação de Usabilidade”). Utilizamos esta informação apenas para melhorar a qualidade da sua visita ao nosso Site.

A Informação de Usabilidade e os Dados Pessoais são designados na presente Política de Privacidade por “Dados do Utilizador”.

Para efeitos da presente Política de Privacidade entende-se por relação contratual todo e qualquer contrato estabelecido entre o Pestana e as entidades que com ele se relacionem, independentemente do respectivo objecto.

1.2. ENTIDADES SUBCONTRATADAS
No âmbito do tratamento dos Dados do Utilizador, o Pestana recorre ou poderá recorrer a entidades terceiras, por si subcontratadas, para, em nome do Pestana, e de acordo com as instruções dadas por esta, procederem ao tratamento dos Dados do Utilizador, de acordo com a lei e da presente Política de Privacidade.

Estas entidades subcontratadas não poderão transmitir os Dados do Utilizador a outras entidades sem que o Pestana tenha dado, previamente e por escrito, autorização para tal, estando também impedidas de contratar outras entidades sem autorização prévia do Pestana.

O Pestana assume o compromisso de subcontratar apenas entidades que ofereçam a máxima segurança na execução das medidas técnicas e organizativas adequadas, de forma a garantir a defesa dos direitos do Utilizador. Todas as entidades subcontratadas pelo Pestana ficam vinculadas a esta última através de um contrato escrito no qual são regulados, nomeadamente, o objeto e a duração do tratamento, a natureza e finalidade do tratamento, o tipo de dados pessoais, as categorias dos titulares dos dados e os direitos e obrigações das partes.

Depois da recolha dos dados pessoais, o Pestana presta ao Utilizador informações acerca das categorias de entidades subcontratadas que, no caso concreto, possam efetuar tratamentos de dados em nome do Pestana.

1.3. CANAIS DE RECOLHA DOS DADOS
O Pestana pode recolher dados de forma direta (i.e., diretamente junto do Utilizador) ou de forma indireta (i.e., através de entidades parceiras ou terceiros). A recolha pode ser feita através dos seguintes canais:

Recolha direta: presencialmente, por telefone, por e-mail e através do Site;

Recolha indireta: através de parceiros ou empresas do grupo e entidades oficiais.
2. PRINCÍPIOS GERAIS APLICÁVEIS AO TRATAMENTO DE DADOS DO UTILIZADOR
Em termos de princípios gerais relativos ao tratamento de dados pessoais, o Pestana compromete-se a assegurar que os Dados do Utilizador por si tratados são: 

Objeto de um tratamento de acordo com a lei, leal e transparente em relação ao Utilizador; 

Recolhidos para finalidades determinadas, objetivas e legítimas, não sendo tratados posteriormente de uma forma contrária com essas finalidades; 

Adequados, justificados e limitados ao que é necessário relativamente às finalidades para as quais são tratados; 

Exatos e atualizados sempre que necessário, sendo providenciadas todas as medidas necessárias para que os dados inexatos, tendo em conta as finalidades para que são tratados, sejam apagados ou corrigidos sem demora; 

Conservados de uma forma que permite a identificação do Utilizador apenas durante o período necessário para as finalidades para as quais os dados são tratados; 

Tratados de uma forma que garante a sua segurança, incluindo a proteção contra o seu tratamento não autorizado ou ilegal e contra a sua perda, destruição ou dano imprevisto, sendo adotadas as medidas técnicas ou organizativas adequadas.

Os tratamentos de dados efetuados pelo Pestana são permitidos e legais quando se verifique pelo menos uma das seguintes situações: 

O Utilizador tiver dado sem qualquer dúvida o seu consentimento para o tratamento dos Dados do Utilizador para uma ou mais finalidades específicas; 

O tratamento for necessário para a concretização de um contrato no qual o Utilizador é parte, ou para procedimentos pré-contratuais a pedido do Utilizador; 

O tratamento for necessário para o cumprimento de uma obrigação jurídica a que o Pestana esteja sujeita; 

O tratamento for necessário para a defesa de interesses fundamentais do Utilizador ou de outra pessoa individual; 

O tratamento for necessário para efeito dos interesses legais prosseguidos pelo Pestana ou por terceiros (exceto se prevalecerem os interesses ou direitos e liberdades fundamentais do Utilizador que exijam a proteção dos dados pessoais).

O Pestana compromete-se a assegurar que o tratamento dos Dados do Utilizador apenas é feito nas condições acima enumeradas e com respeito pelos princípios acima mencionados.

Quando o tratamento dos Dados do Utilizador for realizado pelo Pestana com base no acordo do Utilizador, este tem o direito de retirar o seu consentimento a qualquer momento. A retirada do consentimento, todavia, não compromete a legalidade do tratamento efetuado pelo Pestana com base no consentimento previamente dado pelo Utilizador.

O período de tempo durante o qual os dados são armazenados e conservados varia de acordo com a finalidade para a qual a informação é tratada.

Efetivamente, existem exigências legais que obrigam a conservar os dados por um período de tempo mínimo. Assim, e sempre que não exista uma obrigação legal especifica, os dados serão armazenados e conservados apenas pelo período mínimo necessário para as finalidades que motivaram a sua recolha ou o seu posterior tratamento, que no seu termo os mesmos serão eliminados.

3. UTILIZAÇÃO E FINALIDADES DO TRATAMENTO DE DADOS DO UTILIZADOR
Em termos gerais, o Pestana utiliza os Dados do Utilizador com as seguintes finalidades:

• Prestação de serviços hoteleiros e serviços associados (restaurantes, bares, Spa, etc.);

• Gestão de contatos com o Utilizador;

• Faturação e cobrança ao Utilizador;

• Registo do Utilizador no Site;

• Informar o Utilizador, que o tenha solicitado, de novos produtos e serviços disponibilizados no Site e/ou nas unidades hoteleiras, ofertas e campanhas especiais, informações atualizadas sobre a atividade do Pestana e, de um modo geral, para efeitos de marketing do Pestana e das suas unidades hoteleiras, através de qualquer meio de comunicação, incluindo suporte eletrónico;

• Permitir o acesso a áreas restritas do Site, de acordo com termos previamente estabelecidos;

• Garantir que o Site vai ao encontro das necessidades do Utilizador, através do desenvolvimento e publicação de conteúdos o mais adaptados possível às solicitações e ao tipo de Utilizador, da melhoria das capacidades de pesquisa e funcionalidades do Site e da obtenção de informação associada ou estatística relativamente ao perfil tipo do Utilizador (análise de perfis de consumo);

• Prestação de Serviços, e outros serviços, tais como newsletters, inquéritos de opinião, ou outras informações ou produtos requisitados ou comprados pelo Utilizador;

• Gravação das chamadas telefónicas que vierem a ser realizadas no âmbito da solicitação ou fornecimento de informações sobre reservas, vouchers e outros produtos ou serviços e suas condições comerciais e de utilização assim como do estabelecimento de qualquer relação contratual , quer na fase de formação do contrato, quer durante a sua duração;

• O Pestana pode combinar Informação de Usabilidade com informação demográfica anónima para efeitos de pesquisa, e pode usar o resultado dessa combinação para fornecer conteúdos mais relevantes no Site. Em determinadas áreas restritas do Site, o Pestana pode combinar Dados Pessoais com Informação de Usabilidade para fornecer ao Utilizador um conteúdo mais personalizado.

Os Dados do Utilizador recolhidos pelo Pestana não são partilhados com terceiros sem consentimento do Utilizador, com exceção das situações referidas no parágrafo a seguir. No entanto, no caso de o Utilizador contratar junto da Pestana serviços que sejam prestados por outras entidades responsáveis pelo tratamento de dados pessoais, os Dados do Utilizador poderão ser consultados ou acedidos por essas entidades, na medida em que tal seja necessário à prestação dos referidos serviços.

Nos termos legais aplicáveis, o Pestana poderá transmitir ou comunicar os Dados do Utilizador a outras entidades no caso de essa transmissão ou comunicação ser necessária para a execução do contrato estabelecido entre o Utilizador e o Pestana, ou para diligências pré-contratuais a pedido do Utilizador, no caso de ser necessária para o cumprimento de uma obrigação jurídica a que o Pestana esteja sujeita ou no caso de ser necessária para a obtenção dos interesses legítimos do Pestana ou de terceiro. Ocorrendo uma transmissão de Dados do Utilizador a terceiros, serão desenvolvidos os esforços considerados razoáveis para que o transmissário utilize os Dados do Utilizador transmitidos de forma adequada com esta Política de Privacidade.

4. MEDIDAS TÉCNICAS, ORGANIZATIVAS E DE SEGURANÇA IMPLEMENTADAS
Para garantir a segurança dos Dados do Utilizador e a máxima confidencialidade, o Pestana trata a informação que nos forneceu de forma absolutamente confidencial, de acordo com as suas políticas e procedimentos internos de segurança e confidencialidade, os quais são atualizados periodicamente de acordo as necessidades, assim como com os termos e condições legalmente previstos.

Em função da natureza, do âmbito, do contexto e das finalidades do tratamento dos dados, bem como dos riscos decorrentes do tratamento para os direitos e liberdades do Utilizador, o Pestana compromete-se a aplicar, tanto no momento de definição dos meios de tratamento como no momento do próprio tratamento, as medidas técnicas e organizativas necessárias e adequadas à proteção dos Dados do Utilizador e ao cumprimento das imposições legais.

Compromete-se ainda a assegurar que, por defeito, só sejam tratados os dados que forem necessários para cada finalidade específica do tratamento e que esses dados não sejam disponibilizados sem intervenção humana a um número indeterminado de pessoas.

A comunicação entre o dispositivo do utilizador e o Site Pestana é efectuado através de canais seguros e de comunicações que utilizam o protocolo HTTPS e o padrão de segurança SSL. Ainda assim, em termos de medidas gerais, o Pestana adota as seguintes ;

Auditorias regulares com vista a identificar a competência das medidas técnicas e organizativas implementadas; 

Sensibilização e formação do pessoal envolvido nas operações de tratamento de dados; 

Pseudonimização e codificação de dados pessoais; 

Mecanismos capazes de assegurar a confidencialidade, disponibilidade e resiliência permanentes dos sistemas de informação; 

Mecanismos que asseguram o restabelecimento dos sistemas de informação e o acesso aos dados pessoais de forma célere no caso de um incidente físico ou técnico;

5. TRANSFERÊNCIA DE DADOS PARA FORA DA UNIÃO EUROPEIA
Os dados pessoais recolhidos e utilizados pelo Pestana não são disponibilizados a terceiros estabelecidos fora da União Europeia. Se, no futuro, esta transferência acontecer pelas razões acima referidas, o Pestana compromete-se a assegurar que a transferência obedece às disposições legais aplicáveis, nomeadamente quanto à determinação da adequação de tal país no que respeita a proteção de dados e aos requisitos aplicáveis a tais transferências.

6. UTILIZAÇÃO DE COOKIES
Quando visitar o nosso Site, será requerido o seu consentimento para a criação e gravação no seu computador de um ficheiro de texto (Cookie). Este ficheiro vai permitir-lhe uma maior facilidade e rapidez no acesso ao Site, bem como a sua personalização de acordo com as suas preferências. A maioria dos browsers aceita estes ficheiros (Cookies), mas o Utilizador poderá apagá-los ou definir automaticamente o seu bloqueio. No menu "Ajuda/Help" do seu browser encontrará como efetuar essas configurações. No entanto, caso não permita o uso de cookies poderá haver algumas funcionalidades do Site que não conseguirá utilizar.

B. DIREITOS DOS UTILIZADORES (TITULARES DOS DADOS)
7. DIREITO À INFORMAÇÃO

7.1. Informações facultadas ao Utilizador pela Pestana (quando os dados são recolhidos diretamente junto do Utilizador):

• A identidade e os contatos do Pestana, responsável pelo tratamento e, se aplicável, do seu representante;

• Os contatos do Encarregado da Proteção de Dados;

• As finalidades do tratamento a que os dados pessoais se destinam, bem como, se aplicável, as razões legais para o tratamento;

• Se o tratamento dos dados se basear em interesses legítimos do Pestana ou de um terceiro, indicação de tais interesses;

• Se aplicável, os destinatários ou categorias de destinatários dos dados pessoais;

• Se aplicável, indicação de que os dados pessoais serão transferidos para um país terceiro ou uma organização internacional, e a existência ou não de uma decisão de adequação adotada pela Comissão ou a referência a garantias de transferência apropriadas ou adequadas;

• Prazo de conservação dos dados pessoais;

• O direito de requerer ao Pestana a permissão aos dados pessoais, bem como a sua correção, eliminação ou limitação, o direito de se opor ao tratamento e o direito à acessibilidade dos dados;

• Se o tratamento dos dados se basear no consentimento do Utilizador, o direito de o retirar em qualquer altura, sem comprometer a legalidade do tratamento efetuado com base no consentimento previamente dado;

• O direito de apresentar reclamação junto da CNPD ou outra autoridade de controlo;

• Indicação se a comunicação de dados pessoais constitui ou não uma obrigação legal ou contratual, ou um requisito necessário para celebrar um contrato , bem como se o titular está obrigado a fornecer os dados pessoais e as eventuais consequências de não fornecer esses dados;

• Se aplicável, a existência de decisões automáticas, incluindo a definição de perfis, e informações relativas ao conceito base, bem como a importância e as consequências previstas de tal tratamento para o titular dos dados.

• No caso de os Dados do Utilizador não serem recolhidos diretamente pelo Pestana junto do Utilizador, além das informações referidas acima, o Utilizador é também informado acerca das categorias de dados pessoais objeto de tratamento e, bem assim, acerca da origem dos dados e, eventualmente, se são de fontes acessíveis ao público.

• Caso o Pestana pretenda proceder ao tratamento posterior dos Dados do Utilizador para um fim que não seja aquele para o qual os dados foram recolhidos, antes desse tratamento o Pestana fornecerá ao Utilizador informações sobre esse fim e quaisquer outras informações de interesse, nos termos acima referidos.

7.2. Procedimentos e medidas implementadas com vista ao cumprimento do direito à informação.

A informação referida em 7.1. é prestada por escrito (incluindo por meios eletrónicos) pelo Pestana ao Utilizador previamente ao tratamento de dados pessoais em causa. Nos termos da lei aplicável, o Pestana não tem a obrigação de prestar ao Utilizador as informações mencionadas em 7.1 quando e na medida em que o Utilizador já tiver conhecimento das mesmas.

As informações são fornecidas pelo Pestana sem qualquer custo.

8. DIREITO DE ACESSO AOS DADOS PESSOAIS
O Pestana garante os meios que permitam a consulta, pelo Utilizador, aos seus Dados Pessoais.

O Utilizador tem o direito de obter do Pestana a confirmação de que os dados pessoais que lhe dizem respeito são ou não objeto de tratamento e, sendo o caso, o direito de aceder aos seus dados pessoais e às seguintes informações: 

As finalidades do tratamento dos dados; 

As categorias dos dados pessoais em questão; 

Os destinatários ou categorias de destinatários a quem os dados pessoais foram ou serão divulgados, nomeadamente os destinatários estabelecidos em países terceiros ou pertencentes a organizações internacionais; 

O prazo de conservação dos dados pessoais;

Direito de solicitar ao Pestana a correção, a eliminação ou a limitação do tratamento dos dados pessoais, ou do direito de impedir a esse tratamento; 

Direito de apresentar reclamação junto da CNPD ou outra autoridade de controlo; 

Se os dados não tiverem sido recolhidos junto do Utilizador, as informações disponíveis sobre a origem desses dados; 

A existência de decisões automatizadas, incluindo a definição de perfis, e informações relativas à lógica subjacente, bem como a importância e as consequências previstas de tal tratamento para o titular dos dados; 

Direito a ser informado sobre as garantias adequadas associadas à transferência de dados para países terceiros ou organizações internacionais.

Mediante solicitação, o Pestana fornecerá ao Utilizador, a título gratuito, uma cópia dos Dados do Utilizador que se encontram em fase de tratamento. O fornecimento de outras cópias solicitadas pelo Utilizador poderá implicar custos administrativos.

9. DIREITO DE RETIFICAÇÃO DOS DADOS PESSOAIS
O Utilizador tem o direito de solicitar, a qualquer momento, a retificação dos seus Dados Pessoais e, bem assim, o direito a que os seus dados pessoais incompletos sejam completados, incluindo por meio de uma declaração adicional.

Em caso de retificação dos dados, o Pestana comunica a cada destinatário a quem os dados tenham sido transmitidos a respetiva retificação, salvo se tal comunicação for considerada impossível ou implicar um esforço desproporcionado para o Pestana.

10. DIREITO AO APAGAMENTO DOS DADOS PESSOAIS (“DIREITO A SER ESQUECIDO”)
O Utilizador tem o direito de obter, por parte do Pestana, a eliminação dos seus dados quando se aplique um dos seguintes motivos: 

Os Dados do Utilizador deixarem de ser necessários para a finalidade que motivou a sua recolha ou tratamento; 

O Utilizador retirar o consentimento em que se baseia o tratamento dos dados e não existir outro fundamento jurídico para o referido tratamento; 

O Utilizador opor-se ao tratamento ao abrigo do direito de oposição e não existirem interesses legítimos prevalecentes que justifiquem o tratamento; 

Caso os Dados do Utilizador sejam tratados ilegalmente; 

Caso os Dados do Utilizador tiverem de ser apagados para o cumprimento de uma obrigação jurídica a que o Pestana esteja sujeita;

Nos termos legais aplicáveis, o Pestana não tem a obrigação de eliminar os Dados do Utilizador na medida em que o tratamento se revele necessário ao cumprimento de uma obrigação legal a que o Pestana esteja sujeita ou para efeitos de declaração, exercício ou defesa de um direito do Pestana num processo judicial.

Em caso da eliminação dos dados, o Pestana comunica a cada destinatário/entidade a quem os dados tenham sido transmitidos o respetivo apagamento, salvo se tal comunicação se revelar impossível ou implicar um esforço desproporcionado para o Pestana.

Quando o Pestana tiver tornado públicos os Dados do Utilizador e for obrigada a apagá-los ao abrigo do direito dessa eliminação, o Pestana compromete-se a assegurar as medidas que forem razoáveis, incluindo de carácter técnico, tendo em consideração a tecnologia disponível e os custos da sua aplicação, para informar os responsáveis pelo tratamento efetivo dos dados pessoais de que o Utilizador lhes solicitou o apagamento das ligações para esses dados pessoais, bem como das cópias ou reproduções dos mesmos.

11. DIREITO À LIMITAÇÃO DO TRATAMENTO DOS DADOS PESSOAIS
O Utilizador tem o direito de obter, por parte do Pestana, a limitação do tratamento dos Dados do Utilizador, se se aplicar uma das seguintes situações (a limitação consiste em inserir uma marca nos dados pessoais conservados com o objetivo de limitar o seu tratamento no futuro): 

Se contestar a exatidão dos dados pessoais, durante um período que permita ao Pestana verificar a sua exatidão; 

Se o tratamento for ilícito e o Utilizador se opuser à eliminação dos dados, solicitando, em contrapartida, a limitação da sua utilização; 

Se o Pestana já não precisar dos Dados do Utilizador para fins de tratamento, mas esses dados sejam requeridos pelo Utilizador para efeitos de declaração, exercício ou defesa de um direito num processo judicial; 

Caso o Utilizador se tenha oposto ao tratamento, até se verificar que os motivos legítimos do Pestana prevalecem sobre os do Utilizador.

Quando os Dados do Utilizador sejam objeto de limitação, só poderão, à exceção da conservação, ser tratados com o consentimento do Utilizador ou para efeitos de declaração, exercício ou defesa de um direito num processo judicial, de defesa dos direitos de outra pessoa singular ou coletiva, ou por motivos de interesse público legalmente previstos.

O Utilizador que tiver obtido a limitação do tratamento dos seus dados nos casos acima referidos será informado pelo Pestana antes de ser anulada a limitação ao tratamento.

Em caso de limitação do tratamento dos dados, o Pestana comunicará cada destinatário a quem os dados tenham sido transmitidos a respetiva limitação, salvo se esta comunicação se revelar impossível ou implicar um esforço desproporcionado para o Pestana.

12. DIREITO DE PORTABILIDADE DOS DADOS PESSOAIS
O Utilizador tem o direito de receber os dados pessoais que lhe digam respeito e que tenha fornecido ao Pestana, num formato estruturado, de uso corrente e de leitura automática, e o direito de transmitir esses dados a outro responsável pelo tratamento, se: 

O tratamento se basear no consentimento ou num contrato de que o Utilizador é parte;
e 
O tratamento for realizado por meios automatizados.

O direito de portabilidade não inclui dados inferidos nem dados derivados, i.e., dados pessoais que sejam gerados pelo Pestana como consequência ou resultado da análise dos dados objeto de tratamento.

O Utilizador tem o direito que os seus dados pessoais sejam transmitidos diretamente entre os responsáveis pelo tratamento, sempre que tal seja tecnicamente possível.

13. DIREITO DE OPOSIÇÃO AO TRATAMENTO
O Utilizador tem o direito de se opor a qualquer momento, por motivos relacionados com a sua situação particular, ao tratamento dos dados pessoais que lhe digam respeito que assente no exercício de interesses legítimos prosseguidos pelo Pestana ou quando o tratamento for efetuado para fins que não sejam aqueles para os quais os dados pessoais foram recolhidos, incluindo a definição de perfis, ou quando os dados pessoais forem tratados para fins estatísticos.

O Pestana irá finalizar o tratamento dos Dados do Utilizador, salvo se apresentar razões urgentes e legítimas para esse tratamento que prevaleçam sobre os interesses, direitos e liberdades do Utilizador, ou para efeitos de declaração, exercício ou defesa de um direito da Pestana num processo judicial.

Quando os Dados do Utilizador forem tratados para efeitos de comercialização direta (marketing), o Utilizador tem o direito de se opor a qualquer momento ao tratamento dos dados que lhe digam respeito para os efeitos da referida comercialização, o que abrange a definição de perfis na medida em que esteja relacionada com a comercialização direta. Caso o Utilizador se oponha ao tratamento dos seus dados para efeitos de comercialização direta, o Pestana cessa o tratamento dos dados para esse fim.

O Utilizador tem ainda o direito de não ficar sujeito a nenhuma decisão tomada exclusivamente com base no tratamento automatizado, incluindo a definição de perfis, que produza efeitos na sua esfera jurídica ou que o afete significativamente de forma similar, salvo se a decisão:

• For necessária para a celebração ou a execução de um contrato entre o Utilizador e a Pestana;

• For autorizada por legislação a que o Pestana estiver sujeita; ou

• For baseada no consentimento explícito do Utilizador.

13. PROCEDIMENTOS COM VISTA AO EXERCÍCIO DOS DIREITOS PELO UTILIZADOR
O direito de acesso, o direito de retificação, o direito de eliminação, o direito à limitação, o direito de portabilidade e o direito à oposição podem ser exercidos pelo Utilizador mediante contacto com o Encarregado de Proteção de Dados do Pestana, através do email dpo@pestana.com e/ou através da página disponível no Site.

O Pestana dará resposta por escrito (incluindo por meios eletrónicos) ao pedido do Utilizador no prazo máximo de um mês a contar da receção do pedido, salvo em casos de especial complexidade, em que esse prazo pode ser prolongado até dois meses.

Se os pedidos apresentados pelo Utilizador forem manifestamente injustificado ou excessivos, nomeadamente devido ao seu carácter repetitivo, o Pestana reserva-se o direito de cobrar custos administrativos ou recusar-se a dar seguimento ao pedido.

14. VIOLAÇÕES DE DADOS PESSOAIS
Em caso de violação de dados e na medida em que tal violação seja suscetível de implicar um elevado risco para os direitos e liberdades do Utilizador, o Pestana compromete-se a comunicar a violação de dados pessoais ao Utilizador em causa no prazo de 72 horas a contar do conhecimento do incidente.

Nos termos legais, a comunicação ao Utilizador não é exigida nos seguintes casos:

• Caso o Pestana tenha aplicado medidas de proteção adequadas, tanto técnicas como organizativas, e essas medidas tenham sido aplicadas aos dados pessoais afetados pela violação de dados pessoais, especialmente medidas que tornem os dados pessoais incompreensíveis para qualquer pessoa não autorizada a aceder a esses dados, tais como a cifragem;

• Caso o Pestana tenha tomado medidas subsequentes que assegurem que o elevado risco para os direitos e liberdades do Utilizador já não é suscetível de se concretizar; ou

• Caso a comunicação ao Utilizador implique um esforço desproporcionado para o Pestana. Nesse caso, o Pestana fará uma comunicação pública ou tomará uma medida semelhante através da qual o Utilizador será informado.

C. PARTE FINAL
15. ALTERAÇÕES À POLÍTICA DE PRIVACIDADE
O Pestana reserva-se o direito de alterar a presente Política de Privacidade a todo o tempo. Em caso de modificação da Política de Privacidade, a data da última alteração, disponível no topo desta página, é também atualizada. Caso a alteração seja substancial, será colocado um aviso no Site.

16. LEI E FORO APLICÁVEIS
A Política de Privacidade, bem como a recolha, tratamento ou transmissão de Dados do Utilizador, são regidos pelo disposto no Regulamento (UE) 2016/679, do Parlamento Europeu e do Conselho, de 27 de abril de 2016 e pela legislação e regulamentação aplicáveis em Portugal.

Quaisquer litígios decorrentes da validade, interpretação ou execução da Política de Privacidade, ou que estejam relacionados com a recolha, tratamento ou transmissão de Dados do Utilizador, devem ser submetidos em exclusivo à jurisdição dos tribunais judiciais da comarca de Lisboa, sem prejuízo das normas legais imperativas aplicáveis.


Termos de uso e condições
Hotel Group
1. INTRODUÇÃO

Ao utilizar ou visitar o website alojado em www.pestana.com (“Site”) ou alguma das informações, ficheiros de dados, texto escrito, gráficos, links, ficheiros áudio ou outros sons, fotografias, vídeos ou outras imagens (em conjunto, “Conteúdos”), recursos e serviços, incluindo newsletter (em conjunto, incluindo os Conteúdos, os “Serviços”) através dela disponibilizados, está, enquanto utilizador ou visitante dos mesmos (“Utilizador”), a concordar com e a aceitar (i) os presentes Termos de Uso (“Termos de Uso”) e (ii) a política de privacidade e de protecção de dados pessoais disponível em Política de Privacidade.

O Site é detido pela sociedade PESTANA MANAGEMENT - SERVIÇOS DE GESTÃO S.A., sociedade anónima com sede no Largo António Nobre, Sé, Funchal, inscrita na Conservatória do Registo Comercial do Funchal, sob o número único de matrícula e de pessoa colectiva 511230397, com o capital social de EUR 50.000,00 (“Pestana Management”), entidade que integra o grupo hoteleiro controlado pela Grupo Pestana, SGPS, S.A. (“Grupo Pestana”).

Através do Site, a Pestana Management dá ao Utilizador acesso aos Serviços. Os Serviços, incluindo actualizações, desenvolvimentos, novas ferramentas e/ou novas propriedades Web, estão sujeitos aos presentes Termos de Uso.

A realização de reservas de viagens e/ou alojamento pode ser efectuada através do Site, embora a contraparte nos contratos celebrados através do Site que tenham como objecto a prestação de serviços turísticos seja outra entidade do Grupo Pestana, devidamente licenciada e identificada nas Condições Gerais de Reserva, limitando-se a Pestana Management a disponibilizar a plataforma que permite a contratação dos serviços pelo Utilizador, não assumindo consequentemente qualquer responsabilidade por problemas emergentes da execução desses contratos.

2. OBRIGAÇÕES E RESPONSABILIDADE GERAIS DO UTILIZADOR

A Pestana Management reserva-se o direito de alterar estes Termos de Uso a qualquer momento, limitando-se a colocar as alterações online no Site, sendo da exclusiva responsabilidade do Utilizador a verificação e cumprimento dos mesmos aquando de cada utilização. O uso do Site depois da publicação das alterações constitui a aceitação da redacção actualizada dos Termos de Uso. Caso não esteja de acordo com as alterações efectuadas ou, de um modo geral, com os Termos de Uso, deve deixar, de imediato, de utilizar o Site e os Serviços.

Ao aceder, utilizar e descarregar materiais do Site, o Utilizador concorda, em seu nome e/ou em representação da entidade em nome de quem estiver a actuar, cumprir pontualmente com o disposto nos presentes Termos de Uso, garantindo ter poderes para actuar em nome do terceiro que representa, se for esse o caso.

Está expressamente vedado o acesso aos Serviços por quaisquer outros meios que não através do interface disponibilizado pela Pestana Management, bem como o acesso (ou tentativa de acesso) ao Site e/ou aos Serviços através de meios automatizados (incluindo o uso de scripts ou web crawlers).

Está expressamente proibida a utilização do Site para outros fins que não aqueles a que o Site se destina, incluindo fins ilegais ou quaisquer outros que possam ser considerados prejudiciais para a imagem da Pestana Management no mercado. A usurpação, contrafacção, aproveitamento do conteúdo usurpado ou contrafeito, a identificação ilegítima e a concorrência desleal são puníveis criminalmente.

É também proibido ao Utilizador criar ou introduzir neste Site quaisquer tipos de vírus ou programas que o danifiquem ou contaminem ou aconselhar terceiros a fazê-lo.

Conta de Utilizador

De forma a poder aceder a certos Serviços e a áreas restritas do Site, pode ser-lhe solicitado que forneça alguns dados pessoais (tais como a identificação e dados de contacto), no âmbito do processo de registo para a criação de uma conta de Utilizador no Site (“Conta de Utilizador”). Deve indicar um endereço de correio electrónico válido e ao qual tenha o direito de aceder legitimamente, assim como quaisquer outras informações necessárias para concluir o processo de registo. A informação disponibilizada deve estar actualizada, completa e precisa.

O Utilizador é responsável por manter a confidencialidade da sua palavra passe. Caso detecte algum uso ilícito da sua Conta de Utilizador, deve notificar de imediato a Pestana Management. Não obstante, pode ser responsabilizado pela Pestana Management ou por terceiro pela utilização ilícita da sua Conta de Utilizador ou da sua palavra passe.

A conta de Utilizador só deve ser utilizada por terceiro com o consentimento do respectivo titular.

O Utilizador é exclusivamente responsável por quaisquer danos emergentes ou lucros cessantes causados pela sua conduta ilícita ao utilizar o Site e os Serviços e pelos Conteúdos que disponibilize no Site.

Caso a Pestana Management desactive ou de outra forma retire o acesso à sua Conta de Utilizador, o Utilizador compreende e aceita que pode ficar impedido de aceder a certas áreas restritas do Site, aos detalhes da sua Conta de Utilizador ou a quaisquer conteúdos aí existentes.

3. DIREITOS E OBRIGAÇÕES DA PESTANA MANAGEMENT

A Pestana Management reserva-se o direito de (i) modificar, acrescentar ou remover partes dos Termos de Uso a todo o tempo; (ii) modificar ou terminar os Serviços por qualquer motivo e sem notificação prévia a todo o tempo; (iii) remover Contas de Utilizadores cujo conteúdo seja ilícito, ofensivo, ameaçador, difamatório, pornográfico, obsceno ou censurável ou que viole direitos de propriedade intelectual de terceiros ou os Termos de Uso; (v) modificar, substituir, recusar acesso ao Site e aos Serviços, suspender ou descontinuá-los, parcial ou totalmente. Estas alterações produzirão efeitos a partir da sua colocação no Site ou da data do envio de eventuais comunicações.

A Pestana Management compromete-se a fornecer suporte técnico ao Utilizador com Conta de Utilizador, o qual só está disponível via correio electrónico.

4. PROPRIEDADE INTELECTUAL E DIREITOS DA PERSONALIDADE

Titularidade

Toda a informação contida no Site e nos Serviços e todos os dados e informações compilados pela Pestana Management a ela associados (tais como ficheiros de dados, texto escrito, Software, música, ficheiros áudio ou outros sons, fotografias, vídeos ou outras imagens) aos quais tenha acesso como parte dos Serviços ou através da sua utilização são considerados conteúdos da Pestana Management, de uma entidade do Grupo Pestana ou de terceiro, quando devidamente identificado. Não é permitido ao Utilizador modificar, locar, comodatar, mutuar, vender, distribuir ou criar uma obra derivada com base nos referidos conteúdos (parcial ou totalmente), a menos que tenha sido expressamente autorizado por escrito para o efeito pela Pestana Management ou por terceiro que detenha a respectiva propriedade intelectual e direitos da personalidade.

O Utilizador reconhece e concorda que a Pestana Management e as entidades aplicáveis do Grupo Pestana (conforme aplicável) retêm todos os direitos de propriedade intelectual (quer esses direitos estejam registados ou não e em qualquer parte do mundo onde esses direitos possam existir) relativos aos Serviços. A Pestana Management e as entidades aplicáveis do Grupo Pestana (conforme aplicável) retêm todos os direitos não concedidos expressamente ao Utilizador nos presentes Termos de Uso.

O Utilizador concorda ainda em não remover, ocultar nem alterar quaisquer avisos de direitos de propriedade intelectual (incluindo avisos de direitos de autor e de marcas comerciais) que possam estar afixados ou contidos nos Serviços.

Marcas e Afins

A menos que tenha expressamente sido autorizado pela Pestana Management a fazê-lo, nada nos Termos de Uso confere ao Utilizador o direito de utilizar qualquer das marcas registadas, marcas comerciais, marcas de serviços, logótipos, nomes de domínios e outras características de marca distintivas da Pestana Management ou de qualquer outra entidade do Grupo Pestana.

Software

A Pestana Management concede ao Utilizador uma licença pessoal, de âmbito territorial mundial, gratuita, intransmissível e não exclusiva para utilizar o interface de reservas existente no Site como parte dos Serviços fornecidos (“Software”). Esta licença tem como único objectivo permitir a utilização e usufruto do serviço de reservas tal como é disponibilizado no Site, da forma que é permitida pelos Termos de Uso.

Não é permitido ao Utilizador (nem pode permitir a terceiros) copiar, modificar, criar uma obra derivada, proceder à engenharia inversa, descompilação ou, de qualquer outro modo, tentar extrair o código fonte do Software ou de qualquer parte que o componha, a menos que tal seja expressamente permitido ou previsto pela legislação aplicável ou que o Utilizador tenha sido especificamente autorizado por escrito, pela Pestana Management, a fazê-lo. A não ser que a Pestana Management tenha concedido ao Utilizador uma autorização específica, por escrito, para fazê-lo, não pode ceder (ou atribuir uma sublicença de) os seus direitos de utilização do Software, conceder uma garantia relativa aos seus direitos de utilização do Software ou, em alternativa, transferir qualquer parte dos seus direitos de utilização do Software.

5. EXCLUSÃO DE GARANTIAS

NA MEDIDA DO PERMITIDO PELA LEGISLAÇÃO APLICÁVEL, OS SERVIÇOS SÃO FORNECIDOS "TAL COMO ESTÃO" E “TAL COMO SE ENCONTRAM DISPONÍVEIS” (AS IS AND AS AVAILABLE) E A PESTANA MANAGEMENT NÃO FORNECE QUALQUER TIPO DE GARANTIA RELATIVAMENTE AOS MESMOS. EM PARTICULAR, PESTANA MANAGEMENT NÃO GARANTE AO UTILIZADOR QUE (I) A UTILIZAÇÃO DOS SERVIÇOS VÁ AO ENCONTRO DAS SUAS NECESSIDADES OU EXPECTATIVAS; (II) A UTILIZAÇÃO DOS SERVIÇOS NÃO SEJA INTERROMPIDA, OU QUE SEJA PONTUAL, SEGURA OU ISENTA DE ERROS; (III) QUALQUER INFORMAÇÃO OBTIDA, RESULTANTE DA UTILIZAÇÃO DOS SERVIÇOS SEJA EXACTA OU FIÁVEL; E (IV) OS DEFEITOS, A EXISTIREM, NO FUNCIONAMENTO OU DA FUNCIONALIDADE DE QUALQUER SOFTWARE FORNECIDO COMO PARTE DOS SERVIÇOS SERÃO CORRIGIDOS.

NENHUMAS CONDIÇÕES, GARANTIAS OU OUTROS TERMOS (INCLUINDO QUAISQUER TERMOS IMPLÍCITOS NO QUE RESPEITA À QUALIDADE SATISFATÓRIA, ADEQUAÇÃO A UM FIM OU CONFORMIDADE COM A DESCRIÇÃO) SÃO APLICÁVEIS AOS SERVIÇOS, EXCEPTO NA MEDIDA EM QUE SE ENCONTREM EXPRESSAMENTE DEFINIDOS NOS TERMOS DE USO.

A UTILIZAÇÃO, PELO UTILIZADOR, DO SITE, DOS SERVIÇOS, BEM COMO DE QUAISQUER MATERIAIS DESCARREGADOS OU POR OUTRA FORMA OBTIDOS ATRAVÉS DA UTILIZAÇÃO DOS SERVIÇOS É FEITA POR SUA CONTA E RISCO EXCLUSIVA, SENDO EXCLUSIVAMENTE RESPONSÁVEL POR QUAISQUER DANOS EMERGENTES E LUCROS CESSANTES CAUSADOS AO EQUIPAMENTO NO QUAL EFECTUE A UTILIZAÇÃO OU VISUALIZAÇÃO DO SITE, DOS SERVIÇOS E DOS MATERIAIS AÍ DISPONÍVEIS.

NADA NOS TERMOS DE USO DEVE AFECTAR OS DIREITOS PREVISTOS PELA LEGISLAÇÃO APLICÁVEL AOS QUAIS O UTILIZADOR TEM SEMPRE DIREITO COMO CONSUMIDOR, SE NESSA QUALIDADE INTERVIER E SE RELACIONAR COM A PESTANA MANAGEMENT, E QUE, CONTRATUALMENTE, NÃO PODE CONCORDAR EM ALTERAR OU RENUNCIAR.

NENHUMA RECOMENDAÇÃO OU INFORMAÇÃO, ORAL OU ESCRITA, DA PESTANA MANAGEMENT DEVE SER INTERPRETADA COMO CONSTITUINDO UMA GARANTIA DE QUALQUER TIPO, A MENOS QUE ESTEJA EXPRESSAMENTE PREVISTA NOS TERMOS DE USO.

PARA FACILITAR A ACESSIBILIDADE DO UTILIZADOR, A PESTANA MANAGEMENT PODE INCLUIR LINKS PARA SITES NA INTERNET QUE SEJAM DETIDOS OU OPERADOS POR TERCEIROS. QUANDO UTILIZAR OS LINKS PARA ESSES SITES DE TERCEIROS, O UTILIZADOR DEVE REVER E ACEITAR AS REGRAS DESSE SITE ANTES DE O UTILIZAR. O UTILIZADOR DEVE TAMBÉM ACEITAR QUE A PESTANA MANAGEMENT NÃO CONTROLA O CONTEÚDO DESSE SITE E NÃO PODE ASSUMIR QUALQUER RESPONSABILIDADE PELOS MATERIAIS CRIADOS OU PUBLICADOS POR ESSES SITES DE TERCEIROS. PARA ALÉM DISSO, UM LINK PARA UM SITE QUE NÃO SEJA DA PESTANA MANAGEMENT NÃO SIGNIFICA QUE ESTA APOIE O SITE OU OS PRODUTOS E SERVIÇOS AÍ REFERENCIADOS.

6. LIMITAÇÃO DE RESPONSABILIDADE

NA MEDIDA DO PERMITIDO PELA LEGISLAÇÃO APLICÁVEL, A PESTANA MANAGEMENT NÃO ASSUME QUALQUER RESPONSABILIDADE PERANTE O UTILIZADOR POR:

(I) QUAISQUER DANOS RESULTANTES DA UTILIZAÇÃO DO SITE E DOS SERVIÇOS, INCLUINDO DA RESERVA DE VIAGENS E/OU ALOJAMENTO, NA MEDIDA EM QUE ESTE SERVIÇO É PRESTADO POR OUTRA ENTIDADE DO GRUPO PESTANA;

(II) QUAISQUER DANOS RESULTANTES: (A) DE QUALQUER JUÍZO DO UTILIZADOR QUANTO À INTEGRIDADE, PRECISÃO OU EXISTÊNCIA DE QUALQUER ANÚNCIO OU QUALQUER RELAÇÃO OU TRANSACÇÃO REALIZADA COM QUALQUER ANUNCIANTE, CUJA PUBLICIDADE É APRESENTADA NOS SERVIÇOS OU NA NEWSLETTER DA PESTANA MANAGEMENT; (B) DE QUAISQUER ALTERAÇÕES QUE A PESTANA MANAGEMENT POSSA FAZER AOS SERVIÇOS OU QUALQUER CESSAÇÃO PERMANENTE OU TEMPORÁRIA DA PRESTAÇÃO DOS SERVIÇOS (OU QUAISQUER FUNCIONALIDADES DOS SERVIÇOS); (C) DA ELIMINAÇÃO, CORRUPÇÃO OU ERRO DE ARMAZENAMENTO DE QUAISQUER CONTEÚDOS OU OUTROS DADOS DE COMUNICAÇÕES MANTIDOS OU TRANSMITIDOS POR OU ATRAVÉS DA UTILIZAÇÃO DOS SERVIÇOS; (D) DA VIOLAÇÃO DIRECTA OU INDIRECTA DOS TERMOS DE USO; (E) DA NÃO MANUTENÇÃO DA SEGURANÇA E CONFIDENCIALIDADE DA PALAVRA-PASSE OU DETALHES DA CONTA DE UTILIZADOR.

A RESPONSABILIDADE DA PESTANA MANAGEMENT A TÍTULO DE INDEMNIZAÇÃO POR QUAISQUER DANOS EMERGENTES E LUCROS CESSANTES RELACIONADOS COM O SITE E COM OS SERVIÇOS, CAUSADOS PELA PESTANA MANAGEMENT, SEUS REPRESENTANTES OU AUXILIARES ESTÁ LIMITADA AOS CASOS EM QUE ACTUE COM DOLO OU CULPA GRAVE. CASO DISCORDE, PARCIAL OU TOTALMENTE, DO SITE OU DOS SERVIÇOS, OU AINDA DOS TERMOS DE USO, DISPÕE APENAS DA FACULDADE DE DEIXAR DE UTILIZAR O SITE OU OS SERVIÇOS, CONFORME APLICÁVEL, E DE EXIGIR O CANCELAMENTO DA SUA CONTA DE UTILIZADOR.

7. POLÍTICA DE PRIVACIDADE

A Política de Privacidade encontra-se disponível em [http://www.pestana.com/pt/informacao/pages/politica-privacidade.aspx].O documento contém uma explicação dos procedimentos adoptados pela Pestana Management e por entidades terceiras que prestem serviços através do Site, no âmbito do tratamento de dados pessoais dos seus Utilizadores e da protecção da sua privacidade, aquando da utilização do Site e dos Serviços. Aceita que a Pestana Management recolha e trate os seus dados pessoais nos termos da Política de Privacidade.

8. DISPOSIÇÕES GENÉRICAS

Prevalência

Em caso de conflito entre os Termos de Uso e outras disposições específicas ou termos e condições específicos existentes no Site relativos a determinados materiais, estes devem prevalecer.

Exercício de Direitos

O não exercício ou a não aplicação imediata de direitos ou disposições pela Pestana Management, previstos nos Termos de Uso, não deve ser interpretado como uma renúncia aos mesmos.

Integralidade

Os Termos de Uso constituem o acordo integral entre o Utilizador e a Pestana Management relativamente à utilização e consulta, por aquele, do Site e dos Serviços, e regulam a utilização destes (excluindo quaisquer Serviços que possam ser fornecidos pela Pestana Management no âmbito de um contrato escrito em separado), substituindo na íntegra quaisquer acordos anteriores estabelecidos entre o Utilizador e a Pestana Management em relação ao Site e aos Serviços.

Redução

A invalidade, declarada por sentença judicial ou arbitral transitada em julgado, de alguma disposição dos Termos de Uso não determina a invalidade das demais, reservando a Pestana Management o direito, se for caso disso, de modificar os Termos de Uso em conformidade de forma a suprir a invalidade.

Notificações/Comunicações/Reclamações

Quaisquer notificações e comunicações da Pestana Management para o Utilizador ao abrigo dos Termos de Uso devem ser preferencialmente efectuadas para o endereço de email ou para a morada disponibilizados pelo Utilizador na sua Conta de Utilizador, sem prejuízo de a Pestana Management poder recorrer a outros elementos e formas de contacto.

Quaisquer notificações, comunicações e reclamações do Utilizador devem ser efectuadas, preferencialmente, para o email [guest@pestana.com] .

9. LEI E FORO APLICÁVEIS

Os Termos de Uso, bem como a relação do Utilizador com a Pestana Management de acordo com os mesmos, são regidos pelas leis aplicáveis da República de Portugal. O Utilizador e a Pestana Management concordam em submeter à exclusiva jurisdição dos tribunais judiciais da comarca de Lisboa a resolução de quaisquer questões legais resultantes dos Termos de Uso, sem prejuízo das normas legais imperativas aplicáveis. Não obstante o referido, a Pestana Management pode vir a aplicar medidas cautelares (ou de tipo equivalente de compensação legal urgente) em qualquer jurisdição.



CONDIÇÕES GERAIS DE RESERVAS

1. ÂMBITO

1.1. As presentes condições gerais (“Condições Gerais”) regem e são parte integrante do contrato de prestação de serviços celebrado através do website www.pestana.com (“Site”) entre a Intervisa - Viagens e Turismo, S.A., sociedade anónima com sede na Rua Ivone Silva, n.º 6, 5.º, 1050 - 124 Lisboa, registada na Conservatória do Registo Comercial de Lisboa com o número único de matrícula e de pessoa colectiva 502669152, alvará n.º 163/1962, com o capital social de EUR 450.000,00 (“Pestana Travels”) e o cliente que subscreva o contrato (“Cliente”), que tem como objecto a prestação de serviços de reserva de alojamento turístico (“Alojamento”) e respectivos serviços turísticos subsidiários em empreendimentos turísticos, alojamentos locais e, de um modo geral, em unidades hoteleiras (“Hotéis”) detidas e/ou exploradas por alguma sociedade que integre o grupo hoteleiro controlado pela Grupo Pestana, SGPS, S.A. (“Grupo Pestana”), e ainda, quando contratados, de serviços de transporte associados (“Transporte”) ou outros serviços turísticos, solicitados pelo Cliente à Pestana Travels ou por esta vendidos ou propostos ao Cliente como Viagens Turísticas ou Viagens Organizadas (“Contrato”).

1.2. Para efeitos do Contrato, por “Viagem Turística” entende-se uma viagem que combine pelo menos dois dos serviços seguintes: Alojamento, Transporte, ou serviços turísticos não subsidiários dos anteriormente mencionados; e por “Viagem Organizada” entende-se a Viagem Turística que seja vendida ou proposta para venda a um preço com tudo incluído, quando exceda vinte e quatro horas ou inclua uma dormida.

1.3. A celebração do Contrato, que se dá após a confirmação da reserva através do Site, é feita nos termos destas Condições Gerais, cujo conhecimento e aceitação pelo Cliente são manifestados através de validação de caixa de selecção para o efeito no formulário de reserva, sendo ainda do conhecimento e aceitação do Cliente os Termos de Uso do Website e respectiva Política de Privacidade.

2. RESERVAS

2.1. Na marcação de qualquer reserva, o Cliente deve preencher correctamente o respectivo formulário, indicando, designadamente, o Hotel, Alojamento e (se for caso disso) Transporte pretendidos, as datas de partida, entrada e saída e tarifa aplicável, sempre sujeito a confirmação de disponibilidade pela Pestana Travels, bem como os seus dados pessoais e informação de pagamento, responsabilizando-se integralmente pelas escolhas efectuadas e pela informação disponibilizada, que deve ser completa, verdadeira e actualizada.

2.2. Com a confirmação dos dados da reserva pelo Cliente, é atribuído a este um código de reserva, que deve ser referenciado em todos os contactos com a Pestana Travels, adquirindo o Cliente o direito aos serviços de viagens contratados à Pestana Travels, nos termos e condições descritos no respectivo comprovativo da reserva e no Contrato, após pagamento nos termos da secção 9.

2.3. Quanto tenha reservado apenas Alojamento, o Cliente é integralmente responsável pela obtenção e/ou contratação de meios de transporte que lhe permitam usufruir dos serviços contratados, sem prejuízo de o Cliente poder contratar esse serviço à Pestana Travels de forma autónoma (se disponível e desde que esta o aceite).

2.4. De igual modo, o Cliente assume integral responsabilidade pela posse e/ou obtenção dos documentos necessários (tais como documentos de identificação, autorizações, vistos e certificados de vacinas) para a entrada no país e/ou localidade do Hotel onde se insere o Alojamento ou onde faça escala durante a viagem adquirida, devendo informar-se atempadamente a esse respeito quando tenha reservado apenas Alojamento. A Pestana Travels não assume qualquer responsabilidade pela recusa de concessão de vistos ou de permissões de entrada ao Cliente em qualquer país, aplicando-se, neste caso, o disposto na secção 10.

2.5. A organização de Viagens Organizadas é efectuada pela Pestana Travels, salvo se o contrário expressamente resultar do respectivo programa da viagem.

2.6. De acordo com a legislação brasileira (art. 250, Estatuto da Criança e do Adolescente), para hospedagem de menor faz-se necessária a apresentação de declaração autorizando a hospedagem assinada por ambos os pais, com firma reconhecida, acompanhada de cópias autenticadas dos documentos de ambos os pais e da certidão de nascimento do menor, ou autorização da autoridade judiciária.

2.7. Em virtude dos regimes e tarifas especiais existentes para crianças, e que variam, entre outros factores, em função da idade, do prestador de serviços e das datas da viagem, a Pestana Travels aconselha o Cliente a informar-se previamente junto daquela antes da realização da reserva.

2.8. Não são devidos quaisquer reembolsos por bens e/ou serviços que, embora colocados à disposição do Cliente, este opte por não gozar ou utilizar.

3. BENEFÍCIOS, PROMOÇÕES E DESCONTOS

3.1. Em função dos acordos celebrados pela Pestana Travels com terceiros (“Parceiros”) e que estejam em vigor à data da realização da reserva pelo Cliente, este pode ter acesso a descontos e tarifas especiais (“Benefícios”) na realização de uma reserva, desde que se encontre plenamente legitimado pelo Parceiro para a obtenção dos Benefícios e introduza correctamente o seu número identificativo. A Pestana Travels reserva-se o direito de contactar o Parceiro para a obtenção de confirmação quanto à aplicabilidade dos Benefícios a um Cliente.

3.2. Para além do disposto na cláusula 3.1, a Pestana Travels pode efectuar no Site, com âmbito temporalmente limitado ou não, determinadas promoções (“Promoções”) e descontos (“Descontos”) nas reservas efectuadas pelos Clientes.

3.3. As condições seguintes são aplicáveis aos Benefícios, Promoções e Descontos:

i) Para benefício de determinadas Promoções e/ou Descontos, pode ser solicitado ao Cliente a introdução de um código promocional (“Código Promocional”) ou o pagamento antecipado da reserva;

ii) Os Benefícios, Promoções e Descontos estão sujeitos a confirmação de disponibilidade;

iii) A Pestana Travels reserva-se o direito de cancelar os Benefícios, Promoções e/ou Descontos ou de rejeitar um Código Promocional quando o valor total dos Códigos Promocionais já utilizados exceder um determinado valor financeiro ou quando os mesmos sejam utilizados de forma fraudulenta (designadamente, por quem não seja o seu titular/beneficiário);

iv) Os Benefícios, Promoções e Descontos só são válidos para reservas efectuadas através do Site e não são transmissíveis a terceiros;

v) Em caso de cancelamento ou de não utilização de uma reserva efectuada no âmbito de um Benefício, Promoção ou Desconto, não lhe será devolvido o valor do Benefício, Promoção ou Desconto, nem garantida a sua reaplicação noutra reserva;

vi) Existindo alteração, por iniciativa do Cliente, das características e/ou titularidade de uma reserva efectuada no âmbito de um Benefício, Promoção ou Desconto, este pode perder o benefício/regalia concedido pela reserva, aplicando-se o disposto, em caso de desistência, na secção 10;

vii) A utilização de mecanismos fraudulentos para a obtenção de Benefícios, Promoções ou Descontos responsabiliza o Cliente nos termos gerais e confere à Pestana Travels o direito de escolher entre (a) a aplicação da tarifa sem desconto e (b) a resolução do Contrato, equiparando-se essa resolução, quanto às consequências que dela advêm, à resolução do Contrato pelo Cliente nos termos da cláusula 10.1, sem prejuízo do direito da Pestana Travels a ser indemnizada por todos os danos sofridos;

viii) A Pestana Travels reserva-se o direito de cancelar e/ou alterar a qualquer momento os Benefícios, Promoções e Descontos.

4. IMPOSTOS

Salvo se explicitamente referido de outra forma, ao preço da reserva acrescem ainda impostos legalmente devidos (incluindo, designadamente, Imposto sobre o Valor Acrescentado), que serão cobrados pela Pestana Travels ao Cliente conjuntamente com a reserva à taxa legal em vigor, em função dos serviços contratados.

5. TAXAS

5.1. A realização de reservas, alterações às mesmas e cancelamentos podem estar sujeitos ao pagamento de taxas cobradas pela Pestana Travels ao Cliente, calculadas em função do tipo de reserva, da data da sua realização (ou da respectiva alteração ou cancelamento) e da tarifa aplicável, a divulgar no momento da realização da reserva pelo Cliente. Adicionalmente, podem ainda vir a ser cobradas pela Pestana Travels ao Cliente taxas adicionais por alterações nas reservas ou cancelamentos, caso estas sejam exigidas pela sociedade do Grupo Pestana que explore o Hotel onde se insere o Alojamento ou por outros prestadores de serviços.

5.2. As taxas são devidas por cada reserva realizada, como contrapartida da disponibilização dos serviços de reserva online pela Pestana Travels ao Cliente, sendo debitadas no momento do pagamento da reserva pelo Cliente.

5.3. As taxas devidas pelo Cliente à Pestana Travels no âmbito de uma reserva não são reembolsáveis caso este não utilize ou goze os bens e/ou serviços contratados, bem como por qualquer outro motivo não imputável à Pestana Travels, excepto se o Cliente cancelar a reserva nos termos (incluindo de prazo) descritos nas Condições Gerais.

5.4. Caso exista lugar ao pagamento de taxas de aeroporto, estas deverão ser pagas pelo Cliente no acto de reserva ou, localmente, no aeroporto em que as mesmas sejam exigidas, não estando incluídas no preço do bilhete.

6. ALTERAÇÕES

6.1. O Cliente pode efectuar alterações às reservas de Viagens Organizadas nos termos e condições seguintes:

i) Titularidade. O Cliente pode ceder a reserva, desde que informe a Pestana Travels por escrito com, pelo menos, 7 dias de antecedência em relação à data de partida da viagem ou de entrada no Alojamento, e que tal cessão seja possível nos termos dos regulamentos de transporte aplicáveis à situação. A antecedência a observar pelo Cliente é alargada para 15 dias quando se trate de cruzeiros e de viagens aéreas de longo curso. Em qualquer caso, o cedente e o cessionário são solidariamente responsáveis pelo pagamento do preço e encargos adicionais originados pela cessão;

ii) Outras alterações. Quaisquer outras alterações a reservas, que não as referidas na alínea anterior, requerem o acordo expresso da Pestana Travels, podendo implicar alterações no preço e/ou estar sujeitas ao pagamento de taxas, calculadas em função do tipo de reserva, da data da alteração e da tarifa aplicável.

6.2. É aplicável às alterações solicitadas pelo Cliente a quaisquer reservas efectuadas através do Site, que não sejam reservas de Viagens Organizadas, o disposto na alínea ii) da cláusula 6.1, com as devidas adaptações.

6.3. Sem prejuízo do disposto na cláusula 6.1, a Pestana Travels pode efectuar alterações a uma Viagem Organizada reservada pelo Cliente até 20 dias antes da data prevista para a partida indicada no comprovativo de reserva, se a alteração incidir exclusivamente sobre o preço e resultar do aumento do custo dos transportes ou do combustível, dos direitos, impostos ou taxas cobráveis ou de flutuações cambiais, alterando-se o preço proporcionalmente ao aumento verificado face aos impostos ou taxas cobrados ou à taxa de câmbio em vigor à data da reserva, consoante aplicável.

7. ALOJAMENTO

7.1. As características do Hotel e do Alojamento são as que constam da reserva. Contudo, uma vez que as fotografias do Hotel não foram tiradas no dia de realização da reserva pelo Cliente, podem existir diferenças não substanciais entre a fotografia e a realidade à data do gozo dos serviços contratados pelo Cliente, que não conferem ao Cliente o direito a qualquer modificação do Contrato.

7.2. Os preços apresentados são por quarto, podendo no entanto ser apresentados por pessoa ou em função de outras características, que em todo o caso estarão devidamente indicadas no Site aquando da realização de uma reserva. Caso seja possível efectuar uma reserva para um número de pessoas superior à lotação normal do Alojamento, poderá ter de lhe ser colocada uma cama extra, que pode não ter o conforto e qualidade idênticos às demais camas do Alojamento, reduzindo a sua área útil, o mesmo acontecendo com camas de criança.

7.3. Os regimes alimentares e suas especificidades são comunicados ao Cliente através do Site aquando da realização de uma reserva.

7.4. Caso nada seja referido na reserva, o regime alimentar não inclui qualquer refeição. Nas viagens em regimes alimentares que incluam refeições, não estão incluídas as que coincidam com a duração do voo, com o transporte de e para o aeroporto, ou de espera de ligações aéreas.

7.5. O grupo, categoria e denominação do Hotel onde se insere o Alojamento são determinados pela legislação aplicável do Estado de acolhimento.

7.6. Caso o Cliente se apresente com mais pessoas do que as indicadas na reserva para utilizar o Alojamento, os responsáveis pelo Hotel podem recusar a sua entrada, situação pela qual a Pestana Travels não pode ser responsabilizada.

7.7. Se ocorrer uma situação de overbooking (isto é, mais reservas do que Alojamentos disponíveis) no Hotel onde se insere o Alojamento reservado pelo Cliente, este expressamente reconhece e aceita que a Pestana Travels poderá colocá-lo num outro Alojamento do mesmo Hotel ou de outro Hotel da mesma categoria (em qualquer caso, assegurando-se que a qualidade do Alojamento disponibilizado não é inferior à do Alojamento reservado pelo Cliente), sem custos adicionais para o Cliente, e sem que, por esse motivo, tenha direito a qualquer indemnização ou à resolução do Contrato.

7.8. Por via de regra, o Alojamento pode ser utilizado a partir das 16:00 horas do dia de chegada e deve ser deixado livre antes das 12:00 horas do dia de partida (em ambos os casos, à hora local do respectivo Hotel). A permanência no Alojamento para além da hora de saída praticada pode levar ao pagamento de montantes adicionais, da exclusiva responsabilidade do Cliente.

7.9. Caso o Cliente não compareça no Hotel até às 23:59 da data de entrada indicada no comprovativo de reserva, o Hotel pode desconsiderar a reserva e vender o Alojamento a terceiros, situação pela qual a Pestana Travels não pode ser responsabilizada.

7.10. O Cliente deve cumprir com o regulamento interno de utilização do Hotel, caso exista, não podendo a Pestana Travels ser responsabilizada por prejuízos sofridos pelo Cliente em consequência da violação do mesmo.

8. TRANSPORTE

8.1. Uma vez que a maioria das companhias aéreas garante os preços das passagens aéreas por um período não superior a 12 horas, as tarifas disponibilizadas no Site estão sujeitas a confirmação pela Pestana Travels após a realização da reserva pelo Cliente, podendo o seu preço variar em virtude do intervalo de tempo que decorra entre a realização da reserva e a aquisição do bilhete.

8.2. A todas as tarifas de aviação apresentadas estão associadas regras, que se prendem não apenas com condições de aquisição, mas também com alterações após a emissão e cancelamentos, cujo teor é disponibilizado pela Pestana Travels e que o Cliente deve conhecer, responsabilizando-se pelo seu cumprimento integral.

8.3. As horas de chegada e saída estão indicadas na hora local do respectivo destino e são determinadas em função dos horários das companhias transportadoras, encontrando-se por isso sujeitas a alterações.

9. PAGAMENTO

9.1. O Cliente deve pagar a quantia indicada no formulário de reserva como requisito prévio para poder usufruir da reserva contratada.

9.2. O pagamento da reserva pode ser feito pelo Cliente (i) no Site, na data de realização da reserva ou (ii) no Hotel, na data de entrada no Alojamento (caso esta modalidade esteja disponível para o tipo de reserva efectuado pelo Cliente).

9.3. Se o Cliente optar por pagar a reserva aquando da sua realização, deve fazê-lo através de cartão de crédito da sua titularidade, dentro da lista de entidades emissoras com as quais a Pestana Travels colabora e que é disponibilizada no formulário de reserva, sendo o pagamento aceite pela Pestana Travels dentro dos limites autorizados pelas entidades emissoras do mesmo.

9.4. Alternativamente, caso o Cliente pretenda pagar a reserva apenas no Hotel, poderá fazê-lo nos termos permitidos pelo Hotel, devendo informar-se atempadamente junto deste ou da Pestana Travels sobre quais os meios de pagamento aceites. Não obstante, ser-lhe-á sempre solicitado pela Pestana Travels, aquando da realização da reserva no Site, a informação do cartão de crédito, para efeitos de garantia da reserva, comprometendo-se a Pestana Travels a debitá-lo, pelo montante correspondente ao valor da primeira noite reservada, apenas se (i) o Cliente não comparecer no Hotel, na data de entrada indicada no comprovativo de reserva ou (ii) cancelar a reserva sem a antecedência prevista no respectivo comprovativo de reserva, o que o Cliente expressamente aceita e autoriza.

9.5. A informação do cartão de crédito inserida pelo Cliente é protegida pela Verisign nos termos da Política de Privacidade da Pestana Travels.

10. CANCELAMENTO

10.1. Quando tenha reservado uma Viagem Organizada, e apenas neste caso, o Cliente pode a todo o momento desistir da reserva e resolver o Contrato, desde que o comunique à Pestana Travels até à data da partida indicada no comprovativo de reserva, caso em que tem direito à devolução dos montantes pagos pela reserva efectuada, deduzidos dos gastos seguintes, calculados em função da reserva efectuada:

i) Despesas de gestão. Despesas de gestão e de índole administrativa da Pestana Travels com a obtenção da reserva e com o seu cancelamento;

ii) Despesas de anulação. Despesas de anulação não reembolsáveis cobradas pela sociedade exploradora do Hotel onde se insere o Alojamento ou por outros prestadores de serviços (companhias aéreas, guias turísticos, etc.);

iii) Penalidade de cancelamento. Uma penalidade pelo cancelamento da reserva, não superior a 15% do montante pago pelo Cliente.

10.2. A Pestana Travels reserva-se o direito de cancelar uma Viagem Organizada caso o número de participantes seja inferior ao mínimo exigido para a sua realização, devendo para o efeito informar o Cliente por escrito com, pelo menos, 5 dias de antecedência.

10.3. O cancelamento de quaisquer reservas efectuadas através do Site, que não sejam reservas de Viagens Organizadas, implica a perda, a favor da Pestana Travels, de quaisquer montantes pagos pelo Cliente, excepto se o contrário resultar expressamente do respectivo comprovativo de reserva.

11. IMPOSSIBILIDADE DE CUMPRIMENTO

Quando, por factos que não lhe sejam imputáveis, a Pestana Travels não possa cumprir obrigações resultantes do Contrato, deve notificar de imediato o Cliente dessa impossibilidade. Se a impossibilidade respeitar a alguma obrigação essencial, o Cliente pode rescindir o Contrato sem qualquer penalização ou aceitar por escrito uma alteração ao Contrato e eventual variação do preço. O Cliente deve comunicar à Pestana Travels a sua decisão no prazo de 4 dias úteis após a recepção da notificação da Pestana Travels, entendendo-se, caso nada diga, que está de acordo com a alteração.

12. RECLAMAÇÕES

12.1. Qualquer deficiência na execução do Contrato relativamente às prestações fornecidas por terceiros prestadores de serviços deve ser comunicada à Pestana Travels por escrito, no prazo máximo de 20 dias úteis após o termo dos serviços contratados pelo Cliente.

12.2. Para uma reclamação ser analisada pela Pestana Travels, deve ter sido previamente participada pelo Cliente ao prestador de serviços (Hotéis, companhias áreas, guias, etc.) durante o decurso da viagem ou estadia, exigindo dos mesmos os respectivos documentos comprovativos da ocorrência.

12.3. Em caso de reclamação apresentada por incumprimento dos serviços contratados à Pestana Travels, o Cliente pode accionar a caução prevista na legislação aplicável (desde que a reclamação se funde no incumprimento de deveres cuja observância esteja garantida pela referida caução), devendo para o efeito requerer ao Turismo de Portugal, I. P., que demande a entidade garante, apresentando:

i) Sentença judicial transitada em julgado, da qual conste o montante da dívida exigível, certa e líquida;

ii) Decisão arbitral;

iii) Requerimento solicitando intervenção da comissão arbitral, nos termos legislação aplicável, instruído com os elementos comprovativos dos factos alegados.

13. RESPONSABILIDADE

13.1. Quando se trate de Viagens Organizadas, a Pestana Travels responde perante os Clientes nos termos da lei, excepto se:

i) O cancelamento se baseie no facto de o número de participantes na Viagem Organizada ser inferior ao mínimo exigido e o Cliente for informado por escrito do cancelamento no prazo previsto no programa da viagem;

ii) O incumprimento não resulte de excesso de reservas e seja devido a situações de força maior ou caso fortuito, motivado por circunstâncias anormais e imprevisíveis, alheias à Pestana Travels, cujas consequências não possam ter sido evitadas apesar de todas as diligências feitas;

iii) For demonstrado que o incumprimento se deve à conduta do próprio Cliente ou à actuação imprevisível de um terceiro alheio ao fornecimento das prestações devidas pelo Contrato;

iv) Legalmente não puder accionar o direito de regresso relativamente a terceiros prestadores dos serviços previstos no Contrato, nos termos da legislação aplicável;

v) O prestador do Alojamento não puder ser responsabilizado pela deterioração, destruição ou subtracção de bagagens ou outros artigos.

13.2. No domínio das restantes viagens turísticas que não as referidas na cláusula 13.1, a Pestana Travels responde pela correcta emissão dos títulos de Alojamento e de transporte e ainda pela escolha culposa dos prestadores de serviços, excepto se estes forem sugeridos pelo Cliente.

13.3. Sempre que a Pestana Travels se limite a intervir como mera intermediária na reserva de serviços avulsos solicitados pelo Cliente, a responsabilidade da Pestana Travels perante o Cliente está limitada à decorrente da violação da obrigação de correcta emissão dos títulos de Alojamento e, quando aplicável, de Transporte. Adicionalmente, na venda de Viagens Turísticas que não sejam Viagens Organizadas, a responsabilidade da Pestana Travels está limitada à correcta emissão dos títulos de Alojamento e de Transporte e ainda pela escolha culposa dos prestadores de serviços, caso estes não tenham sido sugeridos pelo Cliente.

13.4. Na medida do permitido pela legislação aplicável, a Pestana Travels não é responsável pelos danos que possam ter origem em qualquer circunstância imprevista ou que esteja fora do seu controlo, e ainda, expressamente e a título exemplificativo: atrasos ou bloqueios da rede, interferências, interrupções, vírus, avarias e/ou desconexões no funcionamento operativo do Site ou nos aparelhos e equipamentos informáticos do Cliente, ou qualquer outro funcionamento anómalo do serviço de reservas por causas que escapem ao seu controlo e que impeçam a efectivação da reserva.

13.5. O Cliente responde perante a Pestana Travels nos termos da lei.

14. GARANTIAS

A responsabilidade da Pestana Travels, emergente das obrigações assumidas perante o Cliente, encontra-se garantida por um seguro de responsabilidade civil contratado junto da GENERALI – Companhia de seguros S.P.A, com a apólice n.º 0151 1001958 000, no montante de EUR 250.000,00 , e por uma caução prestada através de garantia bancária cujo beneficiário é o Turismo de Portugal no valor de EUR 45.052,63 , nos termos e com as exclusões estabelecidos na legislação aplicável.

15. INDEMNIZAÇÕES

15.1. A responsabilidade da Pestana Travels tem como limite o montante máximo exigível às entidades prestadoras dos serviços, nos termos da Convenção de Varsóvia, de 1929, sobre Transporte Aéreo Internacional, e da Convenção de Berna, de 1961, sobre Transporte Ferroviário.

15.2. No que concerne aos transportes marítimos, a responsabilidade das agências de viagens, relativamente aos seus clientes, pela prestação de serviços de Transporte, ou Alojamento, quando for caso disso, por empresas de transportes marítimos, no caso de danos resultantes de dolo ou negligência destas, terá como limites os seguintes montantes:

i) EUR 441.436,14, em caso de morte ou danos corporais;

ii) EUR 7.881, em caso de perda total ou parcial de bagagem ou da sua danificação;

iii) EUR 31.424,26, em caso de perda de veículo automóvel, incluindo a bagagem nele contida;

iv) EUR 10.375, em caso de perda de bagagem, acompanhada ou não, contida em veículo automóvel;

v) EUR 1.097,36, por danos na bagagem, em resultado da danificação do veículo automóvel.

15.3. Na medida do permitido pela legislação aplicável, e atento o disposto na cláusula 13.3, quando exista, a responsabilidade da Pestana Travels pela deterioração, destruição e subtracção de bagagens ou outros artigos, no Hotel onde se insere o Alojamento, enquanto o Cliente aí se encontrar alojado, tem como limites:

i) EUR 1396,63, globalmente;

ii) EUR 448,92 por artigo;

iii) O valor declarado pelo cliente, quanto aos artigos depositados à guarda do Hotel.

15.4. Na medida do permitido pela legislação aplicável, e atento o disposto na cláusula 13.3, a responsabilidade da Pestana Travels por danos não corporais encontra-se limitada ao valor correspondente a cinco vezes o preço do serviço vendido ao Cliente.

15.5. O cliente obriga-se a indemnizar a Pestana Travels por todos os danos emergentes (incluindo custos judiciais e honorários com advogados) da violação do disposto no Contrato e na lei, sem prejuízo do especialmente disposto nas cláusulas 9.4 e 10.3.

16. DADOS PESSOAIS

No preenchimento do formulário de reserva, serão solicitados ao Cliente determinados dados susceptíveis de o identificar (“Dados Pessoais”), que serão recolhidos pela Pestana Travels e processados pela Pestana Management – Serviços de Gestão, S.A., entidade subcontratada pela Pestana Travels para o efeito, no estrito cumprimento da lei e de acordo com o disposto na Política de Privacidade do Site.

17. CONTACTO

Todas as comunicações ou notificações no âmbito do Contrato devem ser efectuadas utilizando a informação prestada pelo Cliente através do formulário online. Qualquer alteração dos dados do Cliente e, bem assim, qualquer comunicação ou notificação dirigida pelo Cliente à Pestana Travels deve ser efectuada para os contactos seguintes, em função da localização geográfica do Hotel onde se insere o Alojamento:

i) Reserva de Alojamento em Hotel localizado em Portugal ou no resto do Mundo (com excepção de África e Brasil): guest@pestana.com;

ii) Reserva de Alojamento localizado no Brasil: reservas.br@pestana.com;

iii) Reserva de Alojamento em Hotel localizado em algum país de África (com excepção da África do Sul): reservas.africa@pestana.com;

iv) Reserva de Alojamento em Hotel localizado na África do Sul: res.southafrica@pestana.com.

18. DISPOSIÇÕES GERAIS

18.1. As Condições Gerais são aplicáveis apenas à reserva de serviços de viagens efectuada através do Site, sendo um complemento de eventuais condições particulares acordadas por escrito entre o Cliente e a Pestana Travels relativamente ao objecto do Contrato ou referidas numa área específica do Site para determinado produto ou serviço, incluindo o comprovativo de reserva (“Condições Particulares”), que são também parte integrante do Contrato.

18.2. O disposto nas Condições Particulares prevalece, em caso de conflito, sobre as Condições Gerais, prevalecendo sobre ambas quaisquer estipulações adicionais escritas especialmente acordadas entre o Cliente e a Pestana Travels e assinadas por ambos, que fazem parte do Contrato.

18.3. Celebrado o Contrato, este só pode ser alterado por escrito, por documento assinado pelo Cliente e pela Pestana Travels, o qual passa a ser parte integrante daquele.

18.4. O disposto nestas Condições Gerais pode ser alterado a todo o momento pela Pestana Travels para futuras relações jurídicas, sem aviso prévio. Como tal, sempre que efectuar uma reserva, e ainda que utilize com frequência o Site, deve lê-las na íntegra.

19. LEI E FORO APLICÁVEIS

O Contrato é regido pelas leis da República de Portugal.

Para a resolução de quaisquer litígios decorrentes da validade, celebração, execução, incumprimento, extinção ou interpretação do Contrato é exclusivamente competente o Tribunal da Comarca de Lisboa, sem prejuízo das normas legais imperativas aplicáveis.



**Free Software, Hell Yeah!**

[//]: # (These are reference links used in the body of this note and get stripped out when the markdown processor does its job. There is no need to format nicely because it shouldn't be seen. Thanks SO - http://stackoverflow.com/questions/4823468/store-comments-in-markdown-syntax)


   [dill]: <https://github.com/joemccann/dillinger>
   [git-repo-url]: <https://github.com/joemccann/dillinger.git>
   [john gruber]: <http://daringfireball.net>
   [df1]: <http://daringfireball.net/projects/markdown/>
   [markdown-it]: <https://github.com/markdown-it/markdown-it>
   [Ace Editor]: <http://ace.ajax.org>
   [node.js]: <http://nodejs.org>
   [Twitter Bootstrap]: <http://twitter.github.com/bootstrap/>
   [jQuery]: <http://jquery.com>
   [@tjholowaychuk]: <http://twitter.com/tjholowaychuk>
   [express]: <http://expressjs.com>
   [AngularJS]: <http://angularjs.org>
   [Gulp]: <http://gulpjs.com>

   [PlDb]: <https://github.com/joemccann/dillinger/tree/master/plugins/dropbox/README.md>
   [PlGh]: <https://github.com/joemccann/dillinger/tree/master/plugins/github/README.md>
   [PlGd]: <https://github.com/joemccann/dillinger/tree/master/plugins/googledrive/README.md>
   [PlOd]: <https://github.com/joemccann/dillinger/tree/master/plugins/onedrive/README.md>
   [PlMe]: <https://github.com/joemccann/dillinger/tree/master/plugins/medium/README.md>
   [PlGa]: <https://github.com/RahulHP/dillinger/blob/master/plugins/googleanalytics/README.md>


## Credits

* [Google Fonts - Open Sans, Fjalla One](https://fonts.google.com)
* [Font Awesome v4](http://fontawesome.io/)
* [Waypoint.js](http://imakewebthings.com/waypoints/)
* [Tiny Slider](https://github.com/ganlanyuan/tiny-slider)
* [Chart js](http://www.chartjs.org/)

## License

Use it freely but please do not republish, distribute or sell "as-is". [Read more about our license.](http://tympanus.net/codrops/licensing/)

## Misc

Follow Amie: [Website](https://www.amie-chen.com/), [Dribbble](http://www.dribbble.com/amiechen01), [Github](https://github.com/amiechen), [Twitter](https://twitter.com/hyper_yolo), [Medium](https://medium.com/@hyperyolo)

Follow Codrops: [Twitter](http://www.twitter.com/codrops), [Facebook](http://www.facebook.com/pages/Codrops/159107397912), [Google+](https://plus.google.com/101095823814290637419), [GitHub](https://github.com/codrops), [Pinterest](http://www.pinterest.com/codrops/)

[© Codrops 2018](http://www.codrops.com)

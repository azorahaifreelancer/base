# Nuno Santos - work!


| THEME  | LINK § URL |
| ------ | ---------- |
| 001    | [http://8848-001-preview.wp.dev.egorealestate.com] | + style.less
| 002    | [http://8848-002-preview.wp.dev.egorealestate.com] | + style.less
| 003    | [http://8848-003-preview.wp.dev.egorealestate.com] | + style.less
| 004    | [http://8848-004-preview.wp.dev.egorealestate.com] | + style.less
| 005    | [http://8848-005-preview.wp.dev.egorealestate.com] | + style.less
| 006    | [http://8848-006-preview.wp.dev.egorealestate.com] | + style.less
| 007    | [http://8848-007-preview.wp.dev.egorealestate.com] | + style.less
| 008    | [http://8848-008-preview.wp.dev.egorealestate.com] | + style.less
| 009    | [http://8848-009-preview.wp.dev.egorealestate.com] | + style.less
| 010    | [http://8848-010-preview.wp.dev.egorealestate.com] | + style.less
| 011    | [http://8848-011-preview.wp.dev.egorealestate.com] | + style.less
| 012    | [http://8848-012-preview.wp.dev.egorealestate.com] | + style.less
| 013    | [http://8848-013-preview.wp.dev.egorealestate.com] | + style.less
| 014    | [http://8848-014-preview.wp.dev.egorealestate.com] | + style.less
| 015    | [http://8848-015-preview.wp.dev.egorealestate.com] | + style.less
| 016    | [http://8848-016-preview.wp.dev.egorealestate.com] | + style.less
| 017    | [http://8848-017-preview.wp.dev.egorealestate.com] | + style.less
| 018    | [http://8848-018-preview.wp.dev.egorealestate.com] | + style.less + imovel.detalhe.php + empreendimento.detalhe.php
| 019    | [http://8848-019-preview.wp.dev.egorealestate.com] | + style.less
|				 |																										|
|				 |		    <do tema 20 ao 39 @JOAO-COSTA>							|
|				 |																										|
| 040    | [http://8848-040-preview.wp.dev.egorealestate.com] | + style.less
| 041    | [http://8848-041-preview.wp.dev.egorealestate.com] | + não existe
| 042    | [http://8848-042-preview.wp.dev.egorealestate.com] | + style.less
| 043    | [http://8848-043-preview.wp.dev.egorealestate.com] | + não existe
| 044    | [http://8848-044-preview.wp.dev.egorealestate.com] | + style.less + imovel.detalhe.php + empreendimento.detalhe.php
| 045    | [http://8848-045-preview.wp.dev.egorealestate.com] | + não existe
| 046    | [http://8848-046-preview.wp.dev.egorealestate.com] | + style.less
| 047    | [http://8848-047-preview.wp.dev.egorealestate.com] | + style.less
| 048    | [http://8848-048-preview.wp.dev.egorealestate.com] | + style.less
| 049    | [http://8848-049-preview.wp.dev.egorealestate.com] | + style.less
| 050    | [http://8848-050-preview.wp.dev.egorealestate.com] | + style.less
| 051    | [http://8848-051-preview.wp.dev.egorealestate.com] | + style.less
| 052    | [http://8848-052-preview.wp.dev.egorealestate.com] | + style.less
| 053    | [http://8848-053-preview.wp.dev.egorealestate.com] | + style.less
| 054    | [http://8848-054-preview.wp.dev.egorealestate.com] | + style.less
| 055    | [http://8848-055-preview.wp.dev.egorealestate.com] | + não existe
| 056    | [http://8848-056-preview.wp.dev.egorealestate.com] | + style.less
| 057    | [http://8848-057-preview.wp.dev.egorealestate.com] | + style.less
| 058    | [http://8848-058-preview.wp.dev.egorealestate.com] | + não está online
| 059    | [http://8848-059-preview.wp.dev.egorealestate.com] | + style.less
| 060    | [http://8848-060-preview.wp.dev.egorealestate.com] | + style.less
| 061    | [http://8848-061-preview.wp.dev.egorealestate.com] | + style.less
| 062    | [http://8848-062-preview.wp.dev.egorealestate.com] | + style.less
| 063    | [http://8848-063-preview.wp.dev.egorealestate.com] | + style.less
|				 |		       <tema 64 @JOAO-COSTA>	      						|
| 065    | [http://8848-065-preview.wp.dev.egorealestate.com] | + style.less
|				 |		       <tema 66 @JOAO-COSTA>	      						|


## FeatureNewDataProtection

## Plugins que eu aterei

.PostJobsList
.cobertura_BasicPropertySellU08


## Personalisadas que eu alterei
-castelhana-
http://customego14357.wp.dev.egorealestate.com/
http://www.castelhana.pt/

-jll-
http://customego-9987_1.wp.dev.egorealestate.com/
http://residential.jll.pt/

-caimoveis
http://customego-caimoveis.wp.dev.egorealestate.com/
http://www.caimoveis.pt/

## php com divs
```sh

<? if(empty(Plugin::GetId("FeatureNewDataProtection")) === false ){ ?>
  <div class="fieldBox dataprotection">
    <div class="fieldValue">
      <input class="checkbox" type="checkbox" id="acceptTerms" name="acceptTerms" value="true" validatemessage="{AVISO_ACEITAR_POLITICA_DE_PRIVACIDADE}" title="{ACEITAR_POLITICA_DE_PRIVACIDADE} {TERMOS_E_CONDICOES} {E_A} {POLITICA_PRIVACIDADE}" validate="empty"/>
      <label for="acceptTerms">{DECLARO_QUE_LI}</label> <a class="link2" style="color:#999999" href="javascript:openTermsConditions()">{TERMOS_E_CONDICOES}</a> <label for="acceptTerms">{E_A}</label>
      <a class="link2" style="color:#999999" href="javascript:openPrivacyPolicy()">{POLITICA_PRIVACIDADE}</a>
    </div>
  <div class="fieldValue">
    <input class="checkbox" id="acceptMaisInfo" type="checkbox" name="acceptMaisInfo" value="true" title="{ACEITO_RECEBER_MAIS_INFORMACOES}" validate="empty"/>
    <label for="acceptMaisInfo">{ACEITO_RECEBER_MAIS_INFORMACOES}</label>
  </div>
</div>

<? } elseif(empty(Plugin::GetId("FeatureDataProtectionDisclaimer")) === false || empty(Plugin::GetId("FeatureGenericDisclaimer")) === false && Agency::GetCountry() == 724 || Settings::GetDefaultLanguage() == 'ES-ES' ){ ?>
  <input type="checkbox" class="checkbox" name="acceptTerms" value="true" validatemessage="{AVISO_ACEITAR_POLITICA_DE_PRIVACIDADE}" validate="empty"/>
  <span><a class="link" style="color:#999999" href="javascript:openDataDisclaimer()">{ACEITAR_POLITICA_DE_PRIVACIDADE}</a></span>
<? } else if(File::ExistsLocal('disclaimer.php')) { ?>
  <input type="checkbox" name="acceptTerms" value="true" validatemessage="{AVISO_ACEITAR_POLITICA_DE_PRIVACIDADE}" validate="empty"/>
  <span><a class="link" style="color:#999999" href="javascript:window.openDialog('disclaimer.php?lang=<?=Settings::GetLanguage()?>')">{ACEITAR_POLITICA_DE_PRIVACIDADE}</a></span>
<? } ?>

```

## php com tabelas
```sh

  <? if(empty(Plugin::GetId("FeatureNewDataProtection")) === false ){ ?>

  <tr>
    <td width="100%" colspan="2">
      <div class="fieldBox dataprotection">
        <div class="fieldValue">
          <input class="checkbox" type="checkbox" id="acceptTerms" name="acceptTerms" value="true" validatemessage="{AVISO_ACEITAR_POLITICA_DE_PRIVACIDADE}" title="{ACEITAR_POLITICA_DE_PRIVACIDADE} {TERMOS_E_CONDICOES} {E_A} {POLITICA_PRIVACIDADE}" validate="empty"/>
          <label for="acceptTerms">{DECLARO_QUE_LI}</label> <a class="link2" style="color:#999999" href="javascript:openTermsConditions()">{TERMOS_E_CONDICOES}</a> <label for="acceptTerms">{E_A}</label>
          <a class="link2" style="color:#999999" href="javascript:openPrivacyPolicy()">{POLITICA_PRIVACIDADE}</a>
        </div>
        <div class="fieldValue">
          <input class="checkbox" id="acceptMaisInfo" type="checkbox" name="acceptMaisInfo" value="true" title="{ACEITO_RECEBER_MAIS_INFORMACOES}" validate="empty"/>
          <label for="acceptMaisInfo">{ACEITO_RECEBER_MAIS_INFORMACOES}</label>
        </div>
      </div>
    </td>
  </tr>

  <? } elseif(empty(Plugin::GetId("FeatureDataProtectionDisclaimer")) === false || empty(Plugin::GetId("FeatureGenericDisclaimer")) === false && Agency::GetCountry() == 724 || Settings::GetDefaultLanguage() == 'ES-ES' ){ ?>

  <tr>
    <td>
      <input type="checkbox" class="checkbox" name="acceptTerms" value="true" validatemessage="{AVISO_ACEITAR_POLITICA_DE_PRIVACIDADE}" validate="empty"/>
      <span><a class="link" style="color:#999999" href="javascript:openDataDisclaimer()">{ACEITAR_POLITICA_DE_PRIVACIDADE}</a></span>
    </td>
  </tr>

  <? } else if(File::ExistsLocal('disclaimer.php')) { ?>

  <tr>
    <td>
      <input type="checkbox" name="acceptTerms" value="true" validatemessage="{AVISO_ACEITAR_POLITICA_DE_PRIVACIDADE}" validate="empty"/>
      <span><a class="link" style="color:#999999" href="javascript:window.openDialog('disclaimer.php?lang=<?=Settings::GetLanguage()?>')">{ACEITAR_POLITICA_DE_PRIVACIDADE}</a></span>
    </td>
  </tr>

  <? } ?>        
```



## css
```sh

/* protecao de dados*/

.FeatureNewDataProtection {
	a {
		text-decoration: underline !important;
		&:hover {
			transition: color .75s ease 0s;
			color: @cor-principal !important;
		}
	}
}

.boxChecks {
	text-align: left !important;
	a{
		&:hover {
			transition: color .75s ease 0s;
			color: @cor-principal !important;
		}
	}
}

.dataprotection {
  width: 100% !important;
	a{
		color: #fff !important;
		font-weight: bold !important;
		&:hover {
			transition: color .75s ease 0s;
			color: @cor-principal !important;
		}
	}
}

```
## efects
```sh

.transition {
    -webkit-transition: color .75s ease 0s;
    -moz-transition: color .75s ease 0s;
    -ms-transition: color .75s ease 0s;
    -o-transition: color .75s ease 0s;
    transition: color .75s ease 0s;
}
```
## simple
```sh
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
```

## PHP + JS
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

##whatsup
```sh
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+351 938 223 217", // WhatsApp number
            call_to_action: "", // Call to action
            position: "right", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
```

**markups!**
   [bookmarks]: <https://github.com/azorahaifreelancer/base/blob/gh-pages/markups/bookmarks.html>
   [politicas-de-privacidade]: <https://github.com/azorahaifreelancer/base/blob/gh-pages/markups/politicas-de-privacidade.md>
   [termos-e-condicoes]: <https://github.com/azorahaifreelancer/base/blob/gh-pages/markups/termos-e-condicoes.md>

 **readme!**
    [bookmarks]: <https://github.com/azorahaifreelancer/base/blob/gh-pages/markups/bookmarks.html>
    [politicas-de-privacidade]: <https://github.com/azorahaifreelancer/base/blob/gh-pages/markups/politicas-de-privacidade.md>
    [termos-e-condicoes]: <https://github.com/azorahaifreelancer/base/blob/gh-pages/markups/termos-e-condicoes.md>


**stylesheet!**
   [bookmarks]: <https://github.com/azorahaifreelancer/base/blob/gh-pages/markups/bookmarks.html>
   [politicas-de-privacidade]: <https://github.com/azorahaifreelancer/base/blob/gh-pages/markups/politicas-de-privacidade.md>
   [termos-e-condicoes]: <https://github.com/azorahaifreelancer/base/blob/gh-pages/markups/termos-e-condicoes.md>

**js!**
 [bookmarks]: <https://github.com/azorahaifreelancer/base/blob/gh-pages/markups/bookmarks.html>
 [politicas-de-privacidade]: <https://github.com/azorahaifreelancer/base/blob/gh-pages/markups/politicas-de-privacidade.md>
 [termos-e-condicoes]: <https://github.com/azorahaifreelancer/base/blob/gh-pages/markups/termos-e-condicoes.md>


**php!**
  [bookmarks]: <https://github.com/azorahaifreelancer/base/blob/gh-pages/markups/bookmarks.html>
  [politicas-de-privacidade]: <https://github.com/azorahaifreelancer/base/blob/gh-pages/markups/politicas-de-privacidade.md>
  [termos-e-condicoes]: <https://github.com/azorahaifreelancer/base/blob/gh-pages/markups/termos-e-condicoes.md>

	    []: <https://github.com/>
	    []: <https://github.com/>
	    []: <http://>


## trocate dois elementos inline
```sh
 var width=  $('.BasicPropertySlideshowTriplePlusU12 .location').width();      
 $('.BasicPropertySlideshowTriplePlusU12 .nat').css({ 'width': 'calc(100% - ' + width+ 'px - 30px)' });  
```
css do truncate
```sh
white-space: nowrap;  
text-overflow: ellipsis;  
overflow: hidden;
```



## Credits

* [Google Fonts](https://fonts.google.com)
* [Icommon](https://icomoon.io/)


## License

[© Nuno Santos 2018](http://)

# Nuno Santos - work Every Day!!

![Ego](./screenshot.jpg)

## Templates

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
|				 |																										|
|				 |																										|



## FeatureNewDataProtection

1.  Proteção de Dados [](https:///))
2.  Termos e condições.
3.  Politica de Privacidade


##CSS
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

	 [//]: # (These are reference links used in the body of this note and get stripped out when the markdown processor does its job. There is no need to format nicely because it shouldn't be seen. Thanks SO - http://stackoverflow.com/questions/4823468/store-comments-in-markdown-syntax)


	    []: <https://github.com/>
	    []: <https://github.com/>
	    []: <http://>


## Credits

* [Google Fonts](https://fonts.google.com)
* [Icommon](http://fontawesome.io/)


## License

[© Nuno Santos 2018](http://)

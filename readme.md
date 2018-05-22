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
| 018    | [http://8848-018-preview.wp.dev.egorealestate.com] | + style.less + imovel.detalhe.php
| 019    | [http://8848-019-preview.wp.dev.egorealestate.com] | + style.less

-		-		-		--		-		-		--		-		-		--		-		-		--		-		-		--		-
| 041    | [http://8848-041-preview.wp.dev.egorealestate.com] | + style.less



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


# Pesquisar

[![mysql_real_escape_string ](https://)

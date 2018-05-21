FeatureNewDataProtection
========================

##templates

FEA   TEM  URL                                                     NOTAS
===   ===  ===                                                     =====
[x]   000  (http://8848-000-preview.wp.dev.egorealestate.com)      #feito
[x]   001  (http://8848-001-preview.wp.dev.egorealestate.com)      #feito
[x]   002  (http://8848-002-preview.wp.dev.egorealestate.com)      #feito
[x]   003  (http://8848-003-preview.wp.dev.egorealestate.com)      #feito
[x]   004  (http://8848-004-preview.wp.dev.egorealestate.com)      #
[ ]   005  (http://8848-005-preview.wp.dev.egorealestate.com)      #
[ ]   006  (http://8848-006-preview.wp.dev.egorealestate.com)      #
[ ]   007  (http://8848-007-preview.wp.dev.egorealestate.com)      #
[ ]   008  (http://8848-008-preview.wp.dev.egorealestate.com)      #
[ ]   009  (http://8848-009-preview.wp.dev.egorealestate.com)      #
[ ]   010  (http://8848-010-preview.wp.dev.egorealestate.com)      #



/* protecção de dados 5/2018 */

.boxChecks {
	background: #000 !important;
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

/* imóvel detalhe / empreendimento detalhe */
/* função para validar se têm a Feature para estilizar poutros elementos fora da FeatureNewDataProtection */

<? if(empty(Plugin::GetId("FeatureNewDataProtection")) === false ){ ?>  
<script>
$(document).ready( function() {    
 /* trocar os elementos sitio */
    $(".pluginListItem[class*='ContactForm']").addClass("Protdados");
});
</script>
<? }?>

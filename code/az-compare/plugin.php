<?php class AdvancedCompareCountU0X extends Plugin {

	public function Output() {

		$nRows = $this->GetSetting('rows', 3);
		$nTitle = $this->GetSettingMLS('title', '');
		$sIdList = trim(Request::Value('cmp'),",");
		$newTitle = htmlentities($nTitle);?>

		<script type="text/javascript">
			document.init(function(){
				document.getElementById('cmpcount').innerHTML = getCompareCount();
					setInterval(function(){
						document.getElementById('cmpcount').innerHTML = getCompareCount();
					},100);
			});
		</script>

		<div class="frame">
			<a class="link" href="javascript:void(0);"/>
				<div class="cmp-container">
					<div id="cmpcount">0</div>
					<span id="cmp"></span>
				</div>
			</a>

			<div id="listagem" class="listagem" style="display:none"></div>

			<script>

        $('.<?=get_class($this)?> .link').not('.close').click(function(event){

				if(!$(".<?=get_class($this)?> #listagem").is(":visible")){

				$.ajax({

				url: "<?= Server::MapSysUrl('plugins/'.get_class($this).'/lista_cmp.php?&title='.$newTitle.'&nre='.$nRows).'&lang='.Settings::GetLanguage().'&total=0';?>",

				success: function(result){

					$(".<?=get_class($this)?> #listagem").html(result);

 					$('.<?=get_class($this)?> #listagem').show();

					$(".<?=get_class($this)?> #imo_list .close").click(function() {

						$(this).closest(".recordItem").remove();

						if(getFavoritesCount() <= 1){

							$('.<?=get_class($this)?> #listagem').hide();

						}

					});

				}});

					event.stopPropagation();

				} else { $('.<?=get_class($this)?> #listagem').hide(); }

			});

 			$(document).ready(function() {

				$("#compare .cmpoff").click(function() {

					$('#listagem').hide();

				});

 				$('.<?=get_class($this)?> .listagem').click(function(e) {

					e.stopPropagation();

				});

			});
         </script>
		</div><?
	}
}

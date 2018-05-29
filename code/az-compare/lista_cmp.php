<?php include_once($_SERVER['DOCUMENT_ROOT'].'/index.php');$imagesURL = "{SYSLINK_MEDIA_140X105}";?>

<ul class="recordList"><?
  $sIdList = trim(Request::Value('cmp'),",");
    if($sIdList)
      $sParams = 'ril='.$sIdList;
        else
          $sParams = 'ril=-1';

          $sNre = Request::Value('nre');
          $nTitle = Request::Value('title');
          $oImoveis = Property::GetList('fulloverride=1&nre=99&'.$sParams);
          $nTotal = StringExt::ToInt($oImoveis->Total());?>

    <h3 class="title main-title">{A_COMPARAR} <span id="imoCount"></span> {IMOVEIS}...</h3>
    <ul class="menu"><? if(File::ExistsLocal('listagem-comparar.php')){?>
      <li class="vermais" onclick="window.openDialog('listagem-comparar.php?lang=<?=Settings::GetLanguage();?>&ril=<?=$sIdList?>')">{COMPARAR}</li> <? }
      else{?><li class="vermais" onclick="window.openDialog('/sys/remote/recommend/listagem-comparar.php?lang=<?=Settings::GetLanguage();?>&ril=<?=$sIdList?>')">{COMPARAR}</li><? }?>
    </ul>
    <ul id="imo_list"><? if($nTotal>0){
      foreach ($oImoveis as $oImovel){

      $sPhoto = '/sys/plugins/_res/nopic.png';
      if ($oImovel->Foto!="")
        $sPhoto = $imagesURL.$oImovel->Foto;?>

      <li class="recordItem" id="<?=$oImovel->ID?>">
        <a class="link" href="<?=$oImovel->GetSysLink()?>" imoid="<?=$oImovel->ID?>" target="_parent" title="<?=$oImovel->GetSysLinkTitle()?>">
          <div class="thumbnailframe">
            <img class="thumbnail" src="<?=$sPhoto?>" title="<?=$oImovel->GetSysLinkTitle()?>" alt="<?=$oImovel->GetSysLinkTitle()?>" onerror="this.src='/sys/plugins/_res/nopic.png'"/>
          </div>
          <div class="tarp">
            <h3 class="title"><?=$oImovel->Natureza . ' ' .$oImovel->Tipologia?></h3>
            <div class="subtitle"><?=$oImovel->Concelho?></div>
            <div class="text"><span class="negocio"><?=$oImovel->Negocio .'</span> '. $oImovel->Preco?></div>
          </div>
            </a><? if(File::Exists(Settings::Value('THEME_PATH')."/images/close_white.png")) {?>
            <img class="close" title="{COMPARAR}" src="images/close_white.png" cmp="<?=$oImovel->CLID?>, images/close_white.png" style="cursor:pointer"/>
          <? } else{ ?>
          <img class="close" title="{COMPARAR}" src="/sys/resources/close_white.png" cmp="<?=$oImovel->CLID?>, /sys/resources/close_white.png" style="cursor:pointer"/><?}?>
      </li><? ViewClickSystem::PropertyView($oImovel->ID); } }
        else { ?> <li class="recordItem noResult">{NAO_FORAM_ENCONTRADOS_IMOVEIS}
          <img class="close" title="{COMPARAR}" src="/sys/resources/close_white.png" style="cursor:pointer"/>
      </li><?}
        if($nTotal>$sNre){?><?}?>
    </ul>
    <button class="limpar" type="reset">{LIMPAR_TUDO} </button>
    <script>
    document.init(function(){
      document.getElementById('imoCount').innerHTML = getCompareCount();
        setInterval(function(){
          document.getElementById('imoCount').innerHTML = getCompareCount();
          },100);});
  </script>

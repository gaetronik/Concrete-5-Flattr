<p>Please enter flattr datas</p>

<?php echo $form->label('title', 'title');?>
<?php echo $form->text('title', $title, array('style' => 'width: 320px'));?>
<?php echo $form->label('url', 'URL');?>
<?php echo $form->text('url', $controller->url); ?>
<?php echo $form->label('description', 'description');?>
<?php echo $form->text('description', $description,array('style' => 'width: 320px'));?>
<?php echo $form->label('tags', 'tags');?>
<?php echo $form->text('tags', $tags);?>
<?php echo $form->label('hidden', 'hide');?>
<?php echo $form->checkbox('hidden','hidden',$hidden );?>
<?php echo $form->label('uid', 'flatter uid');?>
<?php echo $form->text('uid',$uid );?>
<?php echo $form->label('category', 'Category');?>
<?php 
$catJS='{"text":"Written text","images":"Images","video":"Video","audio":"Audio","software":"Software","rest":"The rest"}';
echo $form->select('category', json_decode($catJS,TRUE), $category);?>
<?php echo $form->label('language', 'Language');?>
<?php
$langJS='{"sq_AL":"Albanian","ar_DZ":"Arabic","be_BY":"Belarusian","bg_BG":"Bulgarian","ca_ES":"Catalan","zh_CN":"Chinese","hr_HR":"Croatian","cs_CZ":"Czech","da_DK":"Danish","nl_NL":"Dutch","en_GB":"English","et_EE":"Estonian","fi_FI":"Finnish","fr_FR":"French","de_DE":"German","el_GR":"Greek","iw_IL":"Hebrew","hi_IN":"Hindi","hu_HU":"Hungarian","is_IS":"Icelandic","in_ID":"Indonesian","ga_IE":"Irish","it_IT":"Italian","ja_JP":"Japanese","ko_KR":"Korean","lv_LV":"Latvian","lt_LT":"Lithuanian","mk_MK":"Macedonian","ms_MY":"Malay","mt_MT":"Maltese","no_NO":"Norwegian","pl_PL":"Polish","pt_PT":"Portuguese","ro_RO":"Romanian","ru_RU":"Russian","sr_RS":"Serbian","sk_SK":"Slovak","sl_SI":"Slovenian","es_ES":"Spanish","es_GL":"Galician","sv_SE":"Swedish","th_TH":"Thai","tr_TR":"Turkish","uk_UA":"Ukrainian","vi_VN":"Vietnamese","fa_FA":"Persian"}';
$arr=explode("/",$c->getCollectionPath());
$begLang=$arr[1];
$langs=json_decode($langJS,TRUE);
foreach($langs as $k=>$e){
	if(strncmp($k,$begLang,strlen($begLang))==0){
		$def=$k;
		break;
	}
}
echo $form->select('language',$langs , $language);?>

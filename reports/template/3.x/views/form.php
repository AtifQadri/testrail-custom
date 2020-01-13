<? $tab = 1 ?>

<p><?= lang('reports_tmpl_form_intro') ?></p>

<div class="tabs">
	<div class="tabHeader">
		<a href="javascript:void(0)" class="tab1 <?= $tab == 1 ? 'current' : '' ?>" rel="1"
			onclick="App.Tabs.activate(this)"><?= lang('reports_tmpl_form_tab1') ?></a>
		<a href="javascript:void(0)" class="tab2 <?= $tab == 2 ? 'current' : '' ?>" rel="2"
			onclick="App.Tabs.activate(this)"><?= lang('reports_tmpl_form_tab2') ?></a>
	</div>
	<div class="tabBody">
		<div class="tab tab1 <?= $tab != 1 ? 'hidden' : '' ?>">
			<?php lang('reports_tmpl_form_tab1') ?>
		</div>
		<div class="tab tab2 <?= $tab != 2 ? 'hidden' : '' ?>">
			<?php lang('reports_tmpl_form_tab2') ?>
		</div>
	</div>
</div>



  <div class="profile_content">

    <?= $this->element('navigation/profile_top', array($d)); ?>

    <div id="profile">
      <div id="reputation">
        <div id="header">
			<? if (!$set->anon) { ?>
				<div class="sub">
					<?= $this->Profile->activeTitle($d->titles, $d->name); ?>
				</div>
			<? } else { ?>
				<div class="sub">
				  <?= __('Anonymous Profile'); ?>
				</div>
			<? } ?>
				
			<? if (!$set->anon) { ?>
			  	<? if (@$d->guild->name) { ?>
			    	<div class="sub2"> 
			    		&lt;<a href="<?= $set->lite_url . "/g"; ?>"><?= $d->guild->name; ?></a>&gt;
			    	</div>
				<? } ?>
			<? } else { ?>
				<div class="sub2">
			    	&lt;Anonymous&gt;
			  	</div>
			<? } ?>

			<div class="sub3">
				<?= $d->level; ?> <?= $this->Profile->getGender($d->gender); ?> <?= $this->Profile->getRace($d->race); ?> <?= $this->Profile->getClass($d->class); ?>
			</div>
        </div>

        <div id="content">
        
        	<? foreach ($grid as $k=>$v) { ?>
				<div data-id="<?=$k;?>" id="rep_head_" class="rep_header"><?= $this->Profile->getReputationLabel($k); ?></div>
        		<div id="repbox_<?=$k;?>">
				<? 
					foreach ($v as $r) { 
						echo $this->Profile->getReputation($r->name, $r->value, $r->max, $k);
					}
				?>
				</div>
			<? } ?>
 
        </div>

      </div>
    </div>

    	<?= $this->element('navigation/profile_bot', array($d)); ?>
    </div>

    <div class="page_ad">
      <?= $this->Common->show_ad("homepage","tall"); ?>
      <br /><br />
      <?= $this->Common->show_ad("homepage","tallhouse"); ?>                 
    </div>
  

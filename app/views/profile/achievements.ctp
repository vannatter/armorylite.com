

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
        	<? 
        		$tot = $d->achievementPoints; 
        	?>
        	<? foreach ($grid as $k=>$v) { ?>
        	
        		<div id="achievement_<?= $v['Achievements']['id']; ?>" class="achievement_box">
        		
        			<div class="icon"><img src="<?= $v['Achievements']['web_icon']; ?>" /></div>
        			
        			<div class="info">
        				<div class="title">
        					<?= $v['Achievements']['name']; ?>
        				</div>
        				<div class="desc">
        					<?= $v['Achievements']['text']; ?>
        				</div>
        				<? if ($v['Achievements']['reward']) { ?>
	        				<div class="reward">
	        					<?= $v['Achievements']['reward']; ?>
	        				</div>
        				<? } ?>
        			</div>
        			
        			<div class="pts">
        				<div class="pt-this"><?= $v['Achievements']['points']; ?></div>
						<div class="pt-math"><?= $tot; ?></div>
        			</div>
        			
        		</div>
        		
        		<? $tot = $tot - $v['Achievements']['points']; ?>
			<? } ?>
 
        </div>

      </div>
    </div>

    	<?= $this->element('navigation/profile_bot', array($d)); ?>
    </div>

    <div class="page_ad">
      <?= $this->Common->show_ad("homepage","tall"); ?>
    </div>
  

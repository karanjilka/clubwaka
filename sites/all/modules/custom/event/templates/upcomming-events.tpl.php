<div class="events">
<?php foreach($nodes as $node): ?>
<div class="item">
	<h3 class="title"><?php print $node->title; ?></h3>
	<div class="time"><em>
	<?php print date('M d Y',strtotime($node->field_event_date['und'][0]['value'])); ?>
	<?php if(!empty($node->field_event_date['und'][0]['value2'])): ?>
		to <?php print date('M d Y',strtotime($node->field_event_date['und'][0]['value2'])); ?>
	<?php endif; ?>
	</em></div>
	<div class="Detail"><?php print $node->body['und']['0']['value']; ?></div>
	<div class="location">
		<div><?php print $node->field_event_location['und'][0]['thoroughfare']; ?>, <?php print $node->field_event_location['und'][0]['premise']; ?></div>
		<div><?php print $node->field_event_location['und'][0]['locality'].', '.$node->field_event_location['und'][0]['administrative_area'].', '.$node->field_event_location['und'][0]['country']; ?></div>
		</div><?php print $node->field_event_location['und'][0]['postal_code']; ?></div>
	</div>
</div>
<?php endforeach; ?>
</div>

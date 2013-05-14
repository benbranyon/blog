<ul class="rss">
    <?php foreach($tweets as $tweet): ?>
	<li>
	    <p><?php echo $tweet->text; ?></p>
	    <span class="date"><em><?php echo format_date($tweet->created_at, Settings::get('date_format') . ' h:i'); ?></em></span>
	    <span class="view-full-tweet"><?php echo anchor('https://twitter.com/' . $username . '/status/' . $tweet->id_str, 'View Full Tweet', 'target="_blank"');?></span>
	</li>
    <?php endforeach; ?>
</ul>

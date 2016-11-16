<?php if( empty($this->request->session()->read('device.timezone'))  ): ?>
<?=  $this->Html->script('Timezone.jstz-1.0.4.min')?>
<?=  $this->Html->script('Timezone.moment.min')?>
<?=  $this->Html->script('Timezone.moment-timezone')?>
<?=  $this->Html->script('Timezone.moment-timezone-data')?>
<script type="text/javascript">
$(document).ready(function () {
    var tz = jstz.determine();
    var timezone = tz.name();
    //alert(timezone);
    
    $.ajax({
        type: "Post",
        url: "<?php echo $this->Url->build(array('plugin' => 'timezone', 'controller'=>'device', 'action'=>'user')) ?>",
        data: {timezone:timezone},
        success: function(response){
            location.reload();
        }
    });
});
</script>
<?php endif; ?>


<div class="row">
<div class="col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
	<div class="panel panel-primary">
	  <div class="panel-heading">
	    <h3 class="panel-title">Giftcard Number: <?php echo $card->id;?></h3>
	  </div>
	  <div class="panel-body">

<form method="POST" action="<?php echo site_url("manage/cards/edit/{$card->id}");?>" name="add-frm">
  <fieldset>
    <div class="form-group">

<?php if ($this->session->flashdata('res')): ?>
	<?php $message = $this->session->flashdata('res');?>
	<?php if( $message['status'] == 0):?>
		<div class="alert alert-success" role="alert">Well done! You successfully <?php $message['msg'];?> it</div>
	<?php else:?>
		<div class="alert alert-danger" role="alert">Oh snap! somethings happended</div>
	<?php endif;?>
<?php endif;?>

      <label for="value">Value</label>
		<div class="form-group input-group">
		    <span class="input-group-addon">$</span>
		    <input type="number" max="999" min="1" class="form-control text-right" placeholder="100" name="value" id="value" value="<?php echo ($card) ? $card->value : '' ;?>">
		</div>
    </div>
    <div class="form-group">
      <label for="phone">Customer</label>
      <input type="text" class="form-control phone" pattern="\d{3}[\-]\d{3}[\-]\d{4}" placeholder="xxx-xxx-xxxx" name="phone" id="phone" value="<?php echo ($card) ? $card->phone : '' ;?>">
    </div>

    <button type="submit" class="btn btn-primary pull-right">Update</button>
  </fieldset>
</form>

	  </div>
	</div>
</div>
</div>

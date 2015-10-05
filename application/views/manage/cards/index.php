
<div class="col-lg-12">
<a href="<?php echo site_url('manage/cards/add');?>" type="button" class="btn btn-success pull-right"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
<div style="clear:both;"></div>

    <div class="table-responsive">

            <? if (count($cards) == 0) : ?>
            <br /><center>There are currently no cards</center><br />
            <? else : ?>
            <div class="table-responsive">
                <table id="card-table" class="table table-striped b-t b-light">
                    <thead>
                        <tr>
                            <th>Card ID</th>
                            <th>Phone</th>
                            <th>Created</th>
                            <th>Value</th>
                            <th style="width: 185px !important;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <? foreach ($cards as $b) : ?>
                        <tr>
                            <td><?=$b->id;?></td>
                            <td><?=$b->phone;?></td>
                            <td><?=$b->created;?></td>
                            <td><?=$b->value;?></td>
                            <td>
                                <a href="<?php echo site_url("manage/cards/edit/{$b->id}/");?>">
                                    <div class="btn btn-default btn-sm"><i class="fa fa-pencil"></i></div>
                                </a>
                                <div class="btn btn-default btn-sm delete-card-btn" data-id="<?=$b->id?>"><i class="fa fa-trash-o"></i></div>
                            </td>
                        </tr>
                        <? endforeach; ?>
                    </tbody>
                </table>
            </div>
            <? endif; ?>

    </div>

</div>

<script type="text/javascript">
$(function() {
    var cardDt = $('#card-table').DataTable({
        "sDom": "<'row'<'col-sm-6'l><'col-sm-6'f>r>t<'row'<'col-sm-6'i><'col col-sm-6'p>>",
        "iDisplayLength": 15,
        "aLengthMenu": [[15, 25, 50, -1], [15, 25, 50, "All"]],
        "sPaginationType": "full_numbers",
        "aaSorting": [[ 0, "asc" ]],
    });

    $('.delete-card-btn').click(function() {
        if (confirm('Are you sure you want to remove this card?')) {
            var row = $(this).parent().parent();
            $.ajax({
                type: 'GET',
                url: 'cards/delete/' + $(this).attr('data-id') + '/',
                success: function(response) {
                    row.remove();
                }
            });
        }
    });
});
</script>
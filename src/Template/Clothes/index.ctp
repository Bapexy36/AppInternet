<?php
$urlToRestApi = $this->Url->build('/api/clothes', true);
echo $this->Html->scriptBlock('var urlToRestApi = "' . $urlToRestApi . '";', ['block' => true]);
echo $this->Html->script('Clothes/index', ['block' => 'scriptBottom']);
?>

<div class="container">
    <div class="row">
        <div class="panel panel-default clothes-content">
            <div class="panel-heading">Clothes <a href="javascript:void(0);" class="glyphicon glyphicon-plus" id="addLink" onclick="javascript:$('#addForm').slideToggle();">Add</a></div>
            <div class="panel-body none formData" id="addForm">
                <h2 id="actionLabel">Add Clothes</h2>
                <form class="form" id="clotheAddForm" enctype='application/json'>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" id="name"/>
                    </div>
                    <a href="javascript:void(0);" class="btn btn-warning" onclick="$('#addForm').slideUp();">Cancel</a>
                    <a href="javascript:void(0);" class="btn btn-success" onclick="clotheAction('add')">Add Clothe</a>
                </form>
            </div>
            <div class="panel-body none formData" id="editForm">
                <h2 id="actionLabel">Edit Clothe</h2>
                <form class="form" id="clotheEditForm" enctype='application/json'>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" id="nameEdit"/>
                    </div>
                    <input type="hidden" class="form-control" name="id" id="idEdit"/>
                    <a href="javascript:void(0);" class="btn btn-warning" onclick="$('#editForm').slideUp();">Cancel</a>
                    <a href="javascript:void(0);" class="btn btn-success" onclick="clotheAction('edit')">Update Clothe</a>
                </form>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th></th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="clotheData">
                    <?php
                    $count = 0;
                    foreach ($clothes as $clothe): $count++;
                        ?>
                        <tr>
                            <td><?php echo '#' . $count; ?></td>
                            <td><?php echo $clothe['name']; ?></td>
                            <td><?php echo $clothe['price']; ?></td>
                            <td>
                                <a href="javascript:void(0);" class="glyphicon glyphicon-edit" onclick="editClothe('<?php echo $clothe['id']; ?>')"></a>
                                <a href="javascript:void(0);" class="glyphicon glyphicon-trash" onclick="return confirm('Are you sure to delete data?') ? clotheAction('delete', '<?php echo $clothe['id']; ?>') : false;"></a>
                            </td>
                        </tr>
                        <?php
                    endforeach;
                    ?>
                    <tr><td colspan="5">No more clothes found......</td></tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


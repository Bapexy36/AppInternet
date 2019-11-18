function getClothes() {
    $.ajax({
        type: 'GET',
        url: urlToRestApi,
        dataType: "json",
        success:
                function (clothes) {
                    var clotheTable = $('#clotheData');
                    clotheTable.empty();
                    var count = 1;
                    $.each(clothes.data, function (key, value)
                    {
                        var editDeleteButtons = '</td><td>' +
                                '<a href="javascript:void(0);" class="glyphicon glyphicon-edit" onclick="editClothe(' + value.id + ')"></a>' +
                                '<a href="javascript:void(0);" class="glyphicon glyphicon-trash" onclick="return confirm(\'Are you sure to delete data?\') ? clotheAction(\'delete\', ' + value.id + ') : false;"></a>' +
                                '</td></tr>';
                        clotheTable.append('<tr><td>' + count + '</td><td>' + value.name + '</td><td>' + editDeleteButtons);
                        count++;
                    });

                }
    });
}

/* Function takes a jquery form
 and converts it to a JSON dictionary */
function convertFormToJSON(form) {
    var array = $(form).serializeArray();
    var json = {};

    $.each(array, function () {
        json[this.name] = this.value || '';
    });

    return json;
}


function clotheAction(type, id) {
    id = (typeof id == "undefined") ? '' : id;
    var statusArr = {add: "added", edit: "updated", delete: "deleted"};
    var requestType = '';
    var clotheData = '';
    var ajaxUrl = urlToRestApi;
    if (type == 'add') {
        requestType = 'POST';
        clotheData = convertFormToJSON($("#addForm").find('.form'));
    } else if (type == 'edit') {
        requestType = 'PUT';
        clotheData = convertFormToJSON($("#editForm").find('.form'));
    } else {
        requestType = 'DELETE';
        ajaxUrl = ajaxUrl + "/" + id;
    }
    $.ajax({
        type: requestType,
        url: ajaxUrl,
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        data: JSON.stringify(clotheData),
        success: function (msg) {
            if (msg) {
                alert('Clothe data has been ' + statusArr[type] + ' successfully.');
                getClothes();
                $('.form')[0].reset();
                $('.formData').slideUp();
            } else {
                alert('Some problem occurred, please try again.');
            }
        }
    });
}

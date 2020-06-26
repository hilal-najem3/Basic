function submitDeleteForm()
{
  $("#deleteForm").submit();
}

function deleteAdmin(id)
{
  var id = id;
  var url = '/admin/admins/:id';
  url = url.replace(':id', id);
  $("#deleteForm").attr('action', url);
}

function deleteCurrency(id)
{
  var id = id;
  var url = '/admin/currencies/:id';
  url = url.replace(':id', id);
  $("#deleteForm").attr('action', url);
}

function deleteCategory(id)
{
  var id = id;
  var url = '/admin/products/categories/:id';
  url = url.replace(':id', id);
  $("#deleteForm").attr('action', url);
}

function deleteSupplier(id)
{
  var id = id;
  var url = '/admin/suppliers/:id';
  url = url.replace(':id', id);
  $("#deleteForm").attr('action', url);
}

function deleteMeasurement(id)
{
  var id = id;
  var url = '/admin/measurements/:id';
  url = url.replace(':id', id);
  $("#deleteForm").attr('action', url);
}

function deleteOrderStatus(id)
{
  var id = id;
  var url = '/admin/orders/statuses/:id';
  url = url.replace(':id', id);
  $("#deleteForm").attr('action', url);
}

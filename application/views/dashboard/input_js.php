<script type="text/javascript">

  // SORTABLE
  $('.connectedSortable').sortable({
      placeholder         : 'sort-highlight',
      connectWith         : '.connectedSortable',
      handle              : '.card-header, .nav-tabs',
      forcePlaceholderSize: true,
      zIndex              : 999999
    })
  $('.connectedSortable .card-header, .connectedSortable .nav-tabs-custom').css('cursor', 'move')

  // DATATABLE
  $(document).ready( function () {
    $('#table-dataTest').DataTable({
      lengthMenu: [[5, 50, 100, -1],[5, 50, 100, "All"]]
    });
    $('#table-dataTrain').DataTable({
      lengthMenu: [[5, 50, 100, -1],[5, 50, 100, "All"]]
    });
  });

</script>

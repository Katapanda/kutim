<!-- =========================================
JavaScript Files
========================================== -->

<!-- jQuery JS -->
<script src="{{ asset('assets_frontend/js/jquery-1.12.0.min.js') }}"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('assets_frontend/js/bootstrap.min.js') }}"></script>
<!-- Animate JS -->
<script src="{{ asset('assets_frontend/vendors/animate/wow.min.js') }}"></script>
<!-- Camera Slider -->
<script src="{{ asset('assets_frontend/vendors/camera-slider/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('assets_frontend/vendors/camera-slider/camera.min.js') }}"></script>
<!-- Isotope JS -->
<script src="{{ asset('assets_frontend/vendors/isotope/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('assets_frontend/vendors/isotope/isotope.pkgd.min.js') }}"></script>
<!-- Progress JS -->
<script src="{{ asset('assets_frontend/vendors/Counter-Up/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('assets_frontend/vendors/Counter-Up/waypoints.min.js') }}"></script>
<!-- Owlcarousel JS -->
<script src="{{ asset('assets_frontend/vendors/owl_carousel/owl.carousel.min.js') }}"></script>
<!-- Stellar JS -->
<script src="{{ asset('assets_frontend/vendors/stellar/jquery.stellar.js') }}"></script>
<!-- Theme JS -->
<script src="{{ asset('assets_frontend/js/theme.js') }}"></script>


<!-- <script src="{{ asset('assets/plugins/orgchart/orgchart.js') }}"></script> -->

<!-- <script type="text/javascript" src="{{ asset('assets/chart/js/jquery.min.js') }}"></script> -->
<script type="text/javascript" src="{{ asset('assets/chart/js/jquery.orgchart.js') }}"></script>
<script type="text/javascript">
$(function() {

    var datascource = {
        'id': '1',
        'name': 'KEPALA DINAS',
        'title': '',
        'children': [
            { 'id': '2', 'name': 'SEKRETARIS', 'title': '', 'className': 'middle-level',
              'children': [
                { 'id': '5', 'name': 'KASUBBAG PERENCANAAN PROGRAM DAN KEUANGAN', 'title': '', 'className': 'product-dept' },
                { 'id': '6', 'name': 'KASUBBAG UMUM DAN KEPEGAWAIAN', 'title': '', 'className': 'product-dept' }
              ]
            },
            { 'id': '3', 'name': 'KEPALA BIDANG PERUMAHAN', 'title': '', 'className': 'middle-level',
              'children': [
                { 'id': '7', 'name': 'KASUBBID PERENCANAAN MONITORING DAN EVALUASI', 'title': '', 'className': 'product-dept' },
                { 'id': '8', 'name': 'KASUBBID PENYEDIAAN', 'title': '', 'className': 'product-dept' },
                { 'id': '9', 'name': 'KASUBBID PEMBIAYAAN', 'title': '', 'className': 'product-dept' }
              ]
            },
            { 'id': '4', 'name': 'KEPALA BIDANG PERMUKIMAN', 'title': '', 'className': 'middle-level',
              'children': [
                { 'id': '10', 'name': 'KASUBBID PENDATAAN & PERENCANAAN', 'title': '', 'className': 'product-dept' },
                { 'id': '11', 'name': 'KASUBBID PENCEGAHAN DAN PENINGKATAN KUALITAS', 'title': '', 'className': 'product-dept' },
                { 'id': '12', 'name': 'KASUBBID MANFAAT DAN PENGENDALIAN', 'title': '', 'className': 'product-dept' }
              ]
            }
        ]
    };

    $('#chart-container').orgchart({
      'data' : datascource,
      'visibleLevel': 3,
      'nodeContent': 'title',
      'nodeID': 'id',
      'createNode': function($node, data) {
        var secondMenuIcon = $('<i>', {
          'class': 'fa fa-info-circle second-menu-icon',
          click: function() {
            $(this).siblings('.second-menu').toggle();
          }
        });
        var secondMenu = '<div class="second-menu"><img class="avatar" src="img/avatar/' + data.id + '.jpg">'+ data.name +'</div>';
        
        $node.append(secondMenuIcon).append(secondMenu);
      }
    });

});
</script>

<script type="text/javascript">
    $(document).ready(function () {
    // create a tree
    $("#tree-data").jOrgChart({
        chartElement: $("#tree-view"), 
        nodeClicked: nodeClicked
    });
    // lighting a node in the selection
    function nodeClicked(node, type) {
        node = node || $(this);
        $('.jOrgChart .selected').removeClass('selected');
            node.addClass('selected');
        }
    });
    function detail(jabatan) {
        $.ajax({
          url: "{{ url('admin/so/show') }}" + '/' + jabatan,
          type: "GET",
          dataType: "JSON",
          success: function(data) {
            // var data = data.JSON.Parse();
            // var data = JSON.parse(result);
            if (data.so == "") {
                $('#detail').modal('show');
                $('#id_hps').val(data.so.id);
                $('#id').val("");
                $('#nama').text("");
                $('#jabatan').text("");
                $('#email').text("");
                $('#bidang').text("");
                $('#sub_bidang').text("");
                // $('#modal-form form')[0].reset();
                $('.modal-title').text('Struktur Organisasi');
            } else {
                $('#detail').modal('show');
                $('.modal-title').text('Detail Jabatan');

                $('#link').attr("href","{{ url('admin/so/detail') }}"+"/"+data.so.id);
                $('#id_hps').val(data.so.id);
                $('#id').val(data.so.id);
                $('#nama').text(data.so.nama);
                $('#jabatan').text(data.so.jabatan);
                $('#email').text(data.so.email);
                $('#bidang').text(data.so.bidang);
                $('#sub_bidang').text(data.so.sub_bidang);
                if (data.data == "") {
                    var a = '<tr><td colspan="3">Data Anggota Tidak Ada</td></tr>';
                } else {
                    var a = "";
                    var j = 1;
                    for (var i = 0; i < data.data.length; i++) {
                        a = a + '<tr><td>'+(j++)+'</td>'+
                                '<td>'+data.data[i].nip+'</td>'+
                                '<td>'+data.data[i].nama+'</td>'+
                                '</tr>';
                    }
                }
                $('#list_anggota').html(a);
            }
          },
          error : function() {
              alert("Nothing Data");
          }
        });
    }
</script>
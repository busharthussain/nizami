jQuery(function($) {
    //initiate dataTables plugin
    var myTable =
        $('#dynamic-table')
            //.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
            .DataTable( {
                bAutoWidth: false,
                "aoColumns": [
                    { "bSortable": false },
                    null, null,null, null, null,
                    { "bSortable": false }
                ],
                "aaSorting": [],


                //"bProcessing": true,
                //"bServerSide": true,
                //"sAjaxSource": "http://127.0.0.1/table.php"	,

                //,
                //"sScrollY": "200px",
                //"bPaginate": false,

                //"sScrollX": "100%",
                //"sScrollXInner": "120%",
                //"bScrollCollapse": true,
                //Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
                //you may want to wrap the table inside a "div.dataTables_borderWrap" element

                //"iDisplayLength": 50


                select: {
                    style: 'multi'
                }
            } );

    ////

    setTimeout(function() {
        $($('.tableTools-container')).find('a.dt-button').each(function() {
            var div = $(this).find(' > div').first();
            if(div.length == 1) div.tooltip({container: 'body', title: div.parent().text()});
            else $(this).tooltip({container: 'body', title: $(this).text()});
        });
    }, 500);




    myTable.on( 'select', function ( e, dt, type, index ) {
        if ( type === 'row' ) {
            $( myTable.row( index ).node() ).find('input:checkbox').prop('checked', true);
        }
    } );
    myTable.on( 'deselect', function ( e, dt, type, index ) {
        if ( type === 'row' ) {
            $( myTable.row( index ).node() ).find('input:checkbox').prop('checked', false);
        }
    } );




    /////////////////////////////////
    //table checkboxes
    $('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);

    //select/deselect all rows according to table header checkbox
    $('#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function(){
        var th_checked = this.checked;//checkbox inside "TH" table header

        $('#dynamic-table').find('tbody > tr').each(function(){
            var row = this;
            if(th_checked) myTable.row(row).select();
            else  myTable.row(row).deselect();
        });
    });

    //select/deselect a row when the checkbox is checked/unchecked
    $('#dynamic-table').on('click', 'td input[type=checkbox]' , function(){
        var row = $(this).closest('tr').get(0);
        if(this.checked) myTable.row(row).deselect();
        else myTable.row(row).select();
    });



    $(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {
        e.stopImmediatePropagation();
        e.stopPropagation();
        e.preventDefault();
    });



    //And for the first simple table, which doesn't have TableTools or dataTables
    //select/deselect all rows according to table header checkbox
    var active_class = 'active';
    $('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
        var th_checked = this.checked;//checkbox inside "TH" table header

        $(this).closest('table').find('tbody > tr').each(function(){
            var row = this;
            if(th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
            else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
        });
    });

    //select/deselect a row when the checkbox is checked/unchecked
    $('#simple-table').on('click', 'td input[type=checkbox]' , function(){
        var $row = $(this).closest('tr');
        if($row.is('.detail-row ')) return;
        if(this.checked) $row.addClass(active_class);
        else $row.removeClass(active_class);
    });



    /********************************/
    //add tooltip for small view action buttons in dropdown menu
    $('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});

    //tooltip placement on right or left
    function tooltip_placement(context, source) {
        var $source = $(source);
        var $parent = $source.closest('table')
        var off1 = $parent.offset();
        var w1 = $parent.width();

        var off2 = $source.offset();
        //var w2 = $source.width();

        if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
        return 'left';
    }




    /***************/
    $('.show-details-btn').on('click', function(e) {
        e.preventDefault();
        $(this).closest('tr').next().toggleClass('open');
        $(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
    });
    /***************/





    /**
     //add horizontal scrollbars to a simple table
     $('#simple-table').css({'width':'2000px', 'max-width': 'none'}).wrap('<div style="width: 1000px;" />').parent().ace_scroll(
     {
       horizontal: true,
       styleClass: 'scroll-top scroll-dark scroll-visible',//show the scrollbars on top(default is bottom)
       size: 2000,
       mouseWheelLock: true
     }
     ).css('padding-top', '12px');
     */


})


function loadNewMsgCount() {

    $.get(($('.msgdropdown').data('msg_count')), function (data, status) {
        $("#msg-count").html(data);
    });

    $.get('/notifications/count', function (data) {
        $("#notification_count").html(data);
    });
}

function loadMessages() {
    $.get(($('.msgdropdown').data('url')), function (data, status) {
        $(".notfy-inner").append(data);
    });
}

function toggleMsg(msg) {
    if ($('.message').is(':hidden')) {
        $('.message').html(msg);
        $('.message').css('display', 'block');
        $('.message').css("top", 320 + "px");
        $('.message').css("left", (($(window).width() / 2 - $('.message').width() / 2) - 38) + "px");
    } else {
        $('.message').hide();
    }
    ;
}

function showMsg(msg) {
    $('.message').html(msg);
    $('.message').css('display', 'block');
    $('.message').css("top", 62 + "px");
    $('.message').css("left", (($(window).width() / 2 - $('.message').width() / 2) - 38) + "px");

    $('.message').fadeOut(4000);

}
function showMsgDelay (msg) {

    $('.message').html(msg);
    $('.message').css('display', 'block');
    $('.message').css("top", 62 + "px");
    $('.message').css("left", (($(window).width() / 2 - $('.message').width() / 2) - 38) + "px");
    window.setInterval(function(){
        $('.message').fadeOut(4445000);
    }, 5000);
}